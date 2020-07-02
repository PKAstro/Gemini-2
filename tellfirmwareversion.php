<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>




<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<style type="text/css">
.auto-style1 {
	font-size: large;
}
</style>


</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">HOW TO TELL WHAT FIRMWARE VERSIONS AND DATES YOU HAVE.</td>
	</tr>
</table>

<!--
<table align="center" class="whiteborder" style="width: 900px">
	<tr>
		<td></td>
	</tr>
</table>
-->
<table  align="center" style="width:900px" >
	<tr>
		<td class="tableborder1"><span class="style6">
		Click <a href="updatefirmwaremethods.php" target="_blank">here for the latest firmware</a>. 
		Latest firmware is 12 March 2017 for both the main unit and&nbsp; Hand controller.. This is 
		for both the original version of the Gemini-2 units and the new Gemini-2 
		Mini. This adds support for the new G11T and G811 mounts.&nbsp; Note: 
		The Titan 25 support has been dropped since only 1 was produced. This is the new L5.21 version of the main firmware and the L1.2 
		Version of the hand controller.&nbsp; This is NOT BETA Firmware.&nbsp; 
		The Gemini-2 has not been running beta firmware since Dec 2012.<br />
		<br /> Please see
		
		<a href="firmware-changes.php" target="_blank">L5.21 changes</a> to see 
		all the changes in this version of firmware.<br />
		<br />
		To update all firmware, please use the 
		GFU (Gemini-2 Firmware Updater). Here is links for (<a href="gfu.php" target="_blank">GFU for Windows</a>) 
		<!--or (<a href="gfu_mac.php" target="_blank">GFU for MAC</a>)--> Please follow the 
		instructions on each page.<br />
		<br />
		</span>
		</td>
	</tr>
</table>



<table  align="center" style="width:900px">
	<tr>
		<td class="tableborder1"><span class="style6">
		There are now two ways to tell which firmware versions you have.<br />
		1. On the hand controller go to MENU--&gt;HC--&gt;<a href="hc/E020A.php" target="_blank">INFO</a>. The HC firmware 
		version will be listed first. WE&nbsp; GO BY THE BUILD DATE TO DETERMINE 
		VERSIONS.&nbsp; Then 
		the Firmware in the Main unit will be listed.&nbsp; These are two seperate peaces of firmware and can have different versions and build 
		dates.&nbsp; Here is an example:
		</span></td>
		</tr>
	</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7"><span class="auto-style1"><br />The Picture below is not of the latest version.</span> <br/>
		<img alt="" height="618" src="hc/En-Images/E020A.jpg" width="450" />
		
		</td>
	</tr>
</table>


<table  align="center" style="width:900px">
	<tr>
		<td class="tableborder1"><span class="style6">
		<br />
		2. The second way to tell the firmware version is from the web interface. If 
		you have not connected to the web interface click
		<a href="ConnectingtoG2.php" target="_blank">here for instructions</a>. 
			.
		</span></td>
	</tr>
</table>


<table  align="center" style="width:900px"  class="whiteborder">
	<tr>
		<td><span class="style6">
		Once you have logged on you should see a page like this:
		</span>
		</td></tr>
		<tr><td>
		<span class="style7">
				<img alt="" height="900" src="web/images/gemini-2_index.jpg" width="860" /></span>
		</td>
	</tr>
</table>
<table  align="center" style="width:900px"  class="whiteborder">
	<tr>
		<td><span class="style6"><br />
		When you click on the entry "Firmware/SRAM" you will see a page 
		like the folllowing page. </span>
	</td></tr>
	<tr >
		<td> <span class="style7">
		<img alt="" height="900" src="web/images/firmware-sram-hc.jpg" width="860" /> </span></td></tr>
	<tr >
		<td> <span class="style6">
		<br />
			This date is what you go by to tell if you have the latest firmware.  Build times are not normally used.
			<br />The hand controller firmware date in the above picture is 
		V1.20 with a date of 22 Aug 2016. The Main Firmware is 23 Aug 2016, 
		Version 5.21 These are versions.<br />If you do not see a firmware version under the "Hand Controller Firmware Information" area, then you have not allowed the Gemini-2 to go through the boot process.  It has to be at least Cold, Warm or Warm Restarted before the hand controller's firmware date will show up.<br />
		<br /> This is also the page that you will use to flash the 
		NewGem.bin file if you are programming the firmware through the web interface.<br /><br />
		You can also reset the battery backed up SRam by hitting "Reset SRam"
		<br />
		You can also back up the contents of the battery backed up SRAM to the 
		micro-SDcard in the main unit. Hit
		<a href="http://gemini/firmware.cgi?CS=Store+SRAM" target="_self">Store 
		SRAM</a> to do this.<br />
		<br />
		<br />
		If your main Gemini-2 unit is connected Via Ethernet, and powered on, 
		this <a href="http://gemini/firmware.cgi" target="_blank">Firmware/Sram 
		Link</a> will take you to the page in your unit illustrated above. 
		It uses the link <a href="http://gemini/firmware.cgi">http://gemini/firmware.cgi</a>. 
		You will be more than likely presenting with a Login box first.<br />
		<br />
		</span></td></tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td>
		</td>
	</tr>
</table>

<table  align="center" style="width:900px">
	<tr>
		<td class="style7">
		Page last updated on 09 SEP 2017
		</td>
	</tr>
</table>
</body>




<?php include("bottom.php"); ?>


