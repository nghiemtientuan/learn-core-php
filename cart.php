<?php
$mua_hang = $_SESSION['sp_mua'];
$cac_san_pham = explode(",",$mua_hang);
$tong_tien=0;

if(isset($_POST['thanh_toan'])){
    if(isset($_SESSION['email'])){
        header("location: quantri/sendMailThanhToan.php");
    }
    header("location: index.php?page_layout=thanhtoan");
}
?>


<main id="main-cart">
    <div id="product-list" class="col-lg-8 col-md-8 col-ms-8 col-12">
        <p>Giỏ hàng của bạn (<b style="text-transform: none; font-size: 14px;"><?php echo sizeof($cac_san_pham)-1;?> sản phẩm</b>)</p>
        <hr>
        <?php
        foreach ($cac_san_pham as $key => $value){
            if($value!=null){
                $sql_sp = "SELECT * FROM sp,sp_chinhhang WHERE sp.id_cty=sp_chinhhang.id_cty AND id_sp='$value'";
                $query_sp = mysqli_query($conn, $sql_sp);
                $row_sp = mysqli_fetch_array($query_sp);
                $tong_tien = $tong_tien + $row_sp['gia'];
        ?>
        <div class="product">
            <table>
                <tbody>
                <tr>
                    <td style="width: 10%;"><img class="img-thumbnail" src="img/anh_sp/<?php echo $row_sp['anh_sp'];?>" alt=""></td>
                    <td style="width: 40%;"><p><?php echo $row_sp['ten_sp'];?></p></td>
                    <td style="width: 25%;"><p style="color: #ff9600;font-weight: bold;margin: 0px;font-size: 20px;"><?php echo $row_sp['gia'];?></p><s style="font-size: 13px;">3.600.000</s></td>
                    <td style="width: 20%;"><p style="font-size: 12px;">Số lượng: 1</p></td>
                </tr>
                </tbody>
            </table>
            <form method="post" action="xoasp.php?id_sp=<?php echo $value;?>">
                <input type="submit" name="xoa_sp" class="btn btn-primary" value="Xóa">
            </form>
            <hr>
        </div>
        <?php
        }}
        ?>
    </div>
    <div id="pay" class="col-lg-4 col-md-4 col-ms-4 col-12">
        <div>
            <p>Địa điểm:</p>
            <img class="img-thumbnail" src="img/products/icon-map.png" alt="">
            <input style="width: 90%; border: none;" type="text" name="" value="" placeholder="Nhập địa chỉ" required>
        </div>
        <hr>
        <div>
            <table>
                <thead>
                <tr>
                    <th>Thông tin đơn hàng</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="width: 65%;">Tạm tính (1 sản phẩm)</td>
                    <td style="text-align: right;width: 35%;"><?php echo $tong_tien;?> VNĐ</td>
                </tr>
                <tr>
                    <td style="width: 65%;">Phí giao hàng</td>
                    <td style="text-align: right;width: 35%;">40.000 VNĐ<?php $tong_tien=$tong_tien+40000;?></td>
                </tr>
                <tr>
                    <td style="width: 65%;">Tổng cộng</td>
                    <td style="text-align: right;width: 35%;color: #ff9600;font-weight: bold;"><?php echo $tong_tien;?> VNĐ</td>
                </tr>
                </tbody>
            </table>
            <p style="font-size: 12px;">(Đã bao gồm thuế VAT)</p>
        </div>
        <div>
            <form method="post"">
                <input type="submit" name="thanh_toan" style="width: 100%;margin-bottom: 20px;" class="btn btn-primary" value="Tiến hành đặt hàng">
            </form>
            <p>Nhận hàng rồi thanh toán</p>
        </div>
    </div>
</main>
