<?php
if (isset($_POST['order'])) {
	 $nameu=htmlspecialchars($_POST['name']);
	 $emailu=htmlspecialchars($_POST['email']);
	 $mobileu=htmlspecialchars($_POST['mobile']);
	 $addressu=htmlspecialchars($_POST['address']);
	 $cityu=htmlspecialchars($_POST['city']);
	 $stateu=htmlspecialchars($_POST['state']);
	 $zipcodeu=htmlspecialchars($_POST['zip']);
	 $shipping_paymentu=htmlspecialchars($_POST['shipping_paymentu']);

	 require_once('../owner/autho/data-autho.php');
	 require_once('session.php');
	 $update = "UPDATE `user` SET name = '$nameu', email = '$emailu', mobile = '$mobileu', address = '$addressu', city = '$cityu', state = '$stateu', zip = '$zipcodeu' WHERE user_id='$user_id'";
	 if (mysqli_query($con, $update)) {

	 	if ($shipping_paymentu=='online') {
	 		header('location:pay.php');
	 	}
	 	else{
	 	require_once('place-order.php');
	 	}
        }
        else{
         echo "Server Issue";
        }  

}
else{
	echo 'Access Denied';
}