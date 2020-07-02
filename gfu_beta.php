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
</style>



</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Updating Firmware with the Gemini Firmware updater</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">Paul Kanevsky has donated his time and effort to provide the Gemini-II community with the ASCOM Gemini.net driver. 
		Now he has done it again with the Gemini Firmware Updater. 
		We all owe Paul much gratitude. <br />
		<br />
		Please read all the instructions before starting.<br /><br />
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
		YOU must be connected to the Internet, and the Gemini-II via Ethernet 
		with the same computer, with the Gemini-II turned on, for this program to work.&nbsp; 
		You can keep the hand controller plugged in if you wish.<br />
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
			<a href="http://gemini-2.com/firmware1/GFU_beta/gfubeta.zip" target="_blank">
			GFU.zip</a> to download the program.&nbsp;&nbsp; You will have to 
			put it in a directory of your choice and then unzip it, and then run 
			the Setup.exe program.<!--&nbsp;&nbsp; &nbsp; There is also a self extracting 
			version that will extract to C:\GFUInstall and then run the Setup 
			program for you.&nbsp;Please select Run instead of save.
			<a href="http://gemini-2.com/firmware1/GFU/GFU.exe" target="_blank">
			GFU.exe</a>&nbsp; This version will not work under Firefox as Firefox 
			does not allow you to run an exe, only download it. --><br />
			</td>
	</tr>
	<tr>
		<td class="style7">
		
		<!--<img alt="" height="99" src="gemini-images/GFU/install-bar.jpg" width="900" /><br />Image 1<br /> -->
		</td></tr>
	<!--	<tr><td class="style6">
		Please Select the Run button.  If you are using Firefox you will have to download the program and run it from the location you 
		select to download it to. --><!--If you have installed
		installed the <a href="https://addons.mozilla.org/en-US/firefox/addon/opendownload-10902/contribute/roadblock/?src=dp-btn-primary&amp;version=3.5.1" target="_blank">
		OpenDownload</a> into firefox, then you will be presented with a run 
		button in firefox. I recommend you install <a href="https://addons.mozilla.org/en-US/firefox/addon/opendownload-10902/contribute/roadblock/?src=dp-btn-primary&amp;version=3.5.1" target="_blank">
		OpenDownload</a>--> </td>
	</tr>

	<tr>
		<td class="style6">Please follow all the install prompts, and once 
		Gemini Firmware Updater is installed, please open it up by clicking on 
		it's Icon 
		<img alt="" height="39" src="gemini-images/GFU/gfu_icon.jpg" width="29" class="auto-style1" /> on your desktop.&nbsp; You should see 
		the program below come up.&nbsp; <br />
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="" height="774" src="gemini-images/GFU/gfu1.jpg" width="900" />
		<br />Image 2</td>
	</tr>

	<tr>
		<td class="style6">Now please make sure that the IP address is what your 
		Gemini-2 uses. Also note that there are three check blocks. <ul><li>
		Gemini&nbsp; - if checked the firmware will be uploaded for 
			the main unit</li>
			<li>
			Hand Controller - if checked the firmware for the hand controller 
			will be uploaded to the main unit and then transferred to the hand 
			controller on the next power cycle.</li>
			<li>
			Catalogs - If checked, then all the catalogs will be uploaded to the 
			hand controller.</li>
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
		<img alt="" height="774" src="gemini-images/GFU/gfu2.jpg" width="900" /><br />Image 3
		</td>
	</tr>

	<tr>
		<td class="style6">Now Please hit the Start Button: See image 4</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="774" src="gemini-images/GFU/gfu3.jpg" width="900" /><br />Image 4
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
		<td class="style6">Then the downloade file will be Extracted: See image 
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
		Handcontroller updating.<br />
		See Image 11</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="774" src="gemini-images/GFU/gfu10.jpg" width="900" /><br />Image 11
		</td>
	</tr>


	</table>

</body>




<?php include("bottom.php"); ?>



