<?php
if (isset($_POST['uppass'])) {
	$pass1=htmlspecialchars($_POST['pass1']);
	$pass2=htmlspecialchars($_POST['pass2']);
	$getrpid=htmlspecialchars($_POST['rpid']);

	if ($pass1==$pass2) {
		require_once('../owner/autho/data-autho.php');
	/*Password Reset Here*/
	 $update = "UPDATE `user` SET password = '$pass1' WHERE user_id='$getrpid'";
	 if (mysqli_query($con, $update)) {
			header('location:../login.php');
	}	 

	}
	else{
		header('location:../resetpass.php?nc&rsid='.$getrpid.'');
	}
}
else{
	echo 'Access Denied';
}