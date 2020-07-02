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
.auto-style4 {
	border: 4px solid #FF0000;
	background-color: #000000;
}
</style>


</head>

<body style="color: #FFFFFF; background-color: #000000" class="style6">


<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Updating Olny The Gemini-2 Mini Firmware with the Gemini Firmware updater <br />
		Latest changes to this page: May 06, 2015</td>
	</tr>
</table>
<table align="center" class="auto-style4" style="width: 900px">
	<tr>
		<td class="style6Red">
			Do not use any of the firmware on this site to update the 
			older/Orginal&nbsp; 
			version of the Gemini-2.&nbsp; The version it is shipping with 
			is different than the versions provided on this site. Again the 
			newer version has only one power plug..&nbsp; See
			<a href="http://www.gemini-2.com/faqG2.php#Q1" target="_blank">FAQ 
			Question 1</a> for changes.
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">Paul Kanevsky has donated his valuable time and effort to provide the Gemini-II community with the ASCOM Gemini.net driver. 
		Now he has done it again with the Gemini Firmware Updater. 
		We all owe Paul much gratitude.&nbsp; Paul does not write code for the 
		MAC or other computers, so please don't ask him too. Also Paul is like 
		me, he is not associated with Losmandy in any way, and is freely 
		donating his time and knowledge to help fellow Gemini users.&nbsp; We 
		should all thank Paul for doing this. Also Paul only wanted to spend a 
		minimum amount of time developing this utility.&nbsp; He has already 
		expended much more time that he ever expected to in it's development and 
		testing.&nbsp; So please no asking for changes to the utility.&nbsp; If 
		you want changes, the source code is provided at:&nbsp;
		<a href="https://github.com/pkastro/gfu" target="_blank">
		https://github.com/pkastro/gfu</a><br />
		<br />
		Please read all the instructions before starting.<br /><br />
		This program will: <br />
			1. Downloads the latest 
		G2MiniCombined.zip from this website<br />
		
			2. Extracts all the files from the archive<br />
		
			3. Uses FTP to send all the files to Gemini (you can choose to send 
			only the main SD card files, Hand Controller Files, Video, hand 
		controller catalogs or all the 
			firmware that is supplied in the G2Minicombined.zip file.) To update only 
		the Web interface, only check the Gemini box and leave all the other 
		unchecked.<br />
		4. Stores all setting before flashing the new firmware and then restores 
		them after the flashing is completed.<br />
		
			5. Optionally flashes the uploaded firmware, resets SRAM and reboots 
			Gemini<br />
		6. Optionally updates the catalog files in the hand controller. (Click 
		Catalogs to do this.)<br />
&nbsp; <br />
		You can also select other files to update the Gemini-2 with besides the 
		default combined.zip file.<br />
		<br />
		YOU must 
		normally be connected to the Internet, and the Gemini-II via Ethernet 
		with the same computer, with the Gemini-II turned on, for this program to work.&nbsp; 
		<em><br />
		<br />
		There is an <a href="gfu1.php" target="_blank">alternative</a> 
		but slightly more complex method, if your computer only has one Ethernet 
		port and NO WiFi.&nbsp; However I really recommend that you invest in an 
		Ethernet Switch/Hub so that you can use the main method instead of the 
		alternative method.&nbsp; The cost is normally only around $50.00 or so.&nbsp; You could 
		also add a second Ethernet port to your laptop with this
		<a href="http://plugable.com/products/usb2-e1000" title="Recommended so no crossover cable is needed." target="_blank">USB to Ethernet</a> adapter for about $40.</em>

	
	<br /><br />
		You can keep the hand controller plugged in if you wish.&nbsp; The 
		motors can be disconnected with no damage to the Gemini-2. To keep the Gemini-2 from complaining, if 
		remove the motors you might want to 
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
		Net Framework 4.51</a> if it is not already installed on your computer.<br />
		<br />
		You will also need to know the IP address that your Gemini-2 is using to 
		connect to the Computer. You can find this on the Web interface on the 
		"Network" tab or on the hand controller by going to: 
		Menu--&gt;Mount--&gt;Network.<br />
		<br />
		If your current firmware in your main Gemini-2 unit is older than Dec 
		18, 2012 then you must follow these
		<a href="gfu_for-Dec-18-2012.php" target="_blank">instructions</a> first 
		before loading the latest firmware.&nbsp; This is the latest change to 
		the instructions as of Dec 1, 2014.<br />
			<br />
		</td></tr>
		</table>
		<table class="tableborder1" align="center" style="width:900px">
		<tr><td class="style6">

			Click on
			<a href="GFU/GFU.zip" target="_blank">GFU.zip</a> to download the program.&nbsp;&nbsp; You will have to 
			put it in a directory of your choice and then unzip it, and then run 
			the "Setup.exe" program, not the "GFUInstall.msi". See
			<a href="videos/MP4/installGFU.mp4" target="_blank">GFUInstall movie</a>.<br />
			<br />
			<span class="style3">Note: To only update to the latest Web 
			interface, Check the Gemini box, and Video box, Un-Check the HC box, Un-Check the 
			Catalogs box, and Un-Check the Flash box on the GFU configuration 
			menu.<br /> </span> <br />
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
		<img alt="" height="39" src="/gemini-images/GFU/gfu_icon.jpg" width="29" class="auto-style1" /> on your desktop.&nbsp; You should see 
		the program below come up.&nbsp; Here is a VIdeo of running the
		<a href="videos/MP4/runGFU.mp4" target="_blank">Gemini Firmware Update 
		program</a>.<br />
		<br />
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="" height="900" src="/GFU_mini/gfu1.jpg" width="900" />
		<br />Image 2</td>
	</tr>

	<tr>
		<td class="style6">Now please make sure that the IP address is what your 
		Gemini-2 uses. Also note that there are five check blocks.&nbsp;&nbsp; <ul><li>
		Gemini&nbsp; - if checked the web interface and firmware files will be uploaded for 
			the main units micro-SDcard</li>
			<li>
			Video -&nbsp; if checked, the Videos that Scott Losmandy will be 
			uploaded to the micro-SDcard.&nbsp; Using the web interface, you 
			will then be able to view them without an internet connection.</li>
			<li>
			Hand Controller - if checked the firmware for the hand controller 
			will be uploaded to the main unit micro-SDcard into the HCFirmware 
			directory.&nbsp; After the GFU program has completed, and you power 
			down the Gemini-2 and Power it back up, then the contents of the 
			HCFirmware directory will be uploaded to the hand controller by the 
			main unit and hand controlller. Note: when this has fimished, the 
			hand controller will reboot.&nbsp; Also this empties the HCFirmware 
			directory of the micro-SDcard in the main unit.&nbsp; </li>
			<li>
			Catalogs - If checked, then all the catalogs for the hand controller 
			will be uploaded to the main unit micro SDcard HCFirmware directory.&nbsp; 
			They will then be uploaded to the hand controller on the next power 
			cycle.&nbsp;
			<ul>
				<li>Please Note1: If you already have all the catalogs loaded in 
				your hand controller, you do not have to check this box.</li>
				<li>Note 2: If you have the older hand controller (pre 2014.) 
				please do note select both the Hand controller check box and the 
				Catalogs check box a together.&nbsp; After the all the firmware 
				is uploaded into the main unit, it has flashed, and then all the 
				hand controller files have been uploaded to the hand controller 
				and it has flashed itself and rebooted, the rerun the GFU 
				prorogram and only check the catalog box and no other.&nbsp; 
				After a power cycle, the catalogs will be uploaded to the hand 
				controller.&nbsp; If you are sure you have the newer hand 
				controller, then it should be ok to select both the HC check box 
				and the Catalogs check box.</li>
			</ul>
			</li>
			<li>
			Flash Firmware - This box if checked will download the NewGem.bin 
			file and then flash the firmware into the main units processor, if 
			you select OK after all files are uploaded.<ul>
				<li>Note: if flashing is selected, all your setting except PEC and 
			Models will be saved and restored after the Flashing is done.</li>
			</ul>
			</li>
			
		</ul> 
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="" height="900" src="/gemini-images/GFU_mini/gfu2.jpg" width="900" /><br />Image 3
		</td>
	</tr>

	<tr>
		<td class="style6"><br />Now Please hit the Start Button:&nbsp;&nbsp; PLEASE 
		DO NOT HIT ANY OTHER BUTTONS UNTIL PROMPTED TO DO SO.&nbsp; DOING SO CAN 
		KEEP THIS UTILITY FROM FINISHING WITH THE DESIRED FIRMWARE BEING 
		UPLOADED AND FLASHED INTO THE GEMINI-2.&nbsp; THIS UTILITY IS NOT <span>&nbsp;CURIOS 
		PROOF.<br />
		</span>See image 4</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="900" src="/gemini-images/GFU/gfu3a.jpg" width="900" /><br />Image 4
		</td>
	</tr>

	<tr>
		<td class="style6">The Firmware will be downloaded: See Image 5</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="900" src="/gemini-images/GFU/gfu4.jpg" width="900" /><br />Image 5
		</td>
	</tr>

	<tr>
		<td class="style6">Then the downloaded file will be Extracted: See image 
		6</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="900" src="/gemini-images/GFU/gfu5.jpg" width="900" /><br />Image 6
		</td>
	</tr>

	<tr>
		<td class="style6">Then the firmware will be uploaded to the Gemini 2.&nbsp; 
		See image 7</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="774" src="/gemini-images/GFU/gfu6.jpg" width="900" /><br />Image 7
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
		
		<img alt="" height="900" src="/gemini-images/GFU/gfu7.jpg" width="855" /><br />Image 8
		</td>
	</tr>

	<tr>
		<td class="style6">Please Select the Yes button. See image 9</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="900" src="/gemini-images/GFU/gfu8.jpg" width="900" /><br />Image 9
		</td>
	</tr>

	<tr>
		<td class="style6">The Flash button will turn Yellow indication the Gemini processor is being flashed with the new firmware.  See Figure 10
		
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="" height="900" src="/gemini-images/GFU/gfu9.jpg" width="900" /><br />Image 10
		</td>
	</tr>

	<tr>
		<td class="style6">Once the Firmware is flashed, the Sram is reset, and 
		a reboot is done, then you will receive a message to turn off your 
		Gemini-II and then back on.&nbsp; This will then start the Hand Controller updating.<br />
		See Image 11</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="900" src="/gemini-images/GFU/gfu10.jpg" width="900" /><br />Image 11
		</td>
	</tr>

	<tr>
		<td class="style6"><br />
		
		Please Turn off your Gemini 2 and then turn it back on.  All the files for the hand controller will then start to be uploaded to the hand controller.
		When this upload is done, then the firmware update is complete.  
		
		</td>
	</tr>

	<tr>
		<td class="style6"><br />
		
		Now if you did not select the catalogs check box, and do want to upload the catalogs to your hand controller, then please uncheck, 
		Gemini, Flash Firmware, Video and the HC box.  Check the catalogs box, and then hit the start button again.  There is no need to close
		the Gemini Firmware updat program. After the catalogs are uploaded, (The upload box turns Green), Turn off your Gemini 2 and then turn it back on.  
		All the files for the hand controller will then start to be uploaded to the hand controller.
		When this upload is done, then the catalogs will be uploaded to the hand controller.  
		Congratulations.
		</td>
	</tr>
	</table>

</body>



<?php include("bottom.php"); ?>

