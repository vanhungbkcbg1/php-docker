<?php

//get system variable
$api_url=$_ENV["api_url"]?? "not set"; // -> return test(declared in docker-compose file )
$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, $api_url);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($cURLConnection);
curl_close($cURLConnection);

echo $api_url;
echo $result;
//phpinfo();
