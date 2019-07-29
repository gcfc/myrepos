<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];
$formsubject = $_REQUEST['subject'];
$answer = $_REQUEST['answer'];
$formcontent="From: $name \n Message: $message";
$recipient = "gcfchen@mit.edu";
$subject = "Contact Form, Subject: $formsubject";
$mailheader = "From: $email \r\n";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if ($answer == 2) {
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!". " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
    } else {
        echo "You're a robot, aren't you?"
    }
} else {
    echo "Sorry, your email address '$email' is invalid.\n";
}
?>
?>