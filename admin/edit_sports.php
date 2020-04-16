<?php
	require('config/config.php');
	require('config/db.php');

	if(isset($_POST['editpost-submit'])){
		$update_id=mysqli_real_escape_String($conn,$_POST['update_id']);
		$title=mysqli_real_escape_String($conn,$_POST['title']);
		$body=mysqli_real_escape_String($conn, $_POST['body']);
		$author=mysqli_real_escape_String($conn, $_POST['author']);

		$query="Update posts set
				title='$title',
				author='$author',
				body='$body'
				where id={$update_id}";


			
			if(mysqli_query($conn, $query)){
		header('Location:'.ROOT_URL.'sports.php');
	}else{
		echo 'Error';
	}
}


		//GET ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);


	$query= 'Select* from posts where id='.$id;
	//Get the results
	$result=mysqli_query($conn,$query);

	//Fetch Data
	$post=mysqli_fetch_assoc($result);
	//var_dump($posts);
	
	//Free Result
	mysqli_free_result($result);

	//close Conn
	mysqli_close($conn);
		
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sports</title>
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
  <a class="navbar-brand" href="<?php echo ROOT_URL?>sports.php">Sports</a>
  <a class="navbar-brand" href="<?php echo ROOT_URL?>add_sports.php">Add Post</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>



		



	<div class="container">
	<h2>Add Posts</h2>
    <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
    <div class="form-group">
    	<label>Title</label>
    	<input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">
    </div>
    <div class="form-group">
    	<label>Author</label>
    	<input type="text" name="author" class="form-control" value="<?php echo $post['author'];?>">
    </div>
    <div class="form-group">
    	<label>Body</label>
		<textarea rows="6" name="body" class="form-control"><?php echo $post['body'];?></textarea>
    </div>
    <input type="hidden" name="update_id" value="<?php echo $post['id'];?>">
    <input type="submit" name="editpost-submit" value="submit" class="btn btn-primary">
	</form>
</div>
</body>
</html>

