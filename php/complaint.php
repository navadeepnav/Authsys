<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";


$mail = new PHPMailer;

if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["name"]==""||$_POST["dealer"]==""||$_POST["state"]==""||$_POST["area"]==""||$_POST["message"]==""){
echo "Fill All Fields..";
}
else{
 $mail->SMTPDebug = 2;                                 // Enable verbose debug output
 $mail->isSMTP();                                      // Set mailer to use SMTP
 $mail->Host = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
 $mail->SMTPAuth = true;                               // Enable SMTP authentication
 $mail->Username = 'navarocks123@gmail.com';                 // SMTP username
 $mail->Password = '#knowme@nava';                           // SMTP password
 $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
 $mail->Port = 587; 

 $message="Dealer Name:".$_POST['dealer']."from area:".$_POST['area']."from state:".$_POST['state']. "and issue is".$_POST['message'].".";

$mail->From =$_POST['email'];
$mail->FromName =$_POST['name'];
$mail->addAddress("navarocks123@gmail.com", "Navadeep");
$mail->addCC($_POST['email'],$_POST['name']);
$mail->WordWrap=50;
$mail->isHTML(true);
$mail->Subject = "Complaint Mail";
$mail->Body = $message;
if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}

}
}


?>
