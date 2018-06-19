<?php
$id_dm = $_GET['id_dm'];
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$rowsPerPage = 10;
$perRow = $page*$rowsPerPage - $rowsPerPage;
$sql_dmc = "SELECT * FROM  dmc_sp WHERE id_dm='$id_dm' ORDER BY id_dmc ASC LIMIT $perRow,$rowsPerPage";
$query_dmc = mysqli_query($conn, $sql_dmc);
$totalRows = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM  dmc_sp WHERE id_dm='$id_dm'"));//tổng số bản ghi
$totalPages = ceil($totalRows/$rowsPerPage);//Làm tròn số trang lên


$listPage="";
for($i=1;$i<=$totalPages;$i++){
    if($page==$i){
        $listPage.='<li class="active"><a href="quantri.php?page_layout=danhsachdmc&id_dm='.$id_dm.'&page='.$i.'">'.$i.'</a></li>';
    }else{
        $listPage.='<li><a href="quantri.php?page_layout=danhsachdmc&id_dm='.$id_dm.'&page='.$i.'">'.$i.'</a></li>';
    }
}
?>
<script>
    function xoaDanhMucCon(){
        var conf = confirm("Bạn có chắc chắn muốn xóa danh mục con này hay không?");
        return conf;
    }
</script>
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
        <h1 class="page-header">Quản lý danh mục con</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body" style="position: relative;">
                <a href="quantri.php?page_layout=themdmc&id_dm=<?php echo $id_dm;?>" class="btn btn-primary"
                   style="margin: 10px 0 20px 0; position: absolute;">Thêm danh mục
                    mới</a>
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true"
                       data-search="true" data-select-item-name="toolbar1" data-sort-name="name"
                       data-sort-order="desc">
                    <thead>
                    <tr>
                        <th data-sortable="true">ID</th>
                        <th data-sortable="true">Tên danh mục</th>
                        <th data-sortable="true">Sửa</th>
                        <th data-sortable="true">Xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row_dmc = mysqli_fetch_array($query_dmc)) {
                    ?>
                        <tr>
                            <td data-checkbox="true"><?php echo $row_dmc['id_dmc']; ?></td>
                            <td data-checkbox="true"><a
                                        href="quantri.php?page_layout=suadmc&id_dmc=<?php echo $row_dmc['id_dmc'];?>&id_dm=<?php echo $id_dm;?>"><?php echo $row_dmc['ten_dmc']; ?></a></td>
                            <td>
                                <a href="quantri.php?page_layout=suadmc&id_dmc=<?php echo $row_dmc['id_dmc'];?>&id_dm=<?php echo $id_dm;?>"><span><svg class="glyph stroked brush"
                                                                                   style="width: 20px;height: 20px;"><use
                                                    xlink:href="#stroked-brush"/></svg></span></a>
                            </td>

                            <td>
                                <a onclick="return xoaDanhMucCon();" href="xoadmc.php?id_dmc=<?php echo $row_dmc['id_dmc'];?>&id_dm=<?php echo $id_dm;?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use
                                                    xlink:href="#stroked-cancel"/></svg></span></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>
                <ul class="pagination" style="float: right;">
                    <?php
                    echo $listPage;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div><!--/.row-->

