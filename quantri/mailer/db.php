<?php
/**
 * Created by PhpStorm.
 * User: TuânNghiêm
 * Date: 6/16/2018
 * Time: 7:45 AM
 */

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "tntstudio";

$connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

//kiểm tra tồn tại
if($connection){
    //cài đặt tiếng việt nếu tồn tại
    $setLang = mysqli_query($conn, "SET NAMES 'utf8'");
    $base_url='http://localhost/tntstudio/quantri/';
}else{
    die("Kết nối thất bại!".mysqli_connect_error());
}
?>
