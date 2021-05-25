<div class="header">
    <div class="row">
	<div class="column side1">
		<img src="{{ asset('img/train1.png') }}" width="15%" height="10%"> 訂票後台管理
		</div>
		<div class="column middle1">
		<img src="{{ asset('img/train2.jpg') }}" width="100%" height="10%" >
		</div>
	</div>
</div>


<!--div class="header">
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
  
</div-->