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
 // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
 // $mail->isSMTP();                                      // Set mailer to use SMTP
 $mail->Host = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
 $mail->SMTPAuth = true;                               // Enable SMTP authentication
 $mail->Username = 'navarocks123@gmail.com';                 // SMTP username
 $mail->Password = '#knowme@nava';                           // SMTP password
 $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
 $mail->Port = 587; 

 $message="<p>Hello Agrilife,</p>".
 			"<p>This is a complaint mail and the details of dealer are as follows.</p>".
 			"<p><b> Dealer Name:</b>"."  ".$_POST['dealer'].
 			"</p><p><b>Area:</b>"."  ".$_POST['area'].
 			"</p><p><b>State:</b>"."  ".$_POST['state'].
 			"</p><p><b>Issue:</b>"."  ".$_POST['message'].".";


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
$cname=$_POST['name'];
$message=$_POST['message'];
$dname=$_POST['dealer'];
$state=$_POST['state'];
$mail=$_POST['email'];
$area=$_POST['area'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli_connect("localhost","root","","authsys");

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn,"INSERT INTO COMPLAINTS (cname,email,dname,area,state,message) values ('$cname','$mail','$dname','$area','$state','$message')");
if(!($query)){
		echo "<script type='text/javascript'>alert('Not Registered');</script>";
	}
	else{
		echo "<script type='text/javascript'>alert('Registered');</script>";	
	}
mysqli_close($conn); // Closing Connection
}


?>
