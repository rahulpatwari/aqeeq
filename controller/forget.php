<?php
if (isset($_POST['reset'])) {
	$get_email=htmlspecialchars($_POST['email']);
	$app=htmlspecialchars($_POST['app']);
	require_once('../owner/autho/data-autho.php');
	$sql="SELECT * FROM user WHERE email='$get_email'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);
	if ($count=='1') {
	$userdata = mysqli_query($con,"Select * from user where email ='$get_email'");
    while($udata = mysqli_fetch_array($userdata)){
	 $user_id=htmlspecialchars($udata['user_id']);
	 $name=htmlspecialchars($udata['name']);
	 $email=htmlspecialchars($udata['email']);
	}

	$to = "$email";
	$subject = "Hello $name Reset Your Account Password";
	$txt = "Hello $name Reset Your Account Password To Given Link http://aqeeqtrading.com/resetpass.php?rsid=$user_id";
	$headers = "From: aqeeqecommerce@gmail.com" . "\r\n" .
	"CC: aqeeqecommerce@gmail.com";

	mail($to,$subject,$txt,$headers);
	if ($app=='app') {
		header('location:../app/forgot-password.php?succ');
	}
	else{
	header('location:../forgetpass.php?succ');
    }


	}
	elseif($app=='app'){
		header('location:../app/forgot-password.php?wr');
	}
	else{
		header('location:../forgetpass.php?wr');
	}


}
else{
	echo 'Access Denied';
}