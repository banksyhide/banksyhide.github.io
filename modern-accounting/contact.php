<?php 
if(isset($_POST['contact_name'])){
   if(isset($_POST['contact_email'])){ 
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
         // $to = "javedfeb1988@outlook.com";
         
         $contact= $_POST["contact_name"];
         $email= $_POST["contact_email"];
         $phone= $_POST["contact_phone"];
         $subject = "Client Message". $contact;
         $sub= $_POST["contact_subject"];
         $cn_message= $_POST["contact_message"];
         $message = "<h1> Contact Form</h1></br>";
         $message .= "<p>Name: $contact</p>";
         $message .= "<p>Email: $email</p>";
         $message .= "<p>Phone: $phone</p>";
         $message .= "<p>Subject Chosen: $sub</p>";
         $message .= "<p>Message: $cn_message</p>";
         
         
         
         $header = "From:Contact Form " . $contact. "<info@khfinancial.ca> \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
       
         if( $retval = true ) { 
         echo '<script>alert("Your message has been sent. We will contact you soon if you do not hear from us the message may not have sent.");window.location.replace("http://www.yourmodernaccountant.ca");</script>'
         ;} else {
            echo '<script>alert("Sorry, Message could not be delivered. Please try again later Thank you.");window.location.replace("http://www.yourmodernaccountant.ca");</script>'
          
         ;}
	}
	else{
		 echo '<script>alert("Captcha Verification Failed");window.location.replace("http://www.yourmodernaccountant.ca");</script>';
	}
 }
}


?>