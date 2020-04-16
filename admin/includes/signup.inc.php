<?php

if(isset($_POST['signup-submit'])){

	require('dbh.inc.php');

	$username=$_POST['Uid'];
	$email=$_POST['mail'];
	$password=$_POST['pwd'];
	$passwordrepeat=$_POST['pwd-repeat'];


if(empty($username)||empty($email)||empty($password)||empty($passwordrepeat)){
	header("Location:../login.php?EmptyFeilds");
	exit();
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	header("Location:../login.php?InvalidEmail");
	exit();
}
elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
	header("Location:../login.php?InvalidPassword");
	exit();
}
elseif($password!==$passwordrepeat){
	header("Location:../login.php?PasswordsNotMatch");
	exit();
}
else{
		$sql="Insert into users (user,email,pwd,role_id) values (?,?,?,1);";
		//extra   mysqli_query($conn,$sql);


		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location:../login.php?error");
			exit();}
		else{
			mysqli_stmt_bind_param($stmt,"sss", $username,$email,$password);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			header("location: ../login.php?signup=success");
		

		}
		
	}
	mysqli_stmt_close($stmt);
	mysql_close($conn);
}
