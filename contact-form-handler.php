<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['message'];
	
	$email_from = 'alemarginean@yahoo.com';
	$email_subject = 'New Form Submission';
	$email_body= "Nume: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";
	$to = "ana14@yahoo.com";
	$headers = "From: $email_form\r\n";
	mail($to,$email_subject,$email_body,$headers);
	header("Location: contact.html");
?>