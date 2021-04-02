<?php
require_once('data-autho.php');
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($con,"select username from access where username='$user_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$user=$row['username'];
if(!isset($user))
{ header("Location: login.php"); }
else
{
	$userdata = mysqli_query($con,"Select * from access where username ='$user'");
    while($udata = mysqli_fetch_array($userdata)){
	  $username  = $udata['username'];
	  $password  = $udata['password'];
	  $user_id  = $udata['user_id'];
	  $fullname  = $udata['fullname'];
	  $role  = $udata['role'];
	  date_default_timezone_set('Asia/Kolkata');
  	  $time=date( 'H:i:s', time ());
  	  $date=date('d/m/Y');
}
}
?>
