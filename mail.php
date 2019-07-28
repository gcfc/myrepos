<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formsubject = $_POST['subject'];
$answer = $_POST['answer'];
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