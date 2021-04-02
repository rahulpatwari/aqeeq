<?php
         //Start Message Here//
      //Your authentication key
      $authKey = "217555AGLWZc405b0b9640";


      //Multiple mobiles numbers separated by comma
      $mobileNumber = $getmobile;

      //Sender ID,While using route4 sender id should be 6 characters long.
      $senderId = "AQEEQS";

      //Your message to send, Add URL encoding here.
      $message = urlencode("Hello $getname Your Product Dispatched Successfully Your Order Tracking Id $tracking_id Track Your Id By This Link  $dartname  ");

      //Define route 
      $route = "4";
      //Prepare you post parameters
      $postData = array(
          'authkey' => $authKey,
          'mobiles' => $mobileNumber,
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
           'error:' . curl_error($ch);
          echo "server error contact to provider"; 
      }

      curl_close($ch);

       echo $output;

      //End Send Otp Message Here//












//End Message Here//
