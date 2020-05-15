<?php

if($_POST["submit"]) {
    $recipient="ben.deangelis98@gmail.com";
    $subject="Portfolio contact email";
    $sender=$_POST["contact-name"];
    $senderEmail=$_POST["contact-email"];
    $message=$_POST["contact-message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>