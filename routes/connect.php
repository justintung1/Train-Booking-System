<?php 
   header('Content-type:text/html;charset=utf-8');
   
   $connect=@mysqli_connect("127.0.0.1","admin3","1234");
   mysqli_select_db($connect,"web01");
   if(mysqli_connect_errno($connect))
   {
	   echo '無法連接伺服器';
   }
   mysqli_set_charset($connect,"utf8");
   
   function head($t='')
   {
	   $head='<!DOCTYPE html>
	   <html><head><meta charset="utf-8">
	   <title>'.$t.'</title>
	   <link type="text/css" rel="stylesheet" href="newsletter.css">
	   </head>';
	   echo $head;
   }
?>