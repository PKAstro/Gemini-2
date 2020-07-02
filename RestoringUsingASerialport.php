<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">
<table style="width: 80%">
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr class="style6">
		<td>
		<ol>
			<li>If Gemini does not boot up properly after flashing even after toggling
				power, the most probably explanations is that the .bin file was
				corrupted. 
			</li>
			<p>
			<li>
				This is probably caused, due to the lost of Ethernet connection during
				flashing. Most browsers pop up a timeout window, if this happens. 
			</li>
			</p>
		
			<p>
			<li>
				What I propose: if you can't access the file over the web server
				anymore, take the micro SD card out of J11 and store the NewGem.bin
				file onto it using a micro-SDcard reader/writer.

			</li>
			</p>
			<p>
			<li>
				Put it back into J11 again.

			</li>
			</p>
			<p>
			<li>
				Then start a terminal emulator like HyperTerminal and set up a
				connection (usually to a USB2serial converter) of 115200bps, 8, n, 1, no
				handshake. Connect to the upper serial port J10.

			</li>
			</p>
			<p>
			<li>
				Connect a classical HC to J15.<br />
				Press all 4 diamond buttons of the HC and power up Gemini. 

			</li>
			</p>
			<p>
			<li>
				This sets the boot loader into interactive mode. You should see a help screen
				showing up in the terminal emulator window. 

			</li>
			</p>
			<p>
			<li>
				If not, press Enter and check the settings. First enter "DIR". This 
				should show the available files including the .bin files. 

			</li>
			</p>
			<p>
			<li>
				Next I suggest to use "COMP filename" to compare the flash content to
				the bin file. If this is O.K., selecting "RUN" should start it.

			</li>
			</p>
			<p>
			<li>
				If there's a difference, you can reprogram it using 
				"PROG filename" This is the easy alternative to the using the web interface, in case there is no functional binary on the main board. 

			</li>
			</p>
			<p>
			<li>
			There&#39;s a small problem: serial port J10 stays blocked until next 
			cycling of power, so you must cycle power.</li></p>
			<p>
			<li>
			If for some reason the Gemini-2 does not come up, Turn it off, put a piece of
			paper under the battery clip for about 15 seconds.  This will erase the Static Ram.
			Power the Gemini back on.  
			</li>
			</p>
		</ol>


<p>&nbsp;</p>
		<p>&nbsp;</p>


		</td>
	</tr>
</table>
</body>

</html>
