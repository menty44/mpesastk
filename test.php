<?php
/**
 * Created by IntelliJ IDEA.
 * User: Admin
 * Date: 2018-01-06
 * Time: 12:40 AM
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
echo $tok;









