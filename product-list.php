<?php
$id_dmc = $_GET['id_dmc'];

$sql_dmc = "SELECT * FROM dmc_sp WHERE dmc_sp.id_dmc='$id_dmc'";
$query_dmc = mysqli_query($conn, $sql_dmc);
$row_dmc = mysqli_fetch_array($query_dmc);
$id_dm = $row_dmc['id_dm'];

$sql_dm = "SELECT * FROM dm_sp WHERE id_dm='$id_dm'";
$query_dm = mysqli_query($conn, $sql_dm);
$row_dm = mysqli_fetch_array($query_dm);

$sql_cdmc = "SELECT * FROM dmc_sp WHERE dmc_sp.id_dm='$id_dm'";
$query_cdmc = mysqli_query($conn, $sql_cdmc);

$sql_sp = "SELECT * FROM sp,dmc_sp WHERE sp.id_dm=dmc_sp.id_dmc AND dmc_sp.id_dmc='$id_dmc' ORDER BY id_sp ASC";
$query_sp = mysqli_query($conn, $sql_sp);

if(isset($_POST['them_cart'])){
    $_SESSION['sp_mua'] = $_SESSION['sp_mua'].','.$id_sp;
    header("location: index.php?page_layout=cart");
}
?>

<!-- aside -->
<aside id="aside-product-list">
    <!-- slide -->
    <div id="slide-product" class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div id="jssor_1"
             style="position:relative;margin:0 auto;top:0px;left:0px;width:1140px;height:380px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin"
                 style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg"/>
            </div>
            <div data-u="slides"
                 style="cursor:default;position:relative;top:0px;left:0px;width:1140px;height:380px;overflow:hidden;">
                <div data-p="170.00">
                    <img data-u="image" src="img/products/slide1.jpg"/>
                </div>
                <div data-p="170.00">
                    <img data-u="image" src="img/products/slide2.jpg"/>
                </div>
                <div data-p="170.00">
                    <img data-u="image" src="img/products/slide3.jpg"/>
                </div>
                <div data-p="170.00">
                    <img data-u="image" src="img/products/slide4.jpg"/>
                </div>
                <div data-p="170.00">
                    <img data-u="image" src="img/products/slide5.jpg"/>
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;"
                 data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;"
                 data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;"
                 data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
        <script type="text/javascript">jssor_1_slider_init();</script>
        <!-- #endregion Jssor Slider End -->
    </div>
    <!-- end slide -->

    <!-- banner -->
    <div id="banner-product" class="col-lg-12 col-md-12 col-sm-12">
        <div class="banner-product-item col-lg-3 col-md-6 col-ms-6">
            <a href="#" title=""><img class="img-thumbnail" src="img/products/banner-product1.png" alt=""></a>
        </div>
        <div class="banner-product-item col-lg-3 col-md-6 col-ms-6">
            <a href="#" title=""><img class="img-thumbnail" src="img/products/banner-product2.png" alt=""></a>
        </div>
        <div class="banner-product-item col-lg-3 col-md-6 col-ms-6">
            <a href="#" title=""><img class="img-thumbnail" src="img/products/banner-product3.png" alt=""></a>
        </div>
        <div class="banner-product-item col-lg-3 col-md-6 col-ms-6">
            <a href="#" title=""><img class="img-thumbnail" src="img/products/banner-product4.png" alt=""></a>
        </div>
    </div>
    <!-- end-banner -->
</aside>
<!-- end-aside -->

<!-- main -->
<div id="main-product-list">
    <div id="bar-OP" class="col-lg-2 col-md-2 col-ms-2 col-2">
        <div>
            <p style="background: none; color: #ff9600;">Danh mục sản phẩm</p>
            <p><?php echo $row_dm['ten_dm'];?></p>
            <ul>
                <?php
                while ($row_cdmc = mysqli_fetch_array($query_cdmc)){
                ?>
                <li><a href="index.php?page_layout=product-list&id_dmc=<?php echo $row_cdmc['id_dmc'];?>" title=""><?php echo $row_cdmc['ten_dmc'];?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div>
            <p>Giao hàng nhanh</p>
            <ul>
                <li><a href="#" title="">Có</a></li>
                <li><a href="#" title="">Không</a></li>
            </ul>
        </div>
        <div>
            <p>Giá</p>
            <ul>
                <li><a href="#" title="">0-1.000.000</a></li>
                <li><a href="#" title="">1.000.000-3.000.000</a></li>
                <li><a href="#" title="">3.000.000-5.000.000</a></li>
                <li><a href="#" title="">5.000.000-7.000.000</a></li>
                <li><a href="#" title="">7.000.000-9.000.000</a></li>
                <li><a href="#" title="">9.000.000-11.000.000</a></li>
                <li><a href="#" title="">11.000.000-15.000.000</a></li>
                <li><a href="#" title="">15.000.000-20.000.000</a></li>
                <li><a href="#" title="">>20.000.000</a></li>
            </ul>
        </div>
        <div>
            <a href="#" title=""><img class="img-thumbnail" src="img/products/" alt=""></a>
        </div>
    </div>
    <div id="product-OP" class="col-lg-10 col-md-10 col-ms-10 col-10">
        <div id="product-values-OP">
            <div>
                <h3><?php echo $row_dmc['ten_dmc'];?></h3>
                <p><?php echo $row_num=mysqli_num_rows($query_sp)?> sản phẩm tìm thấy</p>
            </div>
            <div>
                <p>Sắp xếp theo:</p>
            </div>
        </div>
        <div id="product-list-OP">
            <?php
            while ($row_sp=mysqli_fetch_array($query_sp)){
            ?>
            <div class="product-item-OP col-lg-3" style="padding: 0px;">
                <a href="#" title="">
                    <img class="img-thumbnail" src="img/products/<?php $row_sp['anh_sp'];?>">
                    <h4><?php $row_sp['ten_sp'];?></h4>
                    <s>2.500.000</s><b> <?php $row_sp['gia'];?></b>
                    <p>-40%</p>
                </a>
                <div>
                    <form method="post">
                        <input name="them_cart" type="submit" class="btn btn-primary" value="Thêm vào giỏ hàng">
                    </form>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <div id="pages">

        </div>
    </div>
    <div id="info-OP" class="col-lg-12 col-md-12 col-ms-12 col-12">
        <div>
            <p>Những điều cần chú ý khi lựa chọn hệ thống giải trí tại gia</p>
            <ul>
                <li>- <i>Nhu cầu sử dụng hệ thống thiết bị âm thanh gia đình của bạn: </i>Nhu cầu của bạn là nghe nhạc,
                    karaoke hay dùng để xem phim? Dàn âm thanh nào cũng có thể đáp ứng được cùng lúc cả 3 nhu cầu này,
                    tuy nhiên cần phải lựa chọn kĩ càng nếu bạn đòi hỏi cao hơn.
                </li>
                <li>- <i>Vị trí đặt hệ thống âm thanh gia đình: </i>Bạn cần ước lượng được không gian đó là rộng hay
                    nhỏ, có kín hay không, vị trí đặt loa có bao phủ được toàn bộ không gian đó hay không để chọn mua số
                    lượng loa cũng như công suất của loa.
                </li>
                <li>- <i>Sử dụng sản phẩm thương hiệu nào cho thiết bị âm thanh gia đình: </i>Các kiến thức về thương
                    hiệu thiết bị âm thanh sẽ giúp cho bạn an tâm và có thêm kinh nghiệm trong việc lựa chọn hệ thống âm
                    thanh gia đình, cũng như cho bạn có được sự lựa chọn sáng suốt nhất, trán phải mua nhầm hàng kém
                    chất lượng, hàng giả, hàng nhái.
                </li>
                <li>- <i>Nên tìm hiểu về các thông số kĩ thuật của hệ thống âm thanh: </i>Các thông số kĩ thuật của
                    thiết bị âm thanh sẽ cho bạn biết thông tin chính xác nhất về sản phẩm mà bạn chuẩn bị mua, cũng như
                    giúp bạn có thể tự mình điều chỉnh được hệ thống âm thanh gia đình mình.
                </li>
            </ul>
        </div>
        <div>
            <p>Những sai lầm mà nhiều người hay mắc phải khi mua các thiết bị hệ thống giải trí tại gia</p>
            <ul>
                <li>- <i>Loa công suất gấp đôi sẽ to gấp đôi: </i>Vì độ lớn của âm thanh còn phụ thuộc vào độ nhạy của
                    loa.
                </li>
                <li>- <i>Các hệ thống âm thanh đã được tích hợp sẵn những tính năng an toàn: </i>Hiện nay thì hầu hết
                    các hệ thống âm thanh được bán trên thị trường đều có thể phát ra một mức âm cực lớn, có thể gây ảnh
                    hưởng đáng kể đến thính giác của người nghe.
                </li>
                <li>- <i>Dây loa càng đắt càng tốt: </i>Tín hiệu âm thanh đã qua các đoạn dây nhỏ nối từ bảng mạch hoặc
                    bộ xử lý đến các cổng kết nối. Điều này làm cho chất lượng âm thanh không có sự khác biệt quá lớn
                    ngay cả khi sử dụng dây đắt tiền.
                </li>
                <li>- <i>Loa càng đắt càng tốt: </i>Có những dàn loa đắt tiền sử dụng kim cương làm màng loa, nhưng chưa
                    hẳn đã có âm sắc trầm ấm và thể hiện âm thanh nhạc cụ cổ điển chân thật như màng loa gỗ.
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end main -->
