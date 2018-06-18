<?php
/**
 * Created by PhpStorm.
 * User: TuânNghiêm
 * Date: 6/18/2018
 * Time: 11:37 AM
 */

//goi thu vien
include('class.smtp.php');
include "class.phpmailer.php";

$nFrom = "TNT STUDIO";    //mail duoc gui tu dau, thuong de ten cong ty ban
$mFrom = 'tntstudioshop@gmail.com';  //dia chi email cua ban
$mPass = 'Tientuan1997';       //mat khau email cua ban
$nTo = 'Huudepzai'; //Ten nguoi nhan
$mTo = 'tuannghiemtien97@gmail.com';   //dia chi nhan mail
$mail             = new PHPMailer();
$body             = 'Bạn đã nhận được mail của tnt studio';   // Noi dung email
$title = 'mail xác nhận';   //Tieu de gui mail
$mail->IsSMTP();
$mail->CharSet  = "utf-8";
$mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;    // enable SMTP authentication
$mail->SMTPSecure = "ssl";   // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";    // sever gui mail.
$mail->Port       = 465;         // cong gui mail de nguyen

// xong phan cau hinh bat dau phan gui mail
$mail->Username   = $mFrom;  // khai bao dia chi email
$mail->Password   = $mPass;              // khai bao mat khau
$mail->SetFrom($mFrom, $nFrom);
$mail->AddReplyTo('tntstudioshop@gmail.com', 'TNT STUDIO'); //khi nguoi dung phan hoi se duoc gui den email nay
$mail->Subject    = $title;// tieu de email
$mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
$mail->AddAddress($mTo, $nTo);
// thuc thi lenh gui mail
if(!$mail->Send()) {
    echo 'Co loi!';

} else {

    echo 'Mail đã được gửi';
}
?>