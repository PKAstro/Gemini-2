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
		<td class="style7">
		<map id="ImgMap0" name="ImgMap0">
			<area alt="" coords="23, 920, 89, 958" href="index.php" shape="rect" />
		</map>
		<img alt="" height="985" src="images/firmware-sram.jpg" width="900" usemap="#ImgMap0" /></td>
	</tr> 
</table>
<table align="center" style="width: 900px">
	<tr><td class="style6">
	Notice that there are no dates shown under "Hand Controller Firmware Information.  This is because
	a cold, warm, or warm restart has not been done, so the hand controller has not started up." </td></tr>
	<tr><td class="style7"><br />
		<map id="ImgMap1" name="ImgMap1">
			<area alt="" coords="27, 914, 82, 941" href="index.php" shape="rect" />
		</map>
		<img alt="" height="1043" src="images/firmware-sram-hc.jpg" width="900" usemap="#ImgMap1" /></td></tr>
	<tr><td class="style6">After a cold, warm or warem restart there is a date 
		shown below "Hand Controller Firmware Information. This is because a 
		cold, warm, or warm restart starts the hand controller up. See image 
		above."&nbsp;&nbsp; </td></tr>
	<tr><td class="style6"></td></tr>
	<tr>
		<td class="style6"><br />This page shows or allows you to:
		<ul>
		<li>
		Gemini Firmware Information - Shows:<ul>
			<li>Board Serial number <!-- NOTE IF YOURS SHOWS NO SERIAL NUMBER 
			PLEASE CONTACT LOSMANDY.--></li>
			<li>Version number of Firmware</li>
			<li>Build date of the firmware - (this for now is how you will tell 
			if you have the latest firmware. We go by this date and the version 
			number.</li>
			<li>Build time.</li>
			<li>Rom size - how big the program is.</li>
			<li>Ram size - how much of the Ram is being used.</li>
		</ul>
		</li>
			<li>Hand Controller Firmware Information<ul>
				<li>The version number, date of firmware and time it was 
				compiled.&nbsp; Note that is will not show up unless the 
				Gemini-2 has finished booting through Cold Start, or Warm Start, 
				or Warm Restart. if it is setting at the Hand controller page 
				asking for the Startup mode, then you will not see the date and 
				version number.</li>
			</ul>
			</li>
		<li><strong>Program (Flash)</strong> new firmware into the ARM 
		processor in the Gemini-2<ul>
				<li>If a programming file has been uploaded (normally NewGem.bin 
				or HGM_Gem2.bin) using the Flash Web page.&nbsp; Then pressing 
				the Flash Firmware button will reprogram the Gemini-2 main ARM 
				processor with these file.</li>
			</ul>
			</li>
			<li><strong><a name="Reset_Sram"></a>Reset the SRAM</strong> - this will erase the SRam contents. (the SRam is 
			the battery backed up ram, not&nbsp; the micro SDcard. It sets the 
			mount to G11 default values. Use the Reset to MI-250 for a MI-250 
			mount.</li>
			<li><strong>Store SRam</strong> contents to a file. - This file will be called 
			Gemini.cfg and it will be in a directory called Config in the micro 
			SDcard.&nbsp;&nbsp; The Gemini programming process will try and use 
			this file, if it is present, when updating firmware to put all your 
			setting back.&nbsp; This file is only generated by pressing the 
			Store SRam button. It is a great idea to do this before changing a 
			battery.</li>
			<li><strong>Load SRam</strong> - this will use the Gemini.cfg file to reload the 
			mount SRAM setting.&nbsp; If you stored it before changing a 
			battery, then use this button to retrieve it.</li>
			<li><strong>Reset SRam</strong> - this will load the SRam back to Factory Defaults, 
			Titan25 mount type, Hollywood as site.</li>
			<li><strong>Reset to MI-250</strong> - Resets the SRam back to MI-250 mount type, 
			MI-250 mount limits and 
			Hollywood site location.</li>
			<li>Reboot Mount:<ul>
				<li><strong>Reboot</strong> - does a reboot and will use the default startup mode 
				- set on mount page.</li>
				<li><strong>Cold Reboot</strong> - will reboot using the cold reboot process.</li>
			</ul>
			</li>
		</ul></td>
	</tr> 
<tr><td></td></tr>

</table>
<table align="center" width="900px" class="tableborder1">
	<tr><td class="style6-border-white"><em>If your Gemini-2 is connected Via Ethernet, 
		turned ON, and Responds to <a href="http://gemini/firmware.cgi" target="_blank">Gemini-2 internal Firmware page</a> then this link 
		will open this page in the Gemini-2 web interface, after prompting for a 
		log-in.</em></td></tr>
	</table>

</body>




<?php include("bottom.php"); ?>


