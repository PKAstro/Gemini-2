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
		<td class="h3">A sample script to start put mount into terrestrial mode</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		This script is based on Microsofts Visual basic, but you do not have to 
		have Microsoft Visual basic to run or compile it, as Microsoft will 
		directly execute it from the desktop.&nbsp; You will have to have the 
		ASCOM Gemini.net driver pre-setup to the connect serial port or Ethernet 
		port.&nbsp; It does not have to be running. <br />
		<br />
		&nbsp; Just use Notepad to write 
		the script and save it as a .vbs file.&nbsp; It uses one of the Gemini-2 
		serial commands (in this case 135) that are listed
		<a href="http://www.gemini-2.com/web/serial_commands.html" target="_blank">
		here</a>. Note that the Web interface on your Gemini-2 has a page that 
		shows all the serial commands.<br />
		<br />
		Now if the ASCOM Gemini.net driver is already running when you double 
		click on the script, it should put the mount into terrestrial mode and disconnect 
		the driver from the mount. 
		But it will leave the Gemini.net Driver running.<br />
		<br />
		Now if the driver is not running, then the script will open it, connect to the mount, 
		put the mount into terrestrial mode, disconnect from the mount, and then close the driver.<br />
		<br />
		Basically, you need to shut down all running applications that connect 
		to the ASCOM Gemini.net driver before running this script, for it to 
		work correctly.<br />
		<br />
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">

		This script should work on both the Gemini 1 and Gemini 2.&nbsp; It 
		however is only been tested on the Gemini-2.<br />

		<br />

------- script below this line -------

<br />
<span class="style3">				&nbsp;<br />
&nbsp;dim scope<br />
&nbsp;Set Scope=CreateObject("ASCOM.GeminiTelescope.Telescope")<br />
&nbsp;scope.connected = False
      <br />
		wscript.Sleep 2000
      <br />
		scope.connected = True
      scope.CommandBlind">135:", False
      <br />
		wscript.Sleep 2000<br />
		scope.connected = False<br />
		wscript.quit
		<br />
		<br />
		<br />
		</td>
	</tr>
	<tr>
		<td class="style6">
------- script above this line -------

		<br />
		Please note: if you copy and paste this script, HTML characters will be 
		embeded into the code.<br />
		You will have to remove them.&nbsp; They are &lt;br /&gt;<br />
		<br />
&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		&nbsp;Here is a link to 
		<a href="http://gemini-2.com/downloads/VBscripts/terrestrial.zip" target="_blank">download a zipped version</a>. 
		of Terrestrial.vbs</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		<a href="scripting_examples.php" target="_self">Return to Scripting Commands</a></td>
	</tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on July 26, 2015
		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



