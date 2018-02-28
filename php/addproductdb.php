<?php
if(isset($_POST["submit"])){
if (empty($_POST['batch']) || empty($_POST['product-name'])||empty($_POST['series']) || empty($_POST['price'])||empty($_POST['category']) || empty($_POST['details'])|| empty($_POST['howtouse'])) {

// $message= "Please Fill Complete Details"
// echo "<script type='text/javascript'>alert('$message');</script>";
// header('Location: ../add.html'); 

	echo "please fill details";
}
else{
	$batch=$_POST['batch'];
	$productname=$_POST['product-name'];
	$series=$_POST['series'];
	$price=$_POST['price'];
	$category =$_POST['category'];
	$details=$_POST['details'];
	$howtouse=$_POST['howtouse'];
	$productimg=$_POST['productpic'];

	$conn = mysqli_connect("localhost","root","","authsys");
	$cquery="create table $productname (batchId INT(10),productid INT(10),series VARCHAR(20),productname VARCHAR(30),category VARCHAR(15),price INT(6))";
	$querycreate=mysqli_query($conn,$cquery);
	$query = mysqli_query($conn,"insert into products(batchId,productName,series,price,category,details,howToUse,productimg) values ('$batch','$productname','$series','$price','$category','$details','$howtouse','$productimg')");

	if(!($query)){
		header('Location: ../add.html'); 
		echo "<script type='text/javascript'>alert('Not Created');</script>";
	}
	else{
		header('Location: ../update.html'); 
		echo "<script type='text/javascript'>alert('Product Created');</script>";
	}
	if(!($querycreate)){
		echo "<script type='text/javascript'>alert('Not Created');</script>";
	}
}
mysqli_close($conn);
}
?>