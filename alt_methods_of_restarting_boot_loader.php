<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Alt Methods of restarting boot loader</title>
<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("file:///F:/gemini2/topv.php"); ?>

</head>
<body style="color: #FFFFFF; background-color: #000000">
<table align="center" style="width: 900px">
	<tr>
		<td class="h2">
			<br/>
				Alt Methods of Starting Boot Loader</td>
	</tr>
</table>
If Gemini does not boot up properly after flashing even after toggling
power, the most probably explanations is that the .bin file was
corrupted. As I said, due to the lost of Ethernet connection during
flashing most browsers pop up a timeout window. I don't know what to do
against this. Do no simply press reload, but start at the home URL again.

But don't worry, there are many fallbacks after a problem.

<br /><br />
What I propose: if you can't access the file over the web server
anymore, take the micro SD card out of J11 and store the NewGem... .bin
file onto it using your computer.
Put it back into J11 again.
<br /><br />
Then start a terminal emulator like HyperTerminal and set up a
connection (usually to a USB2serial converter) of 115200bps, 8, n, 1, no
handshake. Connect to the upper serial port J10.
<br /><br />
Connect a classical HC to J15.
<br /><br />
Press all 4 diamond buttons of the HC and power up Gemini. This sets
the boot loader into interactive mode. You should see a help screen
showing up in the terminal emulator window. If not, press Enter and
check the settings.
<br /><br />
First enter "DIR". This should show the available files including the
.bin files.
<br /><br />
Next I suggest to use "COMP filename" to compare the flash content to
the bin file. If this is O.K., selecting "RUN" should start it.
<br /><br />
If there's a difference, you can reprogram it using "PROG filename"
<br /><br />
This is the easy alternative to the using the web interface, in case
there is no functional binary on the main board.
There's a small problem: serial port J10 stays blocked until next
cycling of power.
<br /><br />
Just for completion:
The second alternative is using the ARM boot loader. Jumper J4 has to be
closed to select it, but there is a problem: in the process of
optimizing the wiring on the board, Aveox connected the UART0 serial
port to the Feature port, where it has only 3.3V level. It would need a
level adapter. Software for flashing over the ARM boot loader port is
free (FlashMagic.exe).
<br /><br />
The third alternative would be flashing it using an JTAG adapter. I'm
using the Keil ULINK. The software is free (evaluation software from Keil).
<br /><br />
As long as the boot loader works, the first method should work fine.
<br /><br />
René
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Feb 27, 2016
		</td>
	</tr>
</table>


	
<br />
</body>




<?php include("bottom.php"); ?>

