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
		<td class="h3">A sample script to park the telescope from Win 7</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">Here is a simple script that I extracted from a sampe 
		script provided by Jeff Lunglhofer before he deleveloped his own mount 
		and controller and left the Gemini groups.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		This script is based on Microsofts Visual basic, but you do not have to 
		have Microsoft Visual basic to run or compile it, as Microsoft will 
		directly execute it from the desktop.&nbsp; Just use Notepad to write 
		the script and save it as a .vbs file</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		'This simple script will just park your telescope<br />
		<br />
		' once it is working un-comment the next line<br />
		'On Error Resume Next<br />
		<br />
		Dim Telescope<br />
		<br />
		Set Telescope = CreateObject("ASCOM.GeminiTelescope.Telescope") <br />
		<br />
		Telescope.Connected = True<br />
		<br />
		Telescope.Park<br />
		<br />
		Set Telescope = nothing<br />
		<br />
		'the next line will terminate the script after the park and close the 
		ASCOM Gemini.net driver.<br />
		WScript.Quit<br />
		<br />
		Now if you would perfer the mount goto the home position instead just 
		replace the<br />
		Telescope.park&nbsp;&nbsp; with<br />
		Telescope.ATHome<br />
		<br />
		You can also do an unpark by using the command <br />
		Telescope.Unpark<br />
		<br />
		So here are 3 examples:<br />
		Park example:<br />
		<br />
		<span class="style3">On Error Resume Next<br />
		Dim Telescope<br />
		Set Telescope = CreateObject("ASCOM.GeminiTelescope.Telescope") <br />
		Telescope.Connected = True<br />
		Telescope.Park<br />
		Set Telescope = nothing<br />
		WScript.Quit<br />
		</span><br />
		Go to Home position<br />
		<br />
		<span class="style3">On Error Resume Next<br />
		Dim Telescope<br />
		Set Telescope = CreateObject("ASCOM.GeminiTelescope.Telescope") <br />
		Telescope.Connected = True<br />
		Telescope.ATHome<br />
		Set Telescope = nothing<br />
		WScript.Quit<br />
		</span><br />
		Unpark example:<br />
		<br />
		<span class="style3">On Error Resume Next<br />
		Dim Telescope<br />
		Set Telescope = CreateObject("ASCOM.GeminiTelescope.Telescope") <br />
		Telescope.Connected = True<br />
		Telescope.UnPark<br />
		Set Telescope = nothing<br />
		</span><br />
		notiice I left out the WScript.Quit command on the Unpark example, as I 
		figured you would want<br />
		the driver to stay active.<br />
		<br />
		Just use a plain text editor and copy the example for each and give them&nbsp; 
		a name such as<br />
		parktelescope.vbs<br />
		hometelescope.vbs<br />
		unparktelescope.vbs<br />
		</td>
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
		Here is a link to 
		<a href="http://gemini-2.com/downloads/VBscripts/parktelescope.zip" target="_blank">download a zipped version with all 3 examples</a>.</td>
	</tr>
</table>
 
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		If you would like to see the example file I extracted it from, 	<a href="http://gemini-2.com/downloads/VBscripts/VBScript_Examples.pdf" target="_blank">here it is as a pdf</a>.</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



