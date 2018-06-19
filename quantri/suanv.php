<?php
$id_thanhvien = $_GET['id_thanhvien'];

$sql_thanhvien = "SELECT * FROM thanh_vien WHERE id_thanhvien='$id_thanhvien'";
$query_thanhvien = mysqli_query($conn, $sql_thanhvien);
$row = mysqli_fetch_array($query_thanhvien);

if(isset($_POST['submit'])){
    $ten_thanhvien = $_POST['ten_thanhvien'];
    $mail = $_POST['mail'];
    $sdt = $_POST['sdt'];
    $dia_chi = $_POST['dia_chi'];
    $gioi_tinh = $_POST['gioi_tinh'];
    $vi_tri = $_POST['vi_tri'];

    if(isset($ten_thanhvien)&&isset($mail)&&isset($sdt)&&isset($dia_chi)&&isset($gioi_tinh)&&isset($than_thiet)){
        $sql = "UPDATE thanh_vien SET ho_ten='$ten_thanhvien',mail='$mail',sdt='$sdt',dia_chi'$dia_chi',gioi_tinh'$gioi_tinh',level='$vi_tri' WHERE id_thanhvien='$id_thanhvien'";
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
        <h1 class="page-header">Sửa thông tin nhân viên</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Sửa thông tin nhân viên</div>
            <div class="panel-body">

                <form method="post" enctype="multipart/form-data" role="form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên nhân viên</label>
                            <input type="text" class="form-control" name="ten_thanhvien" value="<?php if(isset($_POST['ten_thanhvien'])){echo $_POST['ten_thanhvien'];}else{ echo $row['ho_ten'];}?>"
                                   required="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="mail" value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];}else{ echo $row['mail'];}?>" required="">
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" class="form-control" name="sdt" value="<?php if(isset($_POST['sdt'])){echo $_POST['sdt'];}else{ echo $row['sdt'];}?>" required="">
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" name="dia_chi"
                                   value="<?php if(isset($_POST['dia_chi'])){echo $_POST['dia_chi'];}else{ echo $row['dia_chi'];}?>" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select name="gioi_tinh" class="form-control">
                                <option
                                    <?php
                                    if($row['gioi_tinh']=='Nam'){
                                        echo 'selected="selected"';
                                    }
                                    ?>
                                        value="">Nam</option>
                                <option
                                    <?php
                                    if($row['gioi_tinh']=='Nữ'){
                                        echo 'selected="selected"';
                                    }
                                    ?>
                                        value="">Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Vị trí</label>
                            <select name="vi_tri" class="form-control">
                                <?php
                                for($i=1;$i<=2;$i++){
                                    ?>
                                    <option
                                        <?php
                                        if($row['level']==$i){
                                            echo 'selected="selected"';
                                        }
                                        ?>
                                            value="<?php echo $i;?>"><?php if($i==1){echo 'Nhân viên';}else{echo 'Quản lý';}?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                    <button type="reset" class="btn btn-default" name="reset">Làm mới</button>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
