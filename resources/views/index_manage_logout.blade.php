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

@include('index_header')

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
