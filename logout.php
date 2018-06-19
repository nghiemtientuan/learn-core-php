<?php
if(isset($_POST['submit'])){
    header('location: dangxuat.php');
}
?>
<div id="main-login">
    <p>Bạn muốn rời khỏi TNT Studio. Xin chào và hẹn gặp lại!</p>
    <form method="post" accept-charset="utf-8">
        <div id="login-button" class="col-lg-12 col-md-12 col-sm-12 col-12">
            <input class="btn btn-primary" type="submit" name="submit" value="Đăng xuất">
        </div>
    </form>
</div>
