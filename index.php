<?php
session_start();
require_once "vendor/autoload.php";
require_once "app/config/constants.php";


$to      = 'info@manufacturyofshapes.co.uk';
$subject = 'Test meassage';
$message = 'hello';
$headers = 'From: waghtot@gmail.com' . "\r\n" .
	    'Reply-To: waghtot@gmail.com' . "\r\n" .
	        'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


// $success = mail($to, $subject, $message, $headers);
// if (!$success) {
//     $errorMessage = error_get_last()['message'];
// }

// error_log('email sent: '.print_r($errorMessage, 1));

//new Router();

?>