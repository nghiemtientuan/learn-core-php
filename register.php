<div id="main-register">
    <p>Tạo tài khoản thành viên TNT Studioer</p>
    <form method="post" accept-charset="utf-8">
        <div id="col-1" class="col-lg-6 col-md-6 col-ms-6 col-12">
            <p>Địa chỉ email*:</p>
            <input type="email" name="" value="" placeholder="">
            <p>Mật khẩu*:</p>
            <input type="password" name="" value="" placeholder="">
            <p>Nhập lại mật khẩu*:</p>
            <input type="password" name="" value="" placeholder="">
            <p>Ngày sinh*:</p>
            <select name="day">
                <option value="ngay">Ngày</option>
                <?php
                for($i=1;$i<=31;$i++){
                ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
                }
                ?>
            </select>
            <select name="month">
                <option value="thang">Tháng</option>
                <?php
                for($i=1;$i<=12;$i++){
                 ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
                }
                ?>
            </select>
            <select name="year">
                <option value="">Năm</option>
                <?php
                for($i=1990;$i<=date(Y);$i++){
                ?>
                 <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
                }
                ?>
            </select>
            <select name="genner">
                <option value="">Giới tính</option>
                <option value="">Nam</option>
                <option value="">Nữ</option>
            </select>
        </div>
        <div id="col-2" class="col-lg-6 col-md-6 col-ms-6 col-12">
            <p>Họ tên*:</p>
            <input type="text" name="ho-ten" value="" placeholder="">
            <input style="width: 5%;" type="checkbox" name="yes">Tôi đồng ý với các điều khoản của TNT Studio</br>
            <input style="width: 5%;" type="checkbox" name="info">Tôi muốn nhận các thông tin từ TNT Studio
            <input class="btn btn-primary" type="submit" name="submit" value="Đăng kí">
            <p>Bạn đã là thành viên? <a href="index.php?page_layout=login" title="">Đăng nhập</a> tại đây</p>
        </div>
    </form>
</div>
