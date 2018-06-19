<?php
session_start();
if(isset($_SESSION['sp_mua'])&&isset($_GET['id_sp'])){
    $id_sp = $_GET['id_sp'];
    $mua_hang = $_SESSION['sp_mua'];
    $cac_san_pham = explode(",",$mua_hang);
    $_SESSION['sp_mua']='';
    for($i=0;$i<sizeof($cac_san_pham);$i++){
        if($cac_san_pham[$i] == $id_sp){
            $cac_san_pham[$i]=0;
            break;
        }
    }
    for($i=0;$i<sizeof($cac_san_pham);$i++){
        if($cac_san_pham[$i] != 0){
            $_SESSION['sp_mua']=$_SESSION['sp_mua'].$cac_san_pham[$i].',';
        }
    }
    header("location: index.php?page_layout=cart");
}else{
    header("location: index.php");
}
?>