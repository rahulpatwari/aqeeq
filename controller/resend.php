<?php
 if (isset($_GET['mobile'])) {
 	
	require_once('../owner/autho/data-autho.php');
   $mobile=$_GET['mobile'];
	$check = "SELECT * FROM `user` WHERE mobile = '$mobile'";

     $result = mysqli_query($con, $check);
     while ($data=mysqli_fetch_array($result)) {

     	$name=$data['name'];
     	$otp=$data['otp'];
     }
//Start Send Otp Message Here//
//Your authentication key
$authKey = "316971AFkc1zeoKnGF5e3bd940P1";

//Multiple mobiles numbers separated by comma
$mobileNumber = $number;

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "AQEEQT";

//Your message to send, Add URL encoding here.
$message = urlencode("Hello $name Your Otp is $otp");

//Define route 
$route = "4";
//Prepare you post parameters
$postData = array(
   'authkey' => $authKey,
   'mobiles' => $number,
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




      	header('Location:../otp.php?id='.$mobile.'&succ');

   

}
else{
	echo 'Access Denied';
}