<?php

$servername ="localhost";
$dbusername="root";
$dbpassword="";
$dbname="login";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn){
	die("Connection Failed");
}