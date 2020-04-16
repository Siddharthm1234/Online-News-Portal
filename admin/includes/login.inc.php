<?php

if(isset($_POST['login-submit']))
{
	require ('dbh.inc.php');
	$user=$_POST['User'];
	$password=$_POST['Pass'];
}
	if(empty($user)||empty($password)){
		header("Location:../login.php?EmptyFeilds");
		exit();
	}

	else{
		$db= mysqli_select_db($conn, "login");
		$query=mysqli_query($conn, "Select* from users where user='$user' && pwd='$password' && role_id=1");
		$row=mysqli_num_rows($query);
		if($row==1){
			header("Location: ../dashboard.php");
		}
		else{
			$error="username or password Invalid!";
			header("Location:../login.php?Invalid");
		}
		mysqli_close($conn);
	}




