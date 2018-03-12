<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome | Agrilife - Your Destination</title>
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/mybootstrap.css"> 
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#noo-nav" data-offset="50" >
	
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
			      <li><a class="btn" style="color: #ffffff;background-color: unset; border:1px solid #ffffff;" href="index.html">Go Back Home</a></li>
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
				<li class="breadcrumb-item active"><a href="#">QR Code</a></li>
			</ol>
		</div>
	
	<!--- Breadcrumb ---->
	<!--- Form ---->
	<div class="update-details" style="background-image: url(../images/world_light.png);background-size: cover;" >
		<div class="container-fluid">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="qrview" align="center" style="margin-top: 5%">
					<img src="generate.php?qrtext=<?php echo $_GET['qrtext']?>" alt="QrCode"><br>
					<a href="../update.html" style="color: #494949;"> <h3>Generate One More</h3> </a>
				</div>	
			</div>
		</div>
	</div>

	

<!--- Script ---->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<!--- Script ---->

</body>
</html>