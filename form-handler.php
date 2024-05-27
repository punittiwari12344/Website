<?php
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $email_from='pawantiwari.infinityfreeapp.com';
    $email_subject='New Form Submission';

    $email_body="User Name: $name \t". 
                "User Email: $visitor_email \t".
                "Subject: $subject \t".
                "Message: $message \t";


    $to ='pawantiwari12344@gmail.com';
    $headers="Form: $email_from \r\n";
    $headers .="Reply-To: $vivitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");


?>