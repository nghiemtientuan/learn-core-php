<?php
//phân trang
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$rowsPerPage = 10;
$perRow = $page*$rowsPerPage - $rowsPerPage;
$sql_page = "SELECT * FROM  thanh_vien WHERE level=0 ORDER BY id_thanhvien DESC LIMIT $perRow,$rowsPerPage";
$query_page = mysqli_query($conn, $sql_page);
$totalRows = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM  thanh_vien WHERE level=0"));//tổng số bản ghi
$totalPages = ceil($totalRows/$rowsPerPage);//Làm tròn số trang lên


$listPage="";
for($i=1;$i<=$totalPages;$i++){
    if($page==$i){
        $listPage.='<li class="active"><a href="quantri.php?page_layout=danhsachtv&page='.$i.'">'.$i.'</a></li>';
    }else{
        $listPage.='<li><a href="quantri.php?page_layout=danhsachtv&page='.$i.'">'.$i.'</a></li>';
    }
}
?>
<script>
    function xoaThanhVien(){
        var conf = confirm("Bạn có chắc chắn muốn xóa thành viên này hay không?");
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
        <h1 class="page-header">Quản lý thành viên</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body" style="position: relative;">
                <a href="quantri.php?page_layout=themtv" class="btn btn-primary"
                   style="margin: 10px 0 20px 0; position: absolute;">Thêm thành viên mới</a>
                <table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true"
                       data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                    <tr>
                        <th data-sortable="true">ID</th>
                        <th data-sortable="true">Tên thành viên</th>
                        <th data-sortable="true">email</th>
                        <th data-sortable="true">SĐT</th>
                        <th data-sortable="true">Giới tính</th>
                        <th data-sortable="true">Mức thân thiết</th>
                        <th data-sortable="true">Địa chỉ</th>
                        <th data-sortable="true">Sửa</th>
                        <th data-sortable="true">Xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row=mysqli_fetch_array($query_page)){
                    ?>
                    <tr style="height: 300px;">
                        <td data-checkbox="true"><?php echo $row['id_thanhvien'];?></td>
                        <td data-checkbox="true"><a href="quantri.php?page_layout=suatv&id_thanhvien=<?php echo $row['id_thanhvien'];?>"><?php echo $row['ho_ten'];?></a></td>
                        <td data-checkbox="true"><?php echo $row['mail'];?></td>
                        <td data-sortable="true"><?php echo $row['sdt'];?></td>
                        <td data-sortable="true"><?php echo $row['gioi_tinh'];?></td>
                        <td data-sortable="true"><?php echo $row['than_thiet'];?></td>
                        <td data-sortable="true"><?php echo $row['dia_chi'];?></td>
                        <td>
                            <a href="quantri.php?page_layout=suatv&id_thanhvien=<?php $row['id_thanhvien'];?>"><span><svg class="glyph stroked brush"
                                                                               style="width: 20px;height: 20px;"><use
                                                xlink:href="#stroked-brush"/></svg></span></a>
                        </td>

                        <td>
                            <a onclick="return xoaThanhVien();" href="xoatv.php?id_thanhvien=<?php echo $row['id_thanhvien'];?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use
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
