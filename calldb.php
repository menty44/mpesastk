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

//echo "###################### one ###############################";
//
//print_r($freddy);

echo "###################### two ###############################";
//echo $freddy;
echo "";
echo "";
echo "";
$fred = json_decode($freddy, true);

print_r($fred);
echo "###################### three ###############################".PHP_EOL;
//foreach($data[‘Body‘][‘stkCallback’][‘CallbackMetadata’] as $key => $value) {
//    $saved = new Deposit();
//    $saved->reciept_code = $value[1][‘Value’];
//    $saved->amount = $value[0][‘Value’];
//    $saved->transaction_date = $value[3][‘Value’];
//    $saved->msisdn = $value[4][‘Value’];
//    $saved->save();
//}
//foreach ($fred["Body"] as $key => $value){
//        $data1 = $value["MerchantRequestID"].PHP_EOL;
//    $data2 = $value["CheckoutRequestID"].PHP_EOL;
//        $data3 = $value["ResultCode"].PHP_EOL;
//            $data4 = $value["ResultDesc"].PHP_EOL;
//
//    echo $data1;
//    echo $data2;
//    echo $data3;
//    echo $data4;
//
//    foreach ($fred["Body"]["stkCallback"]["CallbackMetadata"]  as $key => $value){
//
////    echo $value["MerchantRequestID"].PHP_EOL;
////    echo $value["CheckoutRequestID"].PHP_EOL;
////    echo $value["ResultCode"].PHP_EOL;
////    echo $value["ResultDesc"].PHP_EOL;
//
////}
//
////foreach ($fred["Body"]["stkCallback"]["CallbackMetadata"]  as $key => $value){
//    echo $value[0]['Value'].PHP_EOL;
//    echo $value[1]['Value'].PHP_EOL;
//    echo $value[2]['Name'].PHP_EOL;
//    echo $value[3]['Value'].PHP_EOL;
//
//}}


//
//$five = $value[0]['Value'].PHP_EOL;
//$six = $value[1]['Value'].PHP_EOL;
//$seven = $value[2]['Name'].PHP_EOL;
//$eight = $value[3]['Value'].PHP_EOL;
//
//echo "$$$$ $$$$$ $$$$ $$$$".PHP_EOL;
//echo $data1;
//echo $data2;
//echo $data3;
//echo $data4;
//echo $five;
//echo $six;
//echo $seven;
//echo $eight;

$one = $fred["Body"]["stkCallback"]["MerchantRequestID"];
//echo $one;
//$two = $fred["Body"]["stkCallback"]["CheckoutRequestID"];
//$three = $fred["Body"]["stkCallback"]["ResultCode"];
//$four = $fred["Body"]["stkCallback"]["ResultDesc"];
$five = $fred["Body"]["stkCallback"]["CallbackMetadata"]["Item"][0]["Value"];
echo $five;
$six = $fred["Body"]["stkCallback"]["CallbackMetadata"]["Item"][1]["Value"];
$seven = $fred["Body"]["stkCallback"]["CallbackMetadata"]["Item"][2]["Name"];
$eight = $fred["Body"]["stkCallback"]["CallbackMetadata"]["Item"][3]["Value"];
$nine = $fred["Body"]["stkCallback"]["CallbackMetadata"]["Item"][4]["Value"];
echo $five.PHP_EOL;
echo $six.PHP_EOL;
echo $seven.PHP_EOL;
echo $eight.PHP_EOL;
echo $nine.PHP_EOL;
//
////print_r($jsonData) ;
//
//$db = pg_connect("host=localhost port=5432 dbname=mpesabridge user=postgres password=postgres");
////$query = "INSERT INTO sender_details VALUES ('$_POST[bookid]','$_POST[book_name]','$_POST[price]','$_POST[dop]')";
//$query = "INSERT INTO callback VALUES ( '$one',
//                                              '$two',
//                                              '$three',
//                                              '$four',
//                                              '$five',
//                                              '$six',
//                                              '$seven',
//                                              '$eight',
//                                              '$nine')";
//
//$result = pg_query($query);
//
//echo $one.PHP_EOL;
//echo $two.PHP_EOL;
//echo $three.PHP_EOL;
//echo $four.PHP_EOL;
//echo $five.PHP_EOL;
//echo $six.PHP_EOL;
//echo $seven.PHP_EOL;
//echo $eight.PHP_EOL;
//echo $nine.PHP_EOL;
//function recursiveEcho($kak){
//if (is_array($kak)) {
//    foreach ($kak as $key => $value) {
//        if (is_array($value)) {
//            recursiveEcho($value);
//        } else {
//            //echo "Input name Correct: {$key} Value: {$value}";
//           // echo $key . " " . " " . $value;
//            echo $kak;
//        }
//    }
//} else {
//    // This is a string, there is no key to show
//    echo "Input value no Key: {$kak}";
//}}
//
//echo recursiveEcho($fred);
//$list = array( 'var1' => 'value1', 'var2' => 'value2' );
//foreach ( $fred as $key => $value ) { $$key = $value; }
//echo $value; //prints 'value1'

// print_r($fred);
























//$test1 = $t->body->stkCallback->MerchantRequestID->CallbackMetadata;
//$test2 = $t['body']['stkCallback']['MerchantRequestID']['CallbackMetadata'][0];


