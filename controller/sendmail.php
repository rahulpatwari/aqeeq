<?php
require('mailer/class.phpmailer.php');
require_once('session.php');

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
$mail->AddAddress("aqeeqecommerce@gmail.com");
$mail->Subject = "New Order Placed From Website";
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
$content.="<html xmlns='http://www.w3.org/1999/xhtml'><head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0,'>
<title>Full Screen</title>
<style>@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic);html{width:100%}body{margin:0;padding:0;width:100%;-webkit-text-size-adjust:none;-ms-text-size-adjust:none}img{display:block!important;border:0;-ms-interpolation-mode:bicubic}.ReadMsgBody{width:100%}.ExternalClass{width:100%}.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{line-height:100%}.images{display:block!important;width:100%!important}.MsoNormal{font-family:Open Sans,Arial,Helvetica Neue,Helvetica,sans-serif!important}p{margin:0!important;padding:0!important}.button td,.button a{font-family:Open Sans,Arial,Helvetica Neue,Helvetica,sans-serif!important}.button a:hover{text-decoration:none!important}@media only screen and (max-width:640px){body{width:auto!important}table[class=display-width]{width:100%!important}table[class=nulltable]{display:none!important}.null{display:none!important}.hide-height{height:0!important}.common-height{height:40px!important}.hide{display:none!important}.title-width-1{width:120px!important}td[class=title-width]{width:100px!important}.follow{width:15px!important}}@media only screen and (max-width:480px){table[class=display-width] table{width:100%!important}table[class=display-width] .button-width .button{width:auto!important}}@media only screen and (max-width:380px){.product{font-size:12px!important}.product-width{width:11px!important}.menu{font-size:10px!important}}@media only screen and (max-width:320px){td[class=title-width]{width:auto!important}}</style>
</head>
<body marginwidth='0' marginheight='0' style='margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;width:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%' offset='0' topmargin='0' leftmargin='0'>
<table data-thumb='http://pennyblacktemplates.com/demo/notifications/thumb/header-4.jpg' data-module='Header Menu' data-bgcolor='Main BG' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#333333' align='center' class=''>
<tbody>
<tr>
<td align='center'>
<table class='display-width' data-bgcolor='Header Menu BG' width='680' cellspacing='0' cellpadding='0' border='0' bgcolor='#ffffff' align='center'>
<tbody>
<tr>
<td style='padding:0 30px' align='center'>
<table class='display-width' width='600' cellspacing='0' cellpadding='0' border='0' align='center'>
<tbody>
<tr>
<td height='15'></td>
</tr>
<tr>
<td align='center'>
<table class='display-width' width='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
<tbody>
<tr>
<td>
<table class='display-width' style='border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0' width='25%' cellspacing='0' cellpadding='0' border='0' align='left'>
<tbody>
<tr>
<td valign='middle' align='center'>
<a href='#' style='color:#444444;text-decoration:none' data-color='Header Menus'>
<img src='http://infintyclub.co.in/aqeeq/images/logo.png' alt='150x50' width='150'>
</a>
</td>
</tr>
</tbody>
</table>
<table style='border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0' width='1' cellspacing='0' cellpadding='0' border='0' align='left'>
<tbody>
<tr>
<td style='line-height:20px' width='1' height='20'></td>
</tr>
</tbody>
</table>
<table class='display-width' style='border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;width:auto' width='54%' cellspacing='0' cellpadding='0' border='0' align='right'>
<tbody>
<tr>
<td valign='middle'>
<table style='width:auto!important' cellspacing='0' cellpadding='0' border='0' align='center'>
<tbody>
<tr>
<td class='hide-height' height='15'></td>
</tr>
<tr>
<td width='5'>&nbsp;</td>
<td class='MsoNormal menu' style='color:#03a9f4;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:11px;font-weight:600;letter-spacing:1px;text-transform:capitalize;'='' valign='middle' align='left'>
<a href='#' style='color:#03a9f4;text-decoration:none' data-color='Header Menus' data-size='Header Menus' data-min='10' data-max='26'>
</a>
</td>
<td width='5'>&nbsp;</td>
<td class='MsoNormal menu' style='color:#dedede;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:13px;font-weight:600;letter-spacing:1px;text-transform:capitalize;'='' data-color='Divider' data-size='Divider' data-min='10' data-max='26' valign='middle' align='left'>

</td>
<td width='5'>&nbsp;</td>
<td class='MsoNormal menu' style='color:#03a9f4;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:11px;font-weight:600;letter-spacing:1px;text-transform:capitalize;'='' valign='middle' align='left'>
</td>
<td width='5'>&nbsp;</td>
<td class='MsoNormal menu' style='color:#dedede;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:13px;font-weight:600;letter-spacing:1px;text-transform:capitalize;'='' data-color='Divider' data-size='Divider' data-min='10' data-max='26' valign='middle' align='left'>

</td>
<td width='5'>&nbsp;</td>
<td class='MsoNormal menu' style='color:#03a9f4;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:11px;font-weight:600;letter-spacing:1px;text-transform:capitalize;'='' valign='middle' align='left'>
<a href='#' style='color:#03a9f4;text-decoration:none' data-color='Header Menus' data-size='Header Menus' data-min='10' data-max='26'>
</a>
</td>
</tr>
<tr>
<td class='hide-height' height='15'></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style='line-height:15px;border-bottom:1px solid #eee' data-border-bottom-color='Header Border' height='15'>&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table data-thumb='http://pennyblacktemplates.com/demo/notifications/thumb/order-confirmation/orde-confirmation.jpg' data-module='Order Confirmation' data-bgcolor='Main BG' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#333333' align='center' class=''>
<tbody>
<tr>
<td align='center'>
<table class='display-width' data-bgcolor='Section BG' width='680' cellspacing='0' cellpadding='0' border='0' bgcolor='#ffffff' align='center'>
<tbody>
<tr>
<td style='border-bottom:1px solid #eee;padding:0 30px' data-border-bottom-color='Section Border' align='center'>
<table class='display-width' width='600' cellspacing='0' cellpadding='0' border='0' align='center'>
<tbody>
<tr>
<td align='center'>
<table class='display-width' width='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
<tbody>
<tr>
<td height='40'></td>
</tr>
<tr>
<td class='MsoNormal' style='color:#333333;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:20px;font-weight:600;letter-spacing:1px;line-height:18px;text-transform:capitalize;'='' data-color='Order Confirmation' data-size='Order Confirmation' data-min='12' data-max='30' align='right'>
Order Confirmed
</td>
</tr>
<tr>
<td height='10'></td>
</tr>
<tr>
<td class='MsoNormal' style='color:#333333;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:11px;letter-spacing:1px;line-height:18px;text-transform:capitalize;'='' align='right'>

</td>
</tr>
<tr>
<td height='30'></td>
</tr>
<tr>
<td class='MsoNormal' style='color:#333333;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:18px;font-weight:600;letter-spacing:1px;line-height:18px;text-transform:capitalize;'='' data-color='Heading' data-size='Heading' data-min='12' data-max='36' align='left'>
Order By $name,
</td>
</tr>
<tr>
<td height='20'></td>
</tr>
<tr>
<td align='left'>
<table class='display-width' width='100%' cellspacing='0' cellpadding='0' border='0' align='left'>
<tbody>
<tr>
<td class='MsoNormal' style='color:#666666;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:13px;line-height:24px;'='' data-color='Content' data-size='Content' data-min='12' data-max='30' align='left'>

</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style='border-bottom:3px solid #333' data-border-bottom-color='Content-Top Border' height='30'>&nbsp;</td>
</tr>
<tr>
<td data-bgcolor='Content BG' bgcolor='#f5f5f5' align='left'>
<table class='display-width' width='100%' cellspacing='0' cellpadding='0' border='0' align='left'>
<tbody>
<tr>
<td height='30'></td>
</tr>
<tr>
<td style='padding:0 30px'>
<table class='display-width' style='border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0' width='48%' cellspacing='0' cellpadding='0' border='0' align='left'>
<tbody>
<tr>
<td align='left'>
<table class='display-width' style='width:auto!important' width='100%' cellspacing='0' cellpadding='0' border='0' align='left'>
<tbody>
<tr>
<td class='MsoNormal' style='color:#666666;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:13px;letter-spacing:1px;line-height:15px;'='' data-color='Sub Heading-1' data-size='Sub Heading-1' data-min='10' data-max='26' align='left'>
Your order date is:
</td>
</tr>
<tr>
<td height='15'></td>
</tr>
<tr>
<td class='MsoNormal' style='color:#333333;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:13px;font-weight:600;letter-spacing:1px;line-height:20px;text-transform:uppercase;'='' data-color='Order Date' data-size='Order Date' data-min='10' data-max='26' align='left'>
$day, $month $date
</td>
</tr>
<tr>
<td height='15'></td>
</tr>
<tr>
<td class='button-width' align='left'>
<table class='button' style='border-radius:5px' data-bgcolor='Button BG' cellspacing='0' cellpadding='0' border='0' bgcolor='#f44202' align='left'>
<tbody>
<tr>
<td class='MsoNormal' style='color:#ffffff;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:12px;font-weight:bold;letter-spacing:1px;padding:7px='' 15px;text-transform:uppercase;'='' valign='middle' align='center'>
<a href='http://infintyclub.co.in/aqeeq/owner/order-history.php' style='color:#ffffff;text-decoration:none' data-color='Button Text' data-size='Button Text' data-min='10' data-max='26'>TRACK YOUR ORDER</a>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table style='border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0' width='1' cellspacing='0' cellpadding='0' border='0' align='left'>
<tbody>
<tr>
<td style='line-height:40px' width='1' height='40'></td>
</tr>
</tbody>
</table>
<table class='display-width' style='border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0' width='48%' cellspacing='0' cellpadding='0' border='0' align='right'>
<tbody>
<tr>
<td align='left'>
<table class='display-width' style='width:auto!important' width='100%' cellspacing='0' cellpadding='0' border='0' align='left'>
<tbody>
<tr>
<td class='MsoNormal' style='color:#666666;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:13px;letter-spacing:1px;line-height:15px;'='' data-color='Sub Heading-1' data-size='Sub Heading-1' data-min='10' data-max='26' align='left'>
Your Package will be sent to:
</td>
</tr>
<tr>
<td height='15'></td>
</tr>
<tr>
<td class='MsoNormal' style='color:#333333;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:13px;font-weight:600;letter-spacing:1px;line-height:24px;text-transform:uppercase;'='' data-color='Address' data-size='Address' data-min='10' data-max='26' align='left'>
$state <br> $address $city $zip
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td height='30'></td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td height='20'></td>
</tr>
<tr>
<td align='left'>
<table class='display-width' width='100%' cellspacing='0' cellpadding='0' border='0' align='left'>
<tbody>
<tr>
<td class='MsoNormal' style='color:#666666;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:13px;line-height:24px;'='' data-color='Content' data-size='Content' data-min='12' data-max='30' align='left'>
The domestic shipping options available are listed below. These shipping estimates are based on transit days (business days) after the order has left the warehouse.  They’re also based on ideal transit conditions.  Factors such as apocalyptic weather or a delivery destination in a rural location may experience delivery times beyond the estimates.
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style='border-bottom:1px dashed #ddd' data-border-bottom-color='Dotted Border' height='30'>&nbsp;</td>
</tr>
<tr>
<td height='30'></td>
</tr>
<tr>
<td align='center'>

</td>
</tr>
<tr>
<td height='30'></td>
</tr>
<tr>

</tr>
<tr>
<td height='40'></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table data-thumb='http://pennyblacktemplates.com/demo/notifications/thumb/company-name.jpg' data-module='Company Name ' data-bgcolor='Main BG' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#333333' align='center' class=''>
<tbody>
<tr>
<td align='center'>
<table class='display-width' data-bgcolor='Section BG' width='680' cellspacing='0' cellpadding='0' border='0' bgcolor='#ffffff' align='center'>
<tbody>
<tr>

</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table data-thumb='http://pennyblacktemplates.com/demo/notifications/thumb/order-confirmation/below-products.jpg' data-module='Product Gallery' data-bgcolor='Main BG' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#333333' align='center' class=''>
<tbody>
<tr>
<td align='center'>
<table class='display-width' width='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
<tbody>
<tr>

</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table data-thumb='http://pennyblacktemplates.com/demo/notifications/thumb/footer-1.jpg' data-module='Footer' data-bgcolor='Main BG' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#333333' align='center' class=''>
<tbody>
<tr>
<td align='center'>
<table class='display-width' width='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
<tbody>
<tr>
<td align='center'>
<table class='display-width' data-bgcolor='Footer BG' width='680' cellspacing='0' cellpadding='0' border='0' bgcolor='#03a9f4' align='center'>
<tbody>
<tr>
<td style='padding:0 30px' align='center'>
<table class='display-width' width='600' cellspacing='0' cellpadding='0' border='0' align='center'>
<tbody>
<tr>
<td align='center'>
<table class='display-width' width='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
<tbody>
<tr>
<td height='30'></td>
</tr>
<tr>
<td>
<table class='display-width' style='border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;width:auto' width='43%' cellspacing='0' cellpadding='0' border='0' align='left'>
<tbody>
<tr>
<td align='center'>
<table class='display-width' style='width:auto!important' width='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
<tbody>
<tr>
<td class='MsoNormal' style='color:#ffffff;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:14px;letter-spacing:1px;line-height:24px;'='' data-color='Copyright' data-size='Copyright' data-min='10' data-max='26' align='left'>
Copyright © 2019-20, Aqeeq
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table style='border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0' width='1' cellspacing='0' cellpadding='0' border='0' align='left'>
<tbody>
<tr>
<td style='line-height:20px' width='1' height='20'></td>
</tr>
</tbody>
</table>
<table class='display-width' style='border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;width:auto' width='37%' cellspacing='0' cellpadding='0' border='0' align='right'>
<tbody>
<tr>
<td align='center'>
<table class='display-width' style='width:auto!important' cellspacing='0' cellpadding='0' border='0' align='center'>
<tbody>
<tr>
<td class='MsoNormal' style='color:#ffffff;font-family:' segoe='' ui',sans-serif,arial,helvetica,lato;font-size:14px;letter-spacing:1px;line-height:24px;'='' data-color='Follow Us' data-size='Follow Us' data-min='10' data-max='26' align='left'>
Follow Us
</td>
<td class='follow' width='20'>&nbsp;</td>
<td align='left'>
<a href='#' style='color:#ffffff;text-decoration:none' data-color='Follow Us'>
<img src='http://pennyblacktemplates.com/demo/notifications/order-confirmation/img/25x25x1.png' alt='25x25x1' width='25'>
</a>
</td>
<td width='10'>&nbsp;</td>
<td align='left'>
<a href='#' style='color:#ffffff;text-decoration:none' data-color='Follow Us'>
<img src='http://pennyblacktemplates.com/demo/notifications/order-confirmation/img/25x25x2.png' alt='25x25x2' width='25'>
</a>
</td>
<td width='10'>&nbsp;</td>
<td align='left'>
<a href='#' style='color:#ffffff;text-decoration:none' data-color='Follow Us'>
<img src='http://pennyblacktemplates.com/demo/notifications/order-confirmation/img/25x25x3.png' alt='25x25x3' width='25'>
</a>
</td>
<td width='10'>&nbsp;</td>
<td align='left'>
<a href='#' style='color:#ffffff;text-decoration:none' data-color='Follow Us'>
<img src='http://pennyblacktemplates.com/demo/notifications/order-confirmation/img/25x25x4.png' alt='25x25x4' width='25'>
</a>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td height='30'></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<div id='edit_link' class='hidden' style='display:none'>
<div class='close_link'></div>
<input type='text' id='edit_link_value' class='createlink' placeholder='Your URL'>
<div id='change_image_wrapper'>
<div id='change_image'>
<p id='change_image_button'>Change &nbsp; <span class='pixel_result'></span></p>
</div>
<input type='button' value='' id='change_image_link'>
<input type='button' value='' id='remove_image'>
</div>
<div id='tip'></div>
</div>

</body></html>";
$mail->MsgHTML($content);
$mail->IsHTML(true);
if(!$mail->Send()) 
echo "Problem sending email.";
else 
echo "email sent.";

?>