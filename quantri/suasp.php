<?php
$id_sp = $_GET['id_sp'];

$sql_cty = "SELECT * FROM sp_chinhhang";
$query_cty = mysqli_query($conn, $sql_cty);

$sql_dmc = "SELECT * FROM dmc_sp";
$query_dmc = mysqli_query($conn, $sql_dmc);

$sql = "SELECT * FROM sp WHERE id_sp=$id_sp";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

if(isset($_POST['submit'])){
    $ten_sp = $_POST['ten_sp'];
    $gia_sp = $_POST['gia_sp'];
    $bao_hanh = $_POST['bao_hanh'];
    $trang_thai = $_POST['trang_thai'];
    $tinh_trang = $_POST['tinh_trang'];
    $khuyen_mai = $_POST['khuyen_mai'];
    $chi_tiet_sp = $_POST['chi_tiet_sp'];

    //check ảnh thay đổi
    if($_FILES['anh_sp']['name']==""){
        $anh_sp = $_POST['anh_sp'];
    }else{
        $anh_sp = $_FILES['anh_sp']['name'];
        $tmp_name = $_FILES['anh_sp']['tmp_name'];
    }

    $id_dmc = $_POST['id_dmc'];
    $id_cty = $_POST['id_cty'];

    if(isset($ten_sp)&&isset($gia_sp)&&isset($bao_hanh)&&isset($trang_thai)&&isset($tinh_trang)&&isset($khuyen_mai)&&isset($chi_tiet_sp)
        &&isset($id_cty)){
        move_uploaded_file($tmp_name,'../img/anh_sp/'.$anh_sp);
        $sql = "UPDATE sp SET id_cty='$id_cty',id_dm='$id_dmc',ten_sp='$ten_sp',anh_sp='$anh_sp',gia='$gia_sp',bao_hanh='$bao_hanh',trang_thai='$trang_thai',
tinh_trang='$tinh_trang',khuyen_mai='$khuyen_mai',chi_tiet='$chi_tiet_sp' WHERE id_sp=$id_sp";
        $query = mysqli_query($conn, $sql);
        header('location: quantri.php?page_layout=danhsachsp');
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
        <h1 class="page-header">Sửa thông tin sản phẩm</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Sửa thông tin sản phẩm</div>
            <div class="panel-body">

                <form method="post" enctype="multipart/form-data" role="form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control" name="ten_sp" value="<?php if(isset($_POST['ten_sp'])){echo $_POST['ten_sp'];}else{ echo $row['ten_sp'];}?>"
                                   required="">
                        </div>
                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input type="text" class="form-control" name="gia_sp" value="<?php if(isset($_POST['gia_sp'])){echo $_POST['gia_sp'];}else{ echo $row['gia'];}?>" required="">
                        </div>

                        <div class="form-group">
                            <label>Bảo hành</label>
                            <input type="text" class="form-control" name="bao_hanh" value="<?php if(isset($_POST['bao_hanh'])){echo $_POST['bao_hanh'];}else{ echo $row['bao_hanh'];}?>" required="">
                        </div>

                        <div class="form-group">
                            <label>Khuyến mại</label>
                            <input type="text" class="form-control" name="khuyen_mai"
                                   value="<?php if(isset($_POST['khuyen_mai'])){echo $_POST['khuyen_mai'];}else{ echo $row['khuyen_mai'];}?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Tình trạng</label>
                            <input type="text" class="form-control" name="tinh_trang" value="<?php if(isset($_POST['tinh_trang'])){echo $_POST['tinh_trang'];}else{ echo $row['tinh_trang'];}?>" required="">
                        </div>

                        <div class="form-group">
                            <label>Ảnh mô tả</label>
                            <input type="file" name="anh_sp"><input type="hidden" name="anh_sp" value="<?php echo $row['anh_sp'];?>">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Trạng thái</label>
                            <input type="text" class="form-control" name="trang_thai" value="<?php if(isset($_POST['trang_thai'])){echo $_POST['trang_thai'];}else{ echo $row['trang_thai'];}?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Nhà cung cấp (Công ty)</label>
                            <select name="id_cty" class="form-control">
                                <?php
                                while ($row_cty=mysqli_fetch_array($query_cty)){
                                ?>
                                <option
                                        <?php
                                        if($row['id_cty']==$row_cty['id_cty']){
                                            echo 'selected="selected"';
                                        }
                                        ?>
                                        value="<?php echo $row_cty['id_cty'];?>"><?php echo $row_cty['ten_cty'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Danh mục sản phẩm</label>
                            <select name="id_dmc" class="form-control">
                                <?php
                                while($row_dmc=mysqli_fetch_array($query_dmc)){
                                ?>
                                <option
                                        <?php
                                        if($row['id_dm']==$row_dmc['id_dmc']){
                                            echo 'selected="selected"';
                                        }
                                        ?>
                                        value="<?php echo $row_dmc['id_dmc'];?>"><?php echo $row_dmc['ten_dmc'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Thông tin chi tiết sản phẩm</label>
                            <textarea class="form-control" rows="3" name="chi_tiet_sp"><?php if(isset($_POST['chi_tiet_sp'])){echo $_POST['chi_tiet_sp'];}else{echo $row['chi_tiet'];}?></textarea>
                        </div>


                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                    <button type="reset" class="btn btn-default" name="reset">Làm mới</button>


                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
