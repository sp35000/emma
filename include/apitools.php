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
?>