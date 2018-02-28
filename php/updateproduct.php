<?php
if(isset($_POST["submit"])){
if (empty($_POST['batch']) || empty($_POST['product-name'])||empty($_POST['series']) || empty($_POST['price'])||empty($_POST['category']) || empty($_POST['product'])) {

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
	$productid=$_POST['product'];
	$conn = mysqli_connect("localhost","root","","authsys");
	$query = mysqli_query($conn,"insert into $productname(batchId,productid,series,productname,category,price) values ('$batch','$productid','$series','$productname','$category','$price')");

	if(!($query)){
		header('Location: ../add.html'); 
		echo "<script type='text/javascript'>alert('Not Updated');</script>";

	}
	else{
		header('Location: ../update.html'); 
		echo "<script type='text/javascript'>alert('Updated');</script>";
	}
}
mysqli_close($conn);
}
?>