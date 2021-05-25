<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

 	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.css') }}">  
   	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.structure.css') }}"> 

	<script src="{{ asset('jquery-ui/jquery.js') }}"></script>
	<script src="{{ asset('jquery-ui/jquery-ui.js') }}"></script>

  <script>
  $( function() {
    $("#datepicker").datepicker();
	$("#going").selectmenu();
	$("#arrive").selectmenu();
  } );
  </script>
  <style>
  label {
    display: inline-block;
    width: 5em;
  }
  </style>
	
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
	//margin-left :10%;
	margin:15px 15px 15px 15px;
}

/* Style the topnav links */
.topnav a {
	font-size:20px;
	  color:yellow;
	  text-align:center;
	  padding: 14px 16px;
	 // padding: 14px 55px;
	  display:block;
	  float:left;
	  text-decoration:none;
}

/* Change color on hover */
.topnav a:hover {
	  color:white;
      background-color: blue;
}

/* Create three unequal columns that floats next to each other */
.column {
    float: left;
    padding: 10px;
}

.column.side1 {
    width: 25%;
}

.column.middle1 {
    width: 75%;
	//margin:5px 5px 5px 5px;
}



/* Left and right column */
.column.side {
    width: 15%;
	margin:5px 5px 5px 5px;
}

/* Middle column */
.column.middle {
    width: 75%;
	margin:5px 5px 5px 5px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}


</style>
</head>
<body>

<div class="header">
  <!--h1>Header</h1>
  <p>Resize the browser window to see the responsive effect.</p-->
  <div class="row">
  <div class="column side1">
     
  </div>
  
  <div class="column middle1">
<?php
   /*date_default_timezone_set('Asia/Taipei');
   $totaltime=mktime(0,0,0,12,6,date('Y',time()))-time();
   $days=(int)($totaltime/(86400));
   echo '<div class="text">花博倒數:';
   echo $days.'天</div>';*/
?>
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
   <a href="#">首頁</a>
   <a href="#">預訂車票</a>
   <a href="#">訂票查詢</a>
   <a href="#">列車資訊</a>
   <a href="#">登入後台</a>
</div>
  </div>
  <div class="column middle">
    <h1>車次查詢結果</h1>
    <table border="1"><tr><td>車種</td><td>列車編號</td><td>發車站</td><td>終點站</td><td>預計開車時間</td>
	<td>預計到達時間</td><td>行駛時間</td><td>票價</td></tr></table><br>
	<input type="submit" value="訂票">
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
