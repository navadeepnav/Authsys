<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome | Agrilife - Your Destination</title>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/mybootstrap.css"> 
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#noo-nav" data-offset="50">
	
	<!--- Navigation ---->
	<header>
		<div class="noo-nav" id="noo-nav">
			<nav class="navbar navbar-fixed-top ">
			  <div class="container-fluid">
			    <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			          <i class="fa fa-bars"></i>              
			    </button>
			      <a style="font-family: 'Anton', sans-serif; font-size: 30px;" class="navbar-brand" href="index.html">AGRILIFE</a>
			    </div>
			  <div class="collapse navbar-collapse navbar-right bg-dark" id="myNavbar">
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="index.html">Home</a></li>
			      <li><a href="#about">About</a></li>
			      <li><a href="#services">Services</a></li>
			      <li><a href="#">Products</a></li>
			      <li><a href="#footer">Contact</a></li>
			      <li><a class="btn" style="color: #ffffff;background-color: unset; border:1px solid #ffffff;" data-toggle="modal" data-target="#complaintModal">Complaint</a></li>
			    </ul>
			  </div>
			  </div>
			</nav>
		</div>
	</header>
	<!--- Breadcrumb ---->
		<div class="noo-bread">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active"><a href="#">Product Information</a></li>
			</ol>
		</div>
	
	<!--- Breadcrumb ---->
	<?php 
	$proname = $_GET['proname'];                 // Product Name from Get
	$id=$_GET['id'];							 // Product id from Get
	$conn = mysqli_connect("localhost","root","","authsys");
	$query = mysqli_query($conn,"select batchId,productid,series,productname,price from $proname where productname='" . $proname . "' and productid = '". $id."'");
	$result=mysqli_fetch_array($query);
	$batch=$result['batchId'];
	$series=$result['series'];
	$price=$result['price'];
	$pid=$result['productid'];
	$name=$result['productname'];

	?> 
	<!--- Product Details ---->
	
	<div class="noo-product" id="noo-product">
		<div class="row row-fluid" class="noo-rows" style="margin-top: 3%">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div id="product-img" align="center">
				<img class="product-img" style="height: 350px; width: 300px;" src="images/fertilizer1.jpg" alt="Fertilizer">
				<h3 class="p-labels">Product Id</h3>
					<h3><?php echo $pid; ?></h3>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="productdetails" style="margin-left: 10%">
					<h3 class="p-labels">Product Name</h3>
					<h3><?php echo $name; ?></h3>
					<h3 class="p-labels">Batch ID</h3>
					<h3><?php echo $batch; ?></h3>
					<h3 class="p-labels">Series Name</h3>
					<h3><?php echo $series; ?></h3>
					<h3 class="p-labels">Price</h3>
					<h3><?php echo $price; ?></h3>
				</div>
			</div>
			
		</div>
		<div class="row row-fluid" class="noo-rows" style="margin-top: 5%">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="productdesc" >
					<h2>Product Details</h2>
					<p>
					t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
					t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
					</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="productusage">
					<h2>How To Use</h2>
					<p>
					t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
					t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

					</p>
				</div>
			</div>
		</div>
	</div>
	<!--- Product Details ---->

<footer class="pro-foot">
	<div class="footer-ele" align="center">
		<h4 style="color: #ffffff; margin-bottom:10px; text-align: center" >© Copyright <a style="color: #ffffff; text-decoration:none;" data-toggle="modal" data-target="#adminModal">Agrilife</a>, all rights reserved.</h4>
	</div>	
</footer>

<!--- Modal Complaint ---->
	<div class="modal fade" id="complaintModal" >
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h2 style="margin-top: 3%; text-align:center;" class="modal-title" id="complaintModalLabel" >Lodge a Complaint</h2>
	        <button style="margin-top: -5%;" type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       <form method="post" action="php/complaint.php">
	          <div class="form-group">
	            <label for="name" class="col-form-label">Name</label>
	            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
	          </div>
	          <div class="form-group">
				 <label for="email" class="col-form-label">Email</label>
				<input type="email" class="form-control" id="email" name="email"  placeholder="Email"/>
				</div>
	          <div class="form-group">
	            <label for="dealer" class="col-form-label">Dealer</label>
	            <input type="text" name="dealer" class="form-control" id="dealer" placeholder="Dealer Name">
	          </div>
	          <div class="form-group">
	            <label for="area" class="col-form-label">Area</label>
	            <input type="text" name="area" class="form-control" id="area" placeholder="Area">
	          </div>
	          <div class="form-group">
	            <label for="state" class="col-form-label">State</label>
	            <input type="text" name="state" class="form-control" id="state" placeholder="State">
	          </div>
	          <div class="form-group">
	            <label for="message" class="col-form-label">Message</label>
	            <textarea type="text" name="message" class="form-control" id="message" placeholder="Your Message"> </textarea>
	          </div>
	           <div class="form-group">        
				<button type="submit" name="submit" class="btn btn-default">Submit</button>
				</div>
	        </form>
	      </div>
	      <div class="modal-footer">
	        
	      </div>
	    </div>
	  </div>
	</div>

	<!--- Modal Complaint ---->

<!--- Script ---->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<!--- Script ---->

</body>
</html>