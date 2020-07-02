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
				Gemini 2 Main Unit Firmware Update
			</td>
		</tr>
		<tr>
			<td class="style7"><br /> 
				This guide will help you update <br/>the firmware in your Gemini 2 
				main control unit using the web interface.
			</td>
		</tr>
		<tr>
			<td class="style7"> 
				<a href="ConnectingtoG2.php" target="_blank">If you have not already connected to 
				the Gemini 2 via Ethernet and need instructions click here</a>
			</td>
		</tr>
		<tr>
			<td class="style6"><br />
				Updating to the Latest Main Unit Firmware
				<br />
				<br />There are 2 different methods that can be followed to update the main board firmware. 
				Either method may be used.  The main difference is toward the end, and which file name is 
				used to program.  The 2 program are identical except for there 
				name. If the name is NewGem.bin then you will have to use 
				the program utility built into the web interface to flash the 
				program into the Gemini-2.&nbsp; If the file is named HGM_Gem2.bin then the 
				Gemini-2 will auto-program itself at the next power up.
				<br />
				<br />
				If you have the file named NewGem.bin, you can make it into the file HCM_Gem2.bin 
				file by renaming it from NewGem.bin to HCM_Gem2.bin
				<br />
				<br />
				If you have the file named HCM_Gem2.bin, you can make it into the file NewGem.bin 
				file by renaming it from HCM_Gem2.bin&nbsp; to NewGem.bin
				<br />
				<br />
				The HCM_Gem2.bin method will always reprogram the Gemini 2 even if the NewGem.bin 
				method fails, so it is considered the emergency method.&nbsp; I however prefer 
				it over the NewGem.bin method, especially if I am updating the whole SDCard contents 
				using the FTP method of updating the firmware. (Explained in another section).
				<br />
				<br />
				The following descriptions are almost identical.&nbsp;The one on the left will 
				be for using HCM_Gem2.bin file, and the one on the right for the 
			NewGem.bin file.
			</td>
		</tr>
	</table>


	<table align="center" style="width: 900px" >
		<tr>
			<td class="style11">
				<div class="style1">
				This Column is for HGM_Gem2.bin Method(note: the 
					HGM_Gem2_Date.bin file is now what is present. Use the 
					latest dated file.)
				</div>
				<p>
				1. Download the latest Gemini Main Board Firmware image from
				<a href="http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Gemini_Main_Board/" target="_blank">
				http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Gemini_Main
				_Board/	</a>&nbsp;(if the HGM_Gem2.bin file is not available, then 
				use the link in the right column and upzip the NewGem.bin file 
				and rename it&nbsp; to 
				HGM_Gem2.bin) </p>
				<div class="style1"
				<a href="gemini-images/firmware_update/Getfilemain.JPG" target="_blank">
				<img  alt="" height="201" src="gemini-images/firmware_update/Getfilemain_small.JPG" width="350"/></a>
		
	`			<br />Fig 1 Click on image it see larger version
				</div>
				<p>
				2. Save it on your computer. Remember the folder 
				where you save it since you will need it later. I put mine on drive 
				C: and named it Gemini2.&nbsp; I created 2 sub folders, HC and Main. 
				I am using Windows 7.&nbsp;&nbsp; Fig2&nbsp; is an example of my 
				computer page.
				</p>
				<div class="style1">
				<a href="gemini-images/firmware_update/MainFolder.JPG" target="_blank">
				<img alt="" height="151" src="gemini-images/firmware_update/MainFolder_small.JPG" width="350" /></a>
				<br />Fig 2 Click on image it see larger version
				</div>
				<p>
				3.&nbsp;Unzip the downloaded file and extract the 
				HGM_Gem2.bin file and save it on your computer. After extracting it, 
				it will be named HGM_Gem2.bin.&nbsp; Here is an example 
				of what my extracted directory looks likes: 
				</p>
				<div class="style1">
				<a href="gemini-images/firmware_update/MainFolderHGMunzipped.JPG" target="_blank">
				<img alt="" height="138" src="gemini-images/Update-newgem/MainFolderHGMunzipped_small.JPG" width="350" /></a>
				<br />Fig 3 Click on image it see larger version
				</div>
				<p>
				4.&nbsp; Use your browser to access the Gemini web interface at Gemini’s IP address 
				as described above (default address us 
				<a href="http://192.168.0.111">http://192.168.0.111</a> if DHCP is not used).&nbsp; 
				Login (<a href="gemini-images/firmware_update/login.JPG" target="_blank">see 
				login image.</a>) This page will open. (The image below is a thumbnail, click on it 
				to see a larger image.)
				</p>
				<div class="style1">
				<a href="gemini-images/firmware_update/g2mainmenu.JPG" target="_blank">
				<img src="gemini-images/Update-newgem/g2mainmenu_small.JPG" height="246" width="350"  /></a>
				<br />Fig 4 Click on image it see larger version
				</div>
				<p>
				5.&nbsp; Click on the “SD Card” link.&nbsp;(The image below is a thumbnail, 
				click on it to see a larger image.)
				</p>
				
				<div class="style1">
				<a href="gemini-images/firmware_update/SDcardmenu.JPG" target="_blank">
				<img alt="" height="291" src="gemini-images/firmware_update/SDcardmenu_small.JPG"  width="350" /></a>
				<br />Fig 5 Click on image it see larger version
				</div>
				
				<p>
				6&nbsp; .Click on the “Browse” button under “Upload a file to the SD card’s current 
				directory” and browse to the folder that contains the HGM_Gem2.bin that you stored 
				on your computer in step 3 Fig 4.
				</p>
				<p>
				7.&nbsp; Select HGM_Gem2.bin and click “OK”
				</p>
				<p>
				8.&nbsp; Click on the “Send” button to upload the file to the SD card on the main board.
				</p>
				<p>
				9.&nbsp; After the file has been uploaded, Turn the Gemini power 
				off.&nbsp;  You also have to Reset the Static ram in the Gemini.&nbsp;  
				&nbsp; You have now 
				uploaded the firmware to the Gemini and flashed that program 
				into the Gemini, Congratulations.&nbsp; The Reset of the 
				Static Ram is optional, but if anything does not look 
				correct please do it.&nbsp; The easiest way to do this is to 
				click the Reset SRam, see fig 7 to the right in column 2.&nbsp; You should not have to upload 
				and reflash the program into the Gemini.
				</p>			
		</td>
		
		<td class="style11">
			<div class="style1">
			This Column is for NewGem.bin Method(note: the NewGem_Date.bin file 
				is now what is present. Use the latest dated file.):
			</div>
				<p>
				1. Download the latest Gemini Main Board Firmware image from
				<a href="http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Gemini_Main_Board/" target="_blank">
				http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Gemini_Main</a><br />
				<a href="http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Gemini_Main_Board/" target="_blank">
				_Board/</a> 
				</p>
				<p>
				2.&nbsp;&nbsp; Then unzip the downloaded file save the extracted NewGem.bin file to your 
				computer.  Remember the folder where you save it since you will need it later.
				See Fig 3 on the left side for an example .
				</p>
				<p>3.&nbsp; Use your browser to access the Gemini web interface at Gemini’s IP address as 
				described above (default address us <a href="http://192.168.0.111" target="_blank">192.168.0.111</a> 
				if DHCP is not used or <a href="Http://gemini" target="_blank">Http://gemini</a> if DHCP 
				is used).<br />Login as in figure 1
				</p>
				<p>4.&nbsp; Click on the “SD Card” link. 
				</p>
				<div class="style1">
				<a href="gemini-images/firmware_update/g2mainmenu.JPG" target="_blank">
				<img src="gemini-images/Update-newgem/g2mainmenu_small.JPG" height="246" width="350" /></a>
				<br />Fig 4a Click on image it see larger version
				</div>
				<p>
					5. The Following page should open
				</p>
				<div class="style1">
				<a href="gemini-images/firmware_update/SDcardmenu.JPG" target="_blank">
				<img alt="" height="291" src="gemini-images/firmware_update/SDcardmenu_small.JPG"  width="350" /></a>
				<br />Fig 5a Click on image it see larger version
				</div>
				
				<p>
				6.&nbsp; Click on the “Browse” button under “Upload a file to the SD card’s current directory” and 
				browse to the folder that contains the NewGem.bin that you stored on your computer in step 2.	
				</p>
				
				<div class="style1">
				<a href="gemini-images/firmware_update/GetfileNewGem.JPG" target="_blank">
				<img alt="" height="145" src="gemini-images/Update-newgem/GetfileNewGem_small.JPG" width="350" /></a>
            	 <br />Fig 6 Click on image it see larger version
				</div>
				
				<p>
				7.&nbsp; Select NewGem.bin and click “OK” 
				</p>
				<p>
				8.&nbsp; Click on the “Send” button to upload the file to the SD card on the main board. 
				</p>
				<p>
				9.&nbsp; After the file has been uploaded, click on the “Home” button in the lower left 
				corner of the web page.  You may need to scroll down to find it. 
				</p>
				<p>
				9.&nbsp; From the Gemini main page, (Fig 5 or 5a above) click on the “Firmware/SRAM” link.  
				This should take you to the Gemini Firmware page.  Information about the firmware 
				currently running on Gemini can be found in the upper left corner of the screen.
				</p>
				
				<div class="style1">
				<a href="gemini-images/firmware_update/g2firmwareflash.JPG" target="_blank">
				<img alt="" height="246" src="gemini-images/Update-newgem/g2firmwareflash_small.JPG" width="350" /></a>
				<br />Fig 7 Click on image it see larger version
				</div>
				
				<p>
				10.&nbsp; Make sure that the “SD Card Gemini Firmware” section of the page shows the 
				NewGem.bin file that you just uploaded.  If it looks correct, press the “Flash 
				Firmware” button. 
				</p>
				
				<p>
				11.&nbsp; Click “OK” to confirm that you want to flash the new firmware and 
				wait for Gemini to flash and reboot.  
				When this is complete, the browser will return to the Gemini Firmware screen.  
				You can look at the firmware information to check that the firmware was correctly updated. 
				If things do not look correct, you also may have to Reset the Static ram in the Gemini.  
				This is sometimes necessary.  The easiest way to do this is to 
				click the Reset SRam, see fig 7 above.</p>
			</td>
		</tr>
	</table>


<?php include("bottom.php"); ?>




</body>
</html>
