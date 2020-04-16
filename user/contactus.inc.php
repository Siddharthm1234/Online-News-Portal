<?php

if(isset($_POST['submit']))
{
require ('includes/dbh.inc.php');
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$comment=$_POST['comment'];
}
if(empty($name) || empty($email)|| empty($subject)|| empty($comment)){
header("Location:contactus.php?EmptyFeilds");
exit();
}




$sql="Insert into contact (name,email,subject,comment) values ('$name','$email','$subject','$comment');";
$w= mysqli_query($conn,$sql);
if(!$w)
{
header("Location:contactus.php?connection_fail");

}
else
{
header("Location:contactus.php?insertion_complete");

}



mysql_close($conn);


?>

