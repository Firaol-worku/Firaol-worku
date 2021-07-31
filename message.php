<?php
$name  = $_POST['name'];
$email  = $_POST['email'];
$phone  = $_POST['phone'];
$website  = $_POST['website'];
$messages  = $_POST['messages'];

if (!empty($email) && !empty($messages)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $receiver = "kingoboss24@gmail.com";
        $subject = "From: $name <$email>";
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\nMessage: $message\nRegards: $name";
        $sender = "From: $email";
        if (mail($receiver, $subject, $body, $sender)) {
            echo "Your message has been send";
        }else{
            echo "Sorry, failed to send your message!";
        }
    }else {
        echo "Enter a valid email address!";
    }
}else{
    echo "Email and password field is required";
}
?>