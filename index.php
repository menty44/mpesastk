<?php

header('Access-Control-Allow-Origin:*');

/**
 * Created by IntelliJ IDEA.
 * User: Admin
 * Date: 2018-01-06
 * Time: 12:40 AM
 *
 * This is a source code for stk push Mpesa bridge
 */


$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
$credentials = base64_encode('Gxg0Thwl5rDAHh1swnXjMDCS836M8nIj:PoxJvbGbT2f3gNno');
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials)); //setting a custom header
// curl_setopt($curl, CURLOPT_HEADER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

// Decode JSON data to PHP associative array
$arr = json_decode($result, true);

$tok = $arr["access_token"];
// Access values from the associative array
//echo $tok;
//require 'conn.php';

//echo "hello world";

$url = "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";
$amount = 10;
$partya = 254720106420;
$partyb = 174379;
$callback = "http://d4f2b016.ngrok.io/callback.php";
$transdef = "Please Pay KES. " . $amount . " to MAKAOEASY.";
$def = "test";
$transtype = "CustomerPayBillOnline";
$makaof = "MAKAO";

$date = new DateTime();
$Timestamp = date("Ymdhis");

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
$makao = "MAKAOLTD";
$makaref = $makao;
//end generating random number

$shortcode2 = 174379;

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.

$jsonData = array("BusinessShortCode" => $partyb,
    "Password" => $password,
    "Timestamp" => $Timestamp,
    "TransactionType" => $transtype,
    "Amount" => $amount,
    "PartyA" => $partya,
    "PartyB" => $partyb,
    "PhoneNumber" => $partya,
    "CallBackURL" => $callback,
    "AccountReference" => $makaref,
    "TransactionDesc" => $makaof);

//print_r($jsonData) ;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mpesabridge";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "INSERT INTO sender_details (businesscode, mpestimestamp, transactiontype, amount, sendernumber, paybill, accountref ,transdec)
//     VALUES ( 
//                                               '$partyb',
//                                               '$Timestamp',
//                                               '$transtype',
//                                               '$amount',
//                                               '$partya',
//                                               '$partyb',
//                                               '$makaref',
//                                               '$makaof')";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "New record created successfully".PHP_EOL;
// }
// catch(PDOException $e)
// {
//     echo $sql . "<br>" . $e->getMessage();
// }

//$db = pg_connect("host=localhost port=5432 dbname=mpesabridge user=postgres password=postgres");
////$query = "INSERT INTO sender_details VALUES ('$_POST[bookid]','$_POST[book_name]','$_POST[price]','$_POST[dop]')";
//$query = "INSERT INTO sender_details
// VALUES ( '$value',
//                                              '$partyb',
//                                              '$Timestamp',
//                                              '$transtype]',
//                                              '$amount',
//                                              '$partya',
//                                              '$partyb',
//                                              '$makaref',
//                                              '$makaof')";
//
//$result = pg_query($query);


//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//curl_setopt($curl, CURLOPT_POST, true);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);


//$headers = ['Content-Type: application/json', 'Bearer X1Tcq50JkDBGct4Kg8UcXtzULiFh ' ];

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization:Bearer '. $tok));

//Execute the request
$result = curl_exec($ch);

echo $result;

// Closing
curl_close($ch);

$data = json_decode($result, true);


//echo "###############";
//echo $data['MerchantRequestID'];
//echo "################";
$dataone = $data['MerchantRequestID'];
    $datatwo = $data['CheckoutRequestID'];
        $datathree = $data['ResponseCode'];
            $datafour = $data['ResponseDescription'];
                $datafive = $data['CustomerMessage'];

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "INSERT INTO customer_success (MerchantRequestID, CheckoutRequestID, ResponseCode, ResponseDescription, CustomerMessage)
//     VALUES ( 
//                                               '$dataone',
//                                               '$datatwo',
//                                               '$datathree',
//                                               '$datafour',
//                                               '$datafive')";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "New record created successfully".PHP_EOL;
// }
// catch(PDOException $e)
// {
//     echo $sql . "<br>" . $e->getMessage();
// }
//$arr = json_decode($result, true);
//
//print($arr);
