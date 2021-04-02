<?php
if (isset($_POST['submit'])) {
	$app_page=htmlspecialchars($_POST['app_page']);
	$name=htmlspecialchars($_POST['name']);
	$email=htmlspecialchars($_POST['email']);
	$review_msg=htmlspecialchars($_POST['review_msg']);
	 $rating=htmlspecialchars($_POST['rating1']);
	$page_id=htmlspecialchars($_POST['page_id']);
	$date=date('d/m/Y');
	$status='active';
	date_default_timezone_set('Asia/Kolkata');
  	$time=date( 'H:i:s', time ());
	require_once('../owner/autho/data-autho.php');
	$sql = "INSERT INTO `review`(`id`, `date`, `time`, `name`, `email`, `review_msg`, `rating`, `msg_id`, `status`) VALUES(null,'" . $date . "','" . $time . "','" . $name . "','" . $email . "','" . $review_msg . "','" . $rating . "','" . $page_id . "','" . $status . "')";
    if (mysqli_query($con, $sql)) {


          	if ($app_page=='app') {
    		header('location:http://aqeeqtrading.com/app/product-details.php?id='.$page_id.'&succ');
    	}
    	else{
            header('location:../details.php?id='.$page_id.'&succ');
        }

        }
        else{
            header('location:../details.php?err');
        }		
}
else{
	echo 'Access Denied';
}