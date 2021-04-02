<?php

if ($_POST) {

	$razorpay_payment_id = $_POST['razorpay_payment_id'];

	

	echo "Razorpay success ID: ". $razorpay_payment_id;


	if (!empty($razorpay_payment_id)) {
	require_once('place-order.php');
	}else{
		echo "Payment not succesful";
	}

}

?>