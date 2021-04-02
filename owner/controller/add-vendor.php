<?php
if (isset($_POST['add_vendor'])) {	
#insert data categories here
require_once('../autho/data-autho.php');
$fullname=htmlspecialchars($_POST['fullname']);
$organisation=htmlspecialchars($_POST['organisation']);
$mobile=htmlspecialchars($_POST['mobile']);
$email=htmlspecialchars($_POST['email']);
$username=htmlspecialchars($_POST['username']);
$fullname=htmlspecialchars($_POST['fullname']);
$password=htmlspecialchars($_POST['password']);
$user_id=uniqid();
$check = "SELECT * FROM `access` WHERE username = '$username'";
        $result   = mysqli_query($con, $check);
         $rowcount = mysqli_num_rows($result);
         if ($rowcount==0) {
         #query run here
 	echo $sql = "INSERT INTO `access`(`id`, `username`, `password`, `user_id`, `fullname`, `role`, `email`, `mobile`, `organisation`) VALUES(null,'" . $username . "','" . $password . "','" . $user_id . "','" . $fullname . "','user','" . $email . "','" . $mobile . "','" . $organisation . "')";
      if (mysqli_query($con, $sql)) {
      	header('Location:../vendors-view.php?succ');
      }
      else{
      	header('Location:../vendor.php?err');
      }
 }
 else{
      	header('Location:../vendor.php?already');
 }
}
else{
	echo"You Don't Have Authorization To Access This Page";
}