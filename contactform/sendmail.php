<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        $email_body = "You have received a new message from the user $name.\n". "Here is the message:\n $message". 
        $company_email = 'info@VerdeLuz.Eco';   
        $headers = "From: $company_email \r\n";
        $headers .= "Reply-To: $visitor_email \r\n";
        $to = "danny.livewire@gmail.com, tonyfcohen@gmail.com, chicagomultipass@gmail.com";
        mail($to, $subject, $email_body, $headers);
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }   
?>
