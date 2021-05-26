<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC912fd9532bf6ff017e8c182b0be6a3fb';
$sid = 'AC7c0e323b4e95b86c4c80c3a25a35ec1b';
$token = '656eef05d369d254fb65cd72089541d6';
$token = '3eff5af3d284b778f333bb7b6f74f87a';
$client = new Client($sid, $token);
echo "<pre>"; print_r($client); echo "</pre>"; //die;
// Use the client to do fun stuff like send text messages!
try{

	$resp = $client->messages->create(
	    // the number you'd like to send the message to
	    '+919549535700',
	    [
	        // A Twilio phone number you purchased at twilio.com/console
	        'from' => '+16476374167',
	        // the body of the text message you'd like to send
	        'body' => 'message send success'
	    ]
	);
}catch(Exception $e){
	echo $e->getMessage(); die;
}

echo "<pre>"; print_r($resp); echo "</pre>";
?>