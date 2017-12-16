<?php
// Check for empty fields
	if(empty($_POST['name'])      ||
	   empty($_POST['email'])     ||
	   empty($_POST['phone'])     ||
	   empty($_POST['message'])   ||
	   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	   {
	   echo "No arguments Provided!";
	   return false;
	   }
	   
	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email_address = strip_tags(htmlspecialchars($_POST['email']));
	$phone = strip_tags(htmlspecialchars($_POST['phone']));
	$message = strip_tags(htmlspecialchars($_POST['message']));
	   
	// Create the email and send the message
	$to = 'frozenphoenixoficial@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
	$email_subject = "Website Contact Form:  $name";
	$email_body = "Você recebeu um novo email diretamente do site Frozen Store.\n\n"."Abaixo os detalhes:\n\nNome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nMensagem:\n$message";
	$headers = "Para: frozenphoenixoficial@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$headers .= "De: $email_address";   
	mail($to,$email_subject,$email_body,$headers);
	return true;         
?>
