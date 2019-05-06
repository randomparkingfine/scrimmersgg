<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/db.php';
use Medoo\Medoo;
    session_start();
	
	
	$db = new Medoo($cleardb_config);
	
	
	$data = $db->select('users', ["username","email"],["username[=]"=>$_SESSION['atPage']]);
	
//	echo json_encode($data[0]);
//	echo json_encode($_SESSION);
	

$address = $_SESSION['email'];

$name = $_SESSION['username'];

$body = $_POST['msg'];

$mail = new \SendGrid\Mail\Mail();

// This is the most important field to set in the email's headers
$mail->addTo($data[0], $data[1]);

// Setting up some of the email header data
	// Keep in mind these dont'really do much for actual control
$mail->setSubject($_SESSION['username']." wants to talk");
$mail->setFrom($address, $name);
// make sure to treat the body as plain text to not allow any cheesy html <script> injection
$mail->addContent('text/plain', $body);

// Finally we send our key using the sendgrid api
$send = new \SendGrid(getenv('SENDGRID_API_KEY'));
try {
	$response = $send->send($mail);
	// now some debugging things
	/*
	print $response->statusCode() . "\n";
	print_r($response->headers());
	print $response->body() . "\n";
	*/
	echo 'Message Sent';
}
catch(Exception $e) {
	echo 'Caught: ' . $e->getMessage() . "\n";
}

?>
