<?php
if (isset($_GET['u'])) {
session_start();	
$get_userid=htmlspecialchars($_GET['u']);
$_SESSION['refaral_id']=$get_userid;
header('location:index.php');
}
else{
	echo 'Something Wrong';
}