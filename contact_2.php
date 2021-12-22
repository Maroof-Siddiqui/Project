<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phoneno'];
$date = $_POST['date'];
$message = $_POST['msg'];


$to_email = "$visitor_email";
$subject = "Health Care and Diagnosis";
$body = "Hi Mr.$name,\nThanks for sharing your illness with use please confirm it.
\nPhone:$phone\nDate:$date\nIllness:$message";
$headers = "From: ss19co049.maroof.siddiqui@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully...";
} else {
    echo "Email sending failed...";
}

?>