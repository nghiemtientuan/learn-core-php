<?php
if(isset($_GET['id_dmc'])){
    $id_dmc = $_GET['id_dmc'];
}else{
    header('location: index.php');
}
$sql_sp = "SELECT * FROM sp WHERE id_dm='$id_dmc' ORDER BY id_sp ASC";
$query_sp = mysqli_query($conn, $sql_sp);

$sql_dmc = "SELECT * FROM dmc_sp WHERE dmc_sp.id_dmc='$id_dmc'";
$query_dmc = mysqli_query($conn, $sql_dmc);
$row_dmc = mysqli_fetch_array($query_dmc);
$id_dm = $row_dmc['id_dm'];

$sql_dm = "SELECT * FROM dm_sp WHERE id_dm='$id_dm'";
$query_dm = mysqli_query($conn, $sql_dm);
$row_dm = mysqli_fetch_array($query_dm);

$sql_cdmc = "SELECT * FROM dmc_sp WHERE dmc_sp.id_dm='$id_dm'";
$query_cdmc = mysqli_query($conn, $sql_cdmc);

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
<div id="main-product-list" style="background-color: #fff;">
    <div id="bar-OP" class="col-lg-2 col-md-2 col-ms-2 col-2">
        <div>
            <p style="background: none; color: #ff9600;">Danh m???c s???n ph???m</p>
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
            <p>Giao h??ng nhanh</p>
            <ul>
                <li><a href="#" title="">C??</a></li>
                <li><a href="#" title="">Kh??ng</a></li>
            </ul>
        </div>
        <div>
            <p>Gi??</p>
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
                <p><?php echo $row_num=mysqli_num_rows($query_sp);?> s???n ph???m t??m th???y</p>
            </div>
            <div>
                <p>S???p x???p theo:</p>
            </div>
        </div>
        <div id="product-list-OP">
            <?php
            while ($row_sp=mysqli_fetch_array($query_sp)){
            ?>
            <div class="product-item-OP col-lg-3" style="padding: 0px;">
                <a href="index.php?page_layout=product&id_sp=<?php echo $row_sp['id_sp'];?>" title="">
                    <img style="width: 100%" class="img-thumbnail" src="img/anh_sp/<?php echo $row_sp['anh_sp'];?>">
                    <h4><?php echo $row_sp['ten_sp'];?></h4>
                    <s>2.500.000</s><b> <?php echo $row_sp['gia'];?></b>
                    <p>-40%</p>
                </a>
                <div>
                    <form method="post">
                        <input id="themvaogiohang" style="width: 100%;" name="them_cart" type="submit" class="btn btn-primary" value="Th??m v??o gi??? h??ng">
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
            <p>Nh???ng ??i???u c???n ch?? ?? khi l???a ch???n h??? th???ng gi???i tr?? t???i gia</p>
            <ul>
                <li>- <i>Nhu c???u s??? d???ng h??? th???ng thi???t b??? ??m thanh gia ????nh c???a b???n: </i>Nhu c???u c???a b???n l?? nghe nh???c,
                    karaoke hay d??ng ????? xem phim? D??n ??m thanh n??o c??ng c?? th??? ????p ???ng ???????c c??ng l??c c??? 3 nhu c???u n??y,
                    tuy nhi??n c???n ph???i l???a ch???n k?? c??ng n???u b???n ????i h???i cao h??n.
                </li>
                <li>- <i>V??? tr?? ?????t h??? th???ng ??m thanh gia ????nh: </i>B???n c???n ?????c l?????ng ???????c kh??ng gian ???? l?? r???ng hay
                    nh???, c?? k??n hay kh??ng, v??? tr?? ?????t loa c?? bao ph??? ???????c to??n b??? kh??ng gian ???? hay kh??ng ????? ch???n mua s???
                    l?????ng loa c??ng nh?? c??ng su???t c???a loa.
                </li>
                <li>- <i>S??? d???ng s???n ph???m th????ng hi???u n??o cho thi???t b??? ??m thanh gia ????nh: </i>C??c ki???n th???c v??? th????ng
                    hi???u thi???t b??? ??m thanh s??? gi??p cho b???n an t??m v?? c?? th??m kinh nghi???m trong vi???c l???a ch???n h??? th???ng ??m
                    thanh gia ????nh, c??ng nh?? cho b???n c?? ???????c s??? l???a ch???n s??ng su???t nh???t, tr??n ph???i mua nh???m h??ng k??m
                    ch???t l?????ng, h??ng gi???, h??ng nh??i.
                </li>
                <li>- <i>N??n t??m hi???u v??? c??c th??ng s??? k?? thu???t c???a h??? th???ng ??m thanh: </i>C??c th??ng s??? k?? thu???t c???a
                    thi???t b??? ??m thanh s??? cho b???n bi???t th??ng tin ch??nh x??c nh???t v??? s???n ph???m m?? b???n chu???n b??? mua, c??ng nh??
                    gi??p b???n c?? th??? t??? m??nh ??i???u ch???nh ???????c h??? th???ng ??m thanh gia ????nh m??nh.
                </li>
            </ul>
        </div>
        <div>
            <p>Nh???ng sai l???m m?? nhi???u ng?????i hay m???c ph???i khi mua c??c thi???t b??? h??? th???ng gi???i tr?? t???i gia</p>
            <ul>
                <li>- <i>Loa c??ng su???t g???p ????i s??? to g???p ????i: </i>V?? ????? l???n c???a ??m thanh c??n ph??? thu???c v??o ????? nh???y c???a
                    loa.
                </li>
                <li>- <i>C??c h??? th???ng ??m thanh ???? ???????c t??ch h???p s???n nh???ng t??nh n??ng an to??n: </i>Hi???n nay th?? h???u h???t
                    c??c h??? th???ng ??m thanh ???????c b??n tr??n th??? tr?????ng ?????u c?? th??? ph??t ra m???t m???c ??m c???c l???n, c?? th??? g??y ???nh
                    h?????ng ????ng k??? ?????n th??nh gi??c c???a ng?????i nghe.
                </li>
                <li>- <i>D??y loa c??ng ?????t c??ng t???t: </i>T??n hi???u ??m thanh ???? qua c??c ??o???n d??y nh??? n???i t??? b???ng m???ch ho???c
                    b??? x??? l?? ?????n c??c c???ng k???t n???i. ??i???u n??y l??m cho ch???t l?????ng ??m thanh kh??ng c?? s??? kh??c bi???t qu?? l???n
                    ngay c??? khi s??? d???ng d??y ?????t ti???n.
                </li>
                <li>- <i>Loa c??ng ?????t c??ng t???t: </i>C?? nh???ng d??n loa ?????t ti???n s??? d???ng kim c????ng l??m m??ng loa, nh??ng ch??a
                    h???n ???? c?? ??m s???c tr???m ???m v?? th??? hi???n ??m thanh nh???c c??? c??? ??i???n ch??n th???t nh?? m??ng loa g???.
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end main -->
