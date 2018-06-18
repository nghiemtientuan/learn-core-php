<?php
/**
 * Created by PhpStorm.
 * User: TuânNghiêm
 * Date: 6/17/2018
 * Time: 3:51 PM
 */

session_start();
if(isset($_SESSION['email'])&&isset($_SESSION['mk'])){
    $id_sp = $_GET['id_sp'];
    include_once 'ketnoi.php';
    $sql = "DELETE FROM sp WHERE id_sp='$id_sp'";
    $query = mysqli_query($conn, $sql);
    header('location: quantri.php?page_layout=danhsachsp');
}else{
    header("location: ../index.php");
}
?>