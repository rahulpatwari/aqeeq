<?php

if (isset($_POST['submit'])) {

	 $nameu=htmlspecialchars($_POST['name']);

	 $emailu=htmlspecialchars($_POST['email']);

	 $mobileu=htmlspecialchars($_POST['mobile']);

	 $addressu=htmlspecialchars($_POST['address']);

	 $cityu=htmlspecialchars($_POST['city']);

	 $stateu=htmlspecialchars($_POST['state']);

	 $zipcodeu=htmlspecialchars($_POST['zip']);
	 $app=htmlspecialchars($_POST['app']);



	 require_once('../owner/autho/data-autho.php');

	 require_once('session.php');

	 $update = "UPDATE `user` SET name = '$nameu', email = '$emailu', mobile = '$mobileu', address = '$addressu', city = '$cityu', state = '$stateu', zip = '$zipcodeu' WHERE user_id='$user_id'";

	 if (mysqli_query($con, $update)) {
          if($app=='app')
          {
header('location:../app/profile-edit.php?succ');
          }
          else{
	 	header('location:../my-account.php?succ');
          }
        }

        else{

         echo "Server Issue";

        }  

}

else{

	echo 'Access Denied';

}