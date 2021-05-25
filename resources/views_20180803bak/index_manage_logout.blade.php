<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
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

  <!--div class="column side">
    <p>
   <a href="http://www.facebook.com"><img src="./fb.png" alt="facebook" style="height:40;width:35;"></a>
   <a href="http://www.youtube.com"><img src="./youtube.png" alt="youtube" style="height:40;width:35;"></a>
   <a href="http://www.line.com"><img src="./line.png" alt="line" style="height:40 width:35;"></a>
   <a href="http://www.twitter.com"><img src="./tw.png" alt="twitter" style="height:40 width:35;"></a>
	</p>
  </div-->
</div>
  
</div>



<div class="row">
  <div class="column side">
<div class="topnav">
	@include('manage_menu')
</div>
  </div>
  <div class="column middle">
    <h1>帳號，密碼不得為空!!</h1>
	<!--form action="/01_Module_E/public/manage/login" method="post">
    <p><label>帳號</label>
	<input type="text" name="account">
	</p>
	<p><label>密碼</label>
	<input type="password" name="password">
	</p>
	<input type="submit" value="送出">
	
	<!-- CSRF 
	{!! csrf_field() !!}
	</form-->
  </div>
  <!--div class="column side">
    <h2>Side2</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div-->
</div>

<!--div class="footer">
  <p>Footer</p>
</div-->
  
</body>
</html>
