<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['surname'])  	||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$surname = $_POST['surname'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'adam.sajewski@nzspw.pl';
$email_subject = "Website Contact Form:  $name";
$email_body = "Otrzymałeś wiadomość ze strony enactuspw.pl\n\n"."Oto szczegóły wiadomości:\nImię: $name\nNazwisko: $surname\nEmail: $email_address\nWiadomość:\n$message";
$headers = "From: noreply@yourdomain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);

return true;			
?>