<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'qwerty';
$sid = 'qwerty';
$token = 'qwerty';
$token = 'qwerty';
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