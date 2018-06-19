<?php
/**
 * Created by PhpStorm.
 * User: TuânNghiêm
 * Date: 6/17/2018
 * Time: 9:35 AM
 */

session_start();
if(isset($_SESSION['email']) && isset($_SESSION['mk'])){
    $id_bl = $_GET['id_bl'];
    include_once 'ketnoi.php';
    $sql = "DELETE FROM bl_sp WHERE id_bl='$id_bl'";
    $query = mysqli_query($conn, $sql);
    header('location: quantri.php?page_layout=danhsachbinhluan');
}else{
    header('location: ../index.php');
}
?>