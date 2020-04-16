<?php
	require('config/config.php');
	require('config/db.php');

	$query= 'Select* from posts where cat_id="3" order by created_at desc';
	//Get the results
	$result=mysqli_query($conn,$query);

	//Fetch Data
	$posts=mysqli_fetch_all($result, MYSQLI_ASSOC);
	//var_dump($posts);
	
	//Free Result
	mysqli_free_result($result);

	//close Conn
	mysqli_close($conn);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Politics Dashboard</title>
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




	<?php foreach($posts as $post) :?>
		<div class="well"><div class="box123">
			<br><br>
			<center><img width="50%" height="25%" src="images/<?php echo $post['img_name'];?>">

			<h3><?php echo $post['title']; ?></h3>
			<small>Created on <?php echo $post['created_at'];?> by <?php echo $post['author']; ?></small>
			<!--<p><?php echo $post['body']; ?></p> --> <br>
			<a class="btn btn-success" href="<?php echo ROOT_URL?>post_entertainment.php?id=<?php echo $post['id']; ?>">Read More </a></center>
			

		</div>
	</div>
	</div>
<?php endforeach; ?>

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
									<li> Phone 7250445058</li>
									<li> Mail: rshbh46@gmail.com</li>
									</ul></p>

					<div class="copyright">
						
					</div>
					</div>
				</div>
				&copy; The Hour
			</footer>