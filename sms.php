<?php

function sendSms($mobile, $sms){
    $api_key='6b5622887ea13f6e';
    $secret_key = 'ZTVmOGM2NDQxNWUyMDFiMzlkMDU3NDllYTg0ZjA0NTkwYWQzOGJhNDM4MjYyZjgzZmU5NDhiMTQ3YmU0NWYzOA==';
$postData = array(
    'source_addr' => 'INFO',
    'encoding'=>0,
    'schedule_time' => '',
    'message' => $sms,
    // 'recipients' => [array('recipient_id' => '1','dest_addr'=>'255700000001'),array('recipient_id' => '2','dest_addr'=>'255700000011')]
    'recipients' => [array('recipient_id' => '1','dest_addr'=> $mobile)]

);

$Url ='https://apisms.beem.africa/v1/send';

$ch = curl_init($Url);
error_reporting(E_ALL);
ini_set('display_errors', 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'Authorization:Basic ' . base64_encode("$api_key:$secret_key"),
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => json_encode($postData)
));

$response = curl_exec($ch);

if($response === FALSE){
      //  echo $response;

    die(curl_error($ch));
}
//var_dump($response);
}
?>