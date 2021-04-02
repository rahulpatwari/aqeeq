<?php
if (isset($_POST['register'])) {
	$name=htmlspecialchars($_POST['name']);
	$mobile=htmlspecialchars($_POST['mobile']);
	$email=htmlspecialchars($_POST['email']);
	$password=htmlspecialchars($_POST['password']);
	$user_id=uniqid();
	$date=date('d/m/Y');
	$month=date('F');
	$day=date('l');
	$year=date('Y');
 	date_default_timezone_set('Asia/Kolkata');
	$time=date( 'H:i:s', time ());
	$status='unactive';
	$otp = rand(10000, 99999);

	
	require_once('../owner/autho/data-autho.php');

	$check = "SELECT * FROM `user` WHERE mobile = '$mobile' or email='$email'";

        $result   = mysqli_query($con, $check);

         $rowcount = mysqli_num_rows($result);

         if ($rowcount==0) {
	  $sql = "INSERT INTO `user`(`id`, `date`, `day`, `month`, `year`, `time`, `name`, `email`, `mobile`,`password`,`user_id`,`status`,`otp`) VALUES(null,'" . $date . "','" . $day . "','" . $month . "','" . $year . "','".$time."','" . $name . "','" . $email . "','" . $mobile . "','" . $password . "','" . $user_id . "','" . $status . "','" . $otp . "')";
	if (mysqli_query($con, $sql)) {
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




      	header('Location:../otp.php?id='.$mobile.'&succ');

      }

      else{

      	header('Location:../register.php?err');

      }
  }
  else{
  	      	header('Location:../register.php?already');

  }






}
else{
	echo 'Access Denied';
}