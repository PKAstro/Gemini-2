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


<link href="gemini-2.css" rel="stylesheet" type="text/css" />


</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">VBatt Excessive Current Draw.</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">3.20 VBAT.1: Increased power consumption on VBAT when 
		VBAT is <br>powered before the 3.3 V supply used by rest of the device<br>
		Introduction:<br>The device has a VBAT pin which provides power only to 
		the RTC and Battery RAM. <br>VBAT can be connected to a battery or the 
		same 3.3 V supply used by rest of the device<br>(VDD(3V3) pin, Vdd(DCDC) 
		pin).<br><br>
		<b>Problem:</b><br><br>If VBAT is powered before the 3.3 
		V supply, VBAT is unable to source the start-up current<br>required for 
		the Battery RAM. Therefore, power consumption on the VBAT pin will be 
		high <br>and will remain high until 3.3 V supply is powered up. Once 3.3 
		V supply is powered up, <br>power consumption on the VBAT pin will 
		reduce to normal and subsequent power cycle <br>on the 3.3 V supply will 
		not cause an increased power consumption on the VBAT pin.<br>
		<br>Work-around:<br>Provide 3.3 V supply used by rest of the device first 
		and then provide VBAT voltage.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
	<!--		<video width="649" height="360" controls>
   	 <a href="videos/MP4/webinterfaceConverted.mp4">
   <source src="videos/gv/webinterface.mp4" type="video/mp4"></a> -->
   <!--<source src="movie.ogg" type="video/ogg">
 Your browser does not support the video tag.
</video> -->
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		
		
		The above text was extracted from the ES_LPC2378_88 Errata Sheet Rev 
		6.1- 01 July 2012</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
 

</body>




<?php include("bottom.php"); ?>



