<?php
if (isset($_POST['mobile'])) {
	$no=htmlspecialchars($_POST['no']);
	$oldmobile=htmlspecialchars($_POST['oldmobile']);
	$otp = rand(10000, 99999);

	require_once('../owner/autho/data-autho.php');
        $update = "UPDATE `user` SET mobile = '$no',otp = '$otp' WHERE mobile='$oldmobile'";
        if (mysqli_query($con, $update)) {
        		  	//Start Send Otp Message Here//
//Your authentication key
$authKey = "316971AFkc1zeoKnGF5e3bd940P1";

//Multiple mobiles numbers separated by comma
$mobileNumber = $no;

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "AQEEQT";

//Your message to send, Add URL encoding here.
$message = urlencode("Hello User Your Otp is $otp");

//Define route 
$route = "4";
//Prepare you post parameters
$postData = array(
   'authkey' => $authKey,
   'mobiles' => $no,
   'message' => $message,
   'sender' => $senderId,
   'route' => $route
);

//API URL
$url="http://api.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
   CURLOPT_URL => $url,
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_POST => true,
   CURLOPT_POSTFIELDS => $postData
   //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
   echo 'error:' . curl_error($ch);
}

curl_close($ch);

  $output;
       	header('Location:../otp.php?id='.$no.'&succ');

        }
        else{
        //header('Location:../view-product.php?err');
         echo "Server Error";
        }  
}
else{
	echo 'Access Denied';
}