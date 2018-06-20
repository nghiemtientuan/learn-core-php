<?php
$id_dm = $_GET['id_dm'];
if(isset($_POST['submit'])){
    $ten_dmc = $_POST['ten_dmc'];
    if(isset($ten_dmc)){
        $sql = "INSERT INTO dmc_sp(ten_dmc,id_dm) VALUES ('$ten_dmc','$id_dm')";
        $query = mysqli_query($conn, $sql);
        header("location: quantri.php?page_layout=danhsachdmc&id_dm='$id_dm'");
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
        <h1 class="page-header">Thêm mới danh mục con</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm mới danh mục con</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">
                        <div class="form-group">
                            <label>Tên danh mục con</label>
                            <input class="form-control" type="text" required="" name="ten_dmc">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
