<?php
/*
namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
*/

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Validator;	//驗證器
use Log;
use Illuminate\Support\Facades\DB;



/*
/*
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$dump1 = DB::select('select * from train_kind');
		$collection1 = collect($dump1);
		
		$dump2 = DB::select('select * from station');
		$collection2 = collect($dump2);
		
		$bind = ['title' => '車種 查詢',
				'DATA1'=>$collection1,
				'DATA2'=>$collection2,
		];
        return view('index' , $bind);
    }
	
	public function num()
    {
		$dump1 = DB::select('select * from train_kind');
		$collection1 = collect($dump1);
		
		$dump2 = DB::select('select * from station');
		$collection2 = collect($dump2);
		
		$bind = ['title' => '車次 查詢',
				'DATA1'=>$collection1,
				'DATA2'=>$collection2,
		];
        return view('index_num' , $bind);
    }


    public function result()
    {
		$input = request()->all();
		$collection = collect($input);
		//$num			= $collection -> get('num');
		$firststation	= $collection -> get('firststation');
		$finalstation 	= $collection -> get('finalstation');
		$train_kind 	= $collection -> get('train_kind');
		$starttime	 	= $collection -> get('starttime');
		//$message = "您尚未輸入資料";

		if($train_kind && $firststation && $finalstation){
			$dump = DB::select('select * from train where train_kind = ? and firststation = ? and finalstation = ? ', [$train_kind,$firststation,$finalstation]);
		}elseif($train_kind && $firststation){
			$dump = DB::select('select * from train where train_kind = ?  and firststation = ? ', [$train_kind,$firststation]);
		}elseif($train_kind && $finalstation){
			$dump = DB::select('select * from train where train_kind = ?  and finalstation = ? ', [$train_kind,$finalstation]);
		}elseif($firststation && $finalstation){
			$dump = DB::select('select * from train where firststation = ?  and finalstation = ? ', [$firststation,$finalstation]);
		}elseif($train_kind){
			$dump = DB::select('select * from train where train_kind = ?', [$train_kind]);
		}else{
			$dump = DB::select('select * from train');	
		}
			
		$collection = collect($dump);
		if($dump){
			$message = "以下是您查詢的車種";
		}else{ 
			$message = "查無您要的的車種";
		}
			
		$bind = ['title' => '車種 查詢結果',
				'message'=> $message,
				'DATA'=> $collection,
		];
			
		return view('index_result',$bind);
    }

	public function result_num()
    {
		$input = request()->all();
		$collection = collect($input);
		$num			= $collection -> get('num');
		$firststation	= $collection -> get('firststation');
		$finalstation 	= $collection -> get('finalstation');
		//$train_kind 	= $collection -> get('train_kind');
		$starttime	 	= $collection -> get('starttime');

		//$dump = DB::select('select * from train where firststation = ? and finalstation = ? and train_kind = ? or num=?', [$firststation,$finalstation,$train_kind,$num]);
		if($num && $firststation && $finalstation){
		$dump = DB::select('select * from train where num = ? and firststation = ? and finalstation = ? ', [$num,$firststation,$finalstation]);
		}elseif($num && $firststation){
		$dump = DB::select('select * from train where num = ?  and firststation = ? ', [$num,$firststation]);
		}elseif($num && $finalstation){
		$dump = DB::select('select * from train where num = ?  and finalstation = ? ', [$num,$finalstation]);
		}elseif($firststation && $finalstation){
		$dump = DB::select('select * from train where firststation = ?  and finalstation = ? ', [$firststation,$finalstation]);
		}elseif($num){
		$dump = DB::select('select * from train where num = ?', [$num]);
		}else{
		$dump = DB::select('select * from train');	
		}
		
		$collection = collect($dump);
		if($dump){
			$message = "以下是您查詢的車次";
		}else{ 
			$message = "查無您要的的車次";
		}
		
		$bind = ['title' => '車次 查詢結果',
				'message'=> $message,
				'DATA'=> $collection,
		];
		
        return view('index_result',$bind);
    }
	
	/* *******************車票******************************* */
	
	public function check()
    {
		$dump2 = DB::select('select * from station');
		$collection2 = collect($dump2);
		
		$bind = ['title' => '歡迎預訂車票',
				'DATA2'=>$collection2,
		];
        return view('index_check' , $bind);
    }
	
	public function check2()
    {
		$dump2 = DB::select('select * from station');
		$collection2 = collect($dump2);
		
		$bind = ['title' => '歡迎預訂車票',
				'DATA2'=>$collection2,
		];
        return view('index_check2' , $bind);
    }

	public function order()
    {
		$input = request()->all();
		$collection = collect($input);
		
		$phone 			= $collection -> get('phone');
		$firststation 	= $collection -> get('firststation');
		$finalstation 	= $collection -> get('finalstation');
		$ride_time 		= $collection -> get('ride_time');
		$num			= $collection -> get('num');
		$t_amount		= $collection -> get('t_amount');
		
		//if($num){
		$dump2 = DB::select('select * from train where num = ? limit 1', [$num]);
		//$dump = DB::select('select * from train where firststation = ? limit 1', [$firststation]);
		//$dump = DB::table('train')->select('t_price')->where('num','=',$num)->get();
		/*$t_price = DB::table('train')
                     ->select('t_price')
                     ->where('num','=',$num)
                     ->get();
		*/
		$collection2 = collect($dump2);
		$t_price = $collection2 -> get('t_price');
		if($dump2){

			//$dump=$dump->count();
			$t_price = ($t_price>0) ? $t_price : 500;
			$total	= $t_price * $t_amount ;
			$ride_time 		= date("Y-m-d");
			$orderdate=date("Y-m-d H:i:s");
			$useful="Y";
			$orderid='';
			for ($i = 1; $i < 11; $i++)
			{
				$range = array_merge(range('A','Z'), range('a','z'), range('0','9'));
				$index = array_rand($range, 1);
				$orderid.=$range[$index];
			}

			$add = DB::insert('replace into torder (orderid,phone,ride_time,num,firststation,finalstation,t_amount,t_price,total,orderdate,useful) values (?,?,?,?,?,?,?,?,?,?,?)', [$orderid,$phone,$ride_time,$num,$firststation,$finalstation,$t_amount,$t_price,$total,$orderdate,$useful]);
				
			if($add){ 
			$dump3 = DB::select('select * from torder where orderid = ? and useful=? ', [$orderid,'Y']);
			$collection3 = collect($dump3);
			
			$bind = ['title' => '預訂車票資訊',
					'message' => '預訂車票成功',
					'DATA'=>$collection3,
					];
			
			return view('index_order_show' , $bind);
			}
			//return redirect('/index/order_show');
			
		}else{
				$bind = ['title' => '預訂車票資訊',
						'message' => '您的預訂車票車次有誤' ,
						'DATA'=>$collection2,
						];
				return view('index_order_show' , $bind);
		}
		
		//}else{
		//	$message = "請輸入您的預訂車票車次";
		//	return view('index_order_show' , $message);
		//}
    }
	
	
	public function order2($num)
    {
		//$dump2 = DB::select('select * from station');
		//$collection2 = collect($dump2);
		
		
		$dump = DB::select('select * from train where num = ? ', [$num]);
		$collection = collect($dump);
		$firststation 	= $collection -> get('firststation');
		$finalstation 	= $collection -> get('finalstation');
		//$num			= $collection -> get('num');
		/*			
			$bind = ['title' => '歡迎預訂車票',
					'num'=>$num,
					'firststation'=>$firststation,
					'finalstation'=>$finalstation,
					'DATA2'=>$collection2,
					];
		*/	
		//$firststation ="歡迎預訂車票";
		//$num = DB::table('train')->select('num')->where('kn','=',$kn)->get();
		//$firststation = DB::table('train')->select('firststation')->where('num','=',$num)->get();
		//$finalstation = DB::table('train')->select('finalstation')->where('num','=',$num)->get();		
		
		$bind = ['title' => '歡迎預訂車票',
				'num' => $num,
				//'firststation' => $firststation,
				//'finalstation' => $finalstation,
				'DATA' => $collection,
				];
		return view('index_check2' , $bind);
		
		//return view('index_check2');
    }
	
	
	public function order_del($orderid)
    {
		$del = DB::table('torder')->where('orderid', $orderid)->delete();
		if($del){
			/*
			$bind = ['title' => '取消車票',
					'message' => '已取消車票',
					'DATA' => '',
					];
			return view('index_order_show' , $bind);
			*/
			return redirect('/index/check');
		}
    }

	
	
	
	/* ************************************************** */
	
	public function search1()
    {
		$bind = ['title' => '查詢訂票紀錄',
				'message' => '請輸入您的 訂票編號 或 手機號碼 來查詢訂票紀錄',
				'DATA' => '',
				];
		
        return view('index_search1' , $bind);   
    }
	
	public function search2()
    {
     	$input = request()->all();
		$collection = collect($input);
		$phone 		= $collection -> get('phone');
		$orderid 	= $collection -> get('orderid');
		
		$dump = DB::select('select * from torder where phone = ? or orderid = ?', [$phone,$orderid]);
		//err $dump = DB::select('select o.phone,o.orderid from torder as o where c.phone = ? or o.orderid = ?', [$phone,$orderid]);
		$collection = collect($dump);
			if($dump){	
				$message = '您查詢的訂票紀錄如下';
			}else{
				$message = '抱歉，查不到您的訂票紀錄';
			}	
				
		$bind = ['title' => '查詢訂票紀錄結果',
				'message' => $message,
				'DATA' => $collection,
				];
        return view('index_search1' , $bind);   
    }


	public function search_train()
    {
		/*
		$input = request()->all();
		$collection = collect($input);
		$num			= $collection -> get('num');
		$firststation	= $collection -> get('firststation');
		$finalstation 	= $collection -> get('finalstation');
		$train_kind 	= $collection -> get('train_kind');
		$starttime	 	= $collection -> get('starttime');

		$dump = DB::select('select * from train where firststation = ? and finalstation = ? and train_kind = ? or num=?', [$firststation,$finalstation,$train_kind,$num]);
		$collection = collect($dump);
		if($dump){
			$message = "以下是您查詢的車種/車次";
		}else{ 
			$message = "查無您要的的車種/車次";
		}
		
		$bind = ['title' => '車種/車次 查詢結果',
				'message'=> $message,
				'DATA'=> $collection,
				
		];
		
        return view('index_search_train',$bind);
		*/
		return view('index_search_train');
    }

	

}