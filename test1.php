<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
$APIKEY = 'AIzaSyBLh6Rg5D5VvEqkKi1muNS5VGXMllqflpQ';
$SVCURL = 'https://maps.googleapis.com/maps/api/timezone/';
function lookupTimezone($lat, $long) 
{
	$time = intval(microtime(TRUE));
	$service_url = 'https://maps.googleapis.com/maps/api/timezone/' . 'json?location=' . $lat . ',' . $long . '&key=' . $APIKEY . '&timestamp=' . $time;
	
	$curl = curl_init($service_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$curl_response = curl_exec($curl);
	if ($curl_response === false) {
	    $info = curl_getinfo($curl);
	    curl_close($curl);
	    die('error occured during curl exec. Additioanl info: ' . var_export($info));
	}
	curl_close($curl);
	$decoded = json_decode($curl_response);
	if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
	    die('error occured: ' . $decoded->response->errormessage);
	}
	$dst = $decoded->{'dstOffset'};
	$offset = ($decoded->{'rawOffset'} + $dst)/3600;
	return $offset;
}
$result =lookupTimezone(40.753249, -74.001442); 
echo 'GMT Offset is: ' . $result;
?></body>

</html>
