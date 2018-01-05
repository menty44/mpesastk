<?php

/**
 * Created by IntelliJ IDEA.
 * User: Admin
 * Date: 2018-01-06
 * Time: 12:40 AM
 *
 * This is a source code for stk push Mpesa bridge
 */

//echo "hello world";

$url = "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";
$amount = 10;
$partya = 0720106420;
$partyb = 174379;
$callback = "makaoeasy.com";
$transdef = "Please pay " . $amount . "to Makao Investmets.";


$Timestamp = strtotime("now");

$Consumer_Key = "Gxg0Thwl5rDAHh1swnXjMDCS836M8nIj";
$Consumer_Secret =	"PoxJvbGbT2f3gNno";
$passkey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
//ShortcodePasskeyTimestamp
$password = base64_encode($partyb.$passkey.$Timestamp);

//start generating random number
$x = 4; // Amount of digits
$min = pow(10,$x);
$max = pow(10,$x+1)-1;
$value = rand($min, $max);
$makao = "MAKAO-Ref-";
$makaref = $makao.$value;
//end generating random number

$shortcode2 = 600000;

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.

$jsonData = array('BusinessShortCode' => '',
    'Password' => $password,
    'Timestamp' => $Timestamp,
    'TransactionType' => 'CustomerPayBillOnline',
    'Amount' => $amount,
    'PartyA' => $partya,
    'PartyB' => $partyb,
    'PhoneNumber' => $partya,
    'CallBackURL' => $callback,
    'AccountReference' => $makaref,
    'TransactionDesc' => '');

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//$headers = ['Content-Type: application/json', 'Bearer X1Tcq50JkDBGct4Kg8UcXtzULiFh ' ];

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer X1Tcq50JkDBGct4Kg8UcXtzULiFh '));

//Execute the request
$result = curl_exec($ch);

echo $result;

// Closing
curl_close($ch);

//$data = json_decode($result);

//$arr = json_decode($result, true);
//
//print($arr);
