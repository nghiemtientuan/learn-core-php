<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Chữ tiếng việt cho trang web -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TNT Studio</title>
	<link rel="stylesheet" href="css/web.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script><!-- cai dat jquery trc boostrap -->
	<script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/web.js"></script>
	<!-- <script type="text/javascript" src="js/web.js"></script> -->
	<script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Orientation: 2
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1200;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
</head>
<body>
	<!-- header -->
	<header id="header">
		<!-- header-t -->
		<div id="header-t">
			<div class="fix-container">
				<div class="fix-row">
					<div id="logo" class="col-lg-2 col-md-2 col-sm-2 col-12">
						<h1><a href="#"><img src="img/tntstudio.png" class="img-thumbnail"></a><h1>
					</div>
					<div id="search" class="col-lg-6 col-md-6 col-sm-6 col-12">
						<form method="post" accept-charset="utf-8">
							<input type="text" placeholder="Bạn cần tìm gì? Hãy cho chúng tôi biết?...">
							<input type="submit" value="Tìm kiếm">
						</form>
					</div>
					<div id="icon" class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="icon-item col-lg-3 col-md-3 col-sm-3 col-12">
							<a href="login.html" title="">
								<img src="img/login.png" class="img-thumbnail">
								<p>Login</p>
							</a>
						</div>
						<div class="icon-item col-lg-3 col-md-3 col-sm-3 col-12">
							<a href="#" title="">
								<img src="img/new.png" class="img-thumbnail">
								<p>Khuyến mãi</p>
							</a>
						</div>
						<div class="icon-item col-lg-3 col-md-3 col-sm-3 col-12">
							<a href="#" title="">
								<img src="img/sale.png" class="img-thumbnail">
								<p>Trả góp</p>
							</a>
						</div>
						<div class="icon-item col-lg-3 col-md-3 col-sm-3 col-12">
							<a href="#" title="">
								<img src="img/cart.png" class="img-thumbnail">
								<p>Giỏ hàng</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end header-t -->

		<!-- header-b -->
		<div id="header-b">
			<div class="fix-container">
				<div class="fix-row">
					<nav class="navbar navbar-expand-md navbar-dark">
						<!-- Toggler/collapsibe Button -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
						    <span class="navbar-toggler-icon"></span>
						</button>
						<div id="menu" class="col-lg-12 col-md-12 col-sm-12 col-12 collapse navbar-collapse">
							<ul>
								<li>
									<a href="#">
										<img src="img/Do dien tu.png" class="img-thumbnail">
										<p>Đồ điện tử</p>
									</a>
									<!-- menu-child -->
									<div class="menu-child">
										<div id="menu-link" class="col-lg-9 col-md-9">
											<p>Các sản phẩm</p>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Điện thoại di động</a></li>
													<li><a href="#" title="">Máy tính bảng</a></li>
													<li><a href="#" title="">Laptop và Máy tính để bàn</a></li>
													<li><a href="#" title="">Âm thanh</a></li>
													<li><a href="#" title="">Máy chơi game</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Camera giám sát</a></li>
													<li><a href="#" title="">Action Camera</a></li>
													<li><a href="#" title="">Máy văn phòng</a></li>
													<li><a href="#" title="">Thiết bị lưu trữ</a></li>
													<li><a href="#" title="">Thiết bị điện gia dụng</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Flycam & Aquater</a></li>
													<li><a href="#" title="">Thiết bị 4.0</a></li>
													<li><a href="#" title="">Dụng cụ thông minh</a></li>
													<li><a href="#" title="">Linh kiện máy tính</a></li>
													<li><a href="#" title="">Phụ kiện điện tử</a></li>
													</ul>
											</div>
										</div>
										<div id="menu-child-img" class="col-lg-3 col-md-3">
											<a href="#" title=""><img class="img-thumbnail" src="img/"></a>
										</div>
									</div>
									<!-- end-menu-child -->
								</li>
								<li>
									<a href="#">
										<img src="img/Suc khoe.png" class="img-thumbnail">
										<p>Sức khỏe</p>
									</a>
									<!-- menu-child -->
									<div class="menu-child">
										<div id="menu-link" class="col-lg-9 col-md-9">
											<p>Các sản phẩm</p>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Điện thoại di động</a></li>
													<li><a href="#" title="">Máy tính bảng</a></li>
													<li><a href="#" title="">Laptop và Máy tính để bàn</a></li>
													<li><a href="#" title="">Âm thanh</a></li>
													<li><a href="#" title="">Máy chơi game</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Camera giám sát</a></li>
													<li><a href="#" title="">Action Camera</a></li>
													<li><a href="#" title="">Máy văn phòng</a></li>
													<li><a href="#" title="">Thiết bị lưu trữ</a></li>
													<li><a href="#" title="">Thiết bị điện gia dụng</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Flycam & Aquater</a></li>
													<li><a href="#" title="">Thiết bị 4.0</a></li>
													<li><a href="#" title="">Dụng cụ thông minh</a></li>
													<li><a href="#" title="">Linh kiện máy tính</a></li>
													<li><a href="#" title="">Phụ kiện điện tử</a></li>
													</ul>
											</div>
										</div>
										<div id="menu-child-img" class="col-lg-3 col-md-3">
											<a href="#" title=""><img class="img-thumbnail" src="img/"></a>
										</div>
									</div>
									<!-- end-menu-child -->
								</li>
								<li>
									<a href="#">
										<img src="img/Thoi trang.png" class="img-thumbnail">
										<p>Thời trang</p>
									</a>
									<!-- menu-child -->
									<div class="menu-child">
										<div id="menu-link" class="col-lg-9 col-md-9">
											<p>Các sản phẩm</p>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Điện thoại di động</a></li>
													<li><a href="#" title="">Máy tính bảng</a></li>
													<li><a href="#" title="">Laptop và Máy tính để bàn</a></li>
													<li><a href="#" title="">Âm thanh</a></li>
													<li><a href="#" title="">Máy chơi game</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Camera giám sát</a></li>
													<li><a href="#" title="">Action Camera</a></li>
													<li><a href="#" title="">Máy văn phòng</a></li>
													<li><a href="#" title="">Thiết bị lưu trữ</a></li>
													<li><a href="#" title="">Thiết bị điện gia dụng</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Flycam & Aquater</a></li>
													<li><a href="#" title="">Thiết bị 4.0</a></li>
													<li><a href="#" title="">Dụng cụ thông minh</a></li>
													<li><a href="#" title="">Linh kiện máy tính</a></li>
													<li><a href="#" title="">Phụ kiện điện tử</a></li>
													</ul>
											</div>
										</div>
										<div id="menu-child-img" class="col-lg-3 col-md-3">
											<a href="#" title=""><img class="img-thumbnail" src="img/"></a>
										</div>
									</div>
									<!-- end-menu-child -->
								</li>
								<li>
									<a href="#">
										<img src="img/Lam dep.png" class="img-thumbnail">
										<p>Làm đẹp</p>
									</a>
									<!-- menu-child -->
									<div class="menu-child">
										<div id="menu-link" class="col-lg-9 col-md-9">
											<p>Các sản phẩm</p>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Điện thoại di động</a></li>
													<li><a href="#" title="">Máy tính bảng</a></li>
													<li><a href="#" title="">Laptop và Máy tính để bàn</a></li>
													<li><a href="#" title="">Âm thanh</a></li>
													<li><a href="#" title="">Máy chơi game</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Camera giám sát</a></li>
													<li><a href="#" title="">Action Camera</a></li>
													<li><a href="#" title="">Máy văn phòng</a></li>
													<li><a href="#" title="">Thiết bị lưu trữ</a></li>
													<li><a href="#" title="">Thiết bị điện gia dụng</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Flycam & Aquater</a></li>
													<li><a href="#" title="">Thiết bị 4.0</a></li>
													<li><a href="#" title="">Dụng cụ thông minh</a></li>
													<li><a href="#" title="">Linh kiện máy tính</a></li>
													<li><a href="#" title="">Phụ kiện điện tử</a></li>
													</ul>
											</div>
										</div>
										<div id="menu-child-img" class="col-lg-3 col-md-3">
											<a href="#" title=""><img class="img-thumbnail" src="img/"></a>
										</div>
									</div>
									<!-- end-menu-child -->
								</li>
								<li>
									<a href="#">
										<img src="img/Do choi.png" class="img-thumbnail">
										<p>Đồ chơi</p>
									</a>
									<!-- menu-child -->
									<div class="menu-child">
										<div id="menu-link" class="col-lg-9 col-md-9">
											<p>Các sản phẩm</p>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Điện thoại di động</a></li>
													<li><a href="#" title="">Máy tính bảng</a></li>
													<li><a href="#" title="">Laptop và Máy tính để bàn</a></li>
													<li><a href="#" title="">Âm thanh</a></li>
													<li><a href="#" title="">Máy chơi game</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Camera giám sát</a></li>
													<li><a href="#" title="">Action Camera</a></li>
													<li><a href="#" title="">Máy văn phòng</a></li>
													<li><a href="#" title="">Thiết bị lưu trữ</a></li>
													<li><a href="#" title="">Thiết bị điện gia dụng</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Flycam & Aquater</a></li>
													<li><a href="#" title="">Thiết bị 4.0</a></li>
													<li><a href="#" title="">Dụng cụ thông minh</a></li>
													<li><a href="#" title="">Linh kiện máy tính</a></li>
													<li><a href="#" title="">Phụ kiện điện tử</a></li>
													</ul>
											</div>
										</div>
										<div id="menu-child-img" class="col-lg-3 col-md-3">
											<a href="#" title=""><img class="img-thumbnail" src="img/"></a>
										</div>
									</div>
									<!-- end-menu-child -->
								</li>
								<li>
									<a href="#">
										<img src="img/Du lich.png" class="img-thumbnail">
										<p>Du lịch</p>
									</a>
									<!-- menu-child -->
									<div class="menu-child">
										<div id="menu-link" class="col-lg-9 col-md-9">
											<p>Các sản phẩm</p>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Điện thoại di động</a></li>
													<li><a href="#" title="">Máy tính bảng</a></li>
													<li><a href="#" title="">Laptop và Máy tính để bàn</a></li>
													<li><a href="#" title="">Âm thanh</a></li>
													<li><a href="#" title="">Máy chơi game</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Camera giám sát</a></li>
													<li><a href="#" title="">Action Camera</a></li>
													<li><a href="#" title="">Máy văn phòng</a></li>
													<li><a href="#" title="">Thiết bị lưu trữ</a></li>
													<li><a href="#" title="">Thiết bị điện gia dụng</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Flycam & Aquater</a></li>
													<li><a href="#" title="">Thiết bị 4.0</a></li>
													<li><a href="#" title="">Dụng cụ thông minh</a></li>
													<li><a href="#" title="">Linh kiện máy tính</a></li>
													<li><a href="#" title="">Phụ kiện điện tử</a></li>
													</ul>
											</div>
										</div>
										<div id="menu-child-img" class="col-lg-3 col-md-3">
											<a href="#" title=""><img class="img-thumbnail" src="img/"></a>
										</div>
									</div>
									<!-- end-menu-child -->
								</li>
								<li>
									<a href="#">
										<img src="img/Tap hoa.png" class="img-thumbnail">
										<p>Tạp hóa</p>
									</a>
									<!-- menu-child -->
									<div class="menu-child">
										<div id="menu-link" class="col-lg-9 col-md-9">
											<p>Các sản phẩm</p>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Điện thoại di động</a></li>
													<li><a href="#" title="">Máy tính bảng</a></li>
													<li><a href="#" title="">Laptop và Máy tính để bàn</a></li>
													<li><a href="#" title="">Âm thanh</a></li>
													<li><a href="#" title="">Máy chơi game</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Camera giám sát</a></li>
													<li><a href="#" title="">Action Camera</a></li>
													<li><a href="#" title="">Máy văn phòng</a></li>
													<li><a href="#" title="">Thiết bị lưu trữ</a></li>
													<li><a href="#" title="">Thiết bị điện gia dụng</a></li>
												</ul>
											</div>
											<div class="menu-child-list col-lg-4 col-md-4">
												<ul>
													<li><a href="#" title="">Flycam & Aquater</a></li>
													<li><a href="#" title="">Thiết bị 4.0</a></li>
													<li><a href="#" title="">Dụng cụ thông minh</a></li>
													<li><a href="#" title="">Linh kiện máy tính</a></li>
													<li><a href="#" title="">Phụ kiện điện tử</a></li>
													</ul>
											</div>
										</div>
										<div id="menu-child-img" class="col-lg-3 col-md-3">
											<a href="#" title=""><img class="img-thumbnail" src="img/"></a>
										</div>
									</div>
									<!-- end-menu-child -->
								</li>
								<li>
									<a href="#">
										<img src="img/Doi tra.png" class="img-thumbnail">
										<p>Đổi trả</p>
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- end header-b -->
	</header>
	<!-- end header -->
	
	<!-- section -->
	<section id="section-index">
		<div class="fix-container">
			<div class="fix-row">
				<!-- aside -->
				<aside id="banner">
					<!-- slide -->
					<div id="slide" class="col-lg-10 col-md-10 col-sm-12 col-12">
							<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1140px;height:380px;overflow:hidden;visibility:hidden;">
						        <!-- Loading Screen -->
						        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
						            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
						        </div>
						        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1140px;height:380px;overflow:hidden;">
						            <div data-p="170.00">
						                <img data-u="image" src="img/slide1.png">
						                <div data-u="thumb">
						                    <img data-u="thumb" class="i" src="img/slide1.png" />
						                    <span class="ti">Title</span><br />
						                    <span class="d">Slide Description</span>
						                </div>
						            </div>
						            <div data-p="170.00">
						                <img data-u="image" src="img/slide2.png" />
						                <div data-u="thumb">
						                    <img data-u="thumb" class="i" src="img/slide2.png" />
						                    <span class="ti">Title</span><br />
						                    <span class="d">Slide Description</span>
						                </div>
						            </div>
						            <div data-p="170.00">
						                <img data-u="image" src="img/slide3.png" />
						                <div data-u="thumb">
						                    <img data-u="thumb" class="i" src="img/slide3.png" />
						                    <span class="ti">Title</span><br />
						                    <span class="d">Slide Description</span>
						                </div>
						            </div>
						            <div data-p="170.00">
						                <img data-u="image" src="img/slide4.png" />
						                <div data-u="thumb">
						                    <img data-u="thumb" class="i" src="img/slide4.png" />
						                    <span class="ti">Title</span><br />
						                    <span class="d">Slide Description</span>
						                </div>
						            </div>
						            <div data-p="170.00">
						                <img data-u="image" src="img/slide5.png" />
						                <div data-u="thumb">
						                    <img data-u="thumb" class="i" src="img/slide5.png" />
						                    <span class="ti">Title</span><br />
						                    <span class="d">Slide Description</span>
						                </div>
						            </div>
						            <div data-p="170.00">
						                <img data-u="image" src="img/slide6.png" />
						                <div data-u="thumb">
						                    <img data-u="thumb" class="i" src="img/slide6.png" />
						                    <span class="ti">Title</span><br />
						                    <span class="d">Slide Description</span>
						                </div>
						            </div>
						            <div data-p="170.00">
						                <img data-u="image" src="img/slide7.png" />
						                <div data-u="thumb">
						                    <img data-u="thumb" class="i" src="img/slide7.png" />
						                    <span class="ti">Title</span><br />
						                    <span class="d">Slide Description</span>
						                </div>
						            </div>
						            <div data-p="170.00">
						                <img data-u="image" src="img/slide8.png" />
						                <div data-u="thumb">
						                    <img data-u="thumb" class="i" src="img/slide8.png" />
						                    <span class="ti">Title</span><br />
						                    <span class="d">Slide Description</span>
						                </div>
						            </div>
						        </div>
						        <!-- Thumbnail Navigator -->
						        <div data-u="thumbnavigator" class="jssort121" style="position:absolute;left:0px;top:0px;width:268px;height:380px;overflow:hidden;cursor:default;" data-autocenter="2" data-scale-left="0.75">
						            <div data-u="slides">
						                <div data-u="prototype" class="p" style="width:268px;height:68px;">
						                    <div data-u="thumbnailtemplate" class="t"></div>
						                </div>
						            </div>
						        </div>
						        <!-- Bullet Navigator -->
						        <div data-u="navigator" class="jssorb111" style="position:absolute;bottom:12px;right:12px;" data-scale="0.5">
						            <div data-u="prototype" class="i" style="width:24px;height:24px;font-size:12px;line-height:24px;">
						                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;">
						                    <circle class="b" cx="8000" cy="8000" r="3000"></circle>
						                </svg>
						                <div data-u="numbertemplate" class="n"></div>
						            </div>
						        </div>
						    </div>
						    <script type="text/javascript">jssor_1_slider_init();</script>
   							<!-- #endregion Jssor Slider End -->
					</div>
					<!-- end slide -->

					<!-- flyer -->
					<div id="flyer" class="col-lg-2 col-md-2">
						<div class="flyer">
							<a href="#" title=""><img src="img/flyer1.png" class="img-thumbnail"></a>
						</div>
						<div class="flyer">
							<a href="#" title=""><img src="img/flyer2.png" class="img-thumbnail"></a>
						</div>
					</div>
					<!-- end flyer -->
					<div id="banner-b">
						<div style="padding-right: 4px;" class="col-lg-4 col-md-4 col-sm-4 col-12">
							<a href="#" title=""><img src="img/banner2.png" class="img-thumbnail"></a>
						</div>
						<div style="padding-left: 2px; padding-right: 2px;" class="col-lg-4 col-md-4 col-sm-4 col-12">
							<a href="#" title=""><img src="img/banner2.png" class="img-thumbnail"></a>
						</div>
						<div style="padding-left: 4px;" class="col-lg-4 col-md-4 col-sm-4 col-12">
							<a href="#" title=""><img src="img/banner2.png" class="img-thumbnail"></a>
						</div>
					</div>
				</aside>
				<!-- end aside -->

				<!-- main -->
				<main>
					<div class="product">
						<h3>Sản phẩm giảm giá mạnh</h3>
						<a href="#">Xem tất cả</a>
						<div class="product-list fix-row">
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product16.jpg" class="img-thumbnail">
									<h4>Flycam Dij Mavic Pro Combo</h4>
									<s>16.350.000</s>
									<b>12.850.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product3.jpg" class="img-thumbnail">
									<h4>Gậy selfie 3 khúc cho Gropro Sjcam</h4>
									<s>205.000</s>
									<b>335.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product6.jpg" class="img-thumbnail">
									<h4>Sâm ngọc linh Hàn Quốc</h4>
									<s>1.500.000</s>
									<b>1.055.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product11.jpg" class="img-thumbnail">
									<h4>Ba lô đeo chéo leo núi</h4>
									<s>555.000</s>
									<b>350.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product8.jpg" class="img-thumbnail">
									<h4>Gimbup chống rung camera</h4>
									<s>512.000</s>
									<b>325.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product12.jpg" class="img-thumbnail">
									<h4>Kính bảo hộ đi đường</h4>
									<s>615.000</s>
									<b>355.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product19.jpg" class="img-thumbnail">
									<h4>Ba lô một bên</h4>
									<s>635.000</s>
									<b>450.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product18.jpg" class="img-thumbnail">
									<h4>Ổ điện 10 giắc</h4>
									<s>255.000</s>
									<p>125.000</p>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product7.jpg" class="img-thumbnail">
									<h4>Máy xay thịt đa năng</h4>
									<s>665.000</s>
									<b>458.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product17.jpg" class="img-thumbnail">
									<h4>Combo 3 lens điện thoại</h4>
									<s>475.000</s>
									<b>356.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12"
							style="padding:0px;">
								<a href="#" title="">
									<img src="img/product21.jpg" class="img-thumbnail">
									<h4>Action camera heken</h4>
									<s>1.505.000</s>
									<b>850.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12"
							style="padding:0px;">
								<a href="#" title="">
									<img src="img/product15.jpg" class="img-thumbnail">
									<h4>Bộ 3 gối ngủ cho bé</h4>
									<s>1.230.000</s>
									<b>855.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
						</div>
					</div>
					<div class="product">
						<h3>Sản phẩm mới</h3>
						<a href="#">Xem tất cả</a>
						<div class="product-list fix-row">
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product16.jpg" class="img-thumbnail">
									<h4>Flycam Dij Mavic Pro Combo</h4>
									<b>16.850.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product3.jpg" class="img-thumbnail">
									<h4>Gậy selfie 3 khúc cho Gropro Sjcam</h4>
									<b>335.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product6.jpg" class="img-thumbnail">
									<h4>Sâm ngọc linh Hàn Quốc</h4>
									<b>1.055.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product11.jpg" class="img-thumbnail">
									<h4>Ba lô đeo chéo leo núi</h4>
									<b>350.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product8.jpg" class="img-thumbnail">
									<h4>Gimbup chống rung camera</h4>
									<b>325.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product12.jpg" class="img-thumbnail">
									<h4>Kính bảo hộ đi đường</h4>
									<b>355.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product19.jpg" class="img-thumbnail">
									<h4>Ba lô một bên</h4>
									<b>450.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product18.jpg" class="img-thumbnail">
									<h4>Ổ điện 10 giắc</h4>
									<b>125.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product7.jpg" class="img-thumbnail">
									<h4>Máy xay thịt đa năng</h4>
									<b>458.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product17.jpg" class="img-thumbnail">
									<h4>Combo 3 lens điện thoại</h4>
									<b>356.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product21.jpg" class="img-thumbnail">
									<h4>Action camera heken</h4>
									<b>850.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product15.jpg" class="img-thumbnail">
									<h4>Bộ 3 gối ngủ cho bé</h4>
									<b>855.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
						</div>
					</div>
					<div id="good-product">
						<h2>Sản phẩm chính hãng</h2>
						<a href="#">Xem tất cả</a>
						<div class="good-product-list fix-row">
							<div class="good-product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/good-product1.jpg" class="img-thumbnail">
									<img src="img/comunity-logo1.jpg" class="good-product-logo img-thumbnail">
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="good-product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/good-product2.jpg" class="img-thumbnail">
									<img src="img/comunity-logo2.jpg" class="good-product-logo img-thumbnail">
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="good-product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/good-product3.jpg" class="img-thumbnail">
									<img src="img/comunity-logo3.jpg" class="good-product-logo img-thumbnail">
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="good-product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/good-product4.jpg" class="img-thumbnail">
									<img src="img/comunity-logo4.jpg" class="good-product-logo img-thumbnail">
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="good-product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/good-product5.jpg" class="img-thumbnail">
									<img src="img/comunity-logo5.jpg" class="good-product-logo img-thumbnail">
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="good-product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/good-product6.jpg" class="img-thumbnail">
									<img src="img/comunity-logo6.jpg" class="good-product-logo img-thumbnail">
									<p>Khuyến mại:</p>
								</a>
							</div>
						</div>
					</div>
					<div class="product">
						<h3>Sản phẩm nổi bật</h3>
						<a href="#">Xem tất cả</a>
						<div class="product-list fix-row">
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product16.jpg" class="img-thumbnail">
									<h4>Flycam Dij Mavic Pro Combo</h4>
									<b>16.850.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product3.jpg" class="img-thumbnail">
									<h4>Gậy selfie 3 khúc cho Gropro Sjcam</h4>
									<b>335.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product6.jpg" class="img-thumbnail">
									<h4>Sâm ngọc linh Hàn Quốc</h4>
									<b>1.055.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product11.jpg" class="img-thumbnail">
									<h4>Ba lô đeo chéo leo núi</h4>
									<b>350.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product8.jpg" class="img-thumbnail">
									<h4>Gimbup chống rung camera</h4>
									<b>325.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product12.jpg" class="img-thumbnail">
									<h4>Kính bảo hộ đi đường</h4>
									<b>355.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product19.jpg" class="img-thumbnail">
									<h4>Ba lô một bên</h4>
									<b>450.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product18.jpg" class="img-thumbnail">
									<h4>Ổ điện 10 giắc</h4>
									<b>125.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product7.jpg" class="img-thumbnail">
									<h4>Máy xay thịt đa năng</h4>
									<b>458.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product17.jpg" class="img-thumbnail">
									<h4>Combo 3 lens điện thoại</h4>
									<b>356.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product21.jpg" class="img-thumbnail">
									<h4>Action camera heken</h4>
									<b>850.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
							<div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
								<a href="#" title="">
									<img src="img/product15.jpg" class="img-thumbnail">
									<h4>Bộ 3 gối ngủ cho bé</h4>
									<b>855.000</b>
									<p>Khuyến mại:</p>
								</a>
							</div>
						</div>
					</div>
				</main>
				<!-- end main -->
			</div>
		</div>
	</section>
	<!-- end section -->

	<!-- footer -->
	<footer id="footer">
		<div id="email-news-register">
			<div class="fix-container">
				<div class="fix-row">
					<div id="email-icon" class="col-lg-2 col-md-2 col-sm-2 col-2">
						<img src="img/email-news-register.png" class="img-thumbnail">
					</div>
					<div id="email-text" class="col-lg-4 col-md-4 col-sm-4 col-4">
						<p>Đăng ký nhận bản tin chương trình từ <b>TNT Studio</b></p>
					</div>
					<div id="email-form" class="col-lg-6 col-md-6 col-sm-6 col-6">
						<form action="web_email-news-register" method="post">
							<input type="text" name="email-news-register" value="" placeholder="Địa chỉ email của bạn">
							<input type="radio" name="gender" value="Nam"> Nam
							<input type="radio" name="gender" value="Nữ"> Nữ
							<button name="email-register" class="btn btn-primary">Đăng ký</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- footer-t -->
		<div id="footer-t" class="fix-container">
			<div class="fix-row">
				<div id="logo-f" class="col-lg-12 col-12">
					<a href="#" title=""><img src="img/tntstudio.png" class="img-thumbnail"></a>
				</div>
				<div id="info" class="col-lg-12 col-12">
					<div class="info-item col-lg-3 col-md-6 col-sm-6 col-6" style="padding:0px;">
						<ul>
							<li><a href="#">Giới thiệu về công ty</a></li>
							<li><a href="#">Câu hỏi thường gặp</a></li>
							<li><a href="#">Chính sách TNT Shop</a></li>
							<li><a href="#">Hệ thống bảo hành</a></li>
						</ul>
					</div>
					<div class="info-item col-lg-3 col-md-6 col-sm-6 col-6" style="padding:0px;">
						<ul>
							<li><a href="#">Tin tuyển dụng</a></li>
							<li><a href="#">Tin khuyến mãi</a></li>
							<li><a href="#">Hướng dẫn mua online</a></li>
							<li><a href="#">Hướng dẫn mua trả góp</a></li>
						</ul>
					</div>
					<div class="info-item col-lg-3 col-md-6 col-sm-6 col-6" style="padding:0px;">
						<ul>
							<li><a href="#">Hệ thống của hàng</a></li>
							<li><a href="#">Dịch vụ Ship hàng</a></li>
							<li><a href="#">Đổi trả</a></li>
							<li><a href="#">Xả hàng</a></li>
						</ul>
					</div>
					<div id="contact" class="col-lg-3 col-md-6 col-sm-6 col-6" style="padding:0px;">
						<p>Tư vấn miễn phí (24/7):</p>
						<b style="color: #D0021B; text-transform: bold;">0123456789</b>
						<a href="#" title=""><img class="img-thumbnail" src="img/fb.png" alt=""></a>
						<a href="#" title=""><img class="img-thumbnail" src="img/tw.png" alt=""></a>
						<a href="#" title=""><img class="img-thumbnail" src="img/youtobe.png" alt=""></a>
						<p>Hỗ trợ thanh toán:</p>
						<div>
							<img src="img/payment1.png" class="img-thumbnail">
							<img src="img/payment2.png" class="img-thumbnail">
							<img src="img/payment3.png" class="img-thumbnail">
							<img src="img/payment4.png" class="img-thumbnail">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end footer-t -->

		<!-- footer-b -->
		<div id="footer-b">
			<div class="fix-container">
				<div class="fix-row">
					<p>@Công ty Cổ phần bán lẻ toàn quốc TNTStudio/Địa chỉ: 263 Trùng khánh, P5, Q4, TP.Hồ Chí Minh/Số người truy cập:<b></b></p>
				</div>
			</div>
		</div>
		<!-- end footer-b -->
	</footer>
	<!-- end footer -->
</body>
</html>