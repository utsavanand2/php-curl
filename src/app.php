<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ipdata.co/156.25.18.19/country_name?api-key=195ddc9260b0507abbb1a6b5baca79057be91691a70d15682f467f49",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>