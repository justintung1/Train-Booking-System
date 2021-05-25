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

@include('index_header')

<div class="row">
    <div class="column side">
	    <div class="topnav">
		    @include('web_menu')
		</div>
	</div>
	<div class="column middle">
	    <h1>車次查詢</h1>
		<table border="1"><tr><td>訂票編號</td><td>訂票時間</td><td>發車時間</td><td>車次</td>
		<td>發車站</td><td>終點站</td><td>張數</td></tr></table>
		<p class=center><input type="submit" value="取消訂票" class="button2"></p>
	</div>
</div>
</body>
</html>