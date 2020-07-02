<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>G2 Serial Port Modes</title>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />



<?php include("topv.php"); ?>




</head>

<body style="color: #FFFFFF; background-color: #000000;">
	<table align="center" style="width: 80%">
		<tr>
			<td class="h2">
			<br/>
				Gemini 2 Combined Main Unit and Hand Controller Firmware Update<br/>
			</td>
		</tr>
		
	</table>
	<br />
<table align="center" style="width: 80%">
	<tr class="style6">
		<td>
			This guide will help you update the firmware in your Gemini 2&nbsp; 
			main unit and hand controller using a using a micro-SDcard 
			reader.&nbsp; <div class="style2">NOTE/WARNING: This 
			update method can be used with any version of the firmware that 
			meets the following requirements.&nbsp; 
			<ol>
				<li>
					If your Hand controller has a
					Jan 31,2011 date or later.
				</li>
				<li>
					On the Web interface&nbsp; SDCard menu, there is a 
					&quot;Format SDCard&quot; Selection.
				</li>
				<li>
					If anything goes wrong, be willing to remove the micro-SDcard 
					from the main unit
					and update it with a micro-Card reader/writer.&nbsp; 
				</li>
			</ol>
			</div>
			<p class="style6">You can see hand controller date date at the bottom 
			of the first screen that the hand controller displays during power 
			up. You can see the main unit at the top of the menu screen on 
			the hand controller.&nbsp; Both these dates only display for a 
			few seconds.
			<br />
			<br />
			You are going to have to do the update twice. The first update 
			will program only the processor in the main controller.&nbsp; 
			This will be done using the Web Flash utility. 
			<br />
			This will allow the Main unit to be accessed using FTP.
			<br />
			<br />
			The second time through we will update the rest of the files on 
			the micro-SDcard, using the FTP process. Now lets get started.
			</p>
			<p>
				1.&nbsp; Download the specially created file
				<a href="http://www.gemini-2.com/firmware1/combined.zip" target="_blank">combined.zip</a> to a empty directory on your hard drive.&nbsp; This zip 
				file contains all the files to update both the Main Gemini Unit and 
				hand controller, that is if your hand controller has a date 
				after Jan 30, 2011.&nbsp; If not we will take care of that after 
				updating the Main micro-SDcard.
			</p>
			<p>
				Here is an example of what it should look like after downloading.
			</p>
			<div class="style7">
				<a href="gemini-images/FTP/combined/combined1.jpg" target="_blank">
				<img alt="" height="354" src="gemini-images/FTP/combined/thunbnails/combined1_small.jpg" width="600" /></a>
				<br />Fig 1 - Click on image to open full page image
			</div>
			
			<p>	
				2.&nbsp; Unzip the downloaded combined.zip file and extract the all the 
				contents to your selected directory and save it on your computer.  
				Remember the folder where you save it since you will need it later. I put mine on drive C: 
				and named it Gemini2.&nbsp; I am using Windows 7.
				Here is what mine looks like unzipped.
			</p>
			<div class="style7">
				<a href="gemini-images/FTP/combined/combined2.jpg" target="_blank">
				<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/combined2_small.jpg" width="600" /></a>
				<br />Fig 2 - Click on image to open full page image
			</div>

			<p>
				3.&nbsp;Now please delete the file combined.zip.  This will leave the files that we are 
				going to put onto the micro-SDcard of the main Gemini-2 unit.  Here is what you should have.
			</p>
			<div class="style7">
				<a href="gemini-images/FTP/combined/combined3.jpg" target="_blank">
				<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/combined3_small.jpg" width="600" /></a>
				<br />Fig 3 - Click on image to open full page image
			</div>

			<p class="style6"> 
				<a href="ConnectingtoG2.php" target="_blank">If you have not already connected to 
				the Gemini 2 via Ethernet and need instructions click here</a>
			</p>
			<p>
				4.&nbsp; Use your browser to access the Gemini web interface at Gemini’s IP address as 
				described above (default address us <a href="http://192.168.0.111" target="_blank">192.168.0.111</a> 
				if DHCP is not used or <a href="Http://gemini" target="_blank">Http://gemini</a> if DHCP 
				is used).<br />Login as in figure 4
			</p>
			<div class="style1">
			<img src="gemini-images/firmware_update/login.JPG" />
			<br />Fig 4 			</div>
			<p>
				5.&nbsp; Click on the “SD Card” link. 
			</p>
			<div class="style1">
				<a href="gemini-images/firmware_update/g2mainmenu.JPG" target="_blank">
				<img src="gemini-images/firmware_update/g2mainmenu_small.JPG" height="246" width="350" /></a>
				<br />
				Fig
			 5 Click on image it see larger version
			</div>
			<p>
				6. The Following page should open
			/p>
			<div class="style1">
				<a href="gemini-images/firmware_update/SDcardmenu.JPG" target="_blank">
				<img alt="" height="291" src="gemini-images/firmware_update/SDcardmenu_small.JPG"  width="350" /></a>
				<br />Fig
			 6 Click on image it see larger version
			</div>
			
			<p>
				7.&nbsp; Click on the “Browse” button under “Upload a file to the SD card’s current directory” and 
				browse to the folder that contains the HGM_Gem2.bin that you stored on your computer in step 2.	
			/p>
				
			<div class="style1">
				<a href="gemini-images/FTP/combined/combined3.jpg" target="_blank">
				<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/combined3_small.jpg" width="600" /></a>
				<br />Fig
			 7 - Click on image to open full page image
			</div>
				
			<p>
				8.&nbsp; Select 
				HGM_Gem2.bin and click “OK” 
			</p>
			<p>
				9.&nbsp; Click on the “Send” button to upload the file to the SD card on the main board. 
			</p>
			<p>
				10.&nbsp; After the file has been uploaded, click on the “Home” button in the lower left 
				corner of the web page.  You may need to scroll down to find it. 
			</p>
			<p>
				11.&nbsp; From the Gemini main page, (Fig 5 above) click on the “Firmware/SRAM” link.  
				This should take you to the Gemini Firmware page.  Information about the firmware 
				currently running on Gemini can be found in the upper left corner of the screen.
			</p>
				
			<div class="style1">
				<a href="gemini-images/firmware_update/g2firmwareflash.JPG" target="_blank">
				<img alt="" height="246" src="gemini-images/firmware_update/g2firmwareflash_small.JPG" width="350" /></a>
				<br />Fig 8<br /> Note that this image shows NewGem.bin instead of 
				HGM_Gem2.binhat is OK,<br /> we want it to show HGM_Gem2.bin&nbsp; I 
				just did not capture a new imange.<br />Click on image it see larger version
			</div>
			<p>
				12.&nbsp; Make sure that the “SD Card Gemini Firmware” section of the page shows the 
				HGM_Gem.bin file that you just uploaded.  If it looks correct, press the “Flash 
				Firmware” button. 
			</p>
			<p>
				13.&nbsp; Click “OK” to confirm that you want to flash the new firmware and 
				wait for Gemini to flash and reboot.  
				When this is complete, the browser will return to the Gemini Firmware screen.  
				You can look at the firmware information to check that the firmware was correctly updated. 
				If things do not look correct, you also may have to Reset the Static ram in the Gemini.  
				This is sometimes necessary.  The easiest way to do this is to remove the front cover.  
				Slide a piece of paper under the battery clip for about 15 seconds.  
				This will clear the ram.	
			</p>
			<p>
				14.	Now go to the SDCard page.  Towards the bottom of the page, there is a format SD Card button. 
				You need to a activate/push this button.  Now when you do you will loose the 
				capability to use
				the Web interface.  That is ok, we are going to restore it using the FTP method. 
				<span class="style14">Note: After the utility formats the card, it puts back the basic 
				file structure or Catalogs, EN, FR, DE, HCFirmware and LOGS. 
				These directory&#39;s except the LOGS directory should be empty. The 
				LOGS directory might or might not be empty. The images below 
				does not show the directories restored.</span></p>
			
			<p>
			15.&nbsp; Please open up the FTP Program WE_FTL_LE.&nbsp; You will see the 
			image below.
			<br />
			If you are going to use a different FTP program, please open that up.&nbsp; If you already know how to get into this 
			program, and have it logged in to the Gemini-2, or using a different 
			FTP program then you can skip down to
			<a href="#22" target="_self">Step 22</a>&nbsp; The image below 
			should display.
			</p>
			
			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp_small.jpg" width="600" /></a>
			<br />	Fig
			 9 - Click on image to open full page image
			</div>
			<p>
				16.&nbsp; Click Next </p>
			
			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp1.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp1_small.jpg" width="600" /></a>
			<br />	Fig
			 10 - Click on image to open full page image
			</div>
			<p>
			17. Enter the Site name here, then click next
			- I used Gemini-2</p>
			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp2.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp2_small.jpg" width="600" /></a>
			<br />	Fig 11 - Click on image to open full page image
			</div>
			<p>
			18. Make sure you select FTP in the drop down selection box. Click 
			next.</p>



			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp3.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp3_small.jpg" width="600" /></a>
			<br />	Fig 12 - Click on image to open full page image
			</div>
			<p>
			19.&nbsp; Now you are going to enter the IP address of your Gemini 
			controller. you do this by entering the IP address shown in the hand controller under 
			Menu->mount->Network.&nbsp; It might be 192.168.0.111 for example.&nbsp; 
			Once the Gemini is programmed and it SRAM erased, it is probably 
			going to default back to the address of 192.168.0.1<br >
			Click next after entering the address.
			</p>



			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp4.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp4_small.jpg" width="600" /></a>
			<br />	Fig 13 - Click on image to open full page image
			</div>

			<p>
			20.&nbsp;&nbsp; Enter &quot;admin&quot; without the quotes for the User Name.<br />
			Enter a space for the password, if using WS_FTP for the FTP client. <br />
			Click next.
			</p>


			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp5.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp5_small.jpg" width="600" /></a>
			<br />	Fig 14 - Click on image to open full page image
			</div>


			<p>
			21.&nbsp; Make sure &quot;<u>Connect to this site&quot;</u> is clicked then Click Finish
			</p>

			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp8.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp8_small.jpg" width="600" /></a>
			<br />	Fig
			 15 - Click on image to open full page image<br>
			 The format routine might have restored the directory structure, <br />putting back the Catalogs, DE,EN,FR and HCFirmware 
				directories 
			</div>

			
			<p>
			<a name="22._">22. </a>You should configure the options menu of 
			WS_FTP LE. 	Go to the Tools--&gt;Options, and in the Program Options box under 
			General, check &quot;Allow deletion of non-empty folders&quot;. <br />You should now see a screen something like 
			this. The left panel could be showing any directory structure on 
			your computer. You want to use the Browse button on the left panel 
			till you find the directory structure unzipped in step 3 above.
			The Right panel shows the contents of the Gemini mini-SDcard 
			in the main Gemini control unit. Note that there may or may not be a 
			LOGS directory displayed in the right panel.</p>




			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp8.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp8_small.jpg" width="600" /></a>
			<br />	Fig 16 - Click on image to open full page image<br>
			 The format routine might have restored the directory structure, <br />putting back the Catalogs, DE,EN,FR and HCFirmware 
				directories 
			</div>
			<p>
			23.&nbsp; You should now have a window that looks like the 
			above image.<br /> 
			Now we are going to copy all the files in the 
			left panel to the right panel. You do this by highlighting all the files/folders in the left panel, 
			and then using the right pointing green arrow and hit it just once.&nbsp; 
			It will take some time for the files to start showing up in the 
			right panel. Be patience. </p>
			<p>
			24.&nbsp; 
			The below image shows the files have been copied over.</p>

			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp10.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp10_small.jpg" width="600" /></a>
			<br />	Fig
			 17 - Click on image to open full page image
			</div>
			<p>
						25.&nbsp; Now power down the Gemini. 
						u><b>Also disconnect the Hand 
			controller.</b></u>
			<br /> If you have the front panel removed, please slide a piece of 
			paper under the battery clip.&nbsp; This will reset the Static Ram.&nbsp; 
						(I am recommending this method as I know it works for 
						sure.) There is a software way to do it also, but the version you are 
			upgrading from might not have that option.
			<br />We are going to wait about 15 seconds.<br />
			Now Remove the piece of paper from the battery clip and power on the Gemini.
			
			
			</p>
				<p>
				&nbsp;</p>

			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp11.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp11_small.jpg" width="600" /></a>
			<br />	Fig
			 18 - Click on image to open full page image
			</div>
			<p>
			26. If everything went as planned, and you are still logged into 
			your FTP client, you should see that HGM_Gem2.bin has been renamed 
			to Cur_Gem2.bin
			</p>

			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp12.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp12_small.jpg" width="600" /></a>
			<br />	Fig
			 19 - Click on image to open full page image
			</div>
			<p>
			27.&nbsp; Now delete the Cur_Gem2.bin file from the right panel.
			This completes the programming of the Main Gemini Unit.
			</p>
				<p>
				28.	&nbsp; We are now going to update the Hand-Controller.  To do this
			just reconnect the hand controller to the main Gemini unit.  You should see it start
			uploading a file, then it will flash the file.  Be patience as this can
			take over 5 minutes</p>
				<p>
				You are done!</p>
		</td>
		</tr>
	</table>

</body>
</html>



	<?php include("bottom.php"); ?>





