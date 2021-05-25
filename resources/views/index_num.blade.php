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

	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.structure.css') }}">
	
	<link rel="stylesheet" href="{{ asset('css/train.css') }}">
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
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="map-container">
                    <div class="map-left">
                        <!-- 臺灣地圖 -->
                        <div class="map-image">
                            <img src="{{asset('img/Taiwan.png')}}" height="570" alt="臺灣鐵路地圖">
                        </div>
                
                        <!-- 縣市別 -->
                        <div class="map-selector">
                            <a class="county local-1" href="#" title="基隆">基隆</a>
                            <a class="county local-2" href="#" title="新北市">新北市</a>
                            
                            <a class="county local-4" href="#" title="臺北市">臺北市</a>
                            <a class="county local-5" href="#" title="桃園">桃園</a>

                            <a class="county local-7" href="#" title="新竹">新竹</a>
                            <a class="county local-8" href="#" title="苗栗">苗栗</a>
                            <a class="county local-9" href="#" title="臺中">臺中</a>
                            <a class="county local-10" href="#" title="彰化">彰化</a>
                            <a class="county local-11" href="#" title="(南投) 集集線">南投</a>
                            <a class="county local-12 active" href="#" title="雲林">雲林</a>
                            <a class="county local-13" href="#" title="嘉義">嘉義</a>
                            <a class="county local-14" href="#" title="臺南(含沙崙線)">臺南</a>
                            <a class="county local-15" href="#" title="高雄">高雄</a>
                            <a class="county local-16" href="#" title="屏東">屏東</a>
                            <a class="county local-17" href="#" title="臺東">臺東</a>
                            <a class="county local-18" href="#" title="花蓮">花蓮</a>
                            <a class="county local-19" href="#" title="宜蘭">宜蘭</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="mainMenu d-flex align-items-center justify-content-between">
    	<div class="closeIcon">
        	<i class="ti-close" aria-hidden="true"></i>
    	</div>

		<div class="logo-area">
        	<a href="/train/public/index"><img src="{{asset('img/TRA_logo_1.png')}}"><b></b></a>
    	</div>
		@include('web_menu')

		<div class="copywrite-text">
            <p><a href="/train/public/index"><img src="{{asset('img/火車/上排列車.png')}}" width=80%;></a></p>
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
                            <a href="/train/public/index"><b>車種 查詢</b><i style="font-size:32px" class="fa">&#xf239;</i></a>
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
		<style>
            .w3-display-middle{position:absolute;top:30%;left:13%;transform:translate(-30%,-13%);-ms-transform:translate(-30%,-13%);z-index:9999}
            .w3-input{padding:8px;display:block;border:none;border-bottom:1px solid #ccc;width:100%}
            .w3-select{padding:9px 0;width:100%;border:none;border-bottom:1px solid #ccc}
            .w3-border-0{border:0!important}.w3-border{border:1px solid #ccc!important}
            .w3-border-top{border-top:1px solid #ccc!important}.w3-border-bottom{border-bottom:1px solid #ccc!important}
            .w3-border-left{border-left:1px solid #ccc!important}.w3-border-right{border-right:1px solid #ccc!important}
            .w3-half{width:50%}
        </style>
        <div class="w3-display-middle" style="width:85%">
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
								<form action="/train/public/index/result_num" method="post">
									<p><label>車次</label>
                                        <input type="text" name="num"></p></div>
                                    <div class="col-sm-6">
                                    <p><label>搭乘日期</label>
                                        <input type="text" name="starttime" id="datepicker"></p></div>
                                    <div class="col-sm-6">	
									<p><label>去程站</label>
										<select name="firststation" id="going">
											<option></option>
											@foreach ($DATA2 as $data2)
											<option>{{$data2->name}}</option>
											@endforeach
										</select>
                                    </p></div>
                                    <div class="col-sm-6">
									<p><label>抵達站</label>
										<select name="finalstation" id="arrive">
											<option></option>
											@foreach ($DATA2 as $data2)
											<option>{{$data2->name}}</option>
											@endforeach
										</select>
                                    </p></div>
                            <div class="row">
                                <div class="col-sm-5">
									<p><input type="submit" value="送出查詢" class="button2"></p>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                        開啟台灣鐵路分布地圖
                                    </button>
									<!-- CSRF -->
									{!! csrf_field() !!}
                                    </form>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--p><label>車種</label>
		<select name="train_kind" id="train_kind">
		<option></option>
		@foreach ($DATA1 as $data1)
		<option>{{$data1->name}}</option>
		@endforeach
		</select>
		</p-->
	</section>
    <footer class="bg-dark text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                    <ul class="list-unstyled mb-0">
                        <li class="my-2">
                            <img class="img-fluid"
                                src="https://tip-tr4cdn.cdn.hinet.net/tra-tip-web/static/images/train.jpg"
                                style="width:80%;height:80%">
                        </li>
                    </ul>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-light mb-4">台鐵台鐵</h5>

                    <ul class="list-unstyled mb-0">
                        <li class="my-2">
                            <a href="#!" class="text-light ">關於我們</a>
                        </li>
                        <li class="my-2">
                            <a href="#!" class="text-light">加入我們</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-light mb-4">常見服務</h5>

                    <ul class="list-unstyled">
                        <li class="my-2">
                            <a href="#!" class="text-light">支援服務</a>
                        </li>
                        <li class="my-2">
                            <a href="#!" class="text-light">票價與費用</a>
                        </li>
                        <li class="my-2">
                            <a href="#!" class="text-light">特殊需求</a>
                        </li>
                        <li class="my-2">
                            <a href="#!" class="text-light">行李協尋</a>
                        </li>
                        <li class="my-2">
                            <a href="#!" class="text-light">運送條款</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-light mb-4">與台鐵互動</h5>
                    <ul class="list-unstyled">
                        <li class="my-2">
                            <a href="#!" class="text-light"> <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                    height="1em" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg> Facebook</a>
                        </li>
                        <li class="my-2">
                            <a href="#!" class="text-light"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                    height="1em" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg> Twitter</a>
                        </li>
                        <li class="my-2">
                            <a href="#!" class="text-light "><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg> Instagram</a>
                        </li>

                        <li class="my-2">
                            <a href="#!" class="text-light"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                    <path
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                </svg> Youtube</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(255, 255, 255, 0.2)">版權所有 2021 網頁程式設計 第八組</div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous">
    </script>
	<script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>

	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>

    <script src="{{ asset('js/active.js') }}"></script>

	<script src="{{ asset('jquery-ui/jquery-ui.js') }}"></script>
	
	<script>
	$(function(){
		$("#datepicker").datepicker();
		$("#going").selectmenu();
		$("#arrive").selectmenu();
		$("#train_kind").selectmenu();
	});
	</script>
</body>
</html>