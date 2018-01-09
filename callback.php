<?php
/**
 * Created by IntelliJ IDEA.
 * User: Admin
 * Date: 2018-01-06
 * Time: 12:56 PM
 */


$data = array(
    'ResultCode' => 0,
    'ResultDesc' => 'Success'
);

echo json_encode($data);



// Convert JSON string to Array
echo $someArray = json_encode($data);
print_r($someArray);        // Dump all data of the Array

$file = 'log.txt';
$fh = fopen($file, 'a');
fwrite($fh, "\n====".date("d-m-Y H:i:s")."====\n");
fwrite($fh, file_get_contents("php://input")."\n");
fclose($fh);
