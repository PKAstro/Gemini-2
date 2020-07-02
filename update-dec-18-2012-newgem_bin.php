<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">updating only NewGem-Dev-18-2013.bin file</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">This page shows how to update only the NewGem.bin Method(note: the NewGem_Date.bin file 
				is now what is present.&nbsp; Please do not pay any attention to 
		the posted date in each image.&nbsp; I have not had time to update the 
		images.&nbsp; Also please note that doing this will more than likely 
		put the Ethernet address of the Gemini-2 back to the default address of 
		http://192.168.0.111.&nbsp;&nbsp;&nbsp; If your network is using 
		http://192.168.1.xxx then you are going to have to reconnect the hand 
		controller to put the network address to what your computer will 
		recognize.&nbsp; <span class="style14">Please note that this is NOT A FULL UPDATE of the Dec 
		18, 2012 firmware, and after doing this update, you can only update to 
		newer versions of the firmware.&nbsp; You cannot image with just this 
		single file.&nbsp; You are only installing it so you have the correct 
		flash routine for later versions of firmware.</span></td></tr>
				<tr><td class="style6">
				1. Download the latest Gemini Main Board Firmware image from
				<a href="firmware1/Older/NewGem-Dec-18-2012.zip" target="_blank">NewGem-Dec-18-2012.zip</a> 
				</td></tr>
				<tr><td class="style6">
				2.&nbsp;&nbsp; Then unzip the downloaded file save the extracted NewGem.bin file to your 
				computer.  Remember the folder where you save it since you will need it later.
				See Fig 1 on the left side for an example . I used C:\Gemini-2 
					in the below example.</td></tr>
				<tr><td class="style7">
					<img alt="" height="322" src="gemini-images/Update-newgem/Get-newgem-unzip.jpg" width="900" /><br />
					&nbsp;<br />Fig 1 
					</td></tr>

				
				<tr><td class="style6">3.&nbsp; Use your browser to access the Gemini web interface at Gemini’s IP address as 
				described above (default address us <a href="http://192.168.0.111" target="_blank">192.168.0.111</a> 
				if DHCP is not used or <a href="Http://gemini" target="_blank">Http://gemini</a> if DHCP 
				is used).<br />Login as admin and no password.
				</td></tr>
				<tr><td class="style6">4.&nbsp; Click on the “SD Card” link. 
				</td></tr>
								<tr><td class="style7">
				
									<img alt="" height="632" src="gemini-images/Update-newgem/g2mainmenu_select_sdcard.jpg" width="900" /><br />Fig 2 
				
				</td></tr>
				<tr><td class="style6">	5. The Following page should open
				</td></tr>
				<tr><td class="style7">

					<img alt="" height="753" src="gemini-images/Update-newgem/SDcardmenu_click_on_browsw.jpg" width="900" /><br />Fig 3 
						
				</td></tr>
				<tr><td class="style6">6.&nbsp; Click on the “Browse” button under “Upload a file to the SD card’s current directory” and 
				browse to the folder that contains the NewGem.bin that you stored on your computer in step 	1.	
				</td></tr>
				<tr><td class="style7">
					<img alt="" height="322" src="gemini-images/Update-newgem/Get-newgem-unzip.jpg" width="900" />
					<br />Fig 4				
				</td></tr>
					<tr><td class="style6">
					7.&nbsp; Select NewGem.bin and click “OK” 
				</td></tr>
				<tr><td class="style6">
					8.&nbsp; Click on the “Send” button to upload the file to the SD card on the main board. 
				</td></tr>
				<tr><td class="style6">
					9.&nbsp; After the file has been uploaded, click on the “Home” button in the lower left 
				corner of the web page.  You may need to scroll down to find it. 
				</td></tr>
				<tr><td class="style6">
					9.&nbsp; From the Gemini main page, (Fig 2 above) click on the “Firmware/SRAM” link.  
				This should take you to the Gemini Firmware page.  Information about the firmware 
				currently running on Gemini can be found in the upper left corner of the screen.
				</td></tr>
				<tr><td class="style7">
					<img alt="" height="951" src="gemini-images/Update-newgem/dec-18-2012-sram-firmware.jpg" width="900" /><br /> 	Fig 5
						</td></tr>
				<tr><td class="style6">
						10.&nbsp; Make sure that the “SD Card Gemini Firmware” section of the page shows the 
				NewGem.bin file that you just uploaded.  If it looks correct, press the “Flash 
				Firmware” button. 
				</td></tr>
				
				<tr><td class="style6">
					11.&nbsp; Click “OK” to confirm that you want to flash the new firmware and 
				wait for Gemini to flash and reboot.  
				When this is complete, the browser will return to the Gemini Firmware screen.  
				You can look at the firmware information to check that the firmware was correctly updated. 
				If things do not look correct, you also may have to Reset the Static ram in the Gemini.  
				This is sometimes necessary.  The easiest way to do this is to 
				click the Reset SRam, see fig 5 above.<br /><br />
									12.&nbsp; Now go and do the 
					<a href="gfu.php" target="_blank">GFU instructions</a> and load the latest firmware.


		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



