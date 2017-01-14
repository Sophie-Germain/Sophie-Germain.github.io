<?php
$to      = 'a.cotton.soul@gmail.com';
$sender  = $_POST['sender'];
$subject = $_POST['subject'];
$message = "You have received a new message from ".$_POST['name'].":"."\r\n\n".
			$_POST['comment'];
$headers = 'From: '.$sender."\r\n".
    'Reply-To: '.$sender."\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
header("Location: ./index.html");
?> 