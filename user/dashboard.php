<?php
require ('includes/dbh.inc.php');

$sql ="SELECT * FROM `totalpost`" ;
$sql2="SELECT * FROM `totalregistrations` ";


$result=mysqli_query($conn,$sql);

	//Fetch Data
	$POST=mysqli_fetch_array($result); 


	$result2=mysqli_query($conn,$sql2);

	//Fetch Data
	$POST2=mysqli_fetch_array($result2); 

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>User Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="style/card.css">
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/v4-shims.css">


	</head>
	<body class="subpage"> <div class="container">
		<div class="row">
		<div class="card text-white bg-info mb-3" class="col-lg-6" style="max-width: 18rem;">
  <div style="font-size: 50px; text-align: center; ">Total</div><br>
  <div style="font-size: 50px; text-align: center; ">Posts</div><br>
  <div style="font-size: 50px; text-align: center; "><?php echo $POST[1]?></div><br>
  
  </div>



<div class="card text-white bg-dark mb-3" class="col-lg-6" style="max-width: 18rem;">
  <div style="font-size: 50px; text-align: center; ">Total</div><br>
  <div style="font-size: 50px; text-align: center; ">Users</div><br>
  <div style="font-size: 50px; text-align: center; "><?php echo $POST2[1]?></div><br>
  </div>
</div>
</div>
</div>
		<!-- Header -->
			<header id="header">
				<div class="inner">
					<nav id="nav">
						<a href="../index.html" class="logo"><i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i>
						<a href="dashboard.php">Home</a>			
						<a href="contactus.php">Contact Us</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>



		<!-- Three -->
			<section id="three" class="wrapper">
			<div class="inner">
			<header class="align-center">
			<strong><h2>Users's Dashboard</h2></strong>
			<p>-Seekers of News</p>
			</header>
			<h3>Categories</h3>
				<div class="container">
      			<div class="row">
        		<div class="col-lg-4" >
            	<div class="card" style="width: 18rem;">
            		<center><i class="fas fa-headphones fa-10x"></i></center>
  				<!--<img src="images/entertainment.jpg" class="card-img-top" alt="...">-->
  				<div class="card-body">
    			<center><h5 class="card-title">Entertainment</h5></center>
    			<p class="card-text">
    			<a href="entertainment.php" class="btn btn-success">Go!</a></p>
  			</div>
			</div>
			</div>
 			<div class="col-lg-4">
            <div class="card" style="width: 18rem;">
  				<center><i class="fas fa-futbol fa-10x"></i></center>
  			<div class="card-body">
    		<center><h5 class="card-title">Sports</h5></center>
    <p class="card-text">
    <a href="sports.php" class="btn btn-success">Go!</a></p>
  </div>
</div>
</div>
 <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
  <center><i class="fas fa-handshake fa-10x"></i></center>
  <div class="card-body">
    <center><h5 class="card-title">Politics</h5></center>
    <p class="card-text">
    <a href="politics.php" class="btn btn-success">Go!</a></p>
  </div>
</div>
</div>
 <div class="col-lg-4" class="r1">
            <div class="card" style="width: 18rem;">
  <center><i class="fas fa-car fa-10x"></i></center>
  <div class="card-body">
    <center><h5 class="card-title">Automobile</h5></center>
    <p class="card-text">
    <a href="#" class="btn btn-success">Go!</a></p>
  </div>
</div>
</div>
 <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
  <center><i class="fas fa-rupee-sign fa-10x"></i></center>
  <div class="card-body">
    <center><h5 class="card-title">India</h5></center>
    <p class="card-text">
    <a href="#" class="btn btn-success">Go!</a></p>
  </div>
</div>
</div>
 <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
  <center><i class="fas fa-exclamation-triangle fa-10x"></i></center>
  <div class="card-body">
    <center><h5 class="card-title">Miscellaneous</h5></center>
    <p class="card-text">
    <a href="#" class="btn btn-success">Go!</a></p>
  </div>
</div>
</div>
</div>
</div>

			</section>

		<!-- Footer -->
			<footer id="footer">
			<div class="inner">
				<h3>Get in touch with the Head Editors</h3>
							<div class="row">
							<div class="6u 12u$(small)">
								<h3>Siddharth Mehta</h3>
								<p><ul style="list-style-type:none;">
									<li> Phone Number:9990941070</li>
									<li> Mail: siddharthmehta1234@gmail.com</li>
									</ul></p>
							</div>
							<div class="6u$ 12u$(small)">
								<h3>Rishabh Kumar</h3>
								<p><ul style="list-style-type:none;">
									<li> Phone Number:9990941070</li>
									<li> Mail: rshbh46@gmail.com</li>
									</ul></p>

					<div class="copyright">
						
					</div>
					</div>
				</div>
				&copy; The Hour
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>