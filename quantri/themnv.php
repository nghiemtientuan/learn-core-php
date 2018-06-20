<?php
if($_SESSION['level']==1){
    header('locaton: quantri.php');
}
if(isset($_POST['submit'])){
    $ten_nhanvien = $_POST['ten_nhanvien'];
    $mail = $_POST['mail'];
    $sdt = $_POST['sdt'];
    $dia_chi = $_POST['dia_chi'];
    $gioi_tinh = $_POST['gioi_tinh'];
    $level = $_POST['level'];
    if(isset($ten_dm)){
        $sql = "INSERT INTO thanh_vien(ho_ten,mail,sdt,dia_chi,gioi_tinh,level) VALUES ('$ten_nhanvien','$mail','$sdt','$dia_chi','$gioi_tinh','$level')";
        $query = mysqli_query($conn, $sql);
        header('location: quantri.php?page_layout=danhsachnv');
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
        <h1 class="page-header">Thêm mới nhân viên</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm mới nhân viên</div>
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" role="form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên nhân viên</label>
                            <input type="text" class="form-control" name="ten_nhanvien" value="<?php if(isset($_POST['ten_nhanvien'])){echo $_POST['ten_nhanvien'];}?>"
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
                            <label>Vị trí làm việc</label>
                            <select name="level" class="form-control">
                                <option value="1">Nhân viên</option>
                                <option value="2">Quản lý</option>
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
