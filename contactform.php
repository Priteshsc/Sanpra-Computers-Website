<?php
	$name = $_post['name];
	visitor_email = $_post['email'];
	$message = $_post['message'];
	
	
	$email_form = 'priteshc100@gmail.com';
	$email_subject = "New Form Submission";
	$email_body = "User Name: $name.\n".
	               "User Email: $visitor_email.\n";
						"User Message: $message.\n";
						
			$to = "priteshc100@gmail";
			$headers = "From-To: $visitor_email\r\n";
			mail($to,$email_subject,email_body,$header);
			header("Location: index.html");	

?>