<?php
include_once 'quantri/ketnoi.php';
if(!isset($_SESSION['mail_dky'])&&!isset($_SESSION['mk_dky'])&&!isset($_SESSION['day'])&&!isset($_SESSION['month'])
    &&!isset($_SESSION['year'])&&!isset($_SESSION['genner'])&&!isset($_SESSION['ho_ten'])){
    header('location: ../index.php');
}
if(isset($_POST['submit'])){
    $xacnhan = $_POST['xacnhan'];
    if($xacnhan == 95623){
        $mail = $_SESSION['mail_dky'];
        $mat_khau = $_SESSION['mk_dky'];
        $gioi_tinh = $_SESSION['genner'];
        $ho_ten = $_SESSION['ho_ten'];
        $sdt = $_SESSION['sdt'];
        $dia_chi = $_SESSION['dia_chi'];

        $sql = "INSERT INTO thanh_vien(ho_ten,mail,sdt,dia_chi,gioi_tinh,mat_khau) VALUES ('$ho_ten','$mail','$sdt','$dia_chi','$gioi_tinh','$mat_khau')";
        $query = mysqli_query($conn, $sql);
    }
}
session_destroy();
header('location: index.php');
?>
<div id="main-register">
    <p>Xác nhận tạo tài khoản thành viên TNT Studioer</p>
    <form method="post" accept-charset="utf-8">
        <div id="col-1" class="col-lg-6 col-md-6 col-ms-6 col-12">
            <p>Nhập mã xác nhận trong email của bạn*:</p>
            <input type="text" name="xacnhan" value="" placeholder="" required>
        </div>
        <div id="col-2" class="col-lg-6 col-md-6 col-ms-6 col-12">
            <input class="btn btn-primary" type="submit" name="submit" value="Đăng kí">
        </div>
    </form>
</div>
