<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Firmware Updater</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>

<style type="text/css">
.auto-style1 {
	font-family: serif;
	font-size: medium;
	color: #FF0000;
}
</style>


<base target="_blank" />


</head>

<body style="color: #FFFFFF; background-color: #000000" class="style6">




<body style="color: #FFFFFF; background-color: #000000">

<p></p>
<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Emergency Firmware Update using the Gemini Firmware Updater Program 
		for Windows</td>
	</tr>
</table>
<p></p>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		If you have any error situtations, Please capture any screen error messages and forward them to the
		<a href="https://groups.io/g/Gemini-II
info">Gemini-II 
		Users Group</a>. Windows 7, 8.1 and 10 does have the snipping tool.&nbsp; Just put 
		Snipping Tool in the Search box.&nbsp; It should be the top entry.&nbsp; 
		Use it to capture a jpg of the error please.<br />
		<br />
		Please note that GFU might download the firmware to your G2 if your 
		firmware is dated 13 DEC 2011 or older, but it cannot flash the firmware 
		into the ARM processor.&nbsp; Please use the
		this method to update the firmware<br />
		<br />
		Please read all the instructions before starting.<br /><br />
		This program will: <br />
			1. Downloads the latest 
		<a href="firmware1/Ecurrent/combined.zip" target="_blank">Ecombined.zip</a> from this website.<br />
		
			2. Extracts all the files from the archive to a tmp directory. %appdata%\Roaming\GFU 
		for Win7<br />
		
			3. Uses FTP to send all the files to Gemini (you can choose to send 
			only the main SD card files, Hand Controller Files, Video, hand 
		controller catalogs or all the 
			firmware that is supplied in the combined.zip file.) <strong>BUT FOR 
		THIS FIX, YOU WILL ONLY SELECT THE GEMINI CHECK BOX AND THE FLASH 
		FIRMWARE CHECK BOX.</strong><br />
		
			

		4. Stores all setting before flashing the new firmware and then restores 
		them after the flashing is completed.<br />
		
			&nbsp;<br />
		<br />
		YOU must normally be connected to the Internet, and the Gemini-II via Ethernet 
		with the same computer, with the Gemini-II turned on, for this program to work.&nbsp; 
				<br />
		You will also need to know the IP address that your Gemini-2 is using to 
		connect to the Computer. You can find this on the Web interface on the 
		"Network" tab or on the hand controller by going to: 
		Menu--&gt;Mount--&gt;Network.<br />
		<br />
		

		You can keep the hand controller plugged in if you wish.&nbsp; The 
		motors can be disconnected with no damage to the Gemini-2. To keep the Gemini-2 from complaining, if 
		you remove the motors you might want to 
		make the tracking speed
		<a href="http://gemini/functions.cgi?ts=4&amp;set=Set+Tracking+Rate" target="_blank">
		Terrestrial</a> speed using the Functions tab of the Web interface.&nbsp; 
		Don't forget to put it back to
		<a href="http://gemini/functions.cgi?ts=0&amp;set=Set+Tracking+Rate" target="_blank">
		Sidereal</a> Tracking after the update.<br />
		<br />
		Also if you have multiple Gemini-2 units, please make sure only one is 
		turned on and you are using the IP address of that unit with the 
		utility.<br />
		<br />
		You also need
		<a href="http://download.microsoft.com/download/1/B/E/1BE39E79-7E39-46A3-96FF-047F95396215/dotNetFx40_Full_setup.exe" target="_blank">
		Net Framework 4.0 or above</a> to install the program.&nbsp; If you 
		are running Windows 8 or 8.1 you will need&nbsp;
		<a href="http://download.microsoft.com/download/1/6/7/167F0D79-9317-48AE-AEDB-17120579F8E2/NDP451-KB2858728-x86-x64-AllOS-ENU.exe" target="_blank">
		Net Framework 4.51</a> if it is not already installed on your computer.&nbsp; 
		I noticed that not all the features of Net Framework 4.51 was not 
		enabled on Windows 10, you should enable them by thes instructions:
		
		a) Press “<strong><em>Windows Logo</em></strong>” + “<strong><em>R</em></strong>” 
			keys on the keyboard.<br />
		b) Type “<strong><em>appwiz.cpl</em></strong>” in the “<strong><em>Run</em></strong>” 
			command box and press “<strong><em>ENTER</em></strong>”. <br />
		c) In the “<strong><em>Programs and Features</em></strong>” 
			window, click on the link “<strong><em>Turn Windows features on or 
			off</em></strong>”.<br />
		d) Check if the “<strong><em>.NET Framework 4.5 (includes 
			.NET 2.0 and 3.0)</em></strong>” option is available in it.<br />
		e) If yes, then enable it and then click on “<strong><em>OK</em></strong>”<br />
		f) follow the rest of the instructions. <br />
			<br />
		
		</td></tr>
		
		
	
		</table>
		<table class="tableborder1" align="center" style="width:900px">
		<tr><td class="style6">

			Click on
			<a href="GFU/GFU.zip" target="_blank">GFU.zip</a> to download the program.&nbsp;&nbsp; You will have to 
			put it in a directory of your choice and then unzip it, and then run 
			the "Setup.exe" program, not the "GFUInstall.msi". See
			<a href="videos/MP4/installGFU.mp4" target="_blank">GFU_Install 
			movie</a>.<br />
			<br />
			</td>
	</tr>
	<tr>
		<td class="style7">
		
		<!--<img alt="" height="99" src="gemini-images/GFU/install-bar.jpg" width="900" /><br />Image 1<br /> -->
		</td></tr>

	<tr>
		<td class="style6"><a name="Follow_the_Prompts"></a>Please follow all the install prompts, and once 
		Gemini Firmware Updater is installed, please open it up by clicking on 
		it's Icon 
		<img alt="" height="39" src="http://www.gemini-2.com/gemini-images/GFU/gfu_icon.jpg" width="29" class="auto-style1" /> 
		on your desktop.&nbsp; You should see the program below come up.&nbsp;<br />
		<br />
		</td>
	</tr>
	<tr>
		<td class="style7">
		<br />
		<img alt="" height="900" src="GFU/start_page.jpg" width="900" />&nbsp;<br />Image 1<br />
	</td>
	</tr>

	<tr>
		<td class="style6">Now please make sure that the IP address is what your 
		Gemini-2 uses. Also note that there are five check blocks.&nbsp; See 
		IMAGE 2 for the Changes should look like. <ul><li>
		Gemini - 
			MAKE SURE IT IS CHECKED</li>
			<li>
			Video - 
			MAKE SURE IT IS UNCHECKED.</li>
			<li>
			Hand Controller - 
			MAKE SURE IT IS UNCHECKED </li>
			<li>
			Catalogs - 
			MAKE SURE IT IS UNCHECKED</li>
			<li>
			Flash Firmware - 
			MAKE SURE IT IS CHECKED</li>
			
			
		</ul> 
		</td>
	</tr>

</table>
<table class="tableborder1" align="center" style="width:900px">


	<tr>
		<td class="style7">
		<img alt="" height="905" src="/GFU/E-1.jpg" width="900" /><br />Image 2
		</td>
	</tr>
</table>
<table class="tableborder1" align="center" style="width:900px">

	<tr>
		<td class="style6"><br />DO NOT HIT THE START BUTTON YET.&nbsp; We need 
		to format the micro-SDcard in the Gemini-2 main unit.&nbsp; So hit the 
		"Format SD Card" as shown in Image 3.<br />
		</td>
	</tr>


	<tr>
		<td class="style7">
		
		<img alt="" height="905" src="/GFU/E-format.jpg" width="900" /><br />Image 3
		</td>
	</tr>
</table>
<table class="tableborder1" align="center" style="width:900px">
	
	<tr>
		<td class="style6">When the Format Complete window appears, pleas hit 
		"OK"&nbsp; See Image 4</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="200" src="/GFU/format-complete.jpg" width="313" /><br />
		Image 4
		</td>
	</tr>
</table>
<p></p>
<table class="tableborder1" align="center" style="width:900px">

	<tr>
		<td class="style6">Now Hit the "START" Button&nbsp;</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="905" src="/GFU/Ecombined.jpg" width="900" /><br />
		Image 5
		</td>
	</tr>
</table>
<p></p>
<table class="tableborder1" align="center" style="width:900px">

	<tr>
		<td class="style6">Then the firmware will be downloaded, then extracted, 
		and then uploaded to the Gemini2.&nbsp; When the following screen comes 
		up please do the following.<br />
		1. Hit the Cancel in the "File Update Completed, Do you want to 
		HGM_Gem2" message.<br />
		2. Hit the "X" in the upper Right of the Gemini Firmware Updater screen 
		to close the Gemini Firmware upated program.&nbsp; Go to the steps below Image 6</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="905" src="/GFU/E-Finished.jpg" width="900" /><br />Image 6
		</td>
	</tr>
</table>
<p></p>
<table class="tableborder1" align="center" style="width:900px">

	<tr>
		<td class="style6">Now all the files necessary are uploaded to the Gemini 2.&nbsp; 
		Now Please Power off the Gemini-2 and Power it back on.&nbsp; This will 
		do an emergency flash of the firmware.<br />
		<br />
		Please note that none of the hand controller files or the Video files 
		have been uploaded during this emergency proceedure.&nbsp; If you want 
		them, then you will need to run the normal <a href="gfu.php">GFU process</a>.</td>
	</tr>
	</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7">
		Page last updated on Apr 5, 2016
		</td>
	</tr>
</table>
</body>



<?php include("bottom.php"); ?>

