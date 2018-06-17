<?php
$sql_cty = "SELECT * FROM sp_chinhhang";
$query_cty = mysqli_query($conn, $sql_cty);

$sql_dmc = "SELECT * FROM dmc_sp";
$query_dmc = mysqli_query($conn, $sql_dmc);

if(isset($_POST['submit'])){
    $ten_sp = $_POST['ten_sp'];
    $gia_sp = $_POST['gia_sp'];
    $bao_hanh = $_POST['bao_hanh'];
    $trang_thai = $_POST['trang_thai'];
    $tinh_trang = $_POST['tinh_trang'];
    $khuyen_mai = $_POST['khuyen_mai'];
    $chi_tiet_sp = $_POST['chi_tiet_sp'];

    //check chọn ảnh
    if($_FILES['anh_sp']['name']==''){
        $error_anh_sp = '<span style="color: red;">(*)</span>';
    }else{
        $anh_sp = $_FILES['anh_sp']['name'];
        $tmp_name = $_FILES['anh_sp']['tmp_name'];
    }

    //check cty
    if($_POST['id_cty']=="unselect"){
        $error_id_cty = '<span style="color: red;">(*)</span>';
    }else{
        $id_cty = $_POST['id_cty'];
    }

    //check danh mục
    if($_POST['id_dmc']=="unselect"){
        $error_id_dmc = '<span style="color: red;">(*)</span>';
    }else{
        $id_dmc = $_POST['id_dmc'];
    }

    if(isset($ten_sp)&&isset($gia_sp)&&isset($bao_hanh)&&isset($trang_thai)&&isset($tinh_trang)&&isset($khuyen_mai)&&isset($chi_tiet_sp)
        &&isset($anh_sp)&&isset($id_cty)&&isset($id_dmc)){
        move_uploaded_file($tmp_name,'../img/anh_sp/'.$anh_sp);
        $sql = "INSERT INTO sp(id_cty,id_dm,ten_sp,anh_sp,gia,bao_hanh,trang_thai,tinh_trang,khuyen_mai,chi_tiet) VALUES('$id_cty','$id_dmc','$ten_sp','$anh_sp','$gia_sp',
'$bao_hanh','$trang_thai','$tinh_trang','$khuyen_mai','$chi_tiet_sp')";
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
        <h1 class="page-header">Thêm sản phẩm mới</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm sản phẩm mới</div>
            <div class="panel-body">

                <form method="post" enctype="multipart/form-data" role="form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control" name="ten_sp" required="">
                        </div>
                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input type="text" class="form-control" name="gia_sp" required="">
                        </div>

                        <div class="form-group">
                            <label>Bảo hành</label>
                            <input type="text" class="form-control" name="bao_hanh" value="12 Tháng" required="">
                        </div>

                        <div class="form-group">
                            <label>Đi kèm</label>
                            <input type="text" class="form-control" name="phu_kien"
                                   value="Hộp, sách, sạc, cáp, tai nghe" required="">
                        </div>
                        <div class="form-group">
                            <label>Tình trạng</label>
                            <input type="text" class="form-control" name="tinh_trang" value="Máy Mới 100%" required="">
                        </div>

                        <div class="form-group">
                            <label>Ảnh mô tả</label>
                            <input type="file" name="anh_sp">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Khuyến mãi</label>
                            <input type="text" class="form-control" name="khuyen_mai" value="Dán Màn hình 3 lớp"
                                   required="">
                        </div>
                        <div class="form-group">
                            <label>Còn hàng</label>
                            <input type="text" class="form-control" name="trang_thai" value="Còn hàng" required="">
                        </div>
                        <div class="form-group">
                            <label>Nhà cung cấp (Công ty)</label>
                            <select name="id_cty" class="form-control">
                                <option value="unselect" selected>Lựa chọn nhà cung cấp</option>
                                <?php
                                while ($row_cty=mysqli_fetch_array($query_cty)){
                                ?>
                                <option value="<?php echo $row_cty['id_cty'];?>"><?php echo $row_cty['ten_cty'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Danh mục con</label>
                            <select name="id_dmc" class="form-control">
                                <option value="unselect" selected>Lựa chọn danh mục</option>
                                <?php
                                while ($row_dmc=mysqli_fetch_array($query_dmc)){
                                    ?>
                                    <option value="<?php echo $row_dmc['id_dmc'];?>"><?php echo $row_dmc['ten_dmc'];?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Thông tin chi tiết sản phẩm</label>
                            <textarea class="form-control" rows="3" name="chi_tiet_sp"></textarea>
                            <script type="text/javascript">
                                CKEDITOR.replace( 'chi_tiet_sp',{
                                    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
                                    filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
                                    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                    filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
                                });
                            </script>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                    <button type="reset" class="btn btn-default" name="reset">Làm mới</button>
                </form>

            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
