<?php
ob_start();
session_start();
include_once 'quantri/ketnoi.php';

$sql_dm = "SELECT * FROM dm_sp";
$query_dm = mysqli_query($conn, $sql_dm);
?>

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
						<h1><a href="index.php"><img src="img/tntstudio.png" class="img-thumbnail"></a><h1>
					</div>
					<div id="search" class="col-lg-6 col-md-6 col-sm-6 col-12">
						<form method="post" accept-charset="utf-8">
							<input type="text" placeholder="Bạn cần tìm gì? Hãy cho chúng tôi biết?...">
							<input type="submit" value="Tìm kiếm">
						</form>
					</div>
					<div id="icon" class="col-lg-4 col-md-4 col-sm-4 col-12">
						<div class="icon-item col-lg-3 col-md-3 col-sm-3 col-12">
							<a href="index.php?page_layout=login" title="">
								<img src="img/login.png" class="img-thumbnail">
								<p><?php if(isset($_SESSION['ten'])){echo $_SESSION['ten'];}else{echo 'Login';}?></p>
							</a>
						</div>
						<div class="icon-item col-lg-3 col-md-3 col-sm-3 col-12">
							<a href="index.php?page_layout=khuyen-mai" title="">
								<img src="img/new.png" class="img-thumbnail">
								<p>Khuyến mãi</p>
							</a>
						</div>
						<div class="icon-item col-lg-3 col-md-3 col-sm-3 col-12">
							<a href="index.php?page_layout=tra-gop" title="">
								<img src="img/sale.png" class="img-thumbnail">
								<p>Trả góp</p>
							</a>
						</div>
						<div class="icon-item col-lg-3 col-md-3 col-sm-3 col-12">
							<a href="index.php?page_layout=cart" title="">
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
                                <?php
                                while($row_dm=mysqli_fetch_array($query_dm)){
                                    $id_dm = $row_dm['id_dm'];

                                    $sql_dmc = "SELECT * FROM dmc_sp WHERE id_dm='$id_dm'";
                                    $query_dmc = mysqli_query($conn, $sql_dmc);
                                ?>
								<li>
									<a href="#">
										<img src="img/<?php echo $row_dm['anh_dm'];?>" class="img-thumbnail">
										<p><?php echo $row_dm['ten_dm'];?></p>
									</a>
									<!-- menu-child -->
									<div class="menu-child">
										<div class="menu-link col-lg-12 col-md-12 col-ms-12 col-12">
											<div><p style="text-align: center;margin: 0px;font-size: 20px;color: #FF9600;font-weight: bold;">Các sản phẩm</p><hr></div>
                                            <ul style="list-style: none">
                                                <?php
                                                while ($row_dmc=mysqli_fetch_array($query_dmc)) {
                                                 ?>
                                                    <li style="border:none;float:left;"
                                                        class="menu-child-list col-lg-4 col-md-4 col-ms-6 col-12"><a
                                                                href="index.php?page_layout=product-list&id_dmc=<?php echo $row_dmc['id_dmc'];?>" title=""><?php echo $row_dmc['ten_dmc'];?></a></li>
                                                 <?php
                                                }
                                                ?>
                                            </ul>
										</div>
									</div>
									<!-- end-menu-child -->
								</li>
                                <?php
                                }
                                ?>
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
                <?php
                if(isset($_GET['page_layout'])){
                    switch ($_GET['page_layout']){
                        case "cart":
                            include_once 'cart.php';
                            break;
                        case "forget":
                            include_once 'forget.php';
                            break;
                        case "ho-tro":
                            include_once 'ho-tro.php';
                            break;
                        case "login":
                            include_once 'login.php';
                            break;
                        case "product":
                            include_once 'product.php';
                            break;
                        case "product-list":
                            include_once 'product-list.php';
                            break;
                        case "register":
                            include_once 'register.php';
                            break;
                        case "home":
                            include_once 'home.php';
                            break;
                    }
                }else{
                    include_once 'home.php';
                }
                ?>
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
						<form method="post">
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
						<a href="https://www.facebook.com/codetntweb/" title=""><img class="img-thumbnail" src="img/fb.png" alt=""></a>
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