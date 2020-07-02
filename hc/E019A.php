<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Set Site </title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >

<table align="center" style="width: 900px">
	<tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click on green button to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style7" width="450px">
		Get the <a href="../lat_long_from_address_hc.php">Latitude, Longitude, and Time Zone offset from your address</a>.<br />
		<map id="ImgMap0" name="ImgMap0">
			<area coords="299, 361, 427, 398" href="E006A.php" shape="rect" />
			<area coords="297, 417, 426, 457" href="E007A.php" shape="rect" />
			<area coords="296, 465, 425, 512" href="E009A.php" shape="rect" />
			<area coords="306, 519, 435, 598" href="En-system.php" shape="rect" />
			<area coords="378, 156, 18" href="E019H.php" shape="circle" />
			<area alt="" coords="376, 242, 18" href="E019B.php" shape="circle" />
			<area alt="" coords="377, 288, 16" href="E019S.php" shape="circle" />
		</map>
		<img alt="" height="611"src="En-Images/E019.jpg" width="450"usemap="#ImgMap0" /></td>

		<td width="10px"></td>
		<td class="style6">You have to enter your coordinates into the latitude and longitude, don't worry about the offset, we will do that on the next 			screen. If you select the different locations, you can see the sign change on the display.  Notice that the Longitude is 
		Negative in the USA and Positive in Europe <br />
		<br />
		
		Touch in the Longitude box. When you do the Longitude entry screen will 
		appear.<br />
		Do what is indicated in 
		that screen. After that you will be brought back to 
		this screen.<br />
		<br />
		Touch in the Latitude box, You will be taken to a screen similar to 
		the one you just filled out.
		After filling out that screen you will be brought back here again.<br />
		<br />Longitude is entered as 180 to -180 degrees: 0 to 59 
				minutes: and 0 to 59 seconds. Seconds is optional and not shown.<br />
		<br />
				Latitude is entered as -90 to +90 degrees: 0 to 59 minutes: 
				and 0 to 59 seconds.<br />
		Seconds is optional and not shown.<br />

		<br />
		Hit the Back button.&nbsp;&nbsp; <br />
		<br />
		Note: the Hemisphere is selected totally by the sign of the Latitude in the 
		Gemini-2. Positive for Northern Hemisphere and <br />
		negative for Southern Hemisphere. It was the same in the Gemini-1
		also. No switches to change at all.
		<br />
		<br />
		The Query GPS button will have the Gemini-2 try and get the GPS coordinates
		from a GPS unit hooked to Serial Port 1</td>
		</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		The speed of this ports 
		defaults to 4800 baud for GPS use. It's speed is set in the Web interface 
		under Serial Tab.<br /><br />
		Note: If you are using a GPS receiver to get the time, then the offset 
		does not matter. The Gemini-2 only uses UTC time for all it's 
		calculations, and a GPS returns UTC time only.&nbsp; You can disregard 
		the time screen when using a GPS receiver.<br />
		<br />
		
		<!--		Detailed instructions on how to format the GPS coordinates are 
		on <a href="http://www.gemini-2.com/gps_coordinates_converter_map.php">
		http://www.gemini-2.com/gps_coordinates_converter_map.php</a> web page.<br /><br /> 
		-->
</td>
</tr>
</tab;e>


<?php
//***************** Start of Get Time Zone offset code ***************/
// see https://gist.github.com/pkane2001/1636fa0d53e81b1be870029a5dc157a7
/*

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
	    return 'error: ' . var_export($info);
	}
	curl_close($curl);
	$decoded = json_decode($curl_response);
	if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
	    return 'error: ' . $decoded->response->errormessage;
	}
	$dst = $decoded->{'dstOffset'};
	$offset = ($decoded->{'rawOffset'} + $dst)/3600;
	return $offset;
}//$result =lookupTimezone(40.753249, -74.001442); 
//echo 'GMT Offset is: ' . $result;

*/

/************  Start of Compute Address code     *************/
// see https://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete
/*
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function lz($num)
{
    return (strlen($num) < 3) ? "0{$num}" : $num;
}

function getdegrees($num) // remove only the decimal part of a positive or negative number
{
	if ($num >=0 ) { $newnum = floor($num);	}
	else { $newnum = ceil($num);}
	return $newnum;
}

function getminutes($input) // removes the negative sign.
{
	$remainder = abs(fmod($input,1));  //removes negativr sign
    $minutes = floor($remainder * 60);
	return ($minutes);
}


function getseconds($input)  // calling it with latitude or longitude as $input
{	$remainder = abs(fmod($input,1));  //removes negativr sign and gets remainder
    $minutes = ($remainder * 60); // get minutes
    $seconds = abs(fmod($minutes,1)* 60);
    return ($seconds);
}

function getroundedseconds($input)  // input decimal latitude or longitude
{	$remainder = abs(fmod($input,1));  //removes negativr sign and gets remainder
    $minutes = ($remainder * 60); // get minutes
    $seconds = abs(fmod($minutes,1)* 60); //decimal seconds

	$rseconds = floor($seconds);
	$remainder_seconds = $seconds - $rseconds;
	if ($remainder_seconds > 0.29) {
		$roundedseconds = ceil($seconds) ;	 
	} else {
		$roundedseconds = floor($seconds) ;
	}	 
    return ($roundedseconds);
}


	
function roundedminutes($minutes,$seconds)
{
	if ($seconds >30 ) {
	    $roundedminutes = $minutes + 1;
	} elseif ($seconds == 30) {
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
	return lz($degrees).":".lz($Rminutes).":".lz($seconds);
    
}
*/

/* test of code at bottom of page */
// define variables and set to empty values
/*
$addressErr = "";
$address ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["address"]))
  {
    $addressErr = "address is required";
  } else {
      $address = test_input($_POST["address"]);
      // check if name only contains letters, numbers and whitespace
      $newaddress = str_replace(","," ",$address);
      $newaddress = str_replace("."," ",$newaddress);
      $newaddress = str_replace("#"," ",$newaddress);
      //echo ($newaddress);
      $address = $newaddress;
      if (!preg_match("/^[a-zA-Z0-9 ]*$/",$address))  {
  		    $addressErr = "Only letters, numbers and white space allowed"; 
      }
  }
}


function get_lat_long_from_address($address)
{
  	$address =$_POST['address']; // Google HQ
  
  	$prepAddr = str_replace(' ','+',$address);
  	$geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
  	$output= json_decode($geocode);
  	$latitude = $output->results[0]->geometry->location->lat;
  	$longitude = $output->results[0]->geometry->location->lng;
  	$timeoffsetresult =lookupTimezone($latitude, $longitude); 

	// Latutude calls below
  	$latdegrees = getdegrees($latitude);
  	$latminutes = getminutes($latitude);
  	$latseconds = getseconds($latitude);
	$latroundedseconds = getroundedseconds($latitude);
 	$latRminutes = roundedminutes($latminutes,$latseconds);

	// Lontutude calls below 
  	$longdegrees = getdegrees($longitude);
  	$longminutes = getminutes($longitude);
  	$longroundedseconds = getroundedseconds($longitude);
  	$longseconds = getseconds($longitude);
  	$longRminutes = roundedminutes($longminutes,$longseconds);
 
	// Latitude assign to array 
  	$out[latitude]			=  $latitude;
  	$out[longitude]			=  $longitude;

  	$out[latdegrees]		=  $latdegrees;
  	$out[latminutes]		=  $latminutes;
  	$out[latseconds]		=  $latseconds;
  	$out[latroundedseconds]	=  $latroundedseconds;
  	$out[latRminutes]		=  $latRminutes;

	// Longtutude assign to array
  	$out[longdegrees]			=  $longdegrees;
  	$out[longminutes]			=  $longminutes;
  	$out[longseconds]			=  $longseconds;
  	$out[longroundedseconds]	=  $longroundedseconds;
  	$out[longRminutes]			=  $longRminutes;
	$out[timezoneoffset]		= $timeoffsetresult;
	return $out; // return array
}
*/
?>


<!--
<table align="center" style="width: 900px">
	<tr>
		<td  align="center"style="width: 900px">
		<h2>Compute Latitude and Longitude from your Address</h2>
		</td>
	</tr>
</table>

<table align="center" class="tableborder1" style="width: 900px">
	<tr>	
	<td class="style6"  align="center"style="width: 450px">
		
		<p><span class="error">Enter only Text, numbers and white spaces.<br /> 
		<span class="Red">NO COMMA's ALLOWED</span>.</span> <br />
		<span class="error">* required field</span></p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			 Address: <input type="text" name="address" value="<?php echo $address;?>">
			  <span class="error">
			  *&nbsp;&nbsp;&nbsp;&nbsp; 
			  <?php echo $addressErr;?></span>
			  <input type="submit" name="submit_address" value="Submit">
		<br />If result = zero hit "Submit" again.
		</form>
		
	</td>
	<td  style="width: 450px" class="style6" >
			
	<a name="calculate_lat-long"></a>	
	<script>	
			currentTimeZoneOffsetInHours = myTimezoneFunction();
	</script>
-->
<?php
/*
		echo 'Your Latitude, Longitude and Time Zone offset should show up below when you hit "Submit"' . "\n";
			
		if(isset($_POST['submit_address']))
		{
			  $address =$_POST['address']; // Google HQ
			     $newaddress = str_replace(","," ",$address);
 			     $newaddress = str_replace("."," ",$newaddress);
 			     $newaddress = str_replace("#"," ",$newaddress);

			  $outs = get_lat_long_from_address($address);	  
				
				echo"<br>";
	   			echo 'Hand controller Latitude = '.$outs[latdegrees] . ':'.$outs[latRminutes] ."\n";
	   			echo"<br>";
	   			echo 'Hand controller Longitude =  '.$outs[longdegrees] . ':'.$outs[longRminutes] ."\n";
				//echo"<br>";
				//echo 'Web Interface Site/Time page Latitude = '.$outs[latdegrees] . ':' .  $outs[latminutes] . ':' .  $outs[latroundedseconds] ."\n";
				//echo"<br>";
	   			//echo 'Web Interface Site/Time page Longitude = ' . $outs[longdegrees]  . ':' .  $outs[longminutes]  . ':' .  $outs[longroundedseconds]  . "\n";
	   			echo"<br>";
				echo 'Your Tme zone offset should be: = ' . $outs[timezoneoffset] ."\n";	
				echo"<br>";
				//echo 'Use "colons" between degrees:minutes:seconds when entering into web interface.'  . "\n";
				//echo"<br>";
				//echo 'Web interface will change them to the proper character'  . "\n";

	           echo "<script>window.location = 'http://www.gemini-2.com/hc/E019A.php#calculate_lat-long'</script>";
			}
*/
?>
	</td>
  </tr>
</table>


<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on May 20, 2018
		</td>
	</tr>
</table>

</body>

<?php include("bottom.php"); ?>


