<?php
$img_id = $_POST["id"];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.imgur.com/3/gallery/$img_id",

  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Client-ID 041cc1eecf6e050"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
$json_array = json_decode($response, true);
 $img = $json_array['data']['images'][0]['link'];


echo $img;