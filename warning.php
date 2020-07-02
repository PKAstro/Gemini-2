<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>


<?php include("topv.php"); ?>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />

</head>

<body style="color: #FFFFFF; background-color: #000000" >

<table  align="center" style="width:900px" class="h2">
<tr><td> Several Operational Warning.</td></tr>
</table>


<table align="center"  style="width: 900px">
	<tr>
		<td class="style6wborder"> WARNING: The Battery circuit in the Gemini-2 is much different than in the Gemini-1.
		The battery connects through a small .2v Zener diode directly into the ARM processor.
		<span class="smalltext"> <a href="http://www.nxp.com/documents/data_sheet/LPC2388.pdf" target="_blank">The Data sheet LPC2388.pdf
		</a>states Vi(VBAT), the separate input for the RTC and the SRAM, has to have 2.0V at minimum, 
		typical 3.3V and 3.6V at max for operation.</span> With the Zener diode in the line, that means that a 
		battery voltage between 2.2V and not exceeding 3.8V would be acceptable. A note 
		states that the RTC typically fails at 1.6V (1.8V at our battery). 
		<em>This means that
		connecting an external Battery pack in place of the internal 3.3V 
		battery will probably damage the ARM processor, So don't DO IT.</em>
		Also After replacing the battery, Power on the Gemini-2 and set the time and date. Failure to do so
		could cause the processor to draw too much power from the battery and might result in processor damage.&nbsp; 
		You can also save all your setting using the Web interface Firmware/SRAM 
		page "Store SRAM" content to file before removing the battery, and then "Load SRAM" content from 
		file (to restore all the setting back to what they were before changing 
		the battery), after you replace the battery..&nbsp; This will not set the date and time, you still must do this!. 
		Here is a
		<a href="http://gemini-2.com/videos/Losmandy_Gemini_Battery_CR2354.mp4" target="_blank">
		video</a> of changing the CR2350 battery. Here is a
		<a href="http://gemini-2.com/videos/Losmandy_Gemini_Battery_CR2450.mp4" target="_blank">
		video</a> of changing the CR2450 battery in the Gemini-2 Mini. <br />
		<br />
		Now when Losmandy receives the circuit boards, the battery has a peace 
		of paper or other material between the positive contact and the battery 
		to keep it from powering the ARM processor.&nbsp; 
		What Losmandy does first, is to power up the Gemini-2, set the time and date, then pull out the paper or 
		material.&nbsp; This way, the ARM processor does not have a chance to 
		pull excessive current.&nbsp; You can emulate that on the original 
		Gemini-2 version by putting a small circle of plastic on top of the new 
		battery before putting it in.&nbsp; Then power up the Gemini-2, set the 
		date and time and remove the plastic.&nbsp;&nbsp; I don't have a 
		suggestion for the Gemini-2 Mini, as I have only seen pictures of it.&nbsp; 
		I am open to suggestions.</td>
		</tr>
</table>
<br />
<table align="center"  style="width: 900px">
	<tr>
		<td class="style6wborder"> If you are connecting more than one Gemini-2 to your local network please see this 
		<a href="http://gemini-2.com/faqG2.php#Q1" target="_blank">FAQ1</a></td>
		</tr>
</table>
<br />
<table  align="center" style="width:900px" >
	<tr>
		<td class="style6wborder">WARNING: The Gemini-1 has several Startup modes. If is your habit of 
		leaving the Gemini-1 powered on and parked, when not in use, then you 
		should always make sure that you use one of the two options below. This 
		is because if you have a power failure, and then power is restored, and 
		the mount is in Cold Start, Warm Start, or Warm Restart, then the RA 
		motor will start running at the tracking rate set, and can possibility run your telescope into 
		your roof, or a limit, without you knowing it until too late:<br />
		&nbsp;&nbsp; 1. Set your startup mode to&nbsp; "ASK IF POSSIBLE."&nbsp; or<br />
		&nbsp;&nbsp; 2. Put the telescope into 
		terrestrial mode tracking after parking.&nbsp;  Just remember to switch it back to Sidereal mode when starting 
		up again.&nbsp; This is the safest option.<br />
		<br />
		Now the Gemini-2 starting wiith the Firmware of August 22, 2013 has 
		special Park modes.&nbsp; If you use a park mode 0 then it is pretty 
		much like the Gemini-1.&nbsp; If you use a park mode 1 or Park mode 2 
		then it takes an external event such as a GOTO command in Park mode 1, 
		and only an UN-Park command in Park mode 2 to move the mount.<br />
		</td>
		</tr>
</table>
<br/>
<table  align="center" style="width:900px" >
	<tr><td class="style6wborder">
		If you are remote, you might want to consider an Ethernet controlled 
		power switch. I can recommend the switches from
		<a href="http://www.digital-loggers.com" target="_blank">
		Digital-Loggers.com</a> such as this one:
		<a href="http://www.digital-loggers.com/lpc.html" target="_blank">Web Power Switch 7</a>
<br />
	</td></tr>
	</table>
<br />

<table  align="center" style="width:900px" >
	<tr>
		<td class="style6wborder">WARNING: Do not update the firmware on on the Gemini-2 using just battery power, unless 
		you are very very sure your battery is fully charged, and will not drop 
		below +12V during the update. If the battery drops below +12 volts, the 
		update can be corrupted, making it where you have to remove the micro SDcards and program them manually using a micro SDcard reader writer. </td>
		</tr>
</table>
<br />
<table  align="center" style="width:900px">
	<tr>
		<td class="style6wborder">WARNING: The new Level 5 Version 1 firmware has a new mode, Alt/AZ. 
		It you have a Equatorial mount, and the Gemini-2 is controlling and 
		connected to it, Do not Select the ALT/AZ mode. This could cause the 
		motors to slew your Equatorial mount into surrounding hardware. This is 
		because the limits for an ALT/AZ and the parking locations are not even 
		close to what they are for an Equatorial mount.</td>
		</tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Jun 15, 2015
		</td>
	</tr>
</table>


</body>





<?php include("bottom.php"); ?>


