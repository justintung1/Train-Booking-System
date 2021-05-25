<!DOCTYPE html>
<html lang="en">
<head>
<title>{{$title}}</title>
<link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
        @import url("https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap");
	</style>
	<link rel="stylesheet" href="{{ asset('css/style2.css') }}">

	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	   @import url("https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap");
	</style>

 	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.css') }}">  
   	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.structure.css') }}"> 
	<link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
	
	

</head>
<body>
	<div id="preloader">
        <div class="preload-content">
            <div id="sonar-load"></div>
        </div>
    </div>

	<div class="grids d-flex justify-content-between">
        <div class="grid1"></div>
        <div class="grid2"></div>
        <div class="grid3"></div>
        <div class="grid4"></div>
        <div class="grid5"></div>
        <div class="grid6"></div>
        <div class="grid7"></div>
        <div class="grid8"></div>
        <div class="grid9"></div>
    </div>

	<div class="mainMenu d-flex align-items-center justify-content-between">
    	<div class="closeIcon">
        	<i class="ti-close" aria-hidden="true"></i>
    	</div>

		<div class="logo-area">
        	<a href="/train/public/manage/train"><img src="{{asset('img/TRA_logo_1.png')}}"><b></b></a>
    	</div>
		@include('manage_menu')

		<div class="copywrite-text">
            <p><a href="/train/public/manage/train"><img src="{{asset('img/火車/heoo.png')}}" width=80%;></a></p>
            <div style="line-height: 150%;">
                <br>
            </div>
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | By 第八組 <i class="fa fa-heart-o" aria-hidden="true"></i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
        </div>
	</div>

	<header class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="menu-area d-flex justify-content-between">
                        <!-- Logo Area  -->
                        <div class="logo-area">
                            <a href="/train/public/manage"><b>後台管理</b><i style="font-size:32px" class="fa">&#xf239;</i></a>
                        </div>

                        <div class="menu-content-area d-flex align-items-center">
                            <!-- Header Social Area -->
                            <div class="header-social-area d-flex align-items-center">
                                <a href="https://www.pinterest.com/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://www.facebook.com/TaiwanRailwayAdministration" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/?lang=zh-tw" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                            <!-- Menu Icon -->
                            <span class="navbar-toggler-icon" id="menuIcon"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
	
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url({{asset('img/bg-img2/change1.jpg')}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>Sand Storm</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url({{asset('img/bg-img2/change2.jpg')}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>New York View</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url({{asset('img/bg-img2/change3.jpg')}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>The Desert</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url({{asset('img/bg-img2/change4.jpg')}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>Mountains Hike</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url({{asset('img/bg-img2/change1.jpg')}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>Sand Storm</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url({{asset('img/bg-img2/change2.jpg')}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>New York View</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url({{asset('img/bg-img2/change3.jpg')}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>The Desert</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url({{asset('img/bg-img2/change4.jpg')}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>Mountains Hike</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url({{asset('img/bg-img2/change1.jpg')}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>Sand Storm</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url({{asset('img/bg-img2/change2.jpg')}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>New York View</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url({{asset('img/bg-img2/change3.jpg')}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>The Desert</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url({{asset('img/bg-img2/change4.jpg')}});">
                <div class="container h-100">
                    <div class="row h-100 align-items-end">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <div class="line"></div>
                                <h2>Mountains Hike</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Suspendisse sit amet laoreet neque. Fusce sagittis suscipit sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<div class="table table-striped table-light">
			@if(session()->has('account'))
				<div class="row">
					<div class="column side">
						<div class="topnav">
						</div>
  					</div>
					<div class="column middle">
						<nav class="navbar navbar-expand-sm bg-info navbar-dark">
                        	<h2 class="nav-item active">{{$title}}</h2>
                    	</nav><br>
						<div class="jumbotron">
							<div class="row">
								<div class="col-sm-6">
									<form action="/train/public/manage/train_update" method="post">
										@foreach ($DATA as $data)
       										<p><label>車種</label>
	   											<input type="text" name="kind" value="{{$data->name}}">
	   										</p>
	   										<p><label>時速</label>
	   											<input type="text" name="speed" value="{{$data->speed}}"> (km/hr)
	   										</p>
	   										<input type="hidden" name="kn" value="{{$data->kn}}">
										@endforeach
										<p class=center><input type="submit" value="更新" class="button2"><p>
	 									<!-- CSRF -->
										{!! csrf_field() !!}
									</form>
								</div>
								<div class="col-sm-6">
                                	<img src="{{asset('img/t4.png')}}">
                            	</div>
							</div>
						</div>
					</div>
				</div>
			@else
				<div><h1>尚未登入</h1></div>
			@endif
		</div>
	</section>  
  <!--div class="column side">
    <h2>Side2</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div-->

<!--div class="footer">
  <p>Footer</p>
</div-->
	<script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>

	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>

    <script src="{{ asset('js/active.js') }}"></script>
<!--script src="{{ asset('jquery-ui/jquery.js') }}"></script-->
	<script src="{{ asset('jquery-ui/jquery-ui.js') }}"></script>

	<script>
		$( function() {
 			$("#datepicker").datepicker();
  			$("#going").selectmenu();
  			$("#arrive").selectmenu();
  			$("#number").selectmenu();
		} );
	</script>
</body>
</html>
