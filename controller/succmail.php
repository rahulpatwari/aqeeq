<?php
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
$mail->SetFrom("$email", "$name");
$mail->AddReplyTo("aqeeqecommerce@gmail.com", "Aqeeq");
$mail->AddAddress("aqeeqecommerce@gmail.com");
$mail->Subject = "Thankyou $name Your Order Successfully Placed";
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
$contentr.="<html xmlns='http://www.w3.org/1999/xhtml' class='gr__infintyclub_co_in'><head>

          
        <meta charset='utf-8'><meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'><meta name='x-apple-disable-message-reformatting'><meta http-equiv='X-UA-Compatible' content='IE=edge'><title>Full Screen</title><style>
      a { text-decoration: none; outline: none; }
      @media (max-width: 649px) {
        .o_col-full { max-width: 100% !important; }
        .o_col-half { max-width: 50% !important; }
        .o_hide-lg { display: inline-block !important; font-size: inherit !important; max-height: none !important; line-height: inherit !important; overflow: visible !important; width: auto !important; visibility: visible !important; }
        .o_hide-xs, .o_hide-xs.o_col_i { display: none !important; font-size: 0 !important; max-height: 0 !important; width: 0 !important; line-height: 0 !important; overflow: hidden !important; visibility: hidden !important; height: 0 !important; }
        .o_xs-center { text-align: center !important; }
        .o_xs-left { text-align: left !important; }
        .o_xs-right { text-align: left !important; }
        table.o_xs-left { margin-left: 0 !important; margin-right: auto !important; float: none !important; }
        table.o_xs-right { margin-left: auto !important; margin-right: 0 !important; float: none !important; }
        table.o_xs-center { margin-left: auto !important; margin-right: auto !important; float: none !important; }
        h1.o_heading { font-size: 32px !important; line-height: 41px !important; }
        h2.o_heading { font-size: 26px !important; line-height: 37px !important; }
        h3.o_heading { font-size: 20px !important; line-height: 30px !important; }
        .o_xs-py-md { padding-top: 24px !important; padding-bottom: 24px !important; }
        .o_xs-pt-xs { padding-top: 8px !important; }
        .o_xs-pb-xs { padding-bottom: 8px !important; }
      }
      @media screen {
        @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 400;
          src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
          unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF; }
        @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 400;
          src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
          unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD; }
        @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 700;
          src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');
          unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF; }
        @font-face {
          font-family: 'Roboto';
          font-style: normal;
          font-weight: 700;
          src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');
          unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD; }
        .o_sans, .o_heading { font-family: 'Roboto', sans-serif !important; }
        .o_heading, strong, b { font-weight: 700 !important; }
        a[x-apple-data-detectors] { color: inherit !important; text-decoration: none !important; }
      }
      #canvas td.o_hide, #canvas td.o_hide div { display: block!important; font-family: 'Roboto', sans-serif; font-size: 16px!important; color: #000; font-size: inherit!important; max-height: none!important; width: auto!important; line-height: inherit!important; visibility: visible!important;}
      .CodeMirror { line-height: 1.4; font-size: 12px; font-family: sans-serif; }
    </style>

          
        </head><body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0' data-gr-c-s-loaded='true'><table data-module='header-white0' data-thumb='http://www.stampready.net/dashboard/editor/user_uploads/zip_uploads/2018/11/19/SIxzKkFZEt7bcAjVeoaR602h/account_welcome/thumbnails/header-white.png' width='100%' cellspacing='0' cellpadding='0' border='0' role='presentation' class=''>
      
        <tbody><tr>
          <td class='o_bg-white o_px-md o_py-md o_sans o_text' align='center' data-bgcolor='Bg White' data-size='Text Default' data-min='12' data-max='20' style='font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;background-color: #ffffff;padding-left: 24px;padding-right: 24px;padding-top: 24px;padding-bottom: 24px;'>
            <p style='margin-top: 0px;margin-bottom: 0px;'><a class='o_text-primary' href='https://example.com/' data-color='Primary' style='text-decoration: none;outline: none;color: #126de5;'><img src='http://infintyclub.co.in/aqeeq/images/logo.png' width='136' height='36' alt='SimpleApp' style='max-width: 136px;-ms-interpolation-mode: bicubic;vertical-align: middle;border: 0;line-height: 100%;height: auto;outline: none;text-decoration: none;' data-crop='false'></a></p>
          </td>
        </tr>
      
    </tbody></table><table data-module='hero-white-button0' data-thumb='http://www.stampready.net/dashboard/editor/user_uploads/zip_uploads/2018/11/19/SIxzKkFZEt7bcAjVeoaR602h/account_welcome/thumbnails/hero-white-button.png' width='100%' cellspacing='0' cellpadding='0' border='0' role='presentation' class=''>
      
        <tbody><tr>
          <td class='o_bg-white o_px-md o_py-xl o_xs-py-md' align='center' data-bgcolor='Bg White' style='background-color: #ffffff;padding-left: 24px;padding-right: 24px;padding-top: 64px;padding-bottom: 64px;'>
            <!--[if mso]><table width='584' cellspacing='0' cellpadding='0' border='0' role='presentation'><tbody><tr><td align='center'><![endif]-->
            <div class='o_col-6s o_sans o_text-md o_text-light o_center' data-color='Light' data-size='Text MD' data-min='15' data-max='23' style='font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 19px;line-height: 28px;max-width: 584px;color: #82899a;text-align: center;'>
              <h2 class='o_heading o_text-dark o_mb-xxs' data-color='Dark' data-size='Heading 2' data-min='20' data-max='40' style='font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 4px;color: #242b3d;font-size: 30px;line-height: 39px;'>Congratulations $name!</h2>
              <p class='o_mb-md' style='margin-top: 0px;margin-bottom: 24px;'>Your Order Placed Successfully </p>
              <table align='center' cellspacing='0' cellpadding='0' border='0' role='presentation'>
                
                  <tbody><tr>
                    <td width='300' class='o_btn o_bg-primary o_br o_heading o_text' align='center' data-bgcolor='Bg Primary' data-size='Text Default' data-min='12' data-max='20' style='font-family: Helvetica, Arial, sans-serif;font-weight: bold;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;mso-padding-alt: 12px 24px;background-color: #126de5;border-radius: 4px;'>
                      <a class='o_text-white' href='http://infintyclub.co.in/aqeeq/my-account.php' data-color='White' style='text-decoration: none;outline: none;color: #ffffff;display: block;padding: 12px 24px;mso-text-raise: 3px;'>Get Your Order History</a>
                    </td>
                  </tr>
                
              </tbody></table>
            </div>
            <!--[if mso]></td></tr></table><![endif]-->
          </td>
        </tr>
      
    </tbody></table><table data-module='content0' data-thumb='http://www.stampready.net/dashboard/editor/user_uploads/zip_uploads/2018/11/19/SIxzKkFZEt7bcAjVeoaR602h/account_welcome/thumbnails/content.png' width='100%' cellspacing='0' cellpadding='0' border='0' role='presentation' class=''>
      
        <tbody><tr>
          <td class='o_bg-white o_px-md o_py' align='center' data-bgcolor='Bg White' style='background-color: #ffffff;padding-left: 24px;padding-right: 24px;padding-top: 16px;padding-bottom: 16px;'>
            <!--[if mso]><table width='584' cellspacing='0' cellpadding='0' border='0' role='presentation'><tbody><tr><td align='center'><![endif]-->
            <div class='o_col-6s o_sans o_text o_text-secondary o_center' data-color='Secondary' data-size='Text Default' data-min='12' data-max='20' style='font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 16px;line-height: 24px;max-width: 584px;color: #424651;text-align: center;'>
              <p style='margin-top: 0px;margin-bottom: 0px;'>The domestic shipping options available are listed below. These shipping estimates are based on transit days (business days) after the order has left the warehouse. They’re also based on ideal transit conditions. Factors such as apocalyptic weather or a delivery destination in a rural location may experience delivery times beyond the estimates.</p>
            </div>
            <!--[if mso]></td></tr></table><![endif]-->
          </td>
        </tr>
      
    </tbody></table><table data-module='spacer-lg0' data-thumb='http://www.stampready.net/dashboard/editor/user_uploads/zip_uploads/2018/11/19/SIxzKkFZEt7bcAjVeoaR602h/account_welcome/thumbnails/spacer-lg.png' width='100%' cellspacing='0' cellpadding='0' border='0' role='presentation' class=''>
      
        <tbody><tr>
          <td class='o_bg-white' style='font-size: 48px;line-height: 48px;height: 48px;background-color: #ffffff;' data-bgcolor='Bg White'>&nbsp; </td>
        </tr>
      
    </tbody></table><table data-module='footer-light-2cols0' data-thumb='http://www.stampready.net/dashboard/editor/user_uploads/zip_uploads/2018/11/19/SIxzKkFZEt7bcAjVeoaR602h/account_welcome/thumbnails/footer-light-2cols.png' width='100%' cellspacing='0' cellpadding='0' border='0' role='presentation' class=''>
      
        <tbody><tr>
          <td class='o_bg-light o_px o_pb-lg' align='center' data-bgcolor='Bg Light' style='background-color: #dbe5ea;padding-left: 16px;padding-right: 16px;padding-bottom: 32px;'>
            <!--[if mso]><table cellspacing='0' cellpadding='0' border='0' role='presentation'><tbody><tr><td width='200' align='left' valign='top' style='padding:0px 8px;'><![endif]-->
            <div class='o_col o_col-4' style='display: inline-block;vertical-align: top;width: 100%;max-width: 400px;'>
              <div style='font-size: 32px; line-height: 32px; height: 32px;'>&nbsp; </div>
              <div class='o_px-xs o_sans o_text-xs o_text-light o_left o_xs-center' data-color='Light' data-size='Text XS' data-min='10' data-max='18' style='font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;color: #82899a;text-align: left;padding-left: 8px;padding-right: 8px;'>
                <p class='o_mb-xs' style='margin-top: 0px;margin-bottom: 8px;'>©2019 Aqeeq Trading.</p>
                
                <p style='margin-top: 0px;margin-bottom: 0px;'>
                  <a class='o_text-light o_underline' href='https://example.com/' data-color='Light' style='text-decoration: underline;outline: none;color: #82899a;'>Help Center</a> <span class='o_hide-xs'>&nbsp; • &nbsp;</span><br class='o_hide-lg' style='display: none;font-size: 0;max-height: 0;width: 0;line-height: 0;overflow: hidden;mso-hide: all;visibility: hidden;'>
                  <a class='o_text-light o_underline' href='https://example.com/' data-color='Light' style='text-decoration: underline;outline: none;color: #82899a;'>Preferences</a> <span class='o_hide-xs'>&nbsp; • &nbsp;</span><br class='o_hide-lg' style='display: none;font-size: 0;max-height: 0;width: 0;line-height: 0;overflow: hidden;mso-hide: all;visibility: hidden;'>
                  <a class='o_text-light o_underline' href='https://example.com/' data-color='Light' style='text-decoration: underline;outline: none;color: #82899a;'>Unsubscribe</a>
                </p>
              </div>
            </div>
            <!--[if mso]></td><td width='400' align='right' valign='top' style='padding:0px 8px;'><![endif]-->
            <div class='o_col o_col-2' style='display: inline-block;vertical-align: top;width: 100%;max-width: 200px;'>
              <div style='font-size: 32px; line-height: 32px; height: 32px;'>&nbsp; </div>
              <div class='o_px-xs o_sans o_text-xs o_text-light o_right o_xs-center' data-size='Text XS' data-min='10' data-max='18' style='font-family: Helvetica, Arial, sans-serif;margin-top: 0px;margin-bottom: 0px;font-size: 14px;line-height: 21px;color: #82899a;text-align: right;padding-left: 8px;padding-right: 8px;'>
                <p style='margin-top: 0px;margin-bottom: 0px;'>
                  <a class='o_text-light' href='https://example.com/' data-color='Light' style='text-decoration: none;outline: none;color: #82899a;'><img src='http://www.stampready.net/dashboard/editor/user_uploads/zip_uploads/2018/11/19/SIxzKkFZEt7bcAjVeoaR602h/account_welcome/images/facebook-light.png' width='36' height='36' alt='fb' style='max-width: 36px;-ms-interpolation-mode: bicubic;vertical-align: middle;border: 0;line-height: 100%;height: auto;outline: none;text-decoration: none;' data-crop='false'></a><span> &nbsp;</span>
                  <a class='o_text-light' href='https://example.com/' data-color='Light' style='text-decoration: none;outline: none;color: #82899a;'><img src='http://www.stampready.net/dashboard/editor/user_uploads/zip_uploads/2018/11/19/SIxzKkFZEt7bcAjVeoaR602h/account_welcome/images/twitter-light.png' width='36' height='36' alt='tw' style='max-width: 36px;-ms-interpolation-mode: bicubic;vertical-align: middle;border: 0;line-height: 100%;height: auto;outline: none;text-decoration: none;' data-crop='false'></a><span> &nbsp;</span>
                  <a class='o_text-light' href='https://example.com/' data-color='Light' style='text-decoration: none;outline: none;color: #82899a;'><img src='http://www.stampready.net/dashboard/editor/user_uploads/zip_uploads/2018/11/19/SIxzKkFZEt7bcAjVeoaR602h/account_welcome/images/instagram-light.png' width='36' height='36' alt='ig' style='max-width: 36px;-ms-interpolation-mode: bicubic;vertical-align: middle;border: 0;line-height: 100%;height: auto;outline: none;text-decoration: none;' data-crop='false'></a><span> &nbsp;</span>
                  <a class='o_text-light' href='https://example.com/' data-color='Light' style='text-decoration: none;outline: none;color: #82899a;'></a>
                </p>
              </div>
            </div>
            <!--[if mso]></td></tr></table><![endif]-->
            <div class='o_hide-xs' style='font-size: 64px; line-height: 64px; height: 64px;'>&nbsp; </div>
          </td>
        </tr>
      
    </tbody></table><div id='edit_link' class='hidden' style='display: none;'>

            <!-- Close Link -->
            <div class='close_link'></div>

            <!-- Edit Link Value -->
            <input type='text' id='edit_link_value' class='createlink' placeholder='Your URL'>

            <!-- Change Image Wrapper-->
            <div id='change_image_wrapper'>

              <!-- Change Image Tooltip -->
              <div id='change_image'>

                <!-- Change Image Button -->
                <p id='change_image_button'>Change &nbsp; <span class='pixel_result'></span></p>

              </div>

              <!-- Change Image Link Button -->
              <input type='button' value='' id='change_image_link'>

              <!-- Remove Image -->
              <input type='button' value='' id='remove_image'>

            </div>

            <!-- Tooltip Bottom Arrow-->
            <div id='tip'></div>

          </div></body></html>";
$mail->MsgHTML($contentr);
$mail->IsHTML(true);
if(!$mail->Send()) 
echo "Problem sending email.";
else 
echo "email sent.";

?>