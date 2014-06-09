<?php

	// get the data from the form
	$email = $_POST['email'];

	$to = "your.mail.address@your.mail.server.com";
	$subject = 'Email from your "Coming Soon Template"';
	$headers = "From: your.mail.address@your.mail.server.com";
	$body = "Someone wants to subscribe in your coming soon website. His/her email is; $email";
	
	//send
	$reply = mail($to, $subject, $body, $headers);
	if(!$reply){die();}
?>