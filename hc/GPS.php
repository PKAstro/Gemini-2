<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">

<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Using a GPS receiver</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6"> I only know of three GPS receivers specially made for 
		the Gemini Series for mount controllers.<br />
		<br />
			Losmandy makes two different GPS receivers, one for the Gemini-1 and one for the Gemini-2.  You can see these 
			on <a href="http://www.losmandy.com/access.html" target="_blank">
			Losmandy Accessory Page</a>. This is a picture of the one for the 
			Gemini-2<br /><img alt="" height="450" src="http://www.losmandy.com/hi-rez-images/GPS_2a.jpg" width="900" />
			&nbsp;The one for the Gemini-1 has a 
			part number of GCC, and the one for the Gemini-2 has a part number 
			of GCC-2. Please note that the GPS for the Gemini-1 will not work on the Gemini-2
			<ul><li>If you are really good at modifying cable, there are 
				instruction in Gemini-2 Users group in 
				<a href="http://groups.yahoo.com/neo/groups/Gemini-II/message/155" target="_blank">message 155</a>.  that tells 
				how to modify the Gemini-1 GPS for use on the Gemini-2. I take no responsibility and you do this modification at your own risk.  
				I don't have either version, so no instruction are given here, and I cannot and have not tested the modifications.</li></ul>
			</td>
			</tr>
			</table>
			<table align="center" style="width: 900px">
			<tr><td>
			</td></tr>
			</table>
			<table align="center" style="width: 900px">
			<tr><td>
			
				The <a href="http://stargps.ca/" target="_blank">StarGPS unit by 
				PicSoft</a>, Inc is a 65 channel GPS unit, It comes with one 
				adapter included in the price.</td></tr>
			</table>
			<table align="center" style="width: 900px">
				<tr>
					<td class="style7">
					<img alt="" height="271" src="../gemini-images/gps/stargps.jpg" width="300"  /><br />The star GPS inself</td>
					<td class="style7">
					<img alt="" height="271" src="../gemini-images/gps/GPS-Gemini2.jpg" width="300" /><br />The G2 Adapter cable </td>
					<td  class="style6"width="300px">They have adapters for the Gemini-1 that 
					used telephone style motor cable, the Gemini-1 that has 
					round motor cables, and the Gemini-2.&nbsp; All of them uses the 
					same GPS, but with a different adapter.They have adapters 
					for the Gemini-1 that used telephone style motor cable, the 
					Gemini-1 that has round motor cables, and the Gemini-2.&nbsp; All 
					of them uses the same GPS, but with a different adapter.&nbsp;</td>
				</tr>
		</table>
			<table align="center" style="width: 900px">
				<tr>
					<td class="style7">
			<img alt="" height="293" src="../gemini-images/gps/GPS-USB.jpg" style="float: left" width="390" /> 
			</td>
				<td class="style6">
				This same GPS can also be used with a USB adapter so that you can plug it into 
				your laptop.&nbsp; The ASCOM Gemini.net driver then can read it and 
				pass the setting into the Gemini 1 or Gemini-2.&nbsp; This is the 
				way I prefer to get GPS information into my mount, and also my 
				observing programs.
				</td>
			</tr>
				
			<table align="center" style="width: 900px">
				<tr>
					<td>&nbsp;</td>
				</tr>
	</table>
	<table align="center" style="width: 900px">
				
			<tr>
			  <td class="h3"> Configurating the Gemini-2 for a GPS receiver</td>
			</tr>
	</table>
	<table align="center" style="width: 900px">
			<tr><td class="style6">	
			<ul><li>
			The default baud rate that the Gemini-2 uses to detect a GPS is 4800 baud.  The Gemini-2 main unit, after being powered up
			will go out the selected serial port (normally Serial port 1) and try a detect if a GPS is connected and get the GPS 
				coordinates.
				Now the success of this may or may not be displayed on the Hand controller at the top. 
				Normally the messages will be "<span>GPS coordinates updated" or 
				"No GPS data Received"</span></li>
				<li>
				When they will be displayed 
				on the hand controller:
				<ul><li>
				When the Gemini-2 is set to be started up in "warm start."
				</li>
					<li>
					When the Gemini-2 is set to be started up in "warm restart."</li>
					<li>
					When a manual query is initiated from the hand controller 
					<a href="http://www.gemini-2.com/hc/E019.php" target="_blank">
					"site menu"</a>.</li>
					<li>
					When a manual query is initiated from the Web interface&nbsp;
					<a href="gemini-images/gps/web_query_GPS.jpg" target="_blank">Site/Time</a> at the bottom of the page.&nbsp; 
					The results can also be seen on the					
					<a href="gemini-images/gps/state_page_w_GPS_success.jpg" target="_blank">state page</a> of the Web interface.</li>
				</ul>
			</li>
				<li>When will they not be displayed:<ul>
					<li>When the Gemini-2 was booted in the "Ask if Possible" 
					mode where the Quick Start, Cold Start, Warm Start, or Warm 
					Restart selections are shown.</li>
					<li>When the Gemini-2 is started up in the Cold Start mode, 
					where the Polar Align Assist, Modeling, or Catalog Tour 
					menus are displayed.</li>
				</ul>
				</li>
				<li>Configuring the GPS baud rate and the Serial port to detect 
				the GPS on:<ul>
					<li>The GPS baud rate is set at the bottom of the
					<a href="http://www.gemini-2.com/web/web-serial-ports.php" target="_blank">
					Serial Ports</a> where it says Set GPS Baudrate. Do not 
					change the serial port 1 or serial port 2 baud rates as that 
					will not effect the GPS at all.</li>
					<li>The port where the Gemini-2 will look for the GPS is 
					selected on the
					<a href="http://www.gemini-2.com/web/web-site-time.php" target="_blank">Site/Time</a> menu at the bottom of the page.&nbsp; Normally 
					this will be serial port 1.</li>
				</ul>
				</li>
				</ul>
			</td>
			</tr>
			
</table>
	<table align="center" style="width: 900px">
				
			<tr>
			  <td class="h3">Instructions for each make of GPS Receiver</td>
			</tr>
	</table>
			
				
			<table align="center" style="width: 900px">
				<tr>
					<td class="style6">Losmandy Brand - Use with Gemini-2:
					<ol><li>
						The Gemini-2 Losmandy GPS plugs into the Serial port of the Gemini-2 main unit. This is normally serial port 1.</li>
						<li>
						Plug in the GPS and power on the Gemini-2.&nbsp; You 
						have three options to get the the Gemini-2 to read the GPS receiver.</li>
						<ol>
							<li>Go into the site menu and select "Query GPS" 
							this is the recommended method.</li>
							<li>Use the Web interface and Select "Query GPS" at 
							the bottom of site/time page.</li>
							<li>Wait about 2 minutes for the GPS to get a fix, 
							and cycle power to the Gemini-2.</li>
						</ol>
					</ol>
					</td>
				</tr>
				<tr>
				<td class="style6">StarGPS Brand - Use with Gemini-2:
					<ol><li>
						The StarGPS GPS plugs into the Serial port of the Gemini-2 main unit, 
						and the second power plug on the right side of the main 
						unit.</li>
						<li>
						Have the Gemini-2 powered off.</li>
						<li>
						Plug in the GPS into the serial 
						port and the power port of the Gemini-2. Have power 
						being supplied to the Gemini-2 so that the GPS will be 
						powered up, but leave the Gemini power switch off. The 
						reason for this is that if the GPS detects the Gemini-2 
						as a Meade LX-200, then it will never go into the NEMA 
						mode, which is the only mode the Gemini-2 (or Gemin-1) 
						will read GPS data in.</li>
						<li>
						Watch the light on the GPS unit.&nbsp; It will stay 
						solid orange for about 45 seconds.&nbsp; It will then 
						start blink very fast for about 5 seconds.&nbsp;(It has 
						now switched to the NEMA mode)&nbsp; It will 
						then start blinking once a second until it obtains a 
						fix, then twice a second after that.</li>
						<li>
						Power on the Gemini-2 unit.&nbsp; The Gemini-2 should 
						now get the GPS coordinates from the GPS.&nbsp; Where 
						the Gemini 2 displays a message will be determined by 
						the above boot modes in paragraph 2 above.</li>
						<li>
						You have three options to get the the Gemini-2 to read the 
						GPS receiver.</li>
						<ol>
							<li>Go into the site menu and select "Query GPS" 
							this is the recommended method.</li>
							<li>Use the Web interface and Select "Query GPS" at 
							the bottom of site/time page.</li>
							<li>Cycle power to the Gemini-2.</li>
							
						</ol>
					</ol>
					
					</td>
				</tr>


				<tr>
					<td>&nbsp;</td>
				</tr>
</table>

</body>




<?php include("bottom.php"); ?>



