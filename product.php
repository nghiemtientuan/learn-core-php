<?php
$id_sp = $_GET['id_sp'];
$sql_sp = "SELECT * FROM sp,sp_chinhhang WHERE sp.id_cty=sp_chinhhang.id_cty AND id_sp='$id_sp'";
$query_sp = mysqli_query($conn, $sql_sp);
$row_sp = mysqli_fetch_array($query_sp);
if(isset($_POST['them_cart'])){
    $_SESSION['sp_mua'] = $_SESSION['sp_mua'].','.$id_sp;
    header("location: index.php?page_layout=cart");
}
?>



<div id="main-product">
    <div id="product-top">
        <div id="product-img" class="col-lg-4 col-md-4 col-ms-4 col-4">
            <img src="img/products/iphone6-32gb.jpg" class="img-thumbnail">
        </div>
        <div id="product-name" class="col-lg-5 col-md-5 col-ms-5 col-5">
            <div>
                <h3><?php echo $row_sp['ten_sp'];?></h3>
                <p style="font-size: 12px;">Thương hiệu: <b style="color: #98DBF3;"><?php echo $row_sp['ten_cty'].' chính hãng';?></b></p>
            </div>
            <hr>
            <div>
                <s>9.190.000</s>
                <b style="font-size: 24px;color: #ff9600;"><?php echo $row_sp['gia'];?></b>
                <br>
                <p>-20%</p>
                <hr>
                <div>
                    <p>Số lượng: </p>
                </div>
                <form method="post" accept-charset="utf-8">
                    <input name="them_cart" type="submit" style="width: 100%; font-size:20px" class="btn btn-primary" value="Thêm vào giỏ hàng">
                </form>
                <br>
                <a href="#" title="">Hướng dẫn mua hàng</a>
            </div>
        </div>
        <div id="address" class="col-lg-3 col-md-3 col-ms-3 col-3">
            <div>
                <p>Tùy chọn giao hàng:</p>
                <div>
                    <img src="img/products/icon-map.png" alt="">
                    <input type="text" name="address" placeholder="Nhập địa chỉ">
                </div>
                <hr>
            </div>
            <div>
                <div>
                    <img class="img-thumbnail" src="img/products/icon-delivery.png" alt="">
                    <p>Giao hàng tiêu chuẩn</p>
                </div>
                <div>
                    <img class="img-thumbnail" src="img/products/icon-pay.png" alt="">
                    <p>Thanh toán khi nhận hàng</p>
                </div>
                <hr>
            </div>
            <div>
                <p>Đổi trả và bảo hành</p>
                <div>
                    <img class="img-thumbnail" src="img/Doi tra.png" alt="">
                    <p>7 ngày đổi trả dễ dàng</p>
                </div>
                <div>
                    <img class="img-thumbnail" src="img/products/icon-protect.png" alt="">
                    <p>Bằng hóa đơn mua hàng <?php echo $row_sp['bao_hanh'];?></p>
                </div>
                <hr>
            </div>
            <div>
                <p>Hàng chính hãng</p>
                <b><?php echo $row_sp['ten_cty'];?></b>
            </div>
        </div>
    </div>
    <div id="info-product">
        <div id="chi-tiet" class="col-lg-10 col-md-10 col-ms-10 col-12">
            <div id="thong-tin-chi-tiet">
                <h4>Mô tả sản phẩm <?php echo $row_sp['ten_sp'];?> - Hãng phân phối chính
                    thức</h4>
                <hr>
                <img src="img/products/<?php echo $row_sp['anh_sp'];?>">
                <p><?php echo $row_sp['chi_tiet'];?>
                </p>
                <hr>
                <table>
                    <thead>
                    <tr>
                        <th>Đặc tính sản phẩm</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Thương hiệu</td>
                        <td><?php echo $row_sp['ten_cty'];?></td>
                        <td style="border-left: 1px solid #ccc;">Mã sản phẩm</td>
                        <td><?php echo $row_sp['id_sp'];?></td>
                    </tr>
                    <tr>
                        <td>Trạng thái</td>
                        <td><?php echo $row_sp['trang_thai'];?></td>
                        <td style="border-left: 1px solid #ccc;">Tình trạng</td>
                        <td><?php echo $row_sp['tinh_trang'];?></td>
                    </tr>
                    <tr>
                        <td>Thời gian bảo hành</td>
                        <td><?php echo $row_sp['bao_hanh'];?></td>
                        <td style="border-left: 1px solid #ccc;">Khuyến mại</td>
                        <td><?php echo $row_sp['khuyen_mai'];?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="comments">
                <p>Đánh giá và nhận xét</p>
                <div>
                    <div class="comment-item">
                        <p>Nghiêm Tiến Tuân</p>
                        <p style="color: #ccc; font-size: 11px;">11 tháng trước</p>
                        <p>sjbdf sds sf sge sge sge svse vfs bử bse sg </p>
                        <hr>
                    </div>
                    <form method="get" accept-charset="utf-8">
                        <textarea name="danh-gia"></textarea>
                        <button class="btn btn-primary">Đánh giá</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="quang-cao" class="col-lg-2 col-md-2 col-ms-2">
            <p>Xem thêm</p>
            <div>
                <a href="#" title="">
                    <img src="img/products/iphone4.jpg" class="img-thumbnail">
                    <p>iphone 4s</p>
                    <p>2.5tr</p>
                </a>
            </div>
            <div>
                <a href="#" title="">
                    <img src="img/products/iphone4.jpg" class="img-thumbnail">
                    <p>iphone 4s</p>
                    <p>2.5tr</p>
                </a>
            </div>
            <div>
                <a href="#" title="">
                    <img src="img/products/iphone4.jpg" class="img-thumbnail">
                    <p>iphone 4s</p>
                    <p>2.5tr</p>
                </a>
            </div>
        </div>
    </div>
</div>
