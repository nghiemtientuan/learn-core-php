<?php
if(isset($_POST['submit'])){
    $ten_thanhvien = $_POST['ten_thanhvien'];
    $mail = $_POST['mail'];
    $sdt = $_POST['sdt'];
    $dia_chi = $_POST['dia_chi'];
    $gioi_tinh = $_POST['gioi_tinh'];
    $than_thiet = $_POST['than_thiet'];
    if(isset($ten_dm)){
        $sql = "INSERT INTO thanh_vien(ho_ten,mail,sdt,dia_chi,gioi_tinh,than_thiet) VALUES ('$ten_thanhvien','$mail','$sdt','$dia_chi','$gioi_tinh','$than_thiet')";
        $query = mysqli_query($conn, $sql);
        header('location: quantri.php?page_layout=danhsachtv');
    }
}
?>

<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <svg class="glyph stroked home">
                    <use xlink:href="#stroked-home"></use>
                </svg>
            </a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thêm mới thành viên</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm mới thành viên</div>
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" role="form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên thành viên</label>
                            <input type="text" class="form-control" name="ten_thanhvien" value="<?php if(isset($_POST['ten_thanhvien'])){echo $_POST['ten_thanhvien'];}?>"
                                   required="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="mail" value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];}?>" required="">
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" class="form-control" name="sdt" value="<?php if(isset($_POST['sdt'])){echo $_POST['sdt'];}?>" required="">
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" name="dia_chi"
                                   value="<?php if(isset($_POST['dia_chi'])){echo $_POST['dia_chi'];}?>" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select name="gioi_tinh" class="form-control">
                                <option value="">Nam</option>
                                <option value="">Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mức độ thân thiết</label>
                            <select name="than_thiet" class="form-control">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                    <button type="reset" class="btn btn-default" name="reset">Làm mới</button>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
