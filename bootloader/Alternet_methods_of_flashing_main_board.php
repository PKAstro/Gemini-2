<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="../gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Alternet methods of flashing main board boot loader</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6"><br />
		If Gemini does not boot up properly after flashing even after toggling<br />
		power, the most probably explanations is that the .bin file was<br />
		corrupted. Probably due to the lost of Ethernet connection during<br />
		flashing most browsers pop up a timeout window. I don't know what to do<br />
		against this. Do no simply press reload, but start at the home URL 
		again.<br />
		<br />
		But don't worry, there are many fallbacks after a problem.<br />
		<br />
		What I propose: if you can't access the file over the web server<br />
		anymore, take the micro SD card out of J11 and store the NewGem... .bin<br />
		file onto it using your computer.<br />
		Put it back into J11 again.<br />
		<br />
		Then start a terminal emulator like HyperTerminal and set up a<br />
		connection (usually to a USB2serial converter) of 115200bps, 8, n, 1, no<br />
		handshake. Connect to the upper serial port J10.<br />
		<br />
		Connect a classical HC to J15.<br />
		<br />
		Press all 4 diamond buttons of the HC and power up Gemini. This sets<br />
		the boot loader into interactive mode. You should see a help screen<br />
		showing up in the terminal emulator window. If not, press Enter and<br />
		check the settings.<br />
		<br />
		First enter "DIR". This should show the available files including the<br />
		.bin files.<br />
		<br />
		Next I suggest to use "COMP filename" to compare the flash content to<br />
		the bin file. If this is O.K., selecting "RUN" should start it.<br />
		<br />
		If there's a difference, you can reprogram it using "PROG filename"<br />
		<br />
		This is the easy alternative to the using the web interface, in case<br />
		there is no functional binary on the main board.<br />
		There's a small problem: serial port J10 stays blocked until next<br />
		cycling of power.<br />
		<br />
		Just for completion:<br />
		The second alternative is using the ARM boot loader. Jumper J4 has to be<br />
		closed to select it, but there is a problem: in the process of<br />
		optimizing the wiring on the board, Aveox connected the UART0 serial<br />
		port to the Feature port, where it has only 3.3V level. It would need a<br />
		level adapter. Software for flashing over the ARM boot loader port is<br />
		free (FlashMagic.exe).<br />
		<br />
		The third alternative would be flashing it using an JTAG adapter. I'm<br />
		using the Keil ULINK. The software is free (evaluation software from 
		Keil).<br />
		<br />
		As long as the boot loader works, the first method should work fine.<br />
		<br />
		<br />
		<br />
		****************************************<br />
		On the Serial Port Setting menu, for serial ports 2 and 3 you have the 
		message<br />
		"Serial Port 2 (Pins 6,7 of the Feature port, 3.3V level) Note: This 
		port is part of the Feature Port and has to be activated using the 
		Hardware menu"<br />
		and<br />
		"Serial Port 3 (Pins 4,5 of the Feature port, 3.3V level) Note: This 
		port is part of the Feature Port and has to be activated using the 
		Hardware menu "<br />
		<br />
		</td>
	</tr>
</table>
 

</body>




<?php include("bottom.php"); ?>



