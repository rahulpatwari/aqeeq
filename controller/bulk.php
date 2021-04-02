<?php
if (isset($_POST['submit'])) {
	 require_once('../owner/autho/data-autho.php');

	$date=date('d/m/Y');
	$u_id = uniqid();
	
	$firstname=htmlspecialchars($_POST['firstname']);
	$lastname=htmlspecialchars($_POST['lastname']);
	$mobile=htmlspecialchars($_POST['mobile']);
	
	$email=htmlspecialchars($_POST['email']);
	// $dob=htmlspecialchars($_POST['dob']);
	
	$address=htmlspecialchars($_POST['address']);
	$description=mysqli_escape_string($con,$_POST['description']);
   



    
        $sql = "INSERT INTO `bulk`(`id`, `u_id`, `first_name`, `last_name`, `email`, `address`, `description`, `mobile`, `date`) VALUES(null,'" . $u_id . "','" . $firstname . "','" . $lastname . "','" . $email . "','" . $address . "','" . $description . "','" . $mobile . "','" . $date . "')";
    	if (mysqli_query($con, $sql)) {
		  	//Start Send Otp Message Here//
//Your authentication key
$authKey = "316971AFkc1zeoKnGF5e3bd940P1";

//Multiple mobiles numbers separated by comma
$mobileNumber = $number;

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "AQEEQT";

//Your message to send, Add URL encoding here.
$message = urlencode("Thank you so much for your inquiry. Our sales adviser will get in touch with you shortly.
Transaction Id : ".$u_id);

//Define route 
$route = "4";
//Prepare you post parameters
$postData = array(
   'authkey' => $authKey,
   'mobiles' => $mobile,
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




      	header('Location:../bulk.php?id='.$mobile.'&succ');

      }

        else{
              header('location:../bulk.php?err');
        }		
		
}
else{
	echo 'Access Denied';
}


?>