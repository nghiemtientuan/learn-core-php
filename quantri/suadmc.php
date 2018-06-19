<?php
$id_dm = $_GET['id_dm'];
$id_dmc = $_GET['id_dmc'];
$sql = "SELECT * FROM dmc_sp WHERE id_dmc=$id_dmc";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
if(isset($_POST['submit'])){
    $ten_dmc = $_POST['ten_dmc'];
    if(isset($ten_dmc)){
        $sql = "UPDATE dmc_sp SET ten_dmc='$ten_dmc' WHERE id_dmc=$id_dmc";
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
        <h1 class="page-header">Sửa danh mục con</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Sửa danh mục con</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input class="form-control" type="text" name="ten_dmc" value="<?php echo $row['ten_dmc'];?>" required="">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Sửa</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
