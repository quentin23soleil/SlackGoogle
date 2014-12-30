<?php

// replace with your url you got here : https://my.slack.com/services/new/incoming-webhook
$INCOMING_WEBHOOK_URL = "";

$USERNAME = "Y U NO GOOGLE GOD DAMNIT?";
$ICON = ":troll:";


$text = $_POST['text'];
$channel_name = $_POST['channel_name'];


$curl = curl_init($INCOMING_WEBHOOK_URL);
curl_setopt($curl, CURLOPT_POST, true);

$response = "https://www.google.com/?#q=".rawurlencode($text);

$payload = array(
    'text' => rawurlencode($response),
    'username' => $USERNAME,
    'icon_emoji' => $ICON,
    'channel' => "#".$channel_name
);
$jsonPayload = "payload=".json_encode($payload);

curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonPayload);

$return = curl_exec($curl);
curl_close($curl);
?>
