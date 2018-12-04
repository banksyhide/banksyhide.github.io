<?php 
if(isset($_POST['contact_name'])){
   if(isset($_POST['contact_email'])){ 
   // grab recaptcha library
	require_once "recaptchalib.php";
	$secret = "6LcV9nEUAAAAANdSFjcMYHXT9EZD5jARmF1vUhit";
	$response = null;
	$reCaptcha = new ReCaptcha($secret);
//	 if submitted check response
	if ($_POST["g-recaptcha-response"]) {
		$response = $reCaptcha->verifyResponse(
			$_SERVER["REMOTE_ADDR"],
			$_POST["g-recaptcha-response"]
		);
	}
	if ($response != null && $response->success) {
         ob_start();
        $to = "n.barahvostova@gmail.com";
         //$to = "info@khfinancial.ca";
      // $to = "javedfeb1988@outlook.com";
        
         $contact= $_POST["contact_name"];
         $email= $_POST["contact_email"];
         $phone= $_POST["contact_phone"];
         $place= $_POST["contact_place"];
         $yearstofile= $_POST["contact_yearstofile"];
        $hstfile= $_POST["contact_hstfile"];
        $meeting= $_POST["contact_meeting"];
        $professional= $_POST["contact_professional"];
        $discuss= $_POST["contact_discuss"];

        $incomeType = $_POST['incomeType'];

         $sub= $_POST["contact_subject"];
          $subject = "Contact Form " . $contact;
         $cn_message= $_POST["contact_message"];

         $message = "<h1>Client message from Contact page</h1></br>";
         $message .= "<p>Name: $contact</p>";
         $message .= "<p>Email: $email</p>";
         $message .= "<p>Phone: $phone</p>";
         $message .= "<p>City: $place</p>";
        $message .= "<hr>";
        $message .= "<h3> Type of income:</h3></br>";


        if(empty($incomeType))
        {
            $message .= "<p> Client did not choose anything </p>";
        }
        else
        {
            $N = count($incomeType);

            for($i=0; $i < $N; $i++)
            {
                $message .= "<p> $incomeType[$i] </p>";
            }
        }

        $message .= "<hr>";
         $message .= "<p>Years to file: $yearstofile</p>";
         $message .= "<p>Need to file HST: $hstfile</p>";
         $message .= "<p>Need video/phone meeting: $meeting</p>";
         $message .= "<p>Tax professional: $professional</p>";
         $message .= "<p>Need to be contacted: $discuss</p>";

         $message .= "<p>Subject Chosen: $sub</p>";
         $message .= "<p>Message: $cn_message</p>";
         
         
         
         $header = "From:Contact Form " . $contact. "<info@khfinancial.ca> \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
       
         if( $retval = true ) { 
         echo '<script>alert("Your message has been sent. We will contact you soon if you do not hear from us the message may not have sent.");window.location.replace("http://www.yourmodernaccountant.ca/contact.html");</script>'
         ;} else {
            echo '<script>alert("Sorry, Message could not be delivered. Please try again later Thank you.");window.location.replace("http://www.yourmodernaccountant.ca/contact.html");</script>'
          
         ;}
	}
	else{
		 echo '<script>alert("Captcha Verification Failed");window.location.replace("http://www.yourmodernaccountant.ca/contact.html");</script>';
	}
 }
}


?>