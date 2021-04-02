<?php
$con=mysqli_connect("localhost","ionxzmsa_aqeeq","arpit@123","ionxzmsa_aqeeq");
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($con,"select email from user where email='$user_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$user=$row['email'];
if(!isset($user))
{ header("Location:login.php"); }
else
{
	$userdata = mysqli_query($con,"Select * from user where email ='$user'");
    while($udata = mysqli_fetch_array($userdata)){
	 $user_id=htmlspecialchars($udata['user_id']);
	 $name=htmlspecialchars($udata['name']);
	 $email=htmlspecialchars($udata['email']);
	 $mobile=htmlspecialchars($udata['mobile']);
	 $city=htmlspecialchars($udata['city']);
	 $state=htmlspecialchars($udata['state']);
	 $address=htmlspecialchars($udata['address']);
	 $zip=htmlspecialchars($udata['zip']);
	 $get_password=htmlspecialchars($udata['password']);
	 $wallet=htmlspecialchars($udata['wallet']);
}
}
?>
