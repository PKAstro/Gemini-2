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
		<td class="h3">A sample script to start PEC running</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">Here is a simple script Paul Lanevsky provided that 
		will start the PEC running.</td>
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
		serial commands (in this case 531) that are listed
		<a href="http://www.gemini-2.com/web/serial_commands.html" target="_blank">
		here</a>. Note that the Web interface on your Gemini-2 has a page that 
		shows all the serial commands.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		Please note that this particular script will only work with Gemini-II.&nbsp; 
		This is because 530-532 is only supported in the Gemini-2.&nbsp; See a 
		list of commands
		<a href="http://www.gemini-2.com/web/serial_commands.html" target="_blank">
		here</a><br />
		A zipped script file is linked below

		<br />

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
				
				scope.CommandBlind"&gt;531:", False<br />
			
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				wscript.Sleep 1000<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				scope.connected = False<br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				wscript.quit<br /></span>
		<br />
------- script above this line -------
		<br />
		</td>
	</tr>
	<tr>
		<td class="style6">
		If you replace the 531 with a 532, then the script would turn PEC OFF<br />
		Replacing 531 with 530 would start PEC recording.<br />
		If a Pec file is loaded on the micro SDcard, then using 550 would load 
		that file to use. It uses the default file name "CurrPEC.pec" in the PEC 
		directory, if there is one.&nbsp; If no file is in the mico SDcard and a 
		PEC curve has been generate, then it will store a PEC curve to a file 
		named "CurrPEC.pec".
		
		</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		&nbsp;Here is a link to 
		<a href="http://gemini-2.com/downloads/VBscripts/PEC_on.zip" target="_blank">download a zipped version</a>. PEC_on.vbs</td>
	</tr>
</table>

<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on July 4, 2015
		</td>
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



