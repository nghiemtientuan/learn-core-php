<?php
/**
 * Created by PhpStorm.
 * User: TuânNghiêm
 * Date: 6/17/2018
 * Time: 9:35 AM
 */

session_start();
if(isset($_SESSION['email']) && isset($_SESSION['mk'])){
    $id_quangcao= $_GET['id_quangcao'];
    include_once 'ketnoi.php';
    $sql = "DELETE FROM quang_cao WHERE id_quangcao='$id_quangcao'";
    $query = mysqli_query($conn, $sql);
    header('location: quantri.php?page_layout=danhsachquangcao');
}else{
    header('location: ../index.php');
}
?>