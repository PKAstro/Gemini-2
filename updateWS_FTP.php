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
	<table align="center" style="width: 900px">
		<tr class="style6">
			<td>
			
				<p>This guide will help you update the firmware in your Gemini 2&nbsp; 
				main unit and hand controller using a FTP client interface.&nbsp; 
				<span class="style2">NOTE/WARNING: This 
				update method is to be only used if your Hand controller has a
				Jan 31,2011 date or later and the Main Gemini unit has a 
				firmware date of 10 April, 2011 or later. If your Hand Controller has an earlier 
				date, you may make it un-operatable.</span>&nbsp;&nbsp; You can see this date at the bottom 
				of the first screen that the hand controller displays during power 
				up. If either of the dates are before the listed dates, you are 
				probably going to have to program your cards using a micro-SDcard 
				programmer.&nbsp; You could use this same file to program the 
				Gemini main unit with a micro-SDcard programmer, but would need 
				a different file to program the Handcontroller micro-SDcard.</p> 
				
				<p>This demo uses 
				<a href="http://www.wsftple.com/download.aspx" target="_blank">WS_FTP_LE</a>&nbsp;&nbsp;&nbsp;  If you have not 
				downloaded and installed an FTP program please do so before continuing.&nbsp;&nbsp; 
				You may use any FTP program you like, but the below instructions are 
				for WS_FTP_LE.
				There are 6 different FTP programs listed under 
				Gemini-2/Programs in the menu bar. Any of them may be used.&nbsp; 
				Some browsers have add-on&#39;s that can also do FTP.<br />
				You will also need to know how to unzip a zip file.  Most Windows Operating Systems let you do this by 
				right mouse clicking on a file and selecting up pack or unzip.  
				I like the utility 7ZIP and highly recommend it for Windows.</p>
		
			<p class="h5">
			Please read all the steps before starting.  If something is not clear don't do these steps, Ask for help
			on the 
			<a href="http://groups.yahoo.com/neo/groups/Gemini-II/" target="_blank">Gemini-II users group</a>
			</p>	
			<p>
				If you have not already connected to the Gemini 2 via Ethernet and need instructions<a href="ConnectingtoG2.php" target="_blank"> click here</a><br/>
			</p>
			<p>
			There is a bug in the Hand Controller that will not always let the gemhc.bin file upload and flash correctly. This can be avoided if the boot method is changed from "Ask if possible" to "Cold boot" You can do this on the Web interface under mount 
			(see above paragraph to get to the web interface), all the way to the bottom of the page. See 
				<a href="gemini-images/FTP/Extra/mount.JPG" target="_blank">Mount page</a>.&nbsp; 
				or enter
			<a href="http://gemini/mountpar.cgi?bm=0&amp;set=Select+Mode=&quot;Cold Start&quot;" target="_blank">
			http://gemini/mountpar.cgi?bm=0&amp;set=Select+Mode="Cold Start"</a> 
			into your address bar of your browser. You may have to substitute 
			your Gemini's IP address for gemini in the above string.<br /> Remember to return it back to your desired setting after 
				updating the firmware.</p>
			
			<p>
				1.&nbsp; Download the specially created file
				<a href="http://www.gemini-2.com/firmware1/combined.zip" target="_blank">combined.zip</a> to a empty directory on your hard drive.&nbsp; This zip 
				file contains all the files to update both the Main Gemini Unit and 
				hand controller. 
			</p>
			<p>
				Here is an example of what it should look like after downloading.
			</p>
			<div class="style7">
				<a href="gemini-images/FTP/combined/combined1.jpg" target="_blank">
				<img alt="" height="354" src="gemini-images/FTP/combined/thunbnails/combined1_small.jpg" width="600" /></a>
				<br />Fig 1 - Click on image to open full page image
			</div>
			
			<p>	2.&nbsp; Unzip the downloaded combined.zip file and extract the all the 
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
				3.&nbsp;
			Now please delete the file combined.zip.  This will leave the files that we are going to put onto 
			the micro-SDcard of the main Gemini-2 unit.  Here is what you should have.
			</p>
			<div class="style7">
			<a href="gemini-images/FTP/combined/combined3.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/combined3_small.jpg" width="600" /></a>
			<br />Fig 3 - Click on image to open full page image
			</div>

			<p>
			4.&nbsp;
			Please open up the FTP Program WE_FTL_LE.&nbsp; You will see the 
			image below.<br />
			If you are going to use a different FTP program, please open that up.&nbsp; If you already know how to get into this 
			program, and have it logged in to the Gemini-2, or using a different 
			FTP program then you can skip down to
			<a href="#11" target="_self">Step 11</a>&nbsp; The image below 
			should display.</p>
			
			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp_small.jpg" width="600" /></a>
			<br />	Fig 4 - Click on image to open full page image
			</div>
			<p>
				5.&nbsp; Click Next </p>
			
			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp1.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp1_small.jpg" width="600" /></a>
			<br />	Fig 5 - Click on image to open full page image
			</div>
			<p>
			6. Enter the Site name here, then click next
			- I used Gemini-2</p>
			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp2.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp2_small.jpg" width="600" /></a>
			<br />	Fig 6 - Click on image to open full page image
			</div>
			<p>
			7. Make sure you select FTP in the drop down selection box. Click 
			next.</p>



			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp3.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp3_small.jpg" width="600" /></a>
			<br />	Fig 7 - Click on image to open full page image
			</div>
			<p>
			8.&nbsp; Now you are going to enter the IP address of your Gemini 
			controller. you do this by entering the IP address shown in the hand controller under 
			Menu->mount->Network.&nbsp; It might be 192.168.0.111 for example.&nbsp; 
			Note: After you reprogram the Gemini, it is probably going to 
			default back to it&#39;s default address of 192.168.0.111<br >
			Click next after entering the address.
			</p>



			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp4.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp4_small.jpg" width="600" /></a>
			<br />	Fig 8 - Click on image to open full page image
			</div>

			<p>
			9.&nbsp;&nbsp; Enter &quot;admin&quot; without the quotes for the User Name.<br />
			Enter a space for the password, if using WS_FTP for the FTP client. <br />
			Click next.
			</p>


			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp5.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp5_small.jpg" width="600" /></a>
			<br />	Fig 9 - Click on image to open full page image
			</div>


			<p>
			10.&nbsp; Make sure &quot;<u>Connect to this site&quot;</u> is clicked then Click Finish
			</p>


			
			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp6.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp6_small.jpg" width="600" /></a>
			<br />	Fig 10 - Click on image to open full page image
			</div>
			<p>
			<a name="11">11</a>. You should now see a screen something like 
			this. The left panel could be showing any directory structure on 
			your computer. You want to use the Browse button on the left panel 
			till you find the directory structure unzipped in step 3 above.
			<br />The Right panel shows the contents of the Gemini mini-SDcard 
			in the main Gemini control unit.
			
			</p>



			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp7.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp7_small.jpg" width="600" /></a>
			<br />	Fig 11 - Click on image to open full page image
			</div>
			<p>
			12. 
			Go to the Tools--&gt;Options, and in the Program Options box under 
			General, check &quot;Allow deletion of non-empty folders&quot;. <br />Highlight all the files/subdirectories in the Right panel except 
			the LOGS subdirectory (shown in blue).&nbsp; Use the delete button 
			in the upper right of the right panel, and delete the selected 
			files.
			You might want to do this 1 subdirectory at a time.&nbsp; Leave the 
			EN directory for last. The below image should be the result.</p>
			

			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp8.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp8_small.jpg" width="600" /></a>
			<br />	Fig 12 - Click on image to open full page image
			</div>
			<p>
			13.&nbsp; You should now have a window that looks like the 
			above image.<br /> Now we are going to copy all the files in the 
			left panel to the right panel. You do this by highlighting all the files/folders in the left panel, 
			and then using the right pointing green arrow and hit it just once.&nbsp; 
			It will take some time for the files to start showing up in the 
			right panel. Be patience. </p>
			<p>
			14.&nbsp; 
			The below image shows the files have been copied over.</p>

			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp10.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp10_small.jpg" width="600" /></a>
			<br />	Fig 14 - Click on image to open full page image
			</div>
			<p>
			15.&nbsp; Disconnect the Hand controller. Power ON the Gemini.&nbsp; 
			You need to reset the Static Ram. To do this, you go to the web 
			interface, the "Firmware/SRAM" page, and at the bottom of the page 
			is an Reset SRAM. Do this after uploading the new firmware.&nbsp; 
			The cycle the power.&nbsp; An alternate method is to put a piece of 
			paper under the battery for about 15 to 30 seconds. To do it this 
			way, power down the Gemini. &nbsp;slide a piece of 
			paper under the battery clip for about 15 to 30 seconds and then 
			remove it.&nbsp; This will reset the Static Ram.&nbsp;&nbsp;
			<br /> This is probably going to result in resetting the IP address back to the
			default of <a href="HTTP://192.168.0.111" target="_blank">HTTP://192.168.0.111</a> 
			<br />If you was using a different IP 
			address then you are going to be disconnected from the 
			Gemini-2 and need <a href="ConnectingtoG2.php">instructions to reconnected</a></a>&nbsp; 
			<br />You can also insure that the Gemini uses
			<a href="http://192.168.111" target="_blank">http://192.168.111</a> by disconnecting 
			the Ethernet cable before powering back up, and then waiting 8 
			seconds before reconnecting it. If the Gemini-2 does not find a DHCP 
			server in the first 8 seconds it defaults back to the static 
			address.</p>
			<p>
			&nbsp;</p>

			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp11.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp11_small.jpg" width="600" /></a>
			<br />	Fig 15 - Click on image to open full page image
			</div>
			<p>
			16. If everything went as planned, and you are still logged into 
			your FTP client, you should see that HGM_Gem2.bin has been renamed 
			to Cur_Gem2.bin
			</p>

			<div class="style7">
			<a href="gemini-images/FTP/combined/ws_ftp12.jpg" target="_blank">
			<img alt="" height="356" src="gemini-images/FTP/combined/thunbnails/ws_ftp12_small.jpg" width="600" /></a>
			<br />	Fig 16 - Click on image to open full page image
			</div>
			<p>
			17.&nbsp; Now delete the Cur_Gem2.bin file from the right panel.
			This completes the programming of the Main Gemini Unit.
			</p>
				<p>
			18.	&nbsp; We are now going to update the Hand-Controller.&nbsp; 
				The Gemini must be through the boot process. To make sure it is 
				use the <a href="ConnectingtoG2.php" target="_blank">Web 
				interface</a> to select the Mount page. At the bottom of the 
				Mount page is a Default StartUp selection box. Please select 
				cold start and then select mode.&nbsp; Please recycle the power 
				then. You can set it back to which every mode you like after the 
				hand controller is programmed.<br />
				
				To do this
			just reconnect the hand controller to the main Gemini unit.  You should see it start
			uploading a file, then it will flash the file.  Be patience as this can
			take over 5 minutes. Below is how the Hand controller should look 
				like as it is downloading the file and flashing the file.</p>
			</td>
		</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr class="style6">			
			<td>
			<ol start="19">
				<li>	You should see a screen like the one on the 
						below. It shows 
						that the hand controller firmware is being uploaded to the hand 
						controller micro SDcard. <br />
						<br />
						If this does not happen try powering Gemini off and
						on again.
						<img alt="" height="571" src="gemini-images/HandcontrollerImages/uploadingnewfirmware.jpg" 
						style="float: left" width="425" /></li></ol>
			</td>
			<td>
				<ol start="20">
				<li>When this screen 
				on the left is done, it usually takes about 5 minutes are so,
			then the flashing screen will appear.</li></ol>
			<img alt="" height="565" src="gemini-images/HandcontrollerImages/HC_Flashing.jpg" style="float: right" width="425" /></li></td></tr>
		</table>
		<table align="center" style="width: 900px">
			<tr>
			<td>
			<ol start="21">
			<li>	After the Gemini hand controller has flashed it new firmware the HCFirmware 
				directory in the main unit should be empty and the hand controller 
				should have the new firmware loaded. It will again look like Figure 4 above.<br /><br /> </li>
			<li>Note that catalog updates, *.quc files can also be updated the same way.
				Just upload them the same way you would a gemhc.bin file</li></ol>
			</td>
		</tr>


	</table>

</body>
</html>



	<?php include("bottom.php"); ?>





