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
    $api_fields = $api_fields.urlencode($searchtext);
    $api_fields = $api_fields."/".urlencode($link);
    $api_fields = $api_fields."/".urlencode($hashtag);
    $api_fields = $api_fields."/".urlencode($initial_date);
    $api_fields = $api_fields."/".urlencode($category);
    return $api_fields;
}
?>
