<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Using Filezilla to update firmware</title>
<meta content="Gemini-2, Firmware" name="keywords" />
<meta content="How to undate firmware in Gemini-2 using Filezilla" name="description" />
<link href="gemini-2.css" rel="stylesheet" type="text/css" />
</head>

<?php include("topv.php"); ?>



<body style="color: #FFFFFF; background-color: #000000">


	<table align="center" style="width: 900px">
		<tr>
			<td class="h2">
			<br/>
				Using FileZilla to install 
			Aug 27, 2013 (main unit) and Aug 14, 2013 (in HC) Firmware<br/>
			</td>
		</tr>

	</table>

	<table align="center" style="width: 900px">
		<tr><td class="style6">Please note:<br />
			<br />
			Scott Losmandy as requested that the Mobile Hand controller 
			(MHC) be 
			removed from the Gemini-2 Firmware code. This is because the writer 
			of that product has since dropped his membership in the Gemini groups, 
			and is no longer supporting the MHC. The MHC is also not finished, 
			and does not support many of the new changes. It will 
			not load the larger star catalogs also.<br />
			All new Gemini-2 units will be shipped without it.<br />
			<br />
			I will offer a web page that gives instructions and files to 
			overwrite the firmware to restore the mobile hand controller (MHC). 
			This will provide the MHC directory, and a replacement Index.html 
			file for each language in the web interface.&nbsp; Please note, that no support from 
			Scott Losmandy, myself (Tom Hilton), or René Görlich will be 
			provided, nor will any email addressing the MHC in the 
			users groups be answered by the three of us concerning the use of 
			MHC. There is just not 
			enough time to address it. You are totally on your own if you 
			install the MHC, when it comes to MHC related questions.&nbsp; You 
			will have to install the MHC after doing this upgrade. <br />
			<br />
			<br />
			<font size="+2">Please be aware: Many variables have been added to 
			the SRAM, so you must do an&nbsp; SRAM reset after installing the 
			firmware.&nbsp; This firmware will not work correctly if you don't.</font><br />
		</td></tr>
	</table>
	<table align="center" style="width: 900px">
		<tr><td class="style6">
			Some of the changes:<br />
			<br />
			1) New parking levels 0,1, 2<br />
			While the mount resumed tracking in the former (now level 0) parking 
			mode at every button touch, there are two additional parking levels.<br />
			Level 1 allows that GoTo commands are executed and resume tracking.<br />
			Level 2 insist on an Unpark. This function is available at the HC, 
			the GoTo button changes to Unpark as long as the mount is parked. It 
			is also available at the Park screen, and in the ASCOM Gemini.net 
			driver (1.0.51.0).<br />
			<br />
			Serial status command &lt;97 was extended (it returns 8 instead of 6 
			characters now, there's no change in the ENQ macro).<br />
			Serial command 92 was added for managing the parking level. There's 
			no selection for parking levels on the HC yet, it must be done using 
			the serial command over a communication path, ASCOM or the Functions 
			web page.<br />
			<br />
			2) Ruggedized TCP socket support. <br />
			The transparent socket access, using the serial commands, over the 
			default TCP port 4030 has been extended in several ways. First, Keil 
			reacted to the error reports I sent while trying to connect to 
			Southern Stars' Sky Safari. In fact, SkySafari is programmed in a 
			really cruel way I now use to shock my students: For each command 
			(like :GR# or :GD#) a TCP socket is opened, then these few bytes are 
			put into the output buffer and the socket is closed. Keil was not 
			prepared for this behavior (although it complies to rf793), but now 
			they are.<br />
			It's evident (and you can watch the socket port numbers climb up 
			quickly on the Network Statistics web page) that opening and closing 
			several sockets a second doesn't improve SkySafaries performance, 
			but this is the problem of Southern Stars. The iPhone 4 I tested 
			with reacts pretty lame.<br />
			<br />
			There are good news about using Stellarium. This is a really 
			nice free planetarium program that works on Linux, Mac and Windows. 
			For Windows, there is a StellariumScope software available that 
			connects over ASCOM. In my tests it worked flawlessly over ASCOM and 
			Ethernet. I started to work on a Linux driver, once available it 
			should be possible to port it to MacOS.<br />
			<br />
			Since the transparent sockets are not password protected, René has added 
			some features to switch them off (by setting the TCP port to zero) 
			and to specify a peer IP address to reject all other hosts. In the 
			future this will be possibly to specify a range of IP 
			addresses (similar to a firewall rule).<br />
			<br />
			3) Protection for UDP <br />
			The same security measures (switching off by setting the port to 
			zero and selecting a peer IP) apply here. <br />
			The settings (both UDP and TCP) can be done over the Network web 
			page.<br />
			<br />
			4) HC design<br />
			Sebastian Mrozek contributed professionally designed buttons for the 
			HC. They replace the built-in buttons. <br />
			<br />
			5) Adaptive tracking on the HC<br />
			If you GoTo Sun, tracking is changed to Solar, for Moon to Lunar, 
			all other objects to Sidereal.<br />
			<br />
			6) Comet Tracking is implemented, but yet I have to test it.<br />
			<br />
			7) There have been many internal changes.<br />
			</font><br />
		</td></tr>
		<tr>
			<td class="style6">
			<br />	


			This update takes a long time to install.&nbsp;&nbsp; If you wish, you may 
			put the Gemini-2 into the terrestrial tracking mode and unplug the 
			motors. The Gemini-2 will not be damaged by being turned on without 
			the motors connected. The terrestrial mode is to keep the Gemini-2 
			from beeping continually, with the motors disconnected.&nbsp;&nbsp; 
			Also take a note of the catalogs that are already in your Hand 
			Controller. If you already have them, you may not need to upload 
			them again.&nbsp; See Step 20 below for more on this.</td></tr>
		<tr>
			<td class="style6"><br />This set of instructions assumes that you have 
			already downloaded and installed FileZilla FTP.&nbsp; If you have 
			not, then see <a href="installing-filezillaftp.php" target="_blank">
			Installing-FileZilla</a> and then come back here.&nbsp; You are also going to need some kind of file 
			unzipping program.&nbsp; I recommend
			<a href="http://www.7-zip.org/download.html" target="_blank">7Zip</a> 
			as it is free for Windows or
			<a href="http://www.kekaosx.com/en/" target="_blank">Kela for Mac</a> 
			(which uses the 7zip engine) and is free.&nbsp; Just download and follow 
			the prompts the installation promps.</td>
		</tr>
		<tr>
			<td class="style6"><br />1. Please un-plug the hand controller. </td>
		</tr>
		<tr>
			<td class="style6"><br />
			2. Before you start, you need to make an empty 
			directory to download the updated firmware into. I suggest creating 
			one at <a href="file:///C:/Gemini-2">C:\Gemini-2</a>.&nbsp; </td>
		</tr>
		<tr>
			<td class="style6"><br /><a name="3">3</a>. You will need to download the program.&nbsp; 
			Click this link to start
			downloading
			<a href="http://www.gemini-2.com/firmware1/combined.zip" target="_blank">
			combined.zip</a>&nbsp; <br />
			Now 1 of the three windows should pop up 
			depending which Web browser you are using.<ul><li>If using Windows IE:
				<a _self"="" href="using_filezilla-IE-file-save.php" target="_self">click here</a> to see window. 
				Please use the Save as option and browse to C:\Gemini-2 for the 
				save location.</li>
				<li>If using Firefox: 
				<a href="using_filezilla-firefox-file-save.php" target="_self">Click here</a> to see window.</li>
				<li>If using Chrome: 
				<a href="gemini-images/FTP/filezilla/chome-File-save.jpg" target="_blank">Click here</a> to see window. 
				You will need to browse to the C:\Gemini-2 folder.</li>
				<!--<li>If using Safari: 
				<a href="using-Safari-file-save.php" target="_blank">Click here</a> to see window. 
				This will download the file into the Downloads directory.</li></ul>-->
			</td>
		</tr>
		<tr>
			<td class="style6">4. After doing one of the above save 
			options, you should have a window that looks like Fig 1 below. For 
			you MAC users, you will have to use what ever MAC provides in place 
			of File Explorer that windows uses,&nbsp; I think it is called the 
			"Finder."</td>
		</tr>
		<tr>
			<td class="style7"><br />
			
				<a href="gemini-images/FTP/filezilla/Filezilla15.jpg" target="_blank">
				<img alt="" src="gemini-images/FTP/filezilla/thumbnails/Filezilla15_small1.jpg"  height="404" width="900" /></a>
				<br />Fig 1 - click on image to see larger image
			</td>
		</tr>
		<tr>
			<td class="style6"><br />5. In the next figure (Fig 2), you will be using 7-Zip to 
			extract all the files into the same directory as the combined.zip 
			file.<ul><li>Right mouse click on the combined.zip file.</li>
				<li>Right mouse click on the the 7-Zip selection</li>
				<li>select the "Extract here" option.&nbsp; See figure 2 below.</li></ul></td>
		</tr>
		<tr>
			<td class="style7"><br />
			<img alt="" height="521" src="gemini-images/FTP/filezilla/extract-combined-to-here.jpg" width="900" /><br />Fig 2</td>
		</tr>
		<tr>
			<td class="style6"><br />4. The directory should look like below, if you 
			used the "Extract here option"<br />  <img alt="" height="52" src="gemini-images/FTP/filezilla/more-options.jpg" style="float: right" width="93" />(I 
			have &nbsp;Large Icons selected under more options<br />on the right 
			top menu bar.) 			</td>
		</tr>
		<tr>
			<td class="style7"><br />
							<a href="gemini-images/FTP/filezilla/Filezilla18.jpg" target="_blank">
				<img alt="" height="404" src="gemini-images/FTP/filezilla/thumbnails/Filezilla18_small1.jpg" width="900" /></a>
				<br />Fig 3 - Click on image to open full page image

			</td>
		</tr>
		<tr>
			<td class="style6"><br />5. Now right click on the combined.zip 
			folder/file, and either use Cut and paste it in another directory on 
			the hard drive or delete it.&nbsp; Your choice as we will not need 
			it anymore.&nbsp; You can always download it again.</td>
		</tr>
		<tr>
			<td class="style6"><br />6. Now you need to open up Filezilla. </td>
		</tr>
		<tr>
			<td class="style6"><br />7. Click on the File and select Site manager. A 
			window similar to Fig 4 should open. </td>
		</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr>
			<td class="style7" Width="550px" ><br /><img alt="" height="438" src="gemini-images/FTP/filezilla/Filezilla13.jpg" width="519" />
			<br />Fig 4</td>
			<td class="style6"><br />
				8. Fill out the form with these values:<br />
			<ul>
				<li>
				In the box Host: put 192.168.0.111 or whatever your Gemini-2 IP address is.</li>
				<li>
				Protocol: - Select File Transfer Protocol</li>
				<li>
				Encryption - select use plain FTP</li>
				<li>
				&nbsp;Login Type - Select Normal</li>
				<li>
				User: Put in "admin" without the quotes.</li>
				<li>
				Password - leave blank</li>
				<li>
				Select Connect or OK
				
				</li>
			</ul>
			</td>
		</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr>
			<td class="style6"><br />9. A window similar&nbsp; to figure 5 should 
			open.&nbsp; You will need to change the Local Site to C:\Gemini-2 </td>
		</tr>
		<tr>
			<td class="style7"><br />
			<a href="gemini-images/FTP/filezilla/Filezilla19.jpg" target="_blank">
			<img alt="" height="517" src="gemini-images/FTP/filezilla/Filezilla19_small.jpg" width="900"  /></a>
			<br />Fig. 5
		</td>
		</tr>
		<tr>
			<td class="style6"><br />10. Now in the Left window (Local Site) highlight 
			all the directories and files as shown below To do this:<br />
			Click on the top file or directory, Then press the shift key down, 
			and while holding it down, click the last file in the left pane.</td>
		</tr>
		<tr>
			<td class="style7"><br />
			<a href="gemini-images/FTP/filezilla/filezilla-selected-files.jpg" target="_blank">
			<img alt="" height="518" src="gemini-images/FTP/filezilla/filezilla-selected-files_small1.jpg" width="900" /></a>
			<br />Fig. 6
		</td>
		</tr>

		<tr>
			<td class="style6">
			<br />11. After they are highlighted, right mouse click 
			and select upload.  The next window (Fig 7) will pop up. Make 
			sure Overwrite is selected, the select the check box "Always use his 
			action" and then click OK.&nbsp; <strong><u>Important!, Please check 
			the date of the NewGem.bin file on the right side and make sure it 
			is the same date as the NewGem.bin file on the left side</u></strong>.</td>
		</tr>

		<tr>
		<td class="style7"><br />
			<img alt="" height="342" src="gemini-images/FTP/filezilla/Filezilla-over-write.jpg" width="537" /><br />Fig 7</td>
		</tr>

		<tr>
		<td class="style6" ><br />12. Filezilla just uploaded 
			all the new files overwriting the previous versions of the files. We 
			are now going to tell the Gemini-2 to program the new firmware into 
			the main unit.&nbsp; This will be done with a Web browser.&nbsp; You 
			can now close Filezilla.
		</td>
		</tr>
		<tr>
			<td class="style6"><br />13. Open up your favorite Web browser.&nbsp; In 
			the address bar put in <a href="http://192.168.0.111">
			http://192.168.0.111</a> or the IP address of your Gemini-2.&nbsp; 
			You can find this on the hand controller under 
			Menu--&gt;Mount--&gt;Network.
		</td>
		</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr>
			<td class="style7" width="550px">
			<br />
			<img alt="" height="388" src="gemini-images/FTP/filezilla/gemini-login.jpg" width="547" /><br/>
			Fig 8</td>
			<td wodth="20px"></td>
			<td>14.&nbsp; Enter admin in the user block<br />
				15.&nbsp;
				Leave password box empty<br />
				16.&nbsp;
				Hit OK</td>
		</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr>
			<td class="style7">
			<br />
			<img alt="" height="663" src="gemini-images/5_1/image13.jpg" width="900" /><br />
			Fig 9
			</td>
		</tr>
		<tr>
			<td class="style6"><br />17. Select the Firmware/SRAM Tab.</td>
		</tr>
		<tr>
			<td class="style7"><br />
			
			
			
			<img alt="" height="1007" src="gemini-images/FTP/filezilla/gemini-firmware.jpg" width="900" />
			<Br />Fig. 10</td>
		</tr>
		<tr>
			<td class="style6"><br />18.&nbsp; Push on the Flash Firmware tab in the 
			on your Gemini-2 as illustrated above if Fig 10. This will flash the 
			current program into the ARM processor inside the Gemini-2. The 
			screen will change to Fig 11 below.</td>
		</tr>
		<tr>
			<td class="style7">
			
			<a href="gemini-images/FTP/filezilla/Please-wait.jpg">
			<img alt=""  height="503" src="gemini-images/FTP/filezilla/Please-wait_small.jpg" width="900" /></a>
			<br />Fig 11.</td>
		</tr>
		<tr>
			<td class="style6"><br />19.  The screen should stay like this for about 30 seconds or so. and then come back to Fig 12. 
			If it does not, that means that you are probably using an IPaddress other than 
			<a href="HTTP://192.168.0.111">HTTP://192.168.0.111</a>.&nbsp; If it 
			does not come back try putting in <a href="Http://Gemini">Http://Gemini</a> and see if it comes back. 
			If it does not then you will have to goto troubleshooting connection problems.  If you have to do that 
			please look at Menu-->Mount-->network, and write down the setting. 
			Then un-plug the hand controller, and proceed to troubling 
			Connections.</td>
		</tr>
		<tr>
			<td class="style7"><br />
			<img alt="" height="999" src="gemini-images/FTP/filezilla/flashed-main.jpg" width="900" /><br />
			Fig 12 
			Note: The build date for Gemini Firmware should be Aug 27,2013</td>
		</tr>
		<tr><td class="style6"><br />As shown in fig 12 above, be sure to hit the 
			Reset SRAM button for the type of mount you have.&nbsp; Then use the 
			STORE SRAM button after you have reset the mount to the proper&nbsp; 
			mount type.&nbsp; <br />
			After you set your mount type, or site, and or limits, please come 
			back here and hit the Store SRAM button. This will store all the parameters on micro-SDcard, 
			for backup.&nbsp; You can then retrieve them by using the Load Sram 
			button.&nbsp;&nbsp;&nbsp; </td></tr>
		<tr>
			<td class="style6"><br />20. The Hand controller takes a long time 
			to upload all the catalogs.&nbsp; If you examine the HCFirmware 
			directory of the mico SDcard, you will see the following files: (See 
			fig 6 above and click into the right side on HCFirmware to expand 
			it.)<br />
			Gemhc.bin&nbsp; - This is the actual firmware-It must be there.<br />
			GemLogo.b16 - This is the splash screen you see when the HC powers 
			up.<br />
			</td>
		</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr class="style6">
			<td width="300px">
			These are the Red Graphic buttons<br />
			R_220x40.c16 <br />
			RP220x40.c16<br />
			R_140x40.c16<br />
			RP140x40.c16<br />
			R_78x78.c16<br />
			RP78x78.c16<br />
			R_70x40.c16<br />
			RP70x40.c16<br />
			R_24x24.c16<br />
			RP24x24.c16<br />
			R_21x21.c16<br />
			RP21x21.c16
			</td><td width="300px">
			These 
			are the Blue Graphic buttons<br />
			B_220x40.c16<br />
			BP220x40.c16<br />
			B_140x40.c16<br />
			BP140x40.c16<br />
			B_78x78.c16<br />
			BP78x78.c16<br />
			B_70x40.c16<br />
			BP70x40.c16<br />
			B_24x24.c16<br />
			BP24x24.c16<br />
			B_21x21.c16<br />
			BP21x21.c16<br />
			</td><td width="300px">
			These are the green Graphic buttons<br />
			G_220x40.c16<br />
			GP220x40.c16<br />
			G_140x40.c16<br />
			GP140x40.c16<br />
			G_78x78.c16<br />
			GP78x78.c16<br />
			G_70x40.c16<br />
			GP70x40.c16<br />
			G_24x24.c16<br />
			GP24x24.c16<br />
			G_21x21.c16<br />
			GP21x21.c16<br />
			</td>
		</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr>
			<td class="style6"><font size="+2"><br />
			None of the above files are optional, and must be uploaded to the 
			hand controller.</font>&nbsp; However the the star catalogs are optional. You can delete 
			any or all of these catalogs from the HCFirmware directory using 
			Filezilla before you update the Hand controller.&nbsp; This is 
			especially true if they are already in your hand controller.&nbsp; 
			You can always upload them later also.&nbsp; The ones marked as 
			large or medium takes a considerable amount of time to upload.<br />
			<br /></td></tr>
			</table>
			<table align="center" style="width: 900px">
				<tr>
					<td width="450">Arp_EN.guc<br />
					
					LBN_EN.guc<br />
					PN.guc<br />
					BSL.guc<br />
					G2V_EN.guc<br />
					LDN_EN.guc<br />
					Caldwell_EN.guc<br />
					Sh2.guc<br />
					Sharpless_EN.guc<br />
					Herschel400_EN.guc
					</td>
					<td width="450">Combined_Constellation_Stars.guc<br />
					Cederblad_EN.guc<br />
					IC,guc (large catalog)<br />
					NGC.guc (large catalog)<br />
					NGC_constellation.guc (medium size catalog)<br />
					SAO.guc (large catalog)<br />
					Struve_EN.guc (large catalog)<br />
					WDS.guc (medium size&nbsp; catalog)<br />
					
			Messier.guc<br />
					</td>
				</tr>
			</table>
			<table align="center" style="width: 900px">
				<tr>
			<td class="style6">&nbsp;</td>
		</tr>
		<tr>
			<td class="style6">21.
			Now plug the hand controller back in.</td>
		</tr>

	</table>

	<table align="center" style="width: 900px">
		<tr class="style6">			
			<td>
			
				<br />22.&nbsp; You should see a screen like the one on the 
						below. It shows 
						that the hand controller firmware is being uploaded to the hand 
						controller micro SDcard. <br />
						<br />
						If this does not happen try powering Gemini off and
						on again.
						<img alt="" height="571" src="gemini-images/HandcontrollerImages/uploadingnewfirmware.jpg" 
						style="float: left" width="425" />
			</td>
			<td>
				<br />23.&nbsp; When this screen 
				on the left is done, it usually takes about 5 minutes are so,
			then the flashing screen will appear.
			<img alt="" height="565" src="gemini-images/HandcontrollerImages/HC_Flashing.jpg" style="float: right" width="425" /></td></tr>
		</table>
		<table align="center" style="width: 900px">
			<tr>
			<td>
			
			<br />24.	After the Gemini hand controller has flashed its new firmware the HCFirmware 
				directory in the main unit should be empty and the hand controller 
				should have the new firmware loaded. It will again look like Figure 4 above.<br /><br />
			<br />25.
			Note that the catalog updates, *.quc files, the button files will now upload.  
			This can take as much as 60 minutes or so.  When they are all finished uploading, 
			the the hand controller should start over and you will see the
			logo screen, the calibration promt screen and finally the main menu screen.
			You are done when that happens.  Don't forget to reset all the parameters, such
			as limits, Site location, and most importantly mount type.
			</td>
		</tr>
	</table>
		<table align="center" style="width: 900px">
		<tr>
			<td class="style6">To install the <a href="MHC.php" target="_blank">mobile hand controller click this link</a> for instructions</td>
		</tr>
	</table>

</body>

</html>


	<?php include("bottom.php"); ?>

