<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<title>Gemini 2 Mount Controller</title>


<?php
 include("topv.php"); 
?>

<!--<link href="http://www.gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />-->


<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="other-files/xweb-popup.js"></script>



<style type="text/css">
.whiteborder {
	border: 2px solid white;
}
</style>


<base target="_self" />

</head>

<body style="color: #FFFFFF; background-color: #000000"> 


<?php
// see https://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete


/*
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
  echo "latitude = ".$latitude; 
   echo"<br>";
 	echo "longitude = ".$longitude;
  
}
*/

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

function getminutes($input)
{
	$remainder = abs(fmod($input,1));  //removes negativr sign
    $minutes = floor($remainder * 60);
	return ($minutes);
}

function getseconds($input)  // 
{	$remainder = abs(fmod($input,1));  //removes negativr sign and gets remainder
    $minutes = ($remainder * 60); // get minutes
    $seconds = abs(fmod($minutes,1)*60);
	$roundedseconds = floor($seconds);
	if ($seconds >30 ) {
	    $roundedseconds =roundedseconds + 1;
		} elseif ($seconds == 30) {
	    $roundedseconds = $roundedseconds + 1;
		} else {
	    $roundedseconds = $roundedseconds;
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
      if (!preg_match("/^[a-zA-Z0-9 ]*$/",$address))  {
  		    $addressErr = "Only letters, numbers and white space allowed"; 
      }
  }
}

/*function foo($array)
{
echo "latitude = ";
echo $array['latitude'];
}*/

function get_lat_long_from_address($address)
{
  $address =$_POST['address']; // Google HQ
  
  $prepAddr = str_replace(' ','+',$address);
  $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
  $output= json_decode($geocode);
  $latitude = $output->results[0]->geometry->location->lat;
  $longitude = $output->results[0]->geometry->location->lng;
  $latdegrees = getdegrees($latitude);
  $latminutes = getminutes($latitude);
  $latseconds = getseconds($latitude);
  $latRminutes = roundedminutes($latminutes,$latseconds);
  $longdegrees = getdegrees($longitude);
  $longminutes = getminutes($longitude);
  $longseconds = getseconds($longitude);
  $longRminutes = roundedminutes($longminutes,$longseconds);
 
  $out[latitude]  =  $latitude;
  $out[longitude]  =  $longitude;
  $out[latdegrees]  =  $latdegrees;
  $out[latminutes]  =  $latminutes;
  $out[latseconds]  =  $latseconds;
  $out[latRminutes]  =  $latRminutes;
  $out[longdegrees]  =  $longdegrees;
  $out[longminutes]  =  $longminutes;
  $out[longseconds]  =  $longseconds;
  $out[longRminutes]  =  $longRminutes;
//   echo"<br>";
//    echo $out['longseconds']; 
//   echo"<br>";

//	var_dump($out); // this is the only way I have been able to see the values

   return $out; // I cannot find a way to use this as input to another function
  
}
?>



<table align="center" style="width: 900px">
	<tr>
		<td  align="center"style="width: 900px">
				<h2>Compute Latitude and Longitude from your Address</h2>
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr class="style7whiteborder">	
	<td  class="tableborder1" align="center"style="width: 450px">
		
		<p><span class="error">Enter only Text, numbers and white spaces</span> <br />
		<span class="error">* required field</span></p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			 Address: <input type="text" name="address" value="<?php echo $address;?>">
			  <span class="error">
			  *&nbsp;&nbsp;&nbsp;&nbsp; 
			  <?php echo $addressErr;?></span>
			  <!--<br /><br />-->
			 <input type="submit" name="submit_address" value="Submit">
		</form>
		
	</td>
	<td class="tableborder1" style="width: 450px" class="style6" >
			
			<?php
			echo 'Your Latitude and Longitude should show up below when you hit "Submit"' . "\n";
			
			if(isset($_POST['submit_address']))
			{
			  $address =$_POST['address']; // Google HQ
			  $outs = get_lat_long_from_address($address);	  
				echo"<br>";
	   			echo 'Enter Your Latitude as '.$outs[latdegrees].':'.$outs[latRminutes].'  in the HC Latitude field'."\n";
	   			echo"<br>";
	   			echo 'Enter Your Longitude as '.$outs[longdegrees].':'.$outs[longRminutes].'  in the HC Longitude field'."\n";
	   			
			}
			?>
	</td>
  </tr>
</table>





<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on May 7, 2018 		</td>
	</tr>
</table>

</body>


<?php
 include("bottom.php");
?>
