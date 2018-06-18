<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $mk = $_POST['mk'];
    if(isset($email)&&isset($mk)){
        $sql = "SELECT * FROM thanh_vien WHERE mail='$email' AND mat_khau='$mk'";
        $query = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($query);
        if($rows == 0) {
            echo '<center class="alert alert-danger">Tài khoản không tồn tại hoặc bạn không có quyền truy cập</center>';
        }else {
            $rows = mysqli_fetch_array($query);
            $_SESSION['ten'] = $rows['ho_ten'];
            $_SESSION['email'] = $email;
            $_SESSION['mk'] = $mk;
            if($rows['level']==0){
                header('location: index.php');
            }else if($rows['level']==1||$rows['level']==2){
                header('location: quantri/quantri.php');
            }
        }
    }
}
?>


<div id="main-login">
    <p>Chào mừng đến với TNT Studio. Đăng nhập ngay!</p>
    <form method="post" accept-charset="utf-8">
        <div id="mail" class="col-lg-7 col-md-7 col-sm-7 col-12">
            <p>Địa chỉ email*:</p>
            <input style="margin-bottom: 20px;" type="email" name="email" value="" placeholder="Vui lòng nhập email của bạn" required>
            <p>Mật khẩu*:</p>
            <input type="password" name="mk" value="" placeholder="Vui lòng nhập mật khẩu của bạn" required>
            <a href="index.php?page_layout=forget" title="">Quên mật khẩu?</a>
        </div>
        <div id="login-button" class="col-lg-5 col-md-5 col-sm-5 col-12">
            <input class="btn btn-primary" type="submit" name="submit" value="Đăng nhập">
            <p>Nếu bạn chưa có tài khoản <a href="index.php?page_layout=register">Đăng ký ngay!</a></p>
        </div>
    </form>
</div>
