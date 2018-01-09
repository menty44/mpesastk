<?php
/**
 * Created by IntelliJ IDEA.
 * User: Admin
 * Date: 2018-01-06
 * Time: 8:36 PM
 */

$freddy = "{
    \"Body\": {
        \"stkCallback\": {
            \"MerchantRequestID\": \"4558-468965-1\",
            \"CheckoutRequestID\": \"ws_CO_06012018130059318\",
            \"ResultCode\": 0,
            \"ResultDesc\": \"The service request is processed successfully.\",
            \"CallbackMetadata\": {
                \"Item\": [
                    {
                        \"Name\": \"Amount\",
                        \"Value\": 10
                    },
                    {
                        \"Name\": \"MpesaReceiptNumber\",
                        \"Value\": \"MA6439W4WY\"
                    },
                    {
                        \"Name\": \"Balance\"
                    },
                    {
                        \"Name\": \"TransactionDate\",
                        \"Value\": 20180106130157
                    },
                    {
                        \"Name\": \"PhoneNumber\",
                        \"Value\": 254720106420
                    }
                ]
            }
        }
    }
}";

echo "###################### one ###############################";

//print_r($freddy);

echo "###################### two ###############################";
//echo $freddy;
echo "";
echo "";
echo "";
$fred = json_decode($freddy,true);



// $kuku = substr($result,  0, -1);

// $paka = substr($kuku,  0, -2);

// $mars = json_encode($paka);
echo "###################### three ###############################";
echo "";
echo "";
echo "";

 print_r($fred);
echo "fff";
 echo $test2;
 echo "fff";

// $t = json_decode($fred,true);

//$test = substr($t, 1, -1);  // bcd
//echo "ttttttttt";
//echo $t;
$test1 = $t->body->stkCallback->MerchantRequestID->CallbackMetadata;
$test2 = $t['body']['stkCallback']['MerchantRequestID']['CallbackMetadata'][0];
//$sid = $fred['data']["sid"];
//$ip  = $fred['data']["ip"];

//echo " ###########";
//echo " resuls TWO";
//echo " resuls TWO";
//echo $test1 ;
echo " resuls TWO";
echo " ###########";
echo $test2 ;
echo " ###########";

