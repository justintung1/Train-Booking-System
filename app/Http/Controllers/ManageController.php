<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Validator;
use Log;
use Illuminate\Support\Facades\DB;
use Hash;
//use DB;
//use App\Http\Controllers\Controller;
//use App\Shop\Entity\Merchandise;
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Validator;	//驗證器
use Log;
use Illuminate\Support\Facades\DB;
*/
/*
use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Log;
*/
/*
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
*/
class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index_manage');
    }
	public function verifycode(){
		header('Content-type:image/PNG');
		$width=60;
		$height=25;
		$my_image=imagecreatetruecolor($width,$height);
		imagefill($my_image,0,0,0xFFFFFF);
		$x=rand(1,10);
		$y=rand(1,10);
		$rand_string="";
		$arr=array("1","2","3","4","5","6","7","8","9","0","a","b","c","d","e","f","g","h","i","j",
				"k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F",
				"G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
		for($i=1;$i<=5;$i++){
			$t=rand(0,61);
			$rand_string.=$arr[$t];
		}
		//$rand_string=rand(1000,9999);
		imagestring($my_image,5,$x,$y,$rand_string,0x000000);
		
		//session_start();
		session()->put('verify',$rand_string);
		session()->put('num',0);
		//$_SESSION['verify']=$rand_string;
		//$_SESSION['num']=0;
		imagepng($my_image);
		imagedestroy($my_image);
	}
	public function login()
    {
	  $input = request()->all();

	  //$ac = $input -> get('account');		//error
	  //$pw = $input -> get('password');	 
	  
	  $collection = collect($input);
	  $ac = $collection -> get('account');
	  $pw = $collection -> get('password');
	  $check = Hash::make($pw);
	  $catch = $collection -> get('catch');
	  $value = "";

		if(session('verify')!=$catch){
			$val = "驗證碼錯誤";
			return redirect('/manage')->with('val',$val);
		}
		else{
			$users = DB::select('select kn from user where account = ? and password = ?', [$ac,$pw] );
			if($users){
				//$value = "yes";
				session()->put('account',$ac);	//session write
				//session()->put('value',$value);
				return redirect('/manage/train');
			}else{
				session()->forget('account');	// session clear
				//return redirect('/manage/logout');
				if($ac==""||$pw==""){
					$value = "no";
					$value2 = "帳號或密碼不得為空";
					return redirect('/manage')->with('value',$value)->with('value2',$value2);
				}
				else{
					$value = "no";
					return redirect('/manage')->with('value',$value);
				}
			}
		}
			
    }

	
	public function logout()
    {
		//$value = "";
		//$bind = ['value' => $value];
		session()->forget('account');
		//return view('index_manage_logout');
		return view('index_manage');
    }
	
	
    public function train()
    {
        $dump = DB::select('select * from train_kind ');
		$collection = collect($dump);
		
		$bind = ['title' => '車種管理',
				'DATA'=>$collection,
		];
        return view('index_manage_train' , $bind);
    }
	
	public function train_add()
    {
		/*$input = request()->all();
		$collection = collect($input);
		$kind  = $collection -> get('kind');
		$speed = $collection -> get('speed');
		$add = DB::insert('replace into train_kind (name, speed) values (?, ?)', [$kind, $speed]);
        
	   	if($add){
			return redirect('/manage/train');
		}*/
		$input = request()->all();
		$rules = [
			'kind'=>[
				'required',
				'max:10',
			],
			'speed'=>[
				'required',
				'max:200',
				'integer',
			],
		];
		$validator = Validator::make($input,$rules);
		if($validator->fails()){
			return redirect('/manage/train')->withErrors($validator)->withInput();
		}
		else{
			$collection = collect($input);
			$kind = $collection->get('kind');
			$speed = $collection->get('speed');
			$add = DB::insert('replace into train_kind (name, speed) values(?, ?)',[$kind,$speed]);
			if($add){
				return redirect('/manage/train')->with('message','yes');
			}
			else{
				return redirect('/manage/train')->with('message','no');
			}
		}
    }

	public function train_edit($kn)
    {
		$dump = DB::select('select * from train_kind where kn = ? ', [$kn]);
		$collection = collect($dump);

		$bind = ['title' => '車種管理',
				'DATA'=>$collection,
		];
        return view('index_manage_train_edit' , $bind);
    }
	
	public function train_update()
    {
		$input = request()->all();
		$collection = collect($input);
		$name			= $collection -> get('kind');   ////////
		$speed 			= $collection -> get('speed');
		$kn				= $collection -> get('kn');

		$update = DB::table('train_kind')->where('kn', $kn)->update(['name'=>$name,'speed'=>$speed ]);
		
		if($update){
			return redirect('/manage/train');
		}else{ 
			return "Faile";
		}
    }
	
	public function train_del($kn)
    {
		$del = DB::table('train_kind')->where('kn', $kn)->delete();
		if($del){
			return redirect('/manage/train');
		}
    }

	
	
    public function station()
    {
		$dump = DB::select('select * from station ');
		$collection = collect($dump);
		
		$bind = ['title' => '車站管理',
				'DATA'=>$collection,
		];
        return view('index_manage_station' , $bind);
    }

	public function station_add()
    {
		$input = request()->all();
		$collection = collect($input);
		$name  = $collection -> get('name');
		$name_en = $collection -> get('name_en');
		$add = DB::insert('replace into station (name, name_en) values (?, ?)', [$name, $name_en]);
       
	   	if($add){
			return redirect('/manage/station');
		}
    }
	
	public function station_edit($kn)
    {
		$dump = DB::select('select * from station where kn = ? ', [$kn]);
		$collection = collect($dump);

		$bind = ['title' => '車站管理',
				'DATA'=>$collection,
		];
        return view('index_manage_station_edit' , $bind);
    }
	
	public function station_update()
    {
		$input = request()->all();
		$collection = collect($input);
		$name			= $collection -> get('name');   
		$name_en 		= $collection -> get('name_en');
		$kn				= $collection -> get('kn');

		$update = DB::table('station')->where('kn', $kn)->update(['name'=>$name,'name_en'=>$name_en ]);
		
		if($update){
			return redirect('/manage/station');
		}else{ 
			return "Faile";
		}
    }
	
	public function station_del($kn)
    {
		$del = DB::table('station')->where('kn', $kn)->delete();
		if($del){
			return redirect('/manage/station');
		}
    }
	
	
	
	public function box()
    {
		$dump = DB::select('select * from train ');
		$collection = collect($dump);
		
		$dump1 = DB::select('select * from train_kind');
		$collection1 = collect($dump1);
		
		$dump2 = DB::select('select * from station');
		$collection2 = collect($dump2);
		
		$bind = ['title' => '列車管理',
				'DATA'=>$collection,
				'DATA1'=>$collection1,
				'DATA2'=>$collection2,
		];
        return view('index_manage_box' , $bind);
    }
	
	public function box_add()
    {
		$input = request()->all();
		$collection = collect($input);
		$num			= $collection -> get('num');
		$week 			= $collection -> get('week');
		$starttime 		= $collection -> get('starttime');
		$firststation 	= $collection -> get('firststation');
		$finalstation 	= $collection -> get('finalstation');
		$train_kind 	= $collection -> get('train_kind');
		$boxamount		= $collection -> get('boxamount');
		$box			= $collection -> get('box');
		$t_price		= $collection -> get('t_price');
		$s_time			= $collection -> get('s_time');
		$total			= $boxamount * $box ;
		$useful =1;
		$add = DB::insert('replace into train (num,week,starttime,firststation,finalstation,train_kind,boxamount,box,t_price,s_time,total,useful) values (?,?,?,?,?,?,?,?,?,?,?,?)', [$num,$week,$starttime,$firststation,$finalstation,$train_kind,$boxamount,$box,$t_price,$s_time,$total,$useful]);
       
	   	if($add){
			return redirect('/manage/box');
		}
    }

	public function box_edit($kn)
    {
		$dump = DB::select('select * from train where kn = ? ', [$kn]);
		$collection = collect($dump);
		/*
		$num			= $collection -> get('num');
		$week 			= $collection -> get('week');
		$starttime 		= $collection -> get('starttime');
		$firststation 	= $collection -> get('firststation');
		$finalstation 	= $collection -> get('finalstation');
		$boxamount		= $collection -> get('boxamount');
		$box			= $collection -> get('box');
		$total			= $collection -> get('total');
		$useful 		= $collection -> get('useful');
		*/
		$bind = ['title' => '列車管理',
				'DATA'=>$collection,
		];
        return view('index_manage_boxedit' , $bind);
    }
	
	public function box_update()
    {
		$input = request()->all();
		$collection = collect($input);
		$num			= $collection -> get('num');
		$week 			= $collection -> get('week');
		$starttime 		= $collection -> get('starttime');
		$firststation 	= $collection -> get('firststation');
		$finalstation 	= $collection -> get('finalstation');
		$train_kind 	= $collection -> get('train_kind');
		$boxamount		= $collection -> get('boxamount');
		$box			= $collection -> get('box');
		$t_price		= $collection -> get('t_price');
		$s_time			= $collection -> get('s_time');
		//$total			= $collection -> get('total');
		$total			= $boxamount * $box ;
		$kn				= $collection -> get('kn');
		//$useful =1;
		//$update = DB::update('update train set num="?",week="?",starttime="?",firststation="?",finalstation="?",boxamount="?",box="?",total="?" where kn="?" ', [$num,$week,$starttime,$firststation,$finalstation,$boxamount,$box,$total,$kn]);
        //$update = DB::update("update train set num=?,week='?',starttime='?',firststation='?',finalstation='?',boxamount=?,box=?,total=? where kn=? ", [$num,$week,$starttime,$firststation,$finalstation,$boxamount,$box,$total,$kn]);
	   	//$update = DB::table('train')->where('kn', $kn)->update(['box' => $box,'total'=>$total,]);
		$update = DB::table('train')->where('kn', $kn)->update(['num'=>$num,'week'=>$week,'starttime'=>$starttime,'firststation'=>$firststation,'finalstation'=>$finalstation,'train_kind'=>$train_kind,'boxamount'=>$boxamount,'box'=>$box,'total'=>$total,'t_price'=>$t_price,'s_time'=>$s_time]);
		
		if($update){
			return redirect('/manage/box');
		}
    }
	
	public function box_del($kn)
    {
		$del = DB::table('train')->where('kn', $kn)->delete();
		if($del){
			return redirect('/manage/box');
		}
    }

/* ******************************** 訂單管理 ***************************** */	
	public function order_show()
    {
		$dump = DB::select('select * from torder order by orderdate desc');
		$collection = collect($dump);
		//$collection2 = $collection -> paginate(5);
		//$collection2 = $collection -> forPage(2,5);
		$bind = ['title' => '訂單管理',
				'DATA' => $collection,
		];
		
        return view('index_manage_order_show' , $bind);
    }

	
	public function order_del($orderid)
    {
		$del = DB::table('torder')->where('orderid', $orderid)->delete();
		if($del){
			return redirect('/manage/order_show');
		}
    }
	
/*	
	public function search_train2()
    {
        return view('index_search_train2');
    }
	
*/
}