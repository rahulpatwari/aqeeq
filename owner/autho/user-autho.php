<?php
include("data-autho.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=mysqli_real_escape_string($con,$_POST['username']); 
$mypassword=mysqli_real_escape_string($con,$_POST['password']); 
$sql="SELECT * FROM access WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$myusername;


if ($mypassword=='user@123') {
	header("location:../uppass.php");
}
else{
	header("location:../index.php");
}




}
else 
{
header("location: ../login.php?wr");
}
}
?>