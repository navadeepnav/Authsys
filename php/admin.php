

<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli_connect("localhost","root","","authsys");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
// $username = mysql_real_escape_string($username);
// $password = mysql_real_escape_string($password);
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn,"SELECT * FROM admintable WHERE name='" . $username . "' and password = '". $password."'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header('Location: ../admin.html'); 
} else {
$message = "Username and/or Password incorrect.\\nTry again.";
echo "<script type='text/javascript'>alert('$message');</script>";
header('Location: ../index.html'); 
}
mysqli_close($conn); // Closing Connection
}
}
?>