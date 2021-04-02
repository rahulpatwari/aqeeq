<?php
require('mailer/class.phpmailer.php');
$email=htmlspecialchars($_GET['email']);
$pass=htmlspecialchars($_GET['pass']);

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "aqeeqecommerce@gmail.com";
$mail->Password = "arpit@123";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom("aqeeqecommerce@gmail.com", "Aqeeq");
$mail->AddReplyTo("aqeeqecommerce@gmail.com", "Aqeeq");
$mail->AddAddress($email);
$mail->Subject = "Password Recovery";
$date=date('d/m/Y');
  $month=date('F');
  $day=date('l');
  $year=date('Y');
  date_default_timezone_set('Asia/Kolkata');
  $time=date( 'H:i:s', time ());
/*$content="<table>"; 
// here you can add a more "outside loop" rows
// like $content.="<tr><td>whatever content</td></tr>";

// then create content from the loop
	for ($i=0; $i < 10; $i++) { 

    $content.="<tr><td>$i</td></tr>";
}   
// close the table out*/
$content.="<html>
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
</html>";
$mail->MsgHTML($content);
$mail->IsHTML(true);
if(!$mail->Send()) 
header("Location:../users.php?err");
else 
header("Location:../users.php?succ");
?>