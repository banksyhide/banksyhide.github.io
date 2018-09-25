<?php 
if(isset($_POST['req_name'])){
   if(isset($_POST['req_name'])){ 
   // grab recaptcha library
	require_once "recaptchalib.php";
	$secret = "6Ldm80AUAAAAAKz3SsZCb0QuO8qLKu8OsL5Oyhc0";
	$response = null;
	$reCaptcha = new ReCaptcha($secret);
	// if submitted check response
	if ($_POST["g-recaptcha-response"]) {
		$response = $reCaptcha->verifyResponse(
			$_SERVER["REMOTE_ADDR"],
			$_POST["g-recaptcha-response"]
		);
	}
	if ($response != null && $response->success) {
         ob_start();
        $to = "info@khfinancial.ca";
            
        //$to = "javedfeb1988@outlook.com";
         $contact= $_POST["req_name"];
         $email= $_POST["req_email"];
         $phone= $_POST["req_phone"];
         $tax_type= $_POST["req_tax_type"];
         $years= $_POST["req_years"];
         $area= $_POST["req_area"];
         $days= $_POST["req_days"];
         $days1=implode(" ",$days);
        
         $time= $_POST["req_time"];
          $time1=implode(" ",$time);
         $notes= $_POST["req_notes"];
         $subject = "Appoinment  Message From Client";
         
         
         $message = "<h1>Appointment Form</h1></br>";
         $message .= "<p>Name: $contact</p>";
         $message .= "<p>Email: $email</p>";
         $message .= "<p>Phone: $phone</p>";
         
         $message .= "<p>Tax Type: $tax_type</p>";
         $message .= "<p>Years:  $years</p>";
         $message .= "<p>Area: $area</p>";
         $message .= "<p>Days available: $days1</p>";
         $message .= "<p>Time available: $time1</p>";
         $message .= "<p>Tax Notes: $notes</p>";
         
         
         
         
         $header = "From: Appoinment By ". $contact." <info@khfinancial.ca> \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
       
         if( $retval = true ) { 
         echo '<script>alert("Your message has been sent. We will contact you soon if you do not hear from us the message may not have sent.");window.location.replace("http://www.yourmodernaccountant.ca/request.html");</script>'
         ;} else {
            echo '<script>alert("Sorry, Message could not be delivered. Please try again later Thank you.");window.location.replace("http://www.yourmodernaccountant.ca/request.html");</script>'
          
         ;}
	}
	else{
		 echo '<script>alert("Captcha Verification Failed");window.location.replace("http://www.yourmodernaccountant.ca/request.html");</script>';
	}
 }
}


?>