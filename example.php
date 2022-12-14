<?php
include('CurlManager-class.php');

$cm = new CurlManager('http://www.example.com');

$cm->setOption(CURLOPT_POST, true);
$cm->setOption(CURLOPT_POSTFIELDS, http_build_query($data));

$response = $cm->execute();

?>
