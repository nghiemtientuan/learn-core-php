<?php
//phân trang
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$rowsPerPage = 10;
$perRow = $page*$rowsPerPage - $rowsPerPage;
$sql_page = "SELECT * FROM bl_sp ORDER BY id_bl DESC LIMIT $perRow,$rowsPerPage";
$query_page = mysqli_query($conn, $sql_page);
$totalRows = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM bl_sp"));//tổng số bản ghi
$totalPages = ceil($totalRows/$rowsPerPage);//Làm tròn số trang lên


$listPage="";
for($i=1;$i<=$totalPages;$i++){
    if($page==$i){
        $listPage.='<li class="active"><a href="quantri.php?page_layout=danhsachbinhluan&page='.$i.'">'.$i.'</a></li>';
    }else{
        $listPage.='<li><a href="quantri.php?page_layout=danhsachbinhluan&page='.$i.'">'.$i.'</a></li>';
    }
}
?>
<script>
    function xoaBinhLuan(){
        var conf = confirm("Bạn có chắc chắn muốn xóa bình luận này hay không?");
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
        <h1 class="page-header">Quản lý bình luận</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body" style="position: relative;">
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true"
                       data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                    <tr>
                        <th data-sortable="true">ID_BL</th>
                        <th data-sortable="true">Ngày bình luận</th>
                        <th data-sortable="true">ID_sp</th>
                        <th data-sortable="true">Tên sản phẩm</th>
                        <th data-sortable="true">ID_thanhvien</th>
                        <th data-sortable="true">Tên thành viên</th>
                        <th data-sortable="true">Nội dung</th>
                        <th data-sortable="true">Xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row=mysqli_fetch_array($query_page)){
                        $id_sp = $row['id_sp'];
                        $sql_sp = "SELECT * FROM sp WHERE id_sp='$id_sp'";
                        $query_sp = mysqli_query($conn, $sql_sp);
                        $row_sp = mysqli_fetch_array($query_sp);

                        $id_thanhvien = $row['id_thanhvien'];
                        $sql_thanhvien = "SELECT * FROM thanh_vien WHERE id_thanhvien='$id_thanhvien'";
                        $query_thanhvien = mysqli_query($conn, $sql_thanhvien);
                        $row_thanhvien = mysqli_fetch_array($query_thanhvien);
                        ?>
                        <tr style="height: 300px;">
                            <td data-checkbox="true"><?php echo $row['id_bl'];?></td>
                            <td data-checkbox="true"><?php echo $row['time'];?></td>
                            <td data-checkbox="true"><?php echo $row['id_sp'];?></td>
                            <td data-checkbox="true"><?php echo $row_sp['ten_sp'];?></td>
                            <td data-sortable="true"><?php echo $row['id_thanhvien'];?></td>
                            <td data-checkbox="true"><?php echo $row_thanhvien['ho_ten'];?></td>
                            <td data-sortable="true"><?php echo $row['binh_luan'];?></td>
                            <td>
                                <a onclick="return xoaBinhLuan();" href="xoabinhluan.php?id_bl=<?php echo $row['id_bl'];?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use
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
