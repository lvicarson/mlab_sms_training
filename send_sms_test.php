<?php

function sendSMS()
{
require_once('AfricasTalkingGateway.php');
// Specify your login credentials
$username = "lvicarson";
$apikey = "fcbda37fc9e1a4ef1fb994b58966f9194c99f5d9ea88aac275798e8b1f0dd1e3";
// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
$recipients = "+254718931397";
// And of course we want our recipients to know what we really do
$message = "I'm a lumberjack and its ok, I sleep all night and I work all day";
// Create a new instance of our awesome gateway class
$gateway = new AfricasTalkingGateway($username, $apikey);
// Any gateway errors will be captured by our custom Exception class below,
// so wrap the call in a try-catch block
try {
// Thats it, hit send and we'll take care of the rest.
$results = $gateway->sendMessage($recipients, $message);
foreach ($results as $result) {
// Note that only the Status "Success" means the message was sent
echo " Number: " . $result->number;
echo " Status: " . $result->status;
echo " MessageId: " . $result->messageId;
echo " Cost: " . $result->cost . "\n";
}
} catch (AfricasTalkingGatewayException $e) {
echo "Encountered an error while sending: " . $e->getMessage();
}
}
sendSMS();
?>