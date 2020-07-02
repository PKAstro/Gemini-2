<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<style type="text/css">
.auto-style1 {
	border-style: solid;
	border-width: 2px;
}
</style>



</head>

<body style="color: #FFFFFF; background-color: #000000">



<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Gemini 1 mods</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">Recommend modification to Gemini-1 boards from uses 
		Group<br />
		message.&nbsp; This mod only applies to boards that use the RJ45 
		connectors for motor connectors.<br />
		<a href="http://groups.yahoo.com/neo/groups/Gemini_Users/message/3584">
		http://groups.yahoo.com/neo/groups/Gemini_Users/message/3584</a><br />
		<br />
		<br />
		Gemini's SRAM is not only used to store user catalogues and the 
		observation<br />
		logs, but also an amount of parameters and matrices used for the 
		modelling<br />
		algorithm. So it has a size of 128 kByte and is accessed (also for 
		writing)<br />
		very often, far exceeding size and reprogramming life time of an EEPROM.<br />
		<br />
		Normally, the Li CR2032 battery should last at least one year and should<br />
		keep the SRAM content safe and the RTC running. If CMOS Resets occur 
		after<br />
		some minutes even with a fresh battery or battery lifetime is 
		significantly<br />
		shorter than one year, I recommend the following patch for the 
		electronically<br />
		inclined:<br />
		<br />
		<ol><li>Buy a small 39k resistor (with wires, not SMD)</li>
			<li>Remove all power and battery.</li>
			<li>Solder the resistor between pin 2 (the second from above at the 
			left side)<br />
		and pin 9 (the down most at the left side) of the EPSON real time clock<br />
		chip labeled U2. The left side of the RTC is next to the SRAM chip U9.
		You can do this on the component side or the soldering side of the 
		board.</li>
			<li>Put Battery back. Hook up power.</li>
			<li>Power Gemini on/off. Wait. The CMOS resets should be gone.</li>
			<li>Remove battery again and power.</li>
			<li>Remove R38 to save Li battery power. </li>
			<li>Put battery and power back and Power Gemini on/off. Check again 
			for CMOS resets. They should be gone.</li></ol><br />
		I've tested this modification with three different boards, one of them 
		had<br />
		CMOS Resets. All work fine.<br />
		<br />
		René
		<br />
		<br />
		
		<br />
		</td>
		</tr>
		<tr><td class="style7">
		
			<a href="pcb/SRAM-and-RTC-ICs-image-w-txt.jpg">
			<img alt="" class="auto-style1" height="437" src="pcb/SRAM-and-RTC-ICs-image-w-txt_small.jpg" width="900" /></a><br />
			Click on image to see larger view.<br />
			Picture courtsey of Brendan

		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



