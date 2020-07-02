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


<base target="_blank">


</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Connecting Gemini 2 to Computers and other devices</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		<ol>
			<li>The Gemini-2 can completely stand alone.&nbsp; Here is a
			<a href="hc/index.php">tutorial of the hand controller</a>.</li>
			<li>It can be connected using it's Serial Port to a PC that has a 
			Serial port or USB to serial adapter. for the cable wiring see
			<a href="/cable_wiring.php" target="_blank">Serial Port Wiring</a>.&nbsp; 
			This is the Serial Port 1 on the Orginal Gemini-2 and the Serial/GPS 
			on the Gemini-2 Mini.
			<ol type="a">
				<li>Please note that you cannot access the web interface using 
				the Serial Port.</li>
				<li>The serial port only accepts the Gemini commands listed
				<a href="/web/L5V1serial.html" target="_blank">here</a>.</li>
				<li>The serial port can be used with the ASCOM driver.&nbsp; See 4c 
				below.</li>
			</ol>
			</li>
			<li>
			USB
			connector.&nbsp;
			This requires a
			<a href="http://gemini-2.com/Gemini2_drivers/L5-USB/USB_Drivers_for_Level_5_Firmware_after_June-4-2013.zip" target="_blank" title="Only for Level 5 firmware and after">
			USB driver for windows</a>.&nbsp; There is no driver for MAC. Linux 
			computers have a driver built in.
			<ol type="a">
				<li>The USB-A connector can only supply +5V, and is not 
				supported otherwise.</li>
				<li>Please note that you cannot access the web interface using 
				the USB Port.</li>
				<li>The USB port only accepts the Gemini commands listed
				<a href="/web/L5V1serial.html" target="_blank">here</a>.</li>
				<li>The USB port can be used with the ASCOM driver.&nbsp; See 4c 
				below.</li>

			</ol>
			</li>
			<li>Ethernet connector.&nbsp; The ethernet connector support a
			Web interface that can 
			be used to contol just about every function of the Gemini-2.&nbsp; 
			Any device that can access your local network should be able to 
			connect to the Ethernet port.&nbsp; This included Windows Computers, 
			MAC computers, Linux computers, Iphones and Ipads, Android phones 
			and Android tablets.&nbsp; Note this connection is only hardware, 
			not Wifi.&nbsp;&nbsp;
			<ol type="a">
				<li>
				Instructions to connect the Ethernet interface to your Windows computer is 
				<a href="http://gemini-2.com/ConnectingtoG2.php" target="_blank">here</a>.
				</li>
				<li>
				To access the Web Interface see
				<a href="/web/index.php" target="_blank">Web Interface 
				instructions</a>.</li>
				<li>
				To use any program that supports the ASCOM Standard, you will 
				need to load the ASCOM Standard and the ASCOM Gemini Driver.&nbsp; 
				See
				<a href="http://gemini-2.com/Installing_ASCOM.php" target="_blank">
				instructions here</a>. </li>
				<li>
				To configure the ASCOM driver to use the Ethernet port see
				<a href="http://www.gemini-2.com/configuringEthernetASCOMdriver.php" target="_blank">
				Configuring the Ethernet connection</a> in the ASCOM Driver.&nbsp;&nbsp; 
				Note: The Ethernet connection must be working.&nbsp; If you 
				cannot connect to the Web Interface, you will not be able to 
				connect to the ASCOM driver using the Ethernet port.</li>
				<li>
				There are no instructions on connecting the Ethernet interface 
				to a MAC or Unit computer. You can access it by going to the IP 
				address shown under Menu--&gt;Mount--&gt;Network in the hand 
				controller.</li>
				<li>
				It is possible to use an Travel Router or Bridge to add WiFi to 
				the Gemini-2 Ethernet port.
				<a href="connecting_Gemini_to_computers.php" target="_blank">See 
				info</a>.</li>
			</ol>
			</li>
		</ol>
			
		<p>&nbsp;</p>
			
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		 
		&nbsp;
			
		</td>
	</tr>
</table>
 <table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Apr 27, 2016
		</td>
	</tr>
</table>



</body>




<?php include("bottom.php"); ?>



