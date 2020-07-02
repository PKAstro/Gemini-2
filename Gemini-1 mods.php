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
		<td class="h3">Recommend Gemini-1 PCB mods to extend battery life/<br />
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">This mod is from the Gemini_Users group<br />
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
		1) Buy a small 39k resistor (with wires, not SMD)<br />
		2) Solder it between pin 2 (the second from above at the left side)<br />
		and pin 9 (the downmost at the left side) of the EPSON real time clock<br />
		chip labeled U2. The left side of the RTC is next to the SRAM chip U9.<br />
		You can do this on the component side or the soldering side of the 
		board.<br />
		<br />
		Power Gemini on/off. Wait. The CMOS resets should be gone.<br />
		<br />
		3) Remove R38 to save Li battery power. Check again.<br />
		<br />
		I've tested this modification with three different boards, one of them 
		had<br />
		CMOS Resets. All work fine.<br />
		<br />
		René<br />
		<br />
		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



