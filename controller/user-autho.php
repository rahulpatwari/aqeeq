<?php
require_once('../owner/autho/data-autho.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=mysqli_real_escape_string($con,$_POST['email']); 
$mypassword=mysqli_real_escape_string($con,$_POST['password']); 
$app=mysqli_real_escape_string($con,$_POST['app']); 
$sql="SELECT * FROM user WHERE email='$myusername' or mobile='$myusername' and password='$mypassword' and status = 'active'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 $count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
	 $sqls="SELECT email FROM user WHERE email='$myusername' or mobile='$myusername'and status = 'active'";
	$results=mysqli_query($con,$sqls);
    $data=mysqli_fetch_array($results);
    
     $email=$data['email'];
    
$_SESSION['login_user']=$email;
 
 if(empty($_SESSION["cart_products"])){
 	if($app=="app"){
        header("location:../app/index.php");
 	}
 	else{ 
 		header("location:../my-account.php");
 	}
	
 }
 else{
   header("location:../checkout-shipping.php");
 }	


}
else 
{
header("location: ../login.php?wr");
}
}
?> 