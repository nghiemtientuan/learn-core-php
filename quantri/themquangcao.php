<?php
if(isset($_POST['submit'])){
    //check chọn ảnh
    if($_FILES['anh_quangcao']['name']==''){
        $error_anh_sp = '<span style="color: red;">(*)</span>';
    }else{
        $anh_quangcao = $_FILES['anh_quangcao']['name'];
        $tmp_name = $_FILES['anh_quangcao']['tmp_name'];
    }

    //check danh mục
    if($_POST['loai_quangcao']=="unselect"){
        $error_id_dmc = '<span style="color: red;">(*)</span>';
    }else{
        $loai_quangcao = $_POST['loai_quangcao'];
    }

    if(isset($anh_quangcao)&&isset($loai_quangcao)){
        move_uploaded_file($tmp_name,'../img/'.$loai_quangcao.'/'.$anh_quangcao);
        $sql = "INSERT INTO quang_cao(loai_quangcao,anh_quangcao) VALUES('$loai_quangcao','$anh_quangcao')";
        $query = mysqli_query($conn, $sql);
        header('location: quantri.php?page_layout=danhsachquangcao');
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
        <h1 class="page-header">Thêm ảnh quảng cáo</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm ảnh quảng cáo mới</div>
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" role="form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Loại ảnh quảng cáo</label>
                            <select name="loai_quangcao" class="form-control">
                                <option value="unselect" selected>Lựa chọn loại ảnh quảng cáo</option>
                                <option value="slider">slider</option>
                                <option value="banner">banner</option>
                                <option value="flyer">flyer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ảnh mô tả</label>
                            <input type="file" name="anh_quangcao">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                    <button type="reset" class="btn btn-default" name="reset">Làm mới</button>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
