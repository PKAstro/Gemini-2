<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="../gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<script type="text/javascript" src="xweb-popup.js" ></script>



</head>

<body style="color: #FFFFFF; background-color: #000000">



<table align="center" style="width: 900px">
	<tr><td class="style7">See Paragraphs below picture for explanations.</td></tr>
	<tr>
		<td class="style7">
		<map id="ImgMap0" name="ImgMap0">
			<area alt="" coords="21, 727, 85, 762" href="index.php" shape="rect" />
		</map>
		<img alt="" height="817" src="images/site-time-NPT.jpg"  Width="838"usemap="#ImgMap0" height="817" />
		</td>
	</tr> 
	<tr>
		<td class="style7">Please Note that you cannot change site 0.&nbsp; It 
		will always default back to Hollywood. <br /> You can however change 
		sites 1 through 4.</td>
	</tr> 
	<tr>
		<td class="style6">
		<ul><li>Predefined Observation Sites - This lets you 
			select between 4 Predefined sites.&nbsp; They are numbered between 1 
			and 4, with 1 being the top one on the hand controller.&nbsp; If you 
			do a firmware update, they will normally return to the default 
			sites.
			You will also have to use "Select Site" to make sure the one you 
			want is the active site.<br /><br /></li>

			<li>Geographic Locations - This is where you can define the 4 
			sites.&nbsp; Notice that Hollywood (Site 1), Phoenix AZ (site2), Berlin Germany (site 3) 
			and Sydney NSN (Site 4) are predefined by default, but they can be 
			changed.<br /><br /></li>
&nbsp; See
			<a href="
/videos/MP4/setsiteweb.mp4" target="_blank">movie</a> on 
			changing them.
			<a href="
/web/images/SiteSet.jpg" target="_blank">Hand controller after 
			movie</a>.
			<ul>
			<li>To change one of these, Select a new site name and enter it 
				into the Site Name location. 
			<br /><br /></li>

			<li>Then enter a Time offset from UTC.&nbsp; See above form to get 
			it from your address.&nbsp; Note that if your 
				site has daylight saving time, or a partial offset you need to 
				take that into account.
			<a href="../hc/time_zone_offset_chart.php" onclick="xPopUp(this.href,'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',600,400,'pixel','center','center'); return false;" target="_blank" title="Time Zone Offset 	Table">
			Time Zone Offset Chart</a> 		and
				<a href="timezonefacts.php" onclick="xPopUp(this.href, 'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',600,750,'pixel','center','center'); return false;" target="xPopUp" title="Half and Quarter Timezones">Half and Quarter Time zones</a>&nbsp; 
			This site will
			<a href="http://www.earthpoint.us/convert.aspx" target="_blank">
			Convert between the Different Coordinates Systems</a><br /><br /></li>

			<li>Please note the <span lang="en-us"></span>Gemini-2 always uses UTC time and 
			date for it's internal calculations.&nbsp; The time zone offset is just 
			a way that your UTC can be calculated from your local time.&nbsp; If you 
			enter UTC as your local time and set the Time Zone to zero, the Gemini-2 
			will continue to function just fine.&nbsp; You would never have to worry 
			about daylight saving time, or half and quarter time zones, if you live 
			in one of them.
			<br /><br /></li>

			<li>Then enter both latitude and longitude.&nbsp; Notice 
				Longitude is negative for the USA. Latitude is positive for the 
				northern hemisphere.&nbsp; This is the setting that tell the 
				Gemini-2 what hemisphere it is in, there are no switches to flip 
				like on some mounts.&nbsp; Use this form
			<a href="../lat_long_from_address_web.php" target="_blank">
			lat_long_from address</a> to get the values exactly as you need to 
			input them.<br /><br /></li>

				<li>Longitude is entered as 180 to -180 degrees, 0 to 59 
				minutes, and 0 to 59 seconds.</li>

				<li>Latitude is entered as -90 to +90 degrees 0 to 59 minutes, 
				and 0 to 59 seconds.</li>
				<li>To Convert Decimal Degrees to Degrees Minutes Seconds see 
				these <a href="math-DD-to-DMS.php" target="_blank">instructions</a>.<br /><br /></li>

			<li>Elevation is optional.&nbsp; <br /><br /></li>

			<li>Enter the Site number you want to store this information 
				for: 2, 3, or 4
			<br /><br /></li>

			<li>Select the set Location button to store the values.<br /><br /></li>

				<li>The undo should put back the original values before hitting 
				Set Location button.<br /><br /></li>

				<li>If you want to use this site you just entered, then you need 
				to select it in the "Predefined Observing Site" pulldown, and 
				then hit "Select Site"<br /><br /></li>

			</ul>
			<li>Time Setting:<br /><br /></li>

				<ul>
				<li>Civil Time: Enter it as Hours (24 hours format) : Minutes : 
				Seconds
				<br /><br /></li>

				<li>Civil Date: Enter it as Month (2 digits). Day (2 digits). 
				Year (4 digits)
				<br /><br /></li>

				<li>Hit Set Civil - this should update sidereal time and Julian 
				date.&nbsp; It should also update the UTC time and date if you 
				have the offset correctly set for the site.
				<br /><br /></li>

				<li>UTC Time: Enter it as Hours (24 hours format) : Minutes : 
				Seconds
				<br /><br /></li>

				<li>UTC Date: Enter it as Month (2 digits). Day (2 digits). 
				Year (4 digits)
				<br /><br /></li>

				<li>Hit Set UTC- this should update sidereal time and Julian 
				date.&nbsp; It should also update the civil&nbsp; time and date if you 
				have the offset correctly set for the site.
				<br /><br /></li>

				</ul>
				<li>The Query NTP Server -&nbsp; You can get the time from a 
				national NTP server or you can make your Windows PC act as a NTP 
				server.&nbsp; (The Window PC will need a Registry Patch to act 
				as a NTP Server.)&nbsp; You do this by putting in the IP address 
				of the NTP server you want to use in the.&nbsp; If you have a 
				proper NTP IP address and internet connection, then hitting the 
				"Query NTP server" button will go out and bring back the time in 
				UTC hours, minutes, seconds and the UTC date.&nbsp; The Time 
				offset for the site does not matter.&nbsp; If you have it 
				correct then your local time and date should show up.&nbsp; If 
				you have the time offset set to ZERO then the local time setting 
				will be the same as the UTC time and date setting.&nbsp; This is 
				because the Gemini-2 only uses UTC time for all it's 
		calculations, and a NTP server returns UTC time/date only.&nbsp; To 
				enter the NTP IP address see <a href="web-network.php#NetTimeProtocal">Net 
				Time Protocal</a> in the Network web page.&nbsp; Also see
				<a href="web-NTP.php" target="_blank">NPT instructions</a>.
		<br /><br /></li>

		
			<li>The Query GPS Receiver -&nbsp; You can select the serial com 
			port that the GPS receiver tries to use to get GPS setting.&nbsp; 
			Com Port 1 is default.&nbsp; See setting
			<a href="web-serial-ports.php" target="_blank">Serial Ports</a> for 
			setting the GPS baud rate.&nbsp; Hit Query GPS receiver to get a new 
			GPS reading.<br />
		Note: If you are using a 
		<a href="../using-gps-receivers.php" target="xPopUp" title="Using GPS Receivers" onclick="xPopUp(this.href, 'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',600,200,'pixel','center','center'); return false;">GPS receiver.</a>  to get the time, then the time zone offset does not matter. 
		The Gemini-2 only uses UTC time for all it's 
		calculations, and a GPS returns UTC time/date only.&nbsp; You can disregard 
		local time when using a GPS receiver.&nbsp;&nbsp; 
		However, if your time zone offset is not 
		correct, then the Gemini-2 will show a wrong Local time and date. This 
		really does not throw off any calculations of the sky position 
		calculations.
		<br /><br /></li>

		</ul>
		
		</td>
	</tr> 
				<tr><td></td></tr>
</table>

<table align="center" width="900px" class="tableborder1">
	<tr><td class="style6-border-white"><em>If your Gemini-2 is connected Via Ethernet, 
		turned ON, and 
		Responds to <a href="http://gemini/sitetime.cgi" target="_blank">
		http://gemini/sitetime.cgi</a> then this link 
		will open this page in the Gemini-2 web interface, after prompting for a 
		log-in.</em></td></tr>

</table>


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
}
//$result =lookupTimezone(40.753249, -74.001442); 
//echo 'GMT Offset is: ' . $result;

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
		echo 'Your Latitude, Longitude and Time Zone Offset should show up below when you hit "Submit"' . "\n";
			
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
				echo"<br>";
				echo 'Web Interface Site/Time page Latitude = '.$outs[latdegrees] . ':' .  $outs[latminutes] . ':' .  $outs[latroundedseconds] ."\n";
				echo"<br>";
	   			echo 'Web Interface Site/Time page Longitude = ' . $outs[longdegrees]  . ':' .  $outs[longminutes]  . ':' .  $outs[longroundedseconds]  . "\n";
	   			echo"<br>";
				echo 'Your Tme zone offset should be: = ' . $outs[timezoneoffset] ."\n";	
				echo"<br>";
				echo 'Use "colons" between degrees:minutes:seconds when entering into web interface.'  . "\n";
				echo"<br>";
				echo 'Web interface will change them to the proper character'  . "\n";

     echo "<script>window.location = 'http://www.gemini-2.com/web/web-site-time.php#calculate_lat-long'</script>";
//     echo "<script>window.location = 'http://www.gemini-2.com/index.php#calculate_lat-long'</script>";

	  }
*/
?>


<!--
<table align="center" style="width: 900px" class="auto-style5">
	<tr>
		<td class="style7">
		<a href="web/web-NTP.php" target="_blank">New Network Time Protocol Instructions</a>
		<br>
		
		<a href="https://time.is/UTC" target="_blank">Get UTC TIME from Time.is</a>
		
		<br>
		
		<a href="http://www.gemini-2.com/hc/time_zone_offset_chart.php" target="_blank">Time Zone Offset Table</a> 
		and <a href="
/hc/timezonefacts.php" target="_blank">Time Zone Facts</a>. <br /><br />
		
</td>

</tr>
</table>
-->

<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on May 20, 2018
		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



