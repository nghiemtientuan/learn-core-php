<?php
/**
 * Created by PhpStorm.
 * User: TuânNghiêm
 * Date: 6/16/2018
 * Time: 10:15 AM
 */
session_start();
if(isset($_SESSION['email'])){

    session_destroy();
    header('location: index.php');
}else{
    header('location: index.php');
}
?>