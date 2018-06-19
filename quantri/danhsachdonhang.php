<?php
//phân trang
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$rowsPerPage = 10;
$perRow = $page*$rowsPerPage - $rowsPerPage;
$sql_page = "SELECT * FROM don_hang ORDER BY id_donhang DESC LIMIT $perRow,$rowsPerPage";
$query_page = mysqli_query($conn, $sql_page);
$totalRows = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM don_hang "));//tổng số bản ghi
$totalPages = ceil($totalRows/$rowsPerPage);//Làm tròn số trang lên


$listPage="";
for($i=1;$i<=$totalPages;$i++){
    if($page==$i){
        $listPage.='<li class="active"><a href="quantri.php?page_layout=danhsachnv&page='.$i.'">'.$i.'</a></li>';
    }else{
        $listPage.='<li><a href="quantri.php?page_layout=danhsachnv&page='.$i.'">'.$i.'</a></li>';
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
        <h1 class="page-header">Quản lý đơn hàng</h1>
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
                        <th data-sortable="true">ID Đơn hàng</th>
                        <th data-sortable="true">Ngày bán</th>
                        <th data-sortable="true">Tên khách</th>
                        <th data-sortable="true">Mail khách</th>
                        <th data-sortable="true">SĐT</th>
                        <th data-sortable="true">Tên sp</th>
                        <th data-sortable="true">Giá sp</th>
                        <th data-sortable="true">Số lượng</th>
                        <th data-sortable="true">Địa chỉ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row_donhang=mysqli_fetch_array($query_page)){
                        $id_thanhvien = $row_donhang['id_thanhvien'];
                        $sql_thanhvien = "SELECT * FROM thanh_vien WHERE id_thanhvien='$id_thanhvien'";
                        $query_thanhvien = mysqli_query($conn,$sql_thanhvien);
                        $row_thanhvien = mysqli_fetch_array($query_thanhvien);
                    ?>
                        <tr style="height: 300px;">
                            <td data-checkbox="true"><?php echo $row_donhang['id_donhang'];?></td>
                            <td data-checkbox="true"><?php echo $row_donhang['ngay'];?></td>
                            <td data-checkbox="true">
                                <?php
                                if($row_donhang['id_thanhvien']!=0){
                                    echo $row_thanhvien['ho_ten'];
                                }else{
                                    $row_donhang['ho_ten'];
                                }
                                ?>
                            </td>
                            <td data-sortable="true">
                                <?php
                                if($row_donhang['id_thanhvien']!=0){
                                    echo $row_thanhvien['mail'];
                                }else{
                                    $row_donhang['mail'];
                                }
                                ?>
                            </td>
                            <td data-sortable="true">
                                <?php
                                if($row_donhang['id_thanhvien']!=0){
                                    echo $row_thanhvien['sdt'];
                                }else{
                                    $row_donhang['sdt'];
                                }
                                ?>
                            </td>
                            <td data-sortable="true"><?php echo $row_donhang['ten_sp'];?></td>
                            <td data-sortable="true"><?php echo $row_donhang['gia'];?></td>
                            <td data-sortable="true">1</td>
                            <td data-sortable="true">
                                <?php
                                if($row_donhang['id_thanhvien']!=0){
                                    echo $row_thanhvien['dia_chi'];
                                }else{
                                    $row_donhang['dia_chi'];
                                }
                                ?>
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
