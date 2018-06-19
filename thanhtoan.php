<?php
session_start();
if(!isset($_SESSION['sp_mua'])){
    header('location: index.php');
}
if(isset($_POST['submit'])){
    $mail = $_POST['email'];
    $_SESSION['email']=$mail;
}
?>


<div id="main-login">
    <p>Cảm ơn bạn đã ủng hộ TNT STUDIO</p>
    <form method="post" accept-charset="utf-8">
        <div id="mail" class="col-lg-7 col-md-7 col-sm-7 col-12">
            <p>Địa chỉ email của bạn*:</p>
            <input style="margin-bottom: 20px;" type="email" name="email" value="" placeholder="Vui lòng nhập email của bạn" required>
        </div>
        <div id="login-button" class="col-lg-5 col-md-5 col-sm-5 col-12">
            <input class="btn btn-primary" type="submit" name="submit" value="Đặt hàng">
            <p>Nếu bạn chưa có tài khoản <a href="index.php?page_layout=register">Đăng ký ngay!</a></p>
        </div>
    </form>
</div>
