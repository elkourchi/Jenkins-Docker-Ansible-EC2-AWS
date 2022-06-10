<?php 
/*$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];*/




$name = strip_tags(htmlspecialchars($_POST['name']));
$email= strip_tags(htmlspecialchars($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

/*echo $name; 
echo $email;
echo $subject;
echo $message;*/

$to = 'direction.athelcall@gmail.com';
$email_subject = "Message du site web de :  $name";
$email_body = "vous avez reçu un nouveau message à partir de votre site web.\n\n"."Voici les détails:\n\nNom: $name\n\n Email: $email\n\n subject: $subject \n\n Message:\n $message";

$headers = "de : contact@athelcall.com \n"; 

$headers .= "Reply-To: $email";	
mail($to,$email_subject,$email_body,$headers);
return true;

?>