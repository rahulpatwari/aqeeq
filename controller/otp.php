<?php
if (isset($_POST['verify'])) {
 require_once('../owner/autho/data-autho.php');	
 $getotp=htmlspecialchars($_POST['otp']);
 $sql="SELECT * FROM user WHERE otp='$getotp' and status='unactive'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 $count=mysqli_num_rows($result);

 if ($count=='1') {
 	 $update = "UPDATE `user` SET status = 'active' WHERE otp='$getotp'";

	 if (mysqli_query($con, $update)) {

	 	header('location:../login.php?succ');

        }
 }
 else{
 	header('location:../otp.php?err');
 }



}
else{
	echo 'Access Denied';
}