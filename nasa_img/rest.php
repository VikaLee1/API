<?php 
$apiKey='wcDl54a0ifNb6WAgkIGyjFnqpFvR988fBHUcdRiN';
$url="https://api.nasa.gov/planetary/apod?api_key=$apiKey";

$client = curl_init($url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);
curl_close($client);

echo $response;
?>