<?php

$username = "";
$password = "";

$receiver = "01xxxxxxxxx";                                              // 01xxxxxxxxx - for Single
// $receiver = "(01xxxxxxxxx,01xxxxxxxxx,01xxxxxxxxx)";                    // (01xxxxxxxxx,01xxxxxxxxx,01xxxxxxxxx) - for Multiple

$sms_content = "";

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "http://portal.pairsms.com/api/v1/sendSms",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => array('username' => $username,'password' => $password,'number' => $receiver,'sms_content' => $sms_content,'sms_type' => '1','masking' => 'non-masking'),
));

$msg_response = curl_exec($curl);
$err = curl_error($curl);
            
echo $msg_response;
curl_close($curl);

?>