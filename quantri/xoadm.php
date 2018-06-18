<?php
/**
 * Created by PhpStorm.
 * User: TuânNghiêm
 * Date: 6/17/2018
 * Time: 9:35 AM
 */

session_start();
if(isset($_SESSION['email']) && isset($_SESSION['mk'])){
    $id_dm = $_GET['id_dm'];
    include_once 'ketnoi.php';
    $sql = "DELETE FROM dm_sp WHERE id_dm='$id_dm'";
    $query = mysqli_query($conn, $sql);
    header('location: quantri.php?page_layout=danhsachdm');
}else{
    header('location: ../index.php');
}
?>