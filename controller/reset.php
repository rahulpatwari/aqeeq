<?php

if (isset($_POST['reset_password'])) {

	 require_once('session.php');

	 $prev_password=htmlspecialchars($_POST['prev_password']);

	 $new_password=htmlspecialchars($_POST['new_password']);

	 if ($prev_password==$get_password) {

	 	$update = "UPDATE `user` SET password = '$new_password' WHERE user_id='$user_id'";

	 if (mysqli_query($con, $update)) {

	 	 header('Location:../change-password.php?psd');

        }

        else{

         echo "Server Issue";

        }  

	 }

	 else{

         header('Location:../change-password.php?psdwr');

	 }





}

else{

	echo 'Access Denied';

}