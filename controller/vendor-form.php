<?php
if (isset($_POST['submit'])) {
	 require_once('../owner/autho/data-autho.php');

	$date=date('d/m/Y');
	
	$firm=htmlspecialchars($_POST['firm']);
	$firstname=htmlspecialchars($_POST['firstname']);
	$lastname=htmlspecialchars($_POST['lastname']);
	$mobile=htmlspecialchars($_POST['mobile']);
	// $phone=htmlspecialchars($_POST['phone']);
	 $phone=" ";
	$email=htmlspecialchars($_POST['email']);
	// $dob=htmlspecialchars($_POST['dob']);
	$v_id=uniqid();
	$address=htmlspecialchars($_POST['address']);
	$description=mysqli_escape_string($con,$_POST['description']);
   



    
        $sql = "INSERT INTO `vendor`(`id`, `date`, `vendor_id`, `firstname`, `lastname`, `mobile`, `phone`, `email`, `description`, `address`, `firm`) VALUES(null,'" . $date . "','" . $v_id . "','" . $firstname . "','" . $lastname . "','" . $mobile . "','" . $phone . "','" . $email . "','" . $description . "','" . $address . "','" . $firm . "')";
  if (mysqli_query($con, $sql)) {
		  	//Start Send Otp Message Here//
//Your authentication key
$authKey = "316971AFkc1zeoKnGF5e3bd940P1";

//Multiple mobiles numbers separated by comma
$mobileNumber = $number;

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "AQEEQT";

//Your message to send, Add URL encoding here.
$message = urlencode("Thank you so much for registring with us. Our territory sales executive will be in touch with you shortly.
Transaction ID : ".$v_id);

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




      	header('Location:../delaer-form.php?id='.$mobile.'&succ');

      }
        else{
              header('location:../delaer-form.php?err');
        }		
		
}
else{
	echo 'Access Denied';
}


?>