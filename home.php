<?php
$sql_spm = "SELECT * FROM sp,sp_chinhhang WHERE sp.id_cty=sp_chinhhang.id_cty ORDER BY id_sp DESC LIMIT 0,12";
$query_spm = mysqli_query($conn, $sql_spm);

$sql_sp = "SELECT * FROM sp,sp_chinhhang WHERE sp.id_cty=sp_chinhhang.id_cty ORDER BY id_sp ASC LIMIT 0,24";
$query_sp = mysqli_query($conn, $sql_sp);

$sql_slide = "SELECT * FROM quang_cao WHERE loai_quangcao='slider' ORDER BY id_quangcao DESC LIMIT 0,10";
$query_slide = mysqli_query($conn, $sql_slide);

$sql_banner = "SELECT * FROM quang_cao WHERE loai_quangcao='banner' ORDER BY id_quangcao DESC LIMIT 0,3";
$query_banner = mysqli_query($conn, $sql_banner);

$sql_flyer = "SELECT * FROM quang_cao WHERE loai_quangcao='flyer' ORDER BY id_quangcao DESC LIMIT 0,2";
$query_flyer = mysqli_query($conn, $sql_flyer);
?>
<!-- aside -->
<aside id="banner">
    <!-- slide -->
    <div id="slide" class="col-lg-10 col-md-10 col-sm-12 col-12">
        <div id="jssor_1"
             style="position:relative;margin:0 auto;top:0px;left:0px;width:1140px;height:380px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin"
                 style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                     src="img/spin.svg"/>
            </div>
            <div data-u="slides"
                 style="cursor:default;position:relative;top:0px;left:0px;width:1140px;height:380px;overflow:hidden;">
                <?php
                while ($row_slide=mysqli_fetch_array($query_slide)){
                ?>
                <div data-p="170.00">
                    <img data-u="image" src="img/slide1.png">
                    <div data-u="thumb">
                        <img data-u="thumb" class="i" src="img/slider/<?php echo $row_slide['anh_quangcao'];?>"/>
                        <span class="ti"><?php echo $row_slide['chuong_trinh'];?></span><br/>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <!-- Thumbnail Navigator -->
            <div data-u="thumbnavigator" class="jssort121"
                 style="position:absolute;left:0px;top:0px;width:268px;height:380px;overflow:hidden;cursor:default;"
                 data-autocenter="2" data-scale-left="0.75">
                <div data-u="slides">
                    <div data-u="prototype" class="p" style="width:268px;height:68px;">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb111" style="position:absolute;bottom:12px;right:12px;"
                 data-scale="0.5">
                <div data-u="prototype" class="i"
                     style="width:24px;height:24px;font-size:12px;line-height:24px;">
                    <svg viewbox="0 0 16000 16000"
                         style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;">
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
        <?php
        while ($row_flyer=mysqli_fetch_array($query_flyer)){
        ?>
        <div class="flyer">
            <a href="#" title=""><img src="img/flyer/<?php echo $row_flyer['anh_quangcao'];?>" class="img-thumbnail"></a>
        </div>
        <?php
        }
        ?>
    </div>
    <!-- end flyer -->
    <div id="banner-b">
        <?php
        while ($row_banner=mysqli_fetch_array($query_banner)){
        ?>
        <div style="padding-right: 4px;" class="col-lg-4 col-md-4 col-sm-4 col-12">
            <a href="#" title=""><img src="img/banner/<?php echo $row_banner['anh_quangcao'];?>" class="img-thumbnail"></a>
        </div>
        <?php
        }
        ?>
    </div>
</aside>
<!-- end aside -->

<!-- main -->
<main>
    <div class="product">
        <h3>Sản phẩm mới</h3>
        <a href="index.php?page_layout=product-list">Xem tất cả</a>
        <div class="product-list fix-row">
            <?php
            while ($row_spm = mysqli_fetch_array($query_spm)){
            ?>
            <div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
                <a href="index.php?page_layout=product&id_sp=<?php echo $row_spm['id_sp'];?>" title="">
                    <img src="img/anh_sp/<?php echo $row_spm['anh_sp'];?>" class="img-thumbnail">
                    <h4><?php echo $row_spm['ten_sp'];?></h4>
                    <b><?php echo $row_spm['gia'];?></b>
                    <p>Khuyến mại:<?php echo $row_spm['khuyen_mai'];?></p>
                </a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
<!--    <div id="good-product">-->
<!--        <h2>Sản phẩm chính hãng</h2>-->
<!--        <a href="#">Xem tất cả</a>-->
<!--        <div class="good-product-list fix-row">-->
<!--            <div class="good-product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">-->
<!--                <a href="#" title="">-->
<!--                    <img src="img/good-product1.jpg" class="img-thumbnail">-->
<!--                    <img src="img/comunity-logo1.jpg" class="good-product-logo img-thumbnail">-->
<!--                    <p>Khuyến mại:</p>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="good-product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">-->
<!--                <a href="#" title="">-->
<!--                    <img src="img/good-product2.jpg" class="img-thumbnail">-->
<!--                    <img src="img/comunity-logo2.jpg" class="good-product-logo img-thumbnail">-->
<!--                    <p>Khuyến mại:</p>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="good-product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">-->
<!--                <a href="#" title="">-->
<!--                    <img src="img/good-product3.jpg" class="img-thumbnail">-->
<!--                    <img src="img/comunity-logo3.jpg" class="good-product-logo img-thumbnail">-->
<!--                    <p>Khuyến mại:</p>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="good-product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">-->
<!--                <a href="#" title="">-->
<!--                    <img src="img/good-product4.jpg" class="img-thumbnail">-->
<!--                    <img src="img/comunity-logo4.jpg" class="good-product-logo img-thumbnail">-->
<!--                    <p>Khuyến mại:</p>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="good-product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">-->
<!--                <a href="#" title="">-->
<!--                    <img src="img/good-product5.jpg" class="img-thumbnail">-->
<!--                    <img src="img/comunity-logo5.jpg" class="good-product-logo img-thumbnail">-->
<!--                    <p>Khuyến mại:</p>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="good-product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">-->
<!--                <a href="#" title="">-->
<!--                    <img src="img/good-product6.jpg" class="img-thumbnail">-->
<!--                    <img src="img/comunity-logo6.jpg" class="good-product-logo img-thumbnail">-->
<!--                    <p>Khuyến mại:</p>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div class="product">
        <h3>Sản phẩm nổi bật</h3>
        <a href="index.php?page_layout=product-list">Xem tất cả</a>
        <div class="product-list fix-row">
            <?php
            while ($row_sp = mysqli_fetch_array($query_sp)){
            ?>
            <div class="product-item col-lg-2 col-md-4 col-sm-4 col-12" style="padding:0px;">
                <a href="index.php?page_layout=product&id_sp=<?php echo $row_sp['id_sp'];?>" title="">
                    <img src="img/anh/<?php echo $row_sp['anh_sp'];?>" class="img-thumbnail">
                    <h4><?php echo $row_sp['ten_sp'];?></h4>
                    <b><?php echo $row_sp['gia'];?></b>
                    <p>Khuyến mại:<?php echo $row_sp['khuyen_mai'];?></p>
                </a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</main>
<!-- end main -->