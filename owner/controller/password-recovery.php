<?php
$email=htmlspecialchars($_GET['email']);
$pass=htmlspecialchars($_GET['pass']);
$to = $email;
$subject = "Password Recovery";

$message = "
<html>
<head>
<title>Your Password</title>
</head>
<body>
<table>
<tr>
<th>Your Password Is :- $pass</th>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <sales@aqeeqtrading.com>' . "\r\n";
$headers .= 'Cc: sales@aqeeqtrading.com' . "\r\n";

$mail=mail($to,$subject,$message,$headers);
if($mail)
{
header("Location:../users.php?succ");
}
else{
header("Location:../users.php?err");
}
?>