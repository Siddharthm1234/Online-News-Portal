<?php
	require('config/config.php');
	require('config/db.php');

	if(isset($_POST['addpost-submit'])){
		$title=mysqli_real_escape_String($conn,$_POST['title']);
		$body=mysqli_real_escape_String($conn, $_POST['body']);
		$author=mysqli_real_escape_String($conn, $_POST['author']);

		$query= "Insert into posts (title,author,body,cat_id) values ('$title','$author','$body',1)";
	

	if(mysqli_query($conn, $query)){
		header('Location:'.ROOT_URL.'entertainment.php');
	}else{
		echo 'Error';
	}
}

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Entertainment</title>
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
						 <a class="navbar-brand" href="<?php echo ROOT_URL?>dashboard.php">Home</a>
  <a class="navbar-brand" href="<?php echo ROOT_URL?>entertainment.php">Entertainment</a>
  <a class="navbar-brand" href="<?php echo ROOT_URL?>add_entertainment.php">Add Post</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>



		<!-- Three -->
			<section id="three" class="wrapper">
			<div class="inner">
			<header class="align-center">
			<strong><h2>Entertainment</h2></strong>
			<h3>Add Posts</h3>
			</header>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
   </ul>
    
  </div>
</nav>
	<div class="container">

    <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
    <div class="form-group">
    	<label>Title</label>
    	<input type="text" name="title" class="form-control" placeholder="Title">
    </div>
    <div class="form-group">
    	<label>Author</label>
    	<input type="text" name="author" class="form-control" placeholder="Author">
    </div>
    <div class="form-group">
    	<label>Body</label>
		<textarea id="demo-message" rows="6" name="body" class="form-control" placeholder="Body"></textarea>
    </div>
    <input type="submit" name="addpost-submit" value="submit" class="btn btn-primary">
	</form>
</div>
</div>
</section>

</body>
</html>


