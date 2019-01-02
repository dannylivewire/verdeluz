<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$ip = $_SERVER['REMOTE_ADDR'];

if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@VerdeLuz.eco";
	
    $email_subject = "New Request: ".$subject;
     
    $email_message .= "Name: ".$name."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Phone: ".$phone."\n";
    $email_message .= "Message: ".$message."\n";
	$email_message .= "Subject: ".$subject."\n";
	$email_message .= "IP Address: http://whatismyipaddress.com/ip/".$ip."\n";
     
	// create email headers
	$headers = 'From: '.$email."\r\n".
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers); 

?>
 
Thank you for contacting us. We will be in touch with you soon.
 
<?php
}
?>
