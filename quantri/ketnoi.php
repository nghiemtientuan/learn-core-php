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

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

//kiểm tra tồn tại
if($conn){
    //cài đặt tiếng việt nếu tồn tại
    $setLang = mysqli_query($conn, "SET NAMES 'utf8'");
}else{
    die("Kết nối thất bại!".mysqli_connect_error());
}
?>