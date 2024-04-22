<?php

use PHPMailer\PHPMailer\PHPMailer;
require('./PHPMailer-master/PHPMailer-master/src/PHPMailer.php');
require('./PHPMailer-master/PHPMailer-master/src/Exception.php');
require('./PHPMailer-master/PHPMailer-master/src/SMTP.php');
if (!isset($_POST['qwe'])) {
    $mail = new PHPMailer(true);
    // $mail->SMTPDebug = 1;
    $mail->isSMTP();
    $mail->Host = gethostbyname('smtp.gmail.com');;
    $mail->SMTPAuth = true;
    $mail->Username = 's.s.s.propertycompany@gmail.com';
    $mail->Password = 'dzyvbjcmfubvyclf';
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    // $mail->SMTPSecure = 'ssl';
    $mail->setFrom(strtolower($_POST['email']));
    $mail->addAddress('s.s.s.propertycompany@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = "Message from ";
    $mail->Body =  'email :'.$_POST['email'].'<br>message :'.$_POST['interested'].'<br>phone number :'.$_POST['mobile'].'<br>Name :'.$_POST['name'];
    $sended = $mail->send();
    if ($sended) {
        echo "Message Sent successfully";
    }else {
        echo "Somthing  went wrong . Please check again!";
    }
} else {
    echo "Something went wrong";
}
?>