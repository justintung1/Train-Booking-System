<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.structure.css') }}">
	
	<script src="{{ asset('jquery-ui/jquery.js') }}"></script>
	<script src="{{ asset('jquery-ui/jquery-ui.js') }}"></script>
	
	<script>
	$(function(){
		$("#datepicker").datepicker();
		$("#going").selectmenu();
		$("#arrive").selectmenu();
		$("#kind").selectmenu();
	});
	</script>
	
</head>
<body>

<div class="header">
    <div class="row">
	<div class="column side1">
		<img src="{{ asset('img/train1.png') }}" width="15%" height="10%"> 火車訂票系統
		</div>
		<div class="column middle1">
		<img src="{{ asset('img/train2.jpg') }}" width="100%" height="10%" >
		</div>
	</div>
</div>

<div class="row">
    <div class="column side">
	    <div class="topnav">
		    @include('web_menu')
		</div>
	</div>
	<div class="column middle">
	    <h1>車次查詢</h1>
		<table border="1"><tr><td>日</td><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td>
		<td>六</td><td>訂票時間</td><td>發車時間</td></tr></table>
		<p><input type="submit" value="訂票"></p>
	</div>
</div>
</body>
</html>