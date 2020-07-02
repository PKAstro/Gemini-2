<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<!-- 

input values to test with
Latitude = -118.31623830000001  Longitude = 34.197723 // results should be DMS	N 34° 10' 47.004''	W 118° 18' 58.457''
and 
latitude = 33.5680569  longitude = 	-112.2186787    // results should be DMS	N 33° 34' 5.005''	W 112° 13' 7.243''

-->

<!--<form method="post" action='get_data.php'>
  <p>Enter Latitude</p>
  <input type='text' name='latitude' placeholder='Enter Latitude'>
  <p>Enter Longitude</p>
  <input type='text' name='longitude' placeholder='Enter Longitude'>
  <input type="submit" name="submit_coordinates" value="Get Address">
</form>
-->


<?php
// get latitude and longitude from address
//if(isset($_POST['submit_address']))
function submit_address($address)
{
  $address =$_POST['address']; // Google HQ
  $prepAddr = str_replace(' ','+',$address);
  $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
  $output= json_decode($geocode);
  $latitude = $output->results[0]->geometry->location->lat;
  $longitude = $output->results[0]->geometry->location->lng;
  //return array($latitude, $longitude );	
//  echo "latitude = ".$latitude; 
//   echo"<br>";
// 	echo "longitude = ".$longitude;
  
}


// get address from latitude and longitude
/*
if(isset($_POST['submit_coordinates']))
{
  $lat=$_POST['latitude'];
  $long=$_POST['longitude'];
	
  $url  = "http://maps.googleapis.com/maps/api/geocode/json?latlng=".$lat.",".$long."&sensor=false";
  $json = @file_get_contents($url);
  $data = json_decode($json);
  $status = $data->status;
  $address = '';
  if($status == "OK")
  {
	echo $address = $data->results[0]->formatted_address;
	
 echo"<br>";
 echo "latitude = ".$latitude; 
 echo"<br>";
 echo "longitude = ".$longitude;
  }
  else
  {
	echo "No Data Found Try Again";
  }
}
*/


/*


function lz($num)
{
    return (strlen($num) < 3) ? "0{$num}" : $num;
}

function truncate($num) // remove only the decimal part of a positive or negative number
{
	if ($num >=0 ) { $newnum = floor($num);	}
	else { $newnum = ceil($num);}
	return $newnum;
}

function getminutes($input)
{
	$remainder = abs(fmod($input,1));  //removes negativr sign
    $minutes = floor($remainder * 60);
	return ($minutes);
}

function getseconds($input)  // 
{	$remainder = abs(fmod($input,1));  //removes negativr sign and gets remainder
    $minutes = ($remainder * 60); // get minutes
    $seconds = abs(fmod($minutes,1));
    return ($seconds);
}
	
function roundedminutes($minutes,$seconds)
{
	if ($seconds > 0.5) {
	    $roundedminutes = $minutes + 1;
	} elseif ($seconds == 0.5) {
	    $roundedminutes = $minutes + 1;
	} else {
	    $roundedminutes = $minutes;
	}

	return $roundedminutes ;
}




function convert($input)
{
	$DDdegrees = $input;
	$degrees = truncate ($DDdegrees) ;
	$minutes = getminutes ($DDdegrees) ;
	$seconds = getseconds($DDdegrees) ;
	$Rminutes = roundedminutes($minutes,$seconds);
    // return the time formatted HH:MM:SS
   return lz($degrees).":".lz($Rminutes).":".lz($seconds);
//	echo"<br>";
//     echo "latitude in degrees = ".$latdegrees; 
//	 echo "<br>";
//     echo "latitude in minutes = ".$latminutes; 
// 	echo"<br>";
//  	echo "latitude in seconds = ".$latseconds; 
    
}




//$DDdegrees = -118.31623830000001;
//$degrees = truncate ($DDdegrees) ;
//$minutes = getminutes ($DDdegrees) ;
//$seconds = getseconds($DDdegrees) ;
//$Rminutes = roundedminutes($minutes,$seconds);


list ($first,$second) = submit_address();
	convert($latitude);
	echo " Latutude = ";

	echo $degrees;
	echo ":";
	echo $Rminutes;
	echo ":";
	echo $seconds ;
	echo "<br>";
	echo "<br>";

	convert($longitude);
	echo " Longitude = ";
	echo $degrees;
	echo ":";
	echo $Rminutes;
	echo ":";
	echo $seconds ;
*/


</body>

</html>
