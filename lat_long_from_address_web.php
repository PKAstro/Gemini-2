
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<title>Gemini 2 Mount Controller</title>


<?php include("topv.php"); ?>

<!--<link href="http://www.gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />-->


<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="other-files/xweb-popup.js"></script>



<style type="text/css">
.auto-style5 {
	border: 2px solid #FF0000;
}
.whiteborder {
	border: 2px solid white;
}
</style>


<base target="_self" />


</head>

<body style="color: #FFFFFF; background-color: #000000" class="tableborder1"> 





<?php
//***************** Start of Get Time Zone offset code ***************/
// see https://gist.github.com/pkane2001/1636fa0d53e81b1be870029a5dc157a7


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
//$result =lookupTimezone(40.753249, -74.001442); 
//echo 'GMT Offset is: ' . $result;
?>


<?php
/************  Start of Compute Address code     *************/
// see https://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete

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

/* test of code at bottom of page */
// define variables and set to empty values
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

?>



<table align="center" style="width: 900px">
	<tr>
		<td  align="center"style="width: 900px">
		<h2>Compute Latitude and Longitude from your Address<br />
		Also shows the current UTC time/date.</h2>
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
			  <!--<br /><br />-->
			 <input type="submit" name="submit_address" value="Submit">
		<br />If result = zero hit "Submit" again.
		</form>
		
	</td>
	<td  style="width: 450px" class="style6" >
			
	<script>	
			currentTimeZoneOffsetInHours = myTimezoneFunction();
	</script>

<?php
		echo 'Your Latitude and Longitude should show up below when you hit "Submit"' . "\n";
			
		if(isset($_POST['submit_address']))
		{
			  $address =$_POST['address']; // Google HQ
			     $newaddress = str_replace(","," ",$address);
 			     $newaddress = str_replace("."," ",$newaddress);
 			     $newaddress = str_replace("#"," ",$newaddress);

			  $outs = get_lat_long_from_address($address);	  
				
				//echo"<br>";
	   			//echo 'Hand controller Latitude = '.$outs[latdegrees] . ':'.$outs[latRminutes] ."\n";
	   			//echo"<br>";
	   			//echo 'Hand controller Longitude =  '.$outs[longdegrees] . ':'.$outs[longRminutes] ."\n";
				//echo"<br>";
				echo 'Web Interface Site/Time page Latitude = '.$outs[latdegrees] . ':' .  $outs[latminutes] . ':' .  $outs[latroundedseconds] ."\n";
				echo"<br>";
	   			echo 'Web Interface Site/Time page Longitude = ' . $outs[longdegrees]  . ':' .  $outs[longminutes]  . ':' .  $outs[longroundedseconds]  . "\n";
	   			echo"<br>";
				echo 'Your Tme zone offset should be: = ' . $outs[timezoneoffset] ."\n";	
				echo"<br>";
				echo 'Use "colons" between degrees:minutes:seconds when entering into web interface.'  . "\n";
				echo"<br>";
				echo 'Web interface will change them to the proper character'  . "\n";
				Echo "----------------------------------------------------------------------";
				echo"<br>";
				echo 'Here is the current UTC Date/Time based the this browsers current location: ' . 
				"Date/Time: " . "<B>" . gmdate("M d, Y H:i:s") . "</B><BR>";"\n";
				
 				 echo "Gemini-1 UTC display (yymm.dd: hh.mm.ss): <B>" . gmdate("ym.d H:i:s") . "</B>";
				echo "<br>". "Use Time Zone Offset = 0 if using UTC Time/Date";


	  }
			?>
	</td>
  </tr>
</table>



<table align="center" style="width: 900px" class="auto-style5">
	<tr>
		<td class="style7">
		<a href="web/web-NTP.php" target="_blank">New Network Time Protocol Instructions</a>
		<br>
		
		<a href="https://time.is/UTC" target="_blank">Get UTC TIME from Time.is</a>
		
		<br>
		
		<a href="http://www.gemini-2.com/hc/time_zone_offset_chart.php" target="_blank">Time Zone Offset Table</a> 
		and <a href="http://gemini-2.com/hc/timezonefacts.php" target="_blank">Time Zone Facts</a>. <br /><br />
		
</td>

</tr>
</table>

<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on May 20, 2018 		</td>
	</tr>
</table>

</body>


<?php include("bottom.php"); ?>



