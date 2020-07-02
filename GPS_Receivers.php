<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<style type="text/css">
.auto-style1 {
	margin: 10px;
}
</style>



</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">GPS Receivers</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">There are 2 GPS Receivers made for the Gemini-2 mount 
		controller that I am aware of.
		<ol><li>The first is the 
			<a href="http://www.losmandy.com/access.html" target="_blank">Losmandy GPS2</a> which is a Garman that is specially made to plug into Serial Port 1 of the Gemini-2.&nbsp; 
			As with the previous Losmandy GPS units, the Gemini-2 cannot get a 
			GPS location on the first power up.&nbsp; This is because the Serial 
			Port 1 cannot provide power to it until the Gemini-2 is turned on, 
			and the GPS has not had time to acquire the satellites.&nbsp; This 
			was the way it was with the units for Gemini-1, So I am assuming it 
			probably is the same with Gemini-2. You 
			can use the option&nbsp; Menu--&gt;Site--&gt; Query GPS after the GPS has 
			had time to acquire the satellites.&nbsp;&nbsp; You can also wait to 
			select the boot mode, for the GPS to aquire the satellites, then it 
			should get them while booting. <br /><img alt="" height="450" src="http://www.losmandy.com/hi-rez-images/GPS_2a.jpg" width="900" /><br />
			<br /></li>
			<li>The next unit is a
			<a href="http://www.stargps.ca/cables.htm" target="_blank">StarGPS</a> 
			unit sold out of Canada, but carried by many dealers such as OPT.&nbsp; 
			This unit is different, because it comes with separate adapters for 
			different mounts.&nbsp; Change the adapter, and it can be used on 
			Celestron, Meade, and many more mounts, including an adapter that 
			will let it plug into an PC USB port.&nbsp; What I like about this approach, 
			is that the StarGPS uses a separate power connection, and in the 
			case of a Gemini-2 plugs into the extra power connector on the 
			Gemini-2. That way, even if the Gemini-2 is off, but it's power connection
			is on, then the GPS can be acquiring satellites.<br /> 
			<img alt="" height="293" src="gemini-images/gps/stargps.jpg" width="324" class="auto-style1" style="float: left" />There are several programs that also might be of interest if you 
			have a GPS that connects via USB to a PC.&nbsp; The first is
			<a href="downloads/GPSrelated/redirect.exe" target="_blank">GPS port 
			director.</a>&nbsp; It can redirect a GPS units output to a second 
			serial port, that could be plugged into the Gemini-2 serial port 1.&nbsp; 
			Using this program a USB GPS can act as a GPS for the Gemini-2.&nbsp; 
			Of course you would need a serial port on the PC (or a USB to serial 
			adapter) and a serial RS-232 cable for the Gemini-2.<br /><br />The second program is
			<a href="downloads/GPSrelated/VisualGPSInstall.zip">Visual GPS installer</a>.  This program allows you to watch the performance of a GPS receiver
			connected to a PC. </li>
			
			
		</ol>
		</td>
	</tr>
	<tr><td class="style6"><ol start="3"><li>When using a GPS receiver with the Gemini-2, I 
		recommend that you set the time-zone offset to ZERO (0).&nbsp; This will 
		make the local time show up as UTC, but you will never have to worry 
		about daylight saving time again.</li>
		</ol>
		<p>&nbsp;</p>
		</td></tr>
</table>

</body>




<?php include("bottom.php"); ?>



