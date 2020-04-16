<?php
	require('config/config.php');
	require('config/db.php');

//GET ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);


	$query= 'Select* from posts where id='.$id;
	//Get the results
	$result=mysqli_query($conn,$query);

	//Fetch Data
	$POST=mysqli_fetch_assoc($result);
	//var_dump($posts);
	
	//Free Result
	mysqli_free_result($result);

	//close Conn
	mysqli_close($conn);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Politics</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="style/card.css">
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/v4-shims.css">

	</head>
	<body class="subpage">
		<style>
body {
  background-image: url('images/background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<nav id="nav">
						<a href="../index.html" class="logo"><i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i>
						 <a class="navbar-brand" href="<?php echo ROOT_URL?>dashboard.php">Home</a>
  <a class="navbar-brand" href="<?php echo ROOT_URL?>politics.php">Politics</a>
  <a class="navbar-brand" href="<?php echo ROOT_URL?>add_politics.php">Add Post</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>



		<!-- Three -->
			<section id="three" class="wrapper">
			<div class="inner">
			<header class="align-center">
			<strong><h2>Politics</h2></strong>
			<h3>POSTS</h3>
			</header>


	<div class="container">
			<strong><h2><?php echo $POST['title']; ?></h2></strong>
			<small>Created on <?php echo $POST['created_at'];?> by <?php echo $POST['author']; ?></small>
			<p><?php echo $POST['body']; ?></p>
			<br>
			<a class="btn btn-primary" href="<?php echo ROOT_URL?>politics.php">Back to Home Site</a> <br>
			<br>
			
			<a class="btn btn-success" href="<?php echo ROOT_URL?>edit_politics.php?id=<?php echo $POST['id'];?>" >Edit Post</a>

			</div>
			</div>
			</section>
</body>
</html>