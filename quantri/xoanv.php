<?php
/**
 * Created by PhpStorm.
 * User: TuânNghiêm
 * Date: 6/17/2018
 * Time: 9:35 AM
 */

session_start();
if(isset($_SESSION['email']) && isset($_SESSION['mk'])){
    $id_thanhvien = $_GET['id_thanhvien'];
    include_once 'ketnoi.php';
    $sql = "DELETE FROM thanh_vien WHERE id_thanhvien='$id_thanhvien'";
    $query = mysqli_query($conn, $sql);
    header('location: quantri.php?page_layout=danhsachnv');
}else{
    header('location: ../index.php');
}
?>