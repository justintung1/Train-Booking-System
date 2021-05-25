<!DOCTYPE html>
<html lang="en">
<head>
<title>{{$title}}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

 	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.css') }}">  
   	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.structure.css') }}"> 
	<link rel="stylesheet" href="{{ asset('css/style.css') }}"> 

	<script src="{{ asset('jquery-ui/jquery.js') }}"></script>
	<script src="{{ asset('jquery-ui/jquery-ui.js') }}"></script>

  <script>
  $( function() {
    $("#datepicker").datepicker();
	$("#going").selectmenu();
	$("#arrive").selectmenu();
	$("#number").selectmenu();
  } );
  </script>

</head>
<body>

<div class="header">
  <!--h1>Header</h1>
  <p>Resize the browser window to see the responsive effect.</p-->
  <div class="row">
  <div class="column side1">
  <img src="{{ asset('img/train1.png') }}" width=25% height=30%>   
  </div>
  
  <div class="column middle1">
@php
   date_default_timezone_set('Asia/Taipei');
   $totaltime=mktime(0,0,0,12,6,date('Y',time()))-time();
   $days=(int)($totaltime/(86400));
   echo '<div class="text">花博倒數:';
   echo $days.'天</div>';
@endphp
  </div>

</div>
  
</div>


@if(session()->has('account'))
<div class="row">
  <div class="column side">
<div class="topnav">
	@include('manage_menu')
</div>
  </div>

  <div class="column middle">
    <h1>{{$title}}</h1>
	
	<form action="/01_Module_E/public/manage/box_update" method="post">
@foreach ($DATA as $data)
       <p><label>列車代碼</label>
	   <input type="text" name="num" value="{{$data->num}}">
	   </p>
	   <p><label>行車星期</label>
	   <input type="text" name="week" value="{{$data->week}}">
	   </p>
	   <p><label>發車時間</label>
	   <input type="text" name="starttime" value="{{$data->starttime}}">
	   </p>
	   <p><label>發車站</label>
	   <input type="text" name="firststation" value="{{$data->firststation}}">
	   </p>
	   <p><label>終點站</label>
	   <input type="text" name="finalstation" value="{{$data->finalstation}}">
	   </p>
	   <p><label>車廂載客數</label>
	   <input type="text" name="boxamount" value="{{$data->boxamount}}">
	   </p>
	   <p><label>車廂數</label>
	   <input type="text" name="box" value="{{$data->box}}">
	   </p>
	   <p><label>總載客數</label>
			{{$data->total}} 
	   </p>
	   <input type="hidden" name="kn" value="{{$data->kn}}">
@endforeach
	   <input type="submit" value="更新"><br><br>
	 <!-- CSRF -->
	{!! csrf_field() !!}
	</form>
	
  </div>
  <!--div class="column side">
    <h2>Side2</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div-->
</div>

<!--div class="footer">
  <p>Footer</p>
</div-->
@else
	<div><h1>尚未登入</h1></div>
@endif  
</body>
</html>
