<?php
function getApiJson($apiUrl) {
    // echo "getApiJson[".$apiUrl."]";
    $curl = curl_init();
    $response = file_get_contents($apiUrl);
    if ($response === false) {
        echo 'Error: ' . curl_error($curl);
    }
    curl_close($curl);
    header('Content-Type: application/json; charset=utf-8');
    return $response; 
}

function createApiUrl($searchtext,$link,$hashtag,$initial_date,$category) {
  //?searchtext=dolar&link=&hashtag=%232025&initial_date=20250101&category=
  $api_fields = $api_fields.$searchtext;
  if ($link != "") {
    $api_fields = $api_fields."/".urlencode($link);
  }
  else {
    $api_fields = $api_fields."/".urlencode("-");
  }
  if ($hashtag != "") {
    $api_fields = $api_fields."/".urlencode($hashtag);
  }
  else {
    $api_fields = $api_fields."/".urlencode("-");
  }
  if ($initial_date != "") {
    $api_fields = $api_fields."/".urlencode($initial_date);
  }
  else {
    $api_fields = $api_fields."/".urlencode("19000101");
  }
  if ($category != "") {
    $api_fields = $api_fields."/".urlencode($category);
  }
  else {
    $api_fields = $api_fields."/".urlencode("-");
  }
  return $api_fields;
}
?>
