<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>G2 Serial Port Modes</title>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />
</style>

</script>


<?php include("topv.php"); ?>




</head>

<body style="color: #FFFFFF; background-color: #000000">
<div class="style1">
<span class="h2">Gemini 2 Firmware Update</span><br/>
	<table align="center" style="width: 900px">
		<tr>
			<td class="style15">
			<p class="style1"><span class="style18">This guide will help you update <br/>the firmware in your Gemini 2 controller
			using the web interface.</span><font SIZE="3">
			</font>
</p>
			

			</font>
			
			<p class="style6">Connecting to a Network
</p>
			<p class="style6">Gemini 2 firmware can be updated using a built-in web interface.  In order to use the web interface, you will need to make a network connection between Gemini and your computer.  This is most easily done using a cross-over Ethernet cable directly between Gemini’s Ethernet connector and your computer’s network connector.  Alternatively, you can use an Ethernet hub and standard cables between Gemini and the hub and between your computer and the hub.  
			</p>
			<p class="style6"><span class="style6">IP Address:</span><span class="style6"> In order to successfully communicate with your computer over the network, the Gemini 2 unit must have an IP address on the same subnet as the computer.  There are several ways to do this depending on how you connect Gemini to a network.  The following sections describe these methods.
			</span>
</p>
			<p class="style6"><span class="style6">Direct connection</span><span class="style6"> (typical configuration in the field): If you use a cross-over Ethernet cable to directly connect your computer to Gemini, you’ll need to assign both the computer’s Ethernet port and Gemini to IP addresses on the same subnet by hand.  This assumes that your computer is not running a DHCP server on the network port.  By default, if Gemini doesn’t get an IP address assigned by DHCP, it will use its stored value (192.168.0.111 by default).  
			</span>
</p>
			<p class="style6">1.	Use a cross-over cable to connect Gemini 2’s Ethernet port to an Ethernet port on your computer
			</p>
			<p class="style6">2.	Use the appropriate tools on your computer to assign a static IP address to the computer’s Ethernet port.  The address should be in the form 192.168.0.xxx where xxx is any number between 1 and 254 except 111.  Set the subnet mask to 255.255.255.0.  On Windows, you can do this from the control panel.  Look for an option to change network connections.  Refer to your OS documentation for specific instructions.
			</p>
			<p class="style6">3.	Power on Gemini and attempt to access the web server at http://gemini or http://192.168.0.111.  If this doesn’t work, use the hand controller menu to ensure that Gemini’s IP address is 192.168.0.111 by selecting the menu->mount->network options.  If it is not set to that address, you can either change your computer’s IP address to match Gemini’s subnet or you can change Gemini’s IP address to 192.168.0.111 (preferred).
			</p>
			<p class="style6">4.	Gemini uses NetBIOS name resolution so that you don’t need to type the IP address into your browser.  If you haven’t already done so, enter http://gemini  in your browser to access the web server.  The username is “admin” and the default password is blank.
			</p>
			<p class="style6"><span class="style6">Network with DHCP
			</span><span class="style6">support (typical configuration for most home networks with a router):  If you are connecting Gemini to an existing network through a switch, hub, router or wireless adapter, and there is a DHCP server on the network, use this procedure.  Gemini will be assigned an IP address by the DHCP server.  It is important that your computer also be set to either use DHCP to get an IP address, or use a static IP address on the same subnet.
			</span>
</p>
			<p class="style6">1.	Connect the Gemini 2 unit to the existing network through a hub, switch, router or wireless adapter.
			</p>
			<p class="style6">2.	Power Gemini on.  It is important that you do this only after you’ve connected the network cable so that it can communicate with the DHCP server.
			</p>
			<p class="style6">3.	Make sure your computer is set to receive an IP address from DHCP.  Each operating system does this in a different way, so refer to your OS documentation.
			</p>
			<p class="style6">4.	Gemini uses NetBIOS name resolution so that you don’t need to type the IP address into your browser.  Enter http://gemini  in your browser to access the web server.  The username is “admin” and the default password is blank.
			</p>
			<p class="style6">5.	You may optionally configure your DHCP server to assign a specific address to Gemini so that you can always access it using the same IP address.  See the documentation for your DHCP server for details how to do this.  Note: your DCHP server is often built into your internet router.
			</p>
			<p class="style9"><span class="style6">Network without DHCP support:</span><span class="style6"> You may also have an existing network that does not use a DHCP server to assign IP addresses.  Such a network may be using IP autoconfiguration or static IP addresses in all of your machines.  
			</span>
</p>
			<p class="style6">1.	Connect the Gemini 2 unit to the existing network through a hub, switch, router or wireless adapter.
			</p>
			<p class="style6">2.	Power Gemini on.
</p>
			<p class="style6">3.	Power your computer on, if it is not on already.  Look to see what IP address is assigned to the Ethernet port on your computer.  Each OS has a different way to do this, so refer to your OS documentation.  On most versions of Windows, you can type “ipconfig” in a command prompt to see the IP address.
			</p>
			<p class="style6">4.	Use the hand controller menu->mount->network buttons to access Gemini’s IP address. Uncheck the DHCP checkbox.  Click on the IP address field and change it to an IP address on the same subnet as you computer.  For example, if your computer’s IP address is 169.254.36.12, you should set Gemini’s address to 169.254.36.xxx where xxx is a number between 1 and 254 other than 12.  You should also ensure that you do not set Gemin’s IP address to be the same as any other node on the network.
			</p>
			<p class="style6"><font SIZE="3" class="style6">5.	Gemini uses NetBIOS name resolution so that you don’t need to type the IP address into your browser.  Enter http://gemini  in your browser to access the web server.  The username is “admin” and the default password is blank.
Note: Firmware versions after Feb 10, 2011 behave as described above.  Versions between Feb 6th and Feb 10th don’t support NetBIOS name resolution, so you must type the Gemini’s IP address in your browser rather than using the hostname “Gemini.”  Versions previous to Feb 6th do not support DHCP and must be configured as if you are using a cross-over cable or network without DHCP server as described above.  Versions between Jan 23rd and Feb 6th use 192.168.0.111 as the IP address, and version prior to Jan 23, 2011 use 192.168.0.100.
			</font>
</p>
			<p class="style1"><span class="style6"><strong>Updating to the Latest Firmware</strong></span><span class="style6">
			</span>
</p>
			<p class="style10">Main Board Firmware
</p>
			<p class="style15">There are 2 different methods that can be followed to update the main board firmware. Either method may be used, although Variant 1 may be more reliable. 
			</p>
			<p class="style10">Variant 1:
</p>
			<p class="style6"><font SIZE="3" class="style6">1.	Download the latest Gemini Main Board Firmware image from 
			<a href="http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Gemini_Main_Board/">http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Gemini_Main_Board/</a> and download NewGem.zip
			</font></p>
			<p class="style6">2.	Unzip the downloaded file and extract the NewGem.bin file and save it on your computer.  Remember the folder where you save it since you will need it later.
</p>
			<p class="style6">3.	Rename the NewGem.bin file to HGM_Gem2.bin
</p>
			<p class="style6"><font SIZE="3" class="style6">4.	Use your browser to access the Gemini web interface at Gemini’s IP address as described above (default address us 192.168.0.111 if DHCP is not used).
			</font></p>
			<p class="style6">5.	Click on the “SD Card” link.
</p>
			<p class="style6">6.	Click on the “Browse” button under “Upload a file to the SD card’s current directory” and browse to the folder that contains the HGM_Gem2.bin that you stored on your computer in step 2. </p>
			<p class="style6">7.	Select HGM_Gem2.bin and click “OK”
</p>
			<p class="style6">8.	Click on the “Send” button to upload the file to the SD card on the main board.
9.	After the file has been uploaded, cycle the power to the Gemini.  You also may have to Reset the Static ram in the Gemini.  This is sometimes necessary.  The easiest way to do this is to remove the front cover.  Slide a piece of paper under the battery clip for about 15 seconds.  This will clear the ram. 
</p>
			<p class="style10">Variant 2: 
</p>
			<p class="style6"><font SIZE="3" class="style6">1.	Download the latest Gemini Main Board Firmware image from 
			<a href="http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Gemini_Main_Board/">http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Gemini_Main_Board/</a> and download NewGem.zip			</font></p>
			<p class="style6">2.	Unzip the downloaded file and extract the NewGem.bin file and save it on your computer.  Remember the folder where you save it since you will need it later.
</p>
			<p class="style6"><font SIZE="3" class="style6">3.	Use your browser to access the Gemini web interface at Gemini’s IP address as described above (default address us 192.168.0.111 if DHCP is not used). 
			</font></p>
			<p class="style6">4.	Click on the “SD Card” link.
</p>
			<p class="style6">5.	Click on the “Browse” button under “Upload a file to the SD card’s current directory” and browse to the folder that contains the NewGem.bin that you stored on your computer in step 2.
</p>
			<p class="style6">6.	Select NewGem.bin and click “OK”
</p>
			<p class="style6">7.	Click on the “Send” button to upload the file to the SD card on the main board.
</p>
			<p class="style6">8.	After the file has been uploaded, click on the “Home” button in the lower left corner of the web page.  You may need to scroll down to find it. </p>
			<p class="style6">9.	From the Gemini main page, click on the “Firmware/SRAM” link.  This should take you to the Gemini Firmware page.  Information about the firmware currently running on Gemini can be found in the upper left corner of the screen.
</p>
			<p class="style6">10.	Make sure that the “SD Card Gemini Firmware” section of the page shows the NewGem.bin file that you just uploaded.  If it looks correct, press the “Flash Firmware” button.
</p>
			<p class="style6">11.	Click “OK” to confirm that you want to flash the new firmware and wait for Gemini to flash and reboot.  When this is complete, the browser will return to the Gemini Firmware screen.  You can look at the firmware information to check that the firmware was correctly updated. If things do not look correct, you also may have to Reset the Static ram in the Gemini.  This is sometimes necessary.  The easiest way to do this is to remove the front cover.  Slide a piece of paper under the battery clip for about 15 seconds.  This will clear the ram. 

</p>
			<p class="style9"><span class="style6">Hand Controller Firmware</span><span class="style6">
			</span></p>
			<p class="style17">Use the following steps to update the hand controller firmware: </p>
			<p class="style6"><font SIZE="3" class="style6">1.	Download the latest hand controller firmware from 
			<a href="http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Touch_Screen_HC">
			http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Touch_Screen_HC</a> and download gemhc.zip
			</font></p>
			<p class="style6">2.	Unzip the downloaded file and extract the gemhc.bin file and save it on your computer.  Remember the folder where you save it since you will need it later.
</p>
			<p class="style6">3.	Turn on the Gemini and go to the web interface at Gemini’s IP address.  The user name is admin with no password for login
</p>
			<p class="style6">4.	Click on the SD Card menu selection.
</p>
			<p class="style6"><font SIZE="3" class="style6">5.	Click on the HCFirmware Subdirectory to select it.
			</font></p>
			<p class="style6">6.	Click on the Browse button on at the bottom of the screen and browse to where you saved the gemhc.bin file and select it.
</p>
			<p class="style6">7.	Click on send.  This will put the gemhc.bin file in this directory.
</p>
			<p class="style6">8.	Power off the Gemini, and then power it back on.  You should see a message on the hand controller that a file is being uploaded and then another message that a file is being flashed. </p>
			<p class="style6">9.	If this does not happen try powering Gemini off and on again.
</p>
			<p class="style6"><font SIZE="3" class="style6">10.	After the Gemini hand controller has flashed it new firmware the HCFirmware 
			directory in the main unit should be empty and the hand controller 
			should have the new firmware loaded. </font></p>
			<p class="style6">11. Note that catalog updates 
			*.quc files can also be updated the same way. Just upload them the 
			same way you would a gemhc.bin file</p>
			</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>


<?php include("bottom.php"); ?>




</body>
</html>
