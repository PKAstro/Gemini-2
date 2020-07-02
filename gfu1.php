<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<style type="text/css">
.auto-style1 {
	vertical-align: middle;
}
.auto-style2 {
	text-decoration: underline;
}
</style>



<script type="text/javascript" src="xweb-popup.js" ></script>



</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Updating Firmware with the Gemini Firmware updater 
		(Alternet Method)</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr><td class="style6">
			The Below instructions assumes that you only have one Ethernet 
		connection. <br />
			<em>If you have an Internet and Gemini-2 connection at the same 
		time with your computer, then please use the instructions at 
		 <a href="gfu.php" target="_blank">http://gemini-2.com/gfu.php</a>. </em>
		 <br />I really recommend that you invest in an Ethernet Switch/Hub so that you can 
		use the main method instead of this method.&nbsp; The cost is normally 
		only around $50.00 or so.&nbsp; You could also add a second Ethernet 
		port to your laptop with this
			<a href="http://plugable.com/products/usb2-e1000"  title="Recommended so no crossover cable in needed." target="_blank">USB to Ethernet</a> 
			adapter for about $40.

	
	<br /><br />

	
	</td></tr>
	<tr>
		<td class="style6">Paul Kanevsky has donated his time and effort to provide the Gemini-II community with the ASCOM Gemini.net driver. 
		Now he has done it again with the Gemini Firmware Updater. 
		We all owe Paul much gratitude.&nbsp; Paul does not write code for the 
		MAC or other computers, so please don't ask him too. Also Paul is like 
		me, he is not associated with Losmandy in any way, and is freely 
		donating his time and knowledge to help fellow Gemini users.&nbsp; We 
		should all thank Paul for doing this.<br />
		<br />
		Please read all the instructions before starting.<br />
		<br />
		This program will: <br />
			1. Downloads the latest Combined.zip from this website<br />
		
			2. Extracts all the files from the archive<br />
		
			3. Uses FTP to send all the files to Gemini (you can choose to send 
			only the main SD card files, Hand Controller Files, or all the 
			firmware that is supplied in the combined.zip file<br />
		4. Stores all setting before flashing the new firmware and then restores 
		them after the flashing is completed.<br />
		
			5. Optionally flashes the uploaded firmware, resets SRAM and reboots 
			Gemini<br />
		6. Optionally updates the catalog files in the hand controller.<br />
&nbsp; <br />
		You can also select other files to update the Gemini-2 with besides the 
		default combined.zip file.<br />
		<br />
		You can keep the hand controller plugged in if you wish.&nbsp; The 
		motors can be disconnected if you wish, but if you do you might want to 
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
		are running Windows 8 or 8.1 you will need to install
		<a href="http://download.microsoft.com/download/1/6/7/167F0D79-9317-48AE-AEDB-17120579F8E2/NDP451-KB2858728-x86-x64-AllOS-ENU.exe" target="_blank">
		Net Framework 4.51</a><br />
		<br />
		You will also need to know the IP address that your Gemini-2 is using to 
		connect to the Computer.<br />
			<br />
		</td></tr>
		</table>
		<table class="tableborder1" align="center" style="width:900px">
		<tr><td class="style6">

			Click on
			<a href="http://gemini-2.com/GFU/GFU.zip" target="_blank">
			GFU.zip</a> to download the program.&nbsp;&nbsp; You will have to 
			put it in a directory of your choice and then unzip it, and then run 
			the "Setup.exe" program, not the "GFUInstall.msi".<br />
			<br /> <em>Please follow all the install prompts, to install Gemini Firmware 
			Updater.<br />
			</em><br />
			</td>
	</tr>
	<tr>
		<td class="style6">
		
		<ol>
			<li>
			Please connect the Ethernet connection to your computer and Router/Modem so your computer has an internet connection.</li>
			<li>Once an internet connection is established please download 
			<a href="Http://Gemini-2.com/firmware1/current/combined.zip" target="_blank">Http://Gemini-2.com/firmware1/current/combined.zip</a></li>
			<li>You need to place the downloaded file in what is normally hidden 
			directories in C:\users\Your Login Name\AppData\Roaming\GFU\ <br />
			A shortcut way to do this is by putting <span class="auto-style2">%APPDATA%\GFU</span> exactly as 
			shown in the underlined text to the left (without the underline) into the Windows File Explorer address bar when asked where to 
			save the file.&nbsp; If this does not work for you, then you would 
			have to unhide the directories and use the full path name.&nbsp; If 
			you do not know how to unhide folder&amp;Files click here.
			<a href="unhide-folders-files.php" target="xPopUp" title="Unhiding Folders and Files" onclick="xPopUp(this.href, 'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',600,600,'pixel','center','center'); return false;">how to unhide files folders</a>&nbsp; 
			We use USERNAME and LOGIN NAME as the Same Name for these 
			instructions.</li>
			<li>Once you have downloaded the file into the GFU folder, please 
			remove the Ethernet cable from your router, and place it into the 
			Ethernet connector of your Gemini-2 controller.</li>
			<li>Please turn on your Gemini-2 computer.</li>
		
		</ol>
		</td></tr>

	<tr>
		<td class="style6">Please open GFU up by clicking on 
		it's Icon 
		<img alt="" height="39" src="gemini-images/GFU/gfu_icon.jpg" width="29" class="auto-style1" /> on your desktop.&nbsp; You should see 
		the program below come up.&nbsp; <br />
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="" height="774" src="gemini-images/GFU/secondway.jpg" width="900" />
		<br />Image 
		2</td>
	</tr>

	<tr>
		<td class="style6">Now Please Check that the combined.zip file you 
		downloaded to C:\users\USERNAME\AppData\Roaming\combined.zip is 
		selected.&nbsp; Replace USERNAME with your login name.<br />
		<br />
		Now please make sure that the IP address is what your 
		Gemini-2 uses. Also note that there are four check blocks. <ul><li>
		Gemini&nbsp; - if checked the firmware will be uploaded for 
			the main unit</li>
			<li>
			Hand Controller - if checked the firmware for the hand controller 
			will be uploaded to the main unit and then transferred to the hand 
			controller on the next power cycle.</li>
			<li>
			Catalogs - If checked, then all the catalogs for the hand controller 
			will be uploaded to the main unit and then transferred to the hand 
			controller on the next power cycle.</li>
			<li>
			Flash Firmware - This box if checked will flash the firmware into 
			the main units processor.</li>
			<li>
			Note: if flashing is selected, all your setting except PEC and 
			Models will be saved and restored after the Flashing is done.</li>
		</ul> 
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="" height="774" src="gemini-images/GFU/secondway1.jpg" width="900" /><br />Image 3
		</td>
	</tr>

	<tr>
		<td class="style6">Now Please hit the Start Button: See image 4</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="774" src="gemini-images/GFU/secondway2.jpg" width="900" /><br />Image 4
		</td>
	</tr>

	<tr>
		<td class="style6">The Firmware will be downloaded: See Image 5</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="774" src="gemini-images/GFU/gfu4.jpg" width="900" /><br />Image 5
		</td>
	</tr>

	<tr>
		<td class="style6">Then the downloaded file will be Extracted: See image 
		6</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="774" src="gemini-images/GFU/gfu5.jpg" width="900" /><br />Image 6
		</td>
	</tr>

	<tr>
		<td class="style6">Then the firmware will be uploaded to the Gemini 2.&nbsp; 
		See image 7</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="774" src="gemini-images/GFU/gfu6.jpg" width="900" /><br />Image 7
		</td>
	</tr>

	<tr>
		<td class="style6">Now after all the files are uploaded to the Gemini 2, 
		a message will ask you if you want to Flash the firmware into the 
		processor.
		</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="735" src="gemini-images/GFU/gfu7.jpg" width="855" /><br />Image 8
		</td>
	</tr>

	<tr>
		<td class="style6">Please Select the Yes button. See image 9</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="774" src="gemini-images/GFU/gfu8.jpg" width="900" /><br />Image 9
		</td>
	</tr>

	<tr>
		<td class="style6">The Flash button will turn Yellow indication the Gemini processor is being flashed with the new firmware.  See Figure 10
		
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="" height="774" src="gemini-images/GFU/gfu9.jpg" width="900" /><br />Image 10
		</td>
	</tr>

	<tr>
		<td class="style6">Once the Firmware is flashed, the Sram is reset, and 
		a reboot is done, they you will receive a message to turn off your 
		Gemini-II and then back on.&nbsp; This will then start the 
		Hand Controller updating.<br />
		See Image 11</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="774" src="gemini-images/GFU/gfu10.jpg" width="900" /><br />Image 11
		</td>
	</tr>

	<tr>
		<td class="style6"><br />
		
		Please Turn off your Gemini 2 and then turn it back on.  All the files for the hand controller will then start to be uploaded to the hand controller.
		When this upload is done, then the firmware update is complete.  
		Congratulations.
		</td>
	</tr>

	</table>

</body>




<?php include("bottom.php"); ?>



