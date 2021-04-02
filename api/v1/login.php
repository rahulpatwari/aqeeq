  <?php

require_once('../../owner/autho/data-autho.php');
// username and password sent from Form
 $email=mysqli_real_escape_string($con,$_GET['email']); 
 $mypassword=mysqli_real_escape_string($con,$_GET['password']); 
 $sta="active"; 
$sql="SELECT * FROM user WHERE email='$email' and password='$mypassword' and status='$sta'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{


    $userdata = mysqli_query($con,"Select * from user where email ='$email'");

    while($udata = mysqli_fetch_array($userdata)){
    $id=htmlspecialchars($udata['id']);
    $date=htmlspecialchars($udata['date']);
    $month=htmlspecialchars($udata['month']);
    $year=htmlspecialchars($udata['year']);
    $time=htmlspecialchars($udata['time']);
    $name=htmlspecialchars($udata['name']);
    $email=htmlspecialchars($udata['email']);
    $mobile=htmlspecialchars($udata['mobile']);
    $password=htmlspecialchars($udata['password']);
    $user_id=htmlspecialchars($udata['user_id']);
    $city=htmlspecialchars($udata['city']);
    $state=htmlspecialchars($udata['state']);
    $address=htmlspecialchars($udata['address']);
    $zip=htmlspecialchars($udata['zip']);
    $wallet=htmlspecialchars($udata['wallet']);
    $otp=htmlspecialchars($udata['otp']);
    $status=htmlspecialchars($udata['status']);
    
    $myObj->id = "$id";
    $myObj->date = "$date";
    $myObj->month = "$month";
    $myObj->year = "$year";
    $myObj->time = "$time";
    $myObj->name = "$name";
    $myObj->email = "$email";
    $myObj->mobile = "$mobile";
    $myObj->password = "$password";
    $myObj->user_id = "$user_id";
    $myObj->city = "$city";
    $myObj->state = "$state";
    $myObj->address = "$address";
    $myObj->zip = "$zip";
    $myObj->wallet = "$wallet";
    $myObj->otp = "$otp";
    $myObj->status = "$status";
    $myObj->message = "you are successfullly login";
    
    
    $myJSON = json_encode($myObj);

    echo $myJSON;

    }
}


?>

