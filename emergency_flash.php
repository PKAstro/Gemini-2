<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<title>Gemini 2 Mount Controller</title>


<?php include("topv.php"); ?>


<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="other-files/xweb-popup.js"></script>



<style type="text/css">
.auto-style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: medium;
	color: #FFFFFF;
	text-align: left;
	margin-right: 10px;
	margin-top: 10px;
	margin-bottom: 10px;
}
</style>



</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Emergency Flash Firmware into Gemini-2 Main unit.</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="auto-style2">
		The following proceedure will be used, if when 
		using the Gemini Firmware update (GFU) the main units firmware date does 
		not change to the latest firmware date.&nbsp; This can be caused by 
		several situations.<br>
		<ul>
			<li> There is a file named Cur_Gem2.bin at the root of the micro SDcard.
		</li>
			<li> The micro SDcard has a file corruption on it.</li>
		</ul>
		We are going to address the first situation here.		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">You are going to have to know how to use an FTP 
		program to access the contents of the micro SDcard file structure inside 
		the Gemini-2.&nbsp; You are also going to have to be able to use the Web 
		interface to upload and flash firmware.&nbsp;&nbsp; Demonstration movies 
		are Below. Please review them then goto Step 1.&nbsp; I recommend that 
		you use only a Windows 7 machine.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">Here is a short movie about accessing the
		<a href="http://gemini-2.com/videos/MP4/webinterface.mp4">web interface</a>.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">Here is a short movie on how to do
		<a href="http://gemini-2.com/videos/MP4/ftpaccess_microsdcard.mp4">FTP with File Explorer</a></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		<ol>
			<li>&nbsp;We are going to use the FTP program (in this demo: Windows 
			7 File Explorer) and go in and delete any files with the name of 
			HGM_Gem2.bin or Cur_Gem.bin </li>
			<li>Open up Windows file Explorer and put in ftp:// and follow that 
			with either your "Gemini 2 IP 
			address" or the netbios name "gemini" (no quote marks please)</li>
			<li>In the login box, put in "admin" (no quote marks) and leave the password blank.&nbsp; 
			These 3 steps are the same as the movie FTP with File Explorer 
			above.</li>
			<li>Now you will right mouse click on the Cur_Gem.bin file name and 
			select delete.&nbsp;
			<a href="http://gemini-2.com/videos/MP4/delete_Cur_Gem2.mp4" target="_blank">Movie here</a>.</li>
			<li>Now you should be able to go and use the Gemini File Update 
			program (<a href="http://gemini-2.com/gfu.php/#Follow_the_Prompts" target="_blank">GFU</a>) 
			and update your gemini-2 firmware to the latest version.&nbsp; You 
			can use the Web interface and the Firmware/SRAM page to check the 
			firmware date after using GFU.&nbsp; If for some reason the GFU 
			programs fails to update your firmware (the firmware date is not the 
			latest), please continue with step 6.</li>
			<li>You need to reopen the FTP window using Windows File Explorer.&nbsp; 
			See steps 2 and 3 above. A movie of these steps in linked is step 
			14.</li>
			<li>Once the FTP window is open, you should have a file named 
			"NewGem.bin" at the root of the directory tree.&nbsp; Please right 
			mouse click on that file and select rename.&nbsp; Rename the file to 
			"HGM_Gem2.bin" (again, no quote marks).</li>
			<li>Please turn off the Gemini-2.</li>
			<li>Please unplug the hand controller either at the main unit or at 
			the hand controller.</li>
			<li>Turn on the Gemini-2.&nbsp; It should take about 10 seconds or 
			less for the firmware to update.</li>
			<li>Use the Web interface (see example above) and go to the 
			Firmware/SRAM link and then check the firmware date.&nbsp; It should 
			be the latest date.&nbsp; If it is turn the Gemini-2 off and goto 
			step 12. If it not, then you need to either contact Losmandy or Tom 
			Hilton for help.</li>
			<li>Turn the Gemini-2 off.</li>
			<li>Plug in the hand controller.</li>
			<li>Turn the Gemini-2 on.&nbsp; The hand controller should start 
			updating.&nbsp; It should fully update and flash it's firmware.&nbsp; 
			Once that has stopped, on the hand controller, press Menu--&gt;HC--Info 
			and check the firmware dates.&nbsp; They should be the latest 
			firmware dates.&nbsp; Here is a
			<a href="videos/MP4/step6on.mp4" target="_blank">movie showing step 
			6 on</a>.<br></li>
		</ol>
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6"></td>
	</tr>
</table>

<!--
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">test goes here</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">test goes here</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">test goes here</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">test goes here</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">test goes here</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">test goes here</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">test goes here</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">test goes here</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">test goes here</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">test goes here</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">test goes here</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">test goes here</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">test goes here</td>
	</tr>
</table>
 
-->

</body>




<?php include("bottom.php"); ?>



