<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<!-- To calculate the Degrees , minutes seconds from decimal Degrees
1. Round Degrees to zero places
2. Subtract Rounded_Degrees from Degrees leaving remainer_minutes.
3. Multiply Remainer_minutes by 60. = minutes.decimal_minutes
4  round minutes.decimal_minutes = minutes.
5. Minutes.decimal_minutes - minutes = decimal_seconds
6. Decimal_seconds X 60 = seconds.decimal_seconds.
7  round seconds.decimal_seconds = seconds.

input values to test with
Latitude = -118.31623830000001  Longitude = 34.197723 // results should be DMS	N 34° 10' 47.004''	W 118° 18' 58.457''

and 
latitude = 33.5680569  longitude = 	-112.2186787    // results should be DMS	N 33° 34' 5.005''	W 112° 13' 7.243''

-->

<?php


//$num = -1234.567;
// $num >= 0 ? floor($num) : ceil($num);
//echo $num ;
//$num = 1234.567;
//echo $newnum >= 0 ? floor($num) : ceil($num);

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

echo "<br>";
echo truncate(-112.2186787);
echo "<br>";
echo truncate(-118.31623830000001);  //removes the modulo part of the number
echo "<br>";
echo "abs((fmod(-118.31623830000001,1))) = ";  //removes negativr sign
echo abs((fmod(-118.31623830000001,1)));  //removes negativr sign
echo "<br>";
echo "<br>";
echo "abs((fmod(--112.2186787,1))) = ";  //removes negativr sign
echo abs((fmod(-112.2186787,1)));  //removes negativr sign
echo "<br>";
echo "getminutes(-118.31623830000001) = ";
echo getminutes(-118.31623830000001);
echo "<br>";
echo "getminutes(-112.2186787) = ";
echo getminutes(-112.2186787);
echo "<br>";
echo "getseconds(-118.31623830000001) = ";
echo getseconds(-118.31623830000001);
echo "<br>";
echo "getseconds(-112.2186787) = ";
echo getseconds(-112.2186787);
echo "<br>";
echo "rounded minutes for (-118.31623830000001) = ";
	roundedminutes($minutes,$seconds)

echo getseconds(-118.31623830000001);
echo "<br>";
echo "getseconds(-112.2186787) = ";
echo getseconds(-112.2186787);

/*
echo truncate(abs(fmod-118.31623830000001));


// get latitude from address
if(isset($_POST['submit_address']))
{
  $address =$_POST['address']; // Google HQ
  $prepAddr = str_replace(' ','+',$address);
  $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
  $output= json_decode($geocode);
  $latitude = $output->results[0]->geometry->location->lat;
  $longitude = $output->results[0]->geometry->location->lng;
	
  echo "latitude = ".$latitude; 
  echo"<br>";
	echo "longitude = ".$longitude;
  
}


// get address from latitude and longitude
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
// lz = leading zero
function lz($num)
{
    return (strlen($num) < 2) ? "0{$num}" : $num;
}
function convertlat($lat)
{
    
    // start by converting to seconds
    $seconds = ($lat * 3600);
    // we're given degreess, so let's get those the easy way
	$latdegrees = round($lat,0);
   // since we've "calculated" degrees, let's remove them from the seconds variable
    $latminusedegrees = ($lat -$latdegrees);
    // calculate minutes left
    $latminutes = abs(floor($latminusedegrees *60));
    // remove those from seconds as well
    $latseconds = round(($latminutes - round($latminutes))* 60);
	$latminutes = round($latminutes);
    // return the time formatted HH:MM:SS
   // return lz($latdegrees).":".lz($minuteslat).":".lz($secondslat);
	echo"<br>";
     echo "latitude in degrees = ".$latdegrees; 
	 echo "<br>";
     echo "latitude in minutes = ".$latminutes; 
 	echo"<br>";
  	echo "latitude in seconds = ".$latseconds; 
    
}




function convertlog($lng)
{
    // start by converting to seconds
    $seconds = ($lng * 3600);
    // we're given degreess, so let's get those the easy way
	$logdegrees = round(floor($lng),0);
	 
   // since we've "calculated" degrees, let's remove them from the seconds variable
    $logminusedegrees = ($lng -$logdegrees);
    // calculate minutes left
    $logminutes = abs($logminusedegrees *60);
    // remove those from seconds as well
    $logseconds = round(($logminutes - round($logminutes))* 60);
	$logminutes = round($logminutes);
    // return the time formatted HH:MM:SS
   // return lz($latdegrees).":".lz($minuteslat).":".lz($secondslat);
	echo"<br>";
     echo "longitude in degrees = ".$logdegrees; 
	 echo "<br>";
     echo "longitude in minutes = ".$logminutes; 
 	echo"<br>";
  	echo "longitude in seconds = ".$logseconds; 
    
}

convertlat($latitude);

convertlog($longitude);

*/

?>



</body>

</html>
