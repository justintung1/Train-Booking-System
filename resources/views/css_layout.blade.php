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
    $( document ).tooltip();
	$( "#tabs" ).tabs();
  } );
  </script>
  
  
<script>
  $( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#opener" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
    });
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
    padding: 10px;
    text-align: center;
	margin:5px 5px 5px 5px;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
	//margin-left :50%;

}

/* Style the topnav links */
.topnav a {
	font-size:20px;
	  color:lightgreen;
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
      background-color: green;
}

/* Create three unequal columns that floats next to each other */
.column {
    float: left;
    padding: 10px;
}

/* Left and right column */
.column.side {
    width: 25%;
}

/* Middle column */
.column.middle {
    width: 50%;
	//margin:5px 5px 5px 5px;
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

/* Style the footer */
.footer3 {
	position:fixed;
	//position:relative;
	//position:absolute;
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
	width : 80%;
	bottom:0;
	//margin-bottom :50px;
	//margin-left :150px;
	//margin-right : 10%;
	margin:5px 10px 15px 20px;
}

	@media screen and (max-width: 379px) {
        body {
            background-color: lightblue;
			border-style:solid;
			border-width:3px; 
			border-color:black;	
			//border-radius: 4px;
        }
    }
    
    @media screen and (min-width: 380px) and  (max-width: 768px){
        body {
            background-color: yellow;
			border-style:solid;
			border-width:2px; 
			border-color:red;	
        }

    }    
    
    @media screen and (min-width:770px) {
	        body {
            background-color: lightgreen;
			border-style:dotted;
			border-width:5px; 
			border-color:red;	
        }
    }    
	


</style>
</head>
<body>

<div class="header">
  <!--h1>Header</h1>
  <p>Resize the browser window to see the responsive effect.</p-->
  <div class="row">
  <div class="column side">
    <p> <img src="./flower.jpg" height="150" width="300"> </p>
  </div>
  
  <div class="column middle">
<?php
   date_default_timezone_set('Asia/Taipei');
   $totaltime=mktime(0,0,0,12,6,date('Y',time()))-time();
   $days=(int)($totaltime/(86400));
   echo '<div class="text">花博倒數:';
   echo $days.'天</div>';
?>
  </div>

  <div class="column side">
    <p>
   <a href="http://www.facebook.com"><img src="./fb.png" alt="facebook" style="height:40;width:35;"></a>
   <a href="http://www.youtube.com"><img src="./youtube.png" alt="youtube" style="height:40;width:35;"></a>
   <a href="http://www.line.com"><img src="./line.png" alt="line" style="height:40 width:35;"></a>
   <a href="http://www.twitter.com"><img src="./tw.png" alt="twitter" style="height:40 width:35;"></a>
	</p>
  </div>
</div>
  
</div>

<div class="topnav">

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">花博介紹</a></li>
    <li><a href="#tabs-2">花博消息</a></li>
    <li><a href="#tabs-3">園區展覽</a></li>
	<li><a href="#tabs-4">購票資訊</a></li>
    <li><a href="#tabs-5">花博志工</a></li>
    <li><a href="#tabs-6">影音媒體</a></li>
	<li><a href="#tabs-7">交通旅遊</a></li>
  </ul>
  
  <div id="tabs-1">
        <h2>Side1</h2>
		<div id="dialog" title="展館介紹WWW">
		<p>豐原葫蘆墩公園－囍香逢館<br>
展館介紹<br>
豐原葫蘆墩公園，是當地居民記憶最為深刻的綠地，扶輪社及活動中心後方種植阿勃勒，夏季時分搭配軟埤仔溪景色奪目耀眼，展覽館整修及增建尊重當地環境，保存當地人對環境的歷史記憶。</p>
		<img src="{{ asset('img/tiger.jpg') }}" width=60%>
		</div>
 		<button id="opener">豐原葫蘆墩公園介紹</button>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div>
  
  <div id="tabs-2">
    <h2>Main Content</h2>
    <p><a href="https://2018floraexpo.tw/Category/AboutExpo" title="臺中世界花卉博覽會乃將於2018年11月3日至2019年4月24日在中華民國臺灣臺中市舉辦的世界性花卉博覽會。該博覽會已獲國際園藝生產者協會認證授權為A2/B1級國際園藝博覽會。">花博消息</a></p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
  
	<div id="tabs-3">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <img src="{{ asset('img/intro_Leopard_Cat.PNG') }}" width=60%>
	<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
	<img src="img/intro_mascot2.PNG" width=60%>
	<h2>Side3</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div>
</div>
   <!--a href="#">花博介紹</a>
   <a href="#">花博消息</a>
   <a href="#">園區展覽</a>
   <a href="#">購票資訊</a>
   <a href="#">花博志工</a>
   <a href="#">影音媒體</a>
   <a href="#">交通旅遊</a-->
</div>

<!--div class="row">
  <div class="column side">
    <h2>Side1</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div>
  <div class="column middle">
    <h2>Main Content</h2>
    <p><a href="https://2018floraexpo.tw/Category/AboutExpo" title="臺中世界花卉博覽會乃將於2018年11月3日至2019年4月24日在中華民國臺灣臺中市舉辦的世界性花卉博覽會。該博覽會已獲國際園藝生產者協會認證授權為A2/B1級國際園藝博覽會。">花博消息</a></p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
  <div class="column side">
    <h2>Side2</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div>
</div-->

<div class="footer">
  <p>Footer</p>
  NONO
</div>
  
</body>
</html>
