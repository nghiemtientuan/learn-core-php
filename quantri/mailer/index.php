<?php
include 'db.php';
$msg='';
if(!empty($_POST['email']) && isset($_POST['email']) &&  !empty($_POST['password']) &&  isset($_POST['password']) )
{
// username and password sent from form
    $email=mysql_real_escape_string($_POST['email']);
    $password=mysql_real_escape_string($_POST['password']);
// kiểm tra định dạng email nhập đúng chưa
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

    if(preg_match($regex, $email))
    {
        $password=md5($password); // mã hóa password
        $activation=md5($email.time()); // mã hóa email và thời gian
        $count=mysqli_query($connection,"SELECT uid FROM users WHERE email='$email'");
// Kiểm tra email đã có trong cơ sở dữ liệu chưa
        if(mysqli_num_rows($count) < 1)
        {
            mysqli_query($connection,"INSERT INTO users(email,password,activation) VALUES('$email','$password','$activation')");
// sending email
            include 'Send.php';
            $to=$email;
            $subject="Email verification";
            $body='Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. <br/> <br/> <a href="'.$base_url.'activation/'.$activation.'">'.$base_url.'activation/'.$activation.'</a>';
//Gửi mail
            Send($to,$subject,$body);
            $msg= "Registration successful, please activate email.";
        }
        else
        {
            $msg= 'The email is already taken, please try new.';
        }

    }
    else
    {
        $msg = 'The email you have entered is invalid, please try again.';
    }

}
// HTML Part
?>