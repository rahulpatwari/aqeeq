<?php
if (isset($_POST['reset'])) {
    $get_password=htmlspecialchars($_POST['password']);
    require_once('../autho/data-autho.php');
    require_once('../autho/session.php');
	$update = "UPDATE `access` SET password = '$get_password' where user_id = '$user_id'";
		if (mysqli_query($con, $update)) {
        header('Location:../index.php');
        }
        else{
        //header('Location:../view-product.php?err');
         echo "Server Error";
        } 
}
else{
	echo 'Access Denied';
}