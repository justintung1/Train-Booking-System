<!DOCTYPE html>
<html lang="en">
<head>
<title>{{$title}}</title>
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
		$("#train_kind").selectmenu();
	});
	</script>
	
</head>
<body>

<div class="header">
    <div class="row">
	    <div class="column side1">
		<img src="{{ asset('img/train1.png') }}" width="25%" height="20%">
		</div>
		<div class="column middle1">
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
	    <h1>{{$title}}</h1>
		
	<form action="/01_Module_E/public/index/result" method="post">
		<p><label>車次</label>
		<input type="text" name="num"></p>	
		<p><label>去程站</label>
		<select name="firststation" id="going">
		@foreach ($DATA2 as $data2)
		<option>{{$data2->name}}</option>
		@endforeach
		</select>
		</p>
		<p><label>抵達站</label>
		<select name="finalstation" id="arrive">
		@foreach ($DATA2 as $data2)
		<option>{{$data2->name}}</option>
		@endforeach
		</select>
		</p>
		<p><label>車種</label>
		<select name="train_kind" id="train_kind">
		@foreach ($DATA1 as $data1)
		<option>{{$data1->name}}</option>
		@endforeach
		</select>
		</p>
		<p><label>搭乘日期</label>
		<input type="text" name="starttime" id="datepicker"></p>
		<p><input type="submit" value="送出"></p>
	<!-- CSRF -->
	{!! csrf_field() !!}
	</form>
	</div>
</div>
</body>
</html>