<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Emergency Stop</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>


</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">A sample script to do an Emergency Stop of all movement</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">Here is a simple script for Emergency Stop.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		This script is based on Microsofts Visual basic, but you do not have to 
		have Microsoft Visual basic to run or compile it, as Microsoft will 
		directly execute it from the desktop.&nbsp; You will have to have the 
		ASCOM Gemini.net driver up and connected to the mount for it to work.&nbsp; Just use Notepad to write 
		the script and save it as a .vbs file.&nbsp; It uses one of the Gemini-2 
		serial commands (in this case :Q#) that are listed
		<a href="http://www.gemini-2.com/web/serial_commands.html" target="_blank">
		here</a>. Note that the Web interface on your Gemini-2 has a page that 
		shows all the serial commands.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">

		<br />

------- script below this line -------

<br />
<span class="style3">				&nbsp;<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				dim scope<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Set Scope = CreateObject("ASCOM.GeminiTelescope.Telescope")<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				scope.connected = True<br />
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				scope.CommandBlind"&gt;:Q#", False<br />
			
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				wscript.Sleep 1000<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; scope.connected = True<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				wscript.quit<br /></span>
		<br />
------- script above this line -------
		<br />
		<br />
		</td>
	</tr>
	<tr>
		<td class="style7whiteborder" >
		&nbsp;</td>
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
		Page last updated on Oct 13, 2016
		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



