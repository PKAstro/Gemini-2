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
.auto-style5 {
	text-decoration: underline;
}
</style>


<base target="_blank" />


</head>

<body style="color: #FFFFFF; background-color: #000000" class="style6">




<body style="color: #FFFFFF; background-color: #000000">

<p></p>
<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Updating Firmware with the Gemini Firmware Updater Program 
		for Windows</td>
	</tr>
</table>
<p></p>
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
		<!--<br />For Mac Users please see the <a href="gfu_mac.php" target="_blank">Mac Version</a>.<br />--><br />
		If you have any error situations, Please capture any screen error messages and forward them to the
		<a href="https://groups.io/g/Gemini-II
info">Gemini-II 
		Users Group</a>. Windows 7, 8.1 and 10 does have the snipping tool.&nbsp; Just put 
		Snipping Tool in the Search box.&nbsp; It should be the top entry.&nbsp; 
		Use it to capture a jpg of the error please.<br />
		<br />
		Please note that GFU might download the firmware to your G2 if your 
		firmware is dated 13 DEC 2011 or older, but it cannot flash the firmware 
		into the ARM processor.&nbsp; Please use the
		<a href="rebuildmainSDcardfirmware.php" target="_blank">manual method to 
		rebuild the micro-SDcard.<br />
		<br />
		P</a>lease read all the instructions before starting.<br /><br />
		This program will: <br />
			1. Downloads the latest 
		<a href="firmware1/current/combined.zip" target="_blank">combined.zip</a> from this website.<br />
		
			2. Extracts all the files from the archive to a temporary directory. %appdata%\Roaming\GFU 
		for Win7<br />
		
			3. Uses FTP to send all the files to Gemini (you can choose to send 
			only the main SD card files, Hand Controller Files, Video, hand 
		controller catalogs or all the 
			firmware that is supplied in the combined.zip file.)<br />
		
			

		4. Stores all setting before flashing the new firmware and then restores 
		them after the flashing is completed.<br />
		
			5. Optionally flashes the uploaded firmware, resets SRAM and reboots 
			Gemini<br />
		6. Optionally updates the catalog files in the hand controller. (Click 
		Catalogs to do this.)<br />
		7. Optionally updates the Video Files Scott Losmandy has provided.&nbsp; 
		Please note that if you select this option, the upload portion will slow 
		down at about 94%.&nbsp; This is where it starts uploading the video 
		files and they are large compared to the other files.&nbsp; Just be 
		patient, and don't worry, this is normal.<br />
&nbsp; <br />
		You can also select other files to update the Gemini-2 with besides the 
		default combined.zip file.<br />
		<br />
		YOU must normally be connected to the Internet, and the Gemini-II via Ethernet 
		with the same computer, with the Gemini-II turned on, for this program to work.&nbsp; 
				<br />
		You will also need to know the IP address that your Gemini-2 
		is using to connect to the Computer. You can find this on the Web 
		interface on the "Network" tab or on the hand controller by going to: 
		Menu--&gt;Mount--&gt;Network, or Menu--&gt;System--&gt;Network.<br />
		<br />
		

		You can keep the hand controller plugged in if you wish.&nbsp; The 
		motors can be disconnected with no damage to the Gemini-2. To keep the Gemini-2 from complaining, if 
		you remove the motors you might want to 
		make the tracking speed
		<a href="http://gemini/functions.cgi?ts=4&amp;set=Set+Tracking+Rate" target="_blank">
		Terrestrial</a> speed using the Functions tab of the Web interface or 
		"MENU"--&gt;"Track"--&gt;"Terrestrial" on the hand controller.&nbsp; 
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
		<img alt="" height="39" src="http://www.gemini-2.com/gemini-images/GFU/gfu_icon.jpg" width="29" class="auto-style1" /> on your desktop.&nbsp; You should see 
		the program below come up.&nbsp; Here is a VIdeo of running the
		<a href="videos/MP4/runGFU.mp4" target="_blank">Gemini Firmware Update 
		program</a>.<br />
		<br />
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="" height="900" src="/GFU/start_page.jpg" width="900" />
		<br />Image 2</td>
	</tr>

	<tr>
		<td class="style6">Now please make sure that the IP address is what your 
		Gemini-2 uses. Also note that there are five check blocks. <ul><li>
		Gemini - if checked the web interface and firmware files will be uploaded for 
			the main units micro-SDcard</li>
			<li>
			Video - if checked, the Videos that Scott Losmandy will be 
			uploaded to the micro-SDcard. Using the web interface, you 
			will then be able to view them without an internet connection.</li>
			<li>
			Hand Controller - if checked the firmware for the hand controller 
			will be uploaded to the main unit micro-SDcard into the HCFirmware 
			directory. After the GFU program has completed, and you power 
			down the Gemini-2 and Power it back up, then the contents of the 
			HCFirmware directory will be uploaded to the hand controller by the 
			main unit and hand controlller. Note: when this has fimished, the 
			hand controller will reboot. Also this empties the HCFirmware 
			directory of the micro-SDcard in the main unit. </li>
			<li>
			Catalogs - If checked, then all the catalogs for the hand controller 
			will be uploaded to the main unit micro SDcard HCFirmware directory. 
			They will then be uploaded to the hand controller on the next power 
			cycle.
			<ul>
				<li>Please Note1: If you already have all the catalogs loaded in 
				your hand controller, you do not have to check this box.</li>
				<li>Note 2: If you have the older hand controller (pre 2014.) 
				please do note select both the Hand controller check box and the 
				Catalogs check box a together. After the all the firmware 
				is uploaded into the main unit, it has flashed, and then all the 
				hand controller files have been uploaded to the hand controller 
				and it has flashed itself and rebooted, the rerun the GFU 
				program and only check the catalog box and no other. 
				After a power cycle, the catalogs will be uploaded to the hand 
				controller. If you are sure you have the newer hand 
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
			
			<li>FORMAT SD CARD - Please only use this if you think the micro 
			SDcard in the Main Unit (not the hand controller) is corrupted. 
			This will only format that card, and then put the proper files for 
			the GFU program to continue on the micro SDcard.
			<span class="auto-style5"><strong><em>Under no circumstances hit the 
			Format SD RAM after Hitting Start to start the download.</em></strong></span>
			</li>
			
		</ul> 
		</td>
	</tr>

</table>
<table class="tableborder1" align="center" style="width:900px">


	<tr>
		<td class="style7">
		<img alt="" height="900" src="/GFU/IP_Correct.jpg" width="900" /><br />Image 3
		</td>
	</tr>
</table>
<table class="tableborder1" align="center" style="width:900px">

	<tr>
		<td class="style6"><br />Now Please hit the Start Button: PLEASE 
		DO NOT HIT ANY OTHER BUTTONS UNTIL PROMPTED TO DO SO. DOING SO CAN 
		KEEP THIS UTILITY FROM FINISHING WITH THE DESIRED FIRMWARE BEING 
		UPLOADED AND FLASHED INTO THE GEMINI-2. THIS UTILITY IS NOT <span>CURIOS 
		PROOF.<br />
		</span>See image 4</td>
	</tr>


	<tr>
		<td class="style7">
		
		<img alt="" height="900" src="/GFU/hit_Start.jpg" width="900" /><br />Image 4
		</td>
	</tr>
</table>
<table class="tableborder1" align="center" style="width:900px">
	
	<tr>
		<td class="style6">The Firmware will be downloaded: See Image 5</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="900" src="/GFU/Download.jpg" width="900" /><br />Image 5
		</td>
	</tr>
</table>
<p></p>
<table class="tableborder1" align="center" style="width:900px">

	<tr>
		<td class="style6">Then the downloaded file will be Extracted: See image 
		6</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="900" src="/GFU/extract.jpg" width="900" /><br />Image 6
		</td>
	</tr>
</table>
<p></p>
<table class="tableborder1" align="center" style="width:900px">

	<tr>
		<td class="style6">Then the firmware will be uploaded to the Gemini 2. 
		See image 7</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="900" src="/GFU/upload.jpg" width="900" /><br />Image 7
		</td>
	</tr>
</table>
<p></p>
<table class="tableborder1" align="center" style="width:900px">

	<tr>
		<td class="style6">Now after all the files are uploaded to the Gemini 2, 
		a message will ask you if you want to Flash the firmware into the 
		processor.
        Please Select the Yes button. See image 8.
		<span class="style3">The Flash takes about 2 minutes, so please be 
		patient while the Gemini-2 is flashing the firmware into the main 
		processor</span>.</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="900" src="/GFU/Flash-Confirm.jpg" width="900" /><br />Image 8
		</td>
	</tr>

</table>
<p></p>
<table class="tableborder1" align="center" style="width:900px">


	<tr>
		<td class="style7">
		
		<img alt="" height="900" src="/GFU/Flash.jpg" width="900" /><br />Image 9
		</td>
	</tr>

	<tr>
		<td class="style6">The Flash button will turn Yellow indication the 
		Gemini processor is being flashed with the new firmware. See Figure 9</td>
	</tr>
</table>
<p></p>
<table class="tableborder1" align="center" style="width:900px">

	<tr>
		<td class="style6">Once the Firmware is flashed, the Sram is reset, and 
		a reboot is done, then you will receive a message to turn off your 
		Gemini-II and then back on. This will then start the Hand Controller updating.<br />
		See Image 10</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="" height="790" src="/GFU/Finished.jpg" width="855" /><br />
		Image 10</td>
	</tr>
	<tr>
		<td class="style6" width="900px">
		Please note that is GFU times out after the SRAM Reset, With an error 
		message, it probably do to the IP address being changed by the Flashing of Firmware.&nbsp; Just turn off your 
		Gemini-2 and repower it back on.&nbsp; You can check to see if it flashed the 
		firmware after the hand controller updates to confirm everything went OK
		</td>
	</tr>
</table>


<table class="tableborder1" align="center" style="width:900px">

	<tr>
		<td class="style6"><br />
		
		
		Please Turn off your Gemini 2 and then turn it back on.  All the files for the hand controller will then start to be uploaded to the hand controller.
		You should see messages on the hand controller that this is happening. When this upload is done, then the firmware update is complete. 
		Please do not turn off the Gemini-2 while the Hand Controller is 
		updating. Wait till it presents one of the following screens 
		please.<br />
		<span class="style3">Please NOTE: After you turn off your Gemini-2 and turn it back on, the 
		GFU program has no control of the Hand controller update. The Gemini-2 does this update by moving
		any files in the HCFirrmware directory on the main units micro-SDCard to the hand controller using
		a serial protocol.</span><br />
		If you never get one of these screens and the hand controller just sits at the
		"Connecting to Gemini" message, then the upload to the hand controller probably went bad.  Please let us
		know on the
		<a href="https://groups.io/g/Gemini-II
info" target="_blank">Gemini-2 Users Group</a> so we can help.<br />
		<br />
		Also if the hand controller tells you to update the Main units firmware, 
		please see t<a href="http://wiki.gemini-2.com/index.php/179/gemini-firmware-update-program-leave-units-firmware-unchanged" target="_blank">his</a> 
		wiki.<br />
		</td>
	</tr>
</table>
		<table class="tableborder1" align="center" style="width:900px">
	<tr>
		<td class="style7">
		<img alt="" height="611" src="hc/En-Images/E001.jpg" width="450" />
</td>
		<td class="style6">
		<img alt="" height="611" src="hc/En-Images/E003.jpg" width="450" />
		</td>
	</tr>
	</table>
<table class="tableborder1" align="center" style="width:900px">
	<tr>
		<td class="style6"><br />
		
		If after updating the hand controller, please recalibrate the hand controller.  If you do not it is possible that it's buttons will change the languages and be all messed up.&nbsp;
		The touch pad menu comes up for about 1 second after the hand controller is powered up. Touch it while it is showing and follow the
		insturctions. More instructions are
		<a href="http://gemini-2.com/quickstart/index.php" target="_blank">here</a>. 
		</td>
	</tr>
	</table>
<table class="tableborder1" align="center" style="width:900px">
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

<table class="tableborder1" align="center" style="width:900px">
	<tr>
		<td class="style6"><br />
		Now lets make sure that the firmware was flashed into the Main processor. <br /> Please go to Menu-->HC-->INFO.
		The dates is what you look at. The Main board firmware date should be March 12 2017.  If it is not then
		you will have to REDO the GFU program, but only CHECK "Gemini" and "Flash Firmware" at the top of the selection page.
		(Assuming that the first time through GFU, the hand controller was updated and has a March 12 2017 date.)
		At the bottom of the GFU selection page select "Format SD Card"  Once in a while a file is left on the micro-SDcard
		that will not let the GFU program flash the firmware into the main processor.  Formatting the micro SDcard gets
		rid of it.  It will also delete the store configure file that you may have created.&nbsp; 
		Once the micro SDcard is FORMATED, the start over and do GFU again with 
		only "Gemini" and "Flash Firmware" checked.<br />
		
		</td>
	</tr>
</table>


<table  align="center" style="width:900px">
	<tr>
		<td class="style7">
		Page last updated on FEB 27, 2018
		</td>
	</tr>
</table>
</body>



<?php include("bottom.php"); ?>
