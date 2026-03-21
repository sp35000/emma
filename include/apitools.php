<?php
function getApiJson($apiUrl) {
// echo "getApiJson[".$apiUrl."]";
// $curl = curl_init();
// $response = file_get_contents($apiUrl);
// if ($response === false) {
//     echo 'Error: ' . curl_error($curl);
// }
// curl_close($curl);
// Initialize cURL session
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return content as string
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) Chrome/114.0.0.0 Safari/537.36"); // Mimic Chrome
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8", // Browser-like Accept header
    "Accept-Language: en-US,en;q=0.5"
]);
 
// Execute request and get content
$response = curl_exec($ch);
 
// Check for errors
if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    // Get HTTP status code (e.g., 200 = OK, 403 = Forbidden)
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    // echo "Status Code: " . $statusCode . "\n";
    // echo "Content Length: " . strlen($response);
}
 
// Close cURL session
curl_close($ch);
    // header('Content-Type: application/json; charset=utf-8');
    return $response; 
}

function createApiUrl($searchtext,$link,$hashtag,$initial_date,$final_date,$category) {
  //?searchtext=dolar&link=&hashtag=%232025&initial_date=20250101&category=
  if ($searchtext != "") {
    $api_fields = urlencode($searchtext);
  }
  else {
    $api_fields = urlencode("-");
  }
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
    $api_fields = $api_fields."/".urlencode("20000101");
  }
  if ($final_date != "") {
    $api_fields = $api_fields."/".urlencode($final_date);
  }
  else {
    $api_fields = $api_fields."/".urlencode("20600000");
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
