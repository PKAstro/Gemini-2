<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>G2 Serial Port Modes</title>

<?php include("topv.php"); ?>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />



</head>

<body style="color: #FFFFFF; background-color: #000000;">

<div class="style6">
	<table align="center" style="width: 900px">
		<tr>
			<td class="h2">
			<br/>
				Gemini 2 Hand Controller Firmware Update<br/>
			</td>
		</tr>

		<tr>
			<td class="style7">
			
			<br />
				This guide will help you update <br/>the firmware in your Gemini 2&nbsp; hand controller
			using the web interface.
			
			</td>
		</tr>

		<tr>
			<td class="style6">
			
			<br/>
				If you have not already connected to 
				the Gemini 2 via Ethernet and need instructions 
				<a href="ConnectingtoG2.php" target="_blank">click here</a><br/>
			
			</td>
		</tr>
		<tr>
			<td class="style6">
			<!--
			<br />
			There is a bug in the Hand Controller that will not always let the gemhc.bin file upload 
			and flash correctly. This can be avoided if the boot method is changed from 
			"Ask if possible" to "Cold boot" You can do this on the Web interface under mount 
			(see above paragraph to get to the web interface), all the way to the bottom of the page. See
			
			<a href="gemini-images/FTP/Extra/mount.JPG" target="_blank">Mount page</a>.&nbsp; 
			or enter
			<a href="http://gemini/mountpar.cgi?bm=0&amp;set=Select+Mode=&quot;Cold Start&quot;" target="_blank">
			http://gemini/mountpar.cgi?bm=0&amp;set=Select+Mode="Cold Start"</a> 
			into your address bar of your browser. You may have to substitute 
			your Gemini's IP address for gemini in the above string.<br /> Remember to return it back to your desired setting after 
			updating the firmware.
			-->
			</td>
		</tr>

		<tr>
			<td class="style6">
			
			<ol>
				<li> Download the latest hand controller firmware 
			gemhc.zip from <br />
				<a href="http://gemini-2.com/firmware1/current/gemhc.zip" target="_blank">
				http://gemini-2.com/firmware1/current/gemhc.zip</a> </li></ol></td>
		</tr>
			

		<tr>
			<td class="style6">
			
			<br/>
			<ol start="2">
				<li> Unzip the downloaded file and extract the gemhc.bin file and save it on your computer.  
			Remember the folder where you save it since you will need it later. I put mine on drive C: 
			and named it Gemini2.  I created 2 sub folders, HC and Main. I put the download into HC. I am using Windows 7.<br />
				<img alt="" height="340" src="gemini-images/firmware_update/hc/gemini-2_directory_on_Drive_C.jpg" width="900" /><br />
				<img alt="" height="340" src="gemini-images/firmware_update/hc/-HC.JPG" width="900" /><br /><br /></li>
			<li> &nbsp;Turn on the Gemini and go to the web interface at Gemini’s IP address.  
			IE <a href="http://gemini">http://gemini</a> or
			<a href="http://192.168.0.111">http://192.168.0.111</a> or the ip 
			address as shown on the hand controller under 
			Menu--&gt;Mount--&gt;Network.&nbsp; The user name is admin with no password for login. 
						<a href="gemini-images/firmware_update/login.JPG" target="_blank">
			See login figure.</a> <br />
			<img alt="" height="652" src="gemini-images/firmware_update/hc/Web-mainpage--SDcard-pointed-to.jpg" width="900" /><br /></li>
			
				<li> Click on the SD Card menu Tab selection. </li>
			</ol>
			
			</td>
		</tr>


		<tr>
			<td class="style6">
			
			<br/>
			<ol start="5">
				<li>  Click on the HCFirmware Subdirectory to select it.&nbsp; 
				See Below.</li></ol>
			</td>
		</tr>

		<tr>
			<td class="style7">
			
			<br />
				
				<img alt="" height="1018" src="gemini-images/firmware_update/hc/SDcard_menu_hcfirmware_pointed_to.jpg" width="900" /><br />
				Fig 3</td>
		</tr>

		<tr>
			<td class="style6">
			
			<br/>
			
		<ol start="6">
			<li>  The menus should change to this: </li></ol>

			</td>
		</tr>

		<tr>
			<td class="style7">
			
			<br />
				
				<a href="gemini-images/firmware_update/SDCardHCFirmware.JPG" target="_blank">
				<img src="gemini-images/firmware_update/hc/SDCardHCFirmware_selecting_gemhc.jpg" height="765" width="900" /></a>
				
				<br />
				Fig 4
			</td>
		</tr>

		<tr>
			<td class="style6">
			
			<br/>
			<ol start="7">
				<li>  Click on the Browse button on at the 
				bottom of the screen and browse to where you saved the gemhc.bin file and select it.</li></ol>
			</td>
		</tr>

		

		<tr>
			<td class="style6">
			
			<br/>
			<ol start="8">
				<li>  Click on send.  This will put the gemhc.bin file in this directory.<br />
				
				
				<img alt="" height="961" src="gemini-images/firmware_update/hc/gemhc-uploadedtosdcard.jpg" width="900" /><br />
				You can see that GEMHC.BIN is now listed as the 
				single file uploaded.</li>
			</ol>
			<p>&nbsp;</p>
			</td>
		</tr>


		<tr>
			<td class="style6">
			
			<br/>
			<ol start="9">

			
			<li>You now have 2 choices: You can either up-plug the hand 
			controller, wait about 1 or 2 seconds, and then plug it back in, or 
			Power off the Gemini, and then power it back on. <br /></li></ol>
			</td>
			</tr>
		</table>
	
	<table align="center" style="width: 900px">
		<tr>			
			<td width="450px">
			<ol start="10">
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
				<ol start="11">
				<li>When this screen 
				on the left is done, it usually takes about 5 minutes are so,
			then the flashing screen will appear.</li></ol>
			<img alt="" height="565" src="gemini-images/HandcontrollerImages/HC_Flashing.jpg" style="float: right" width="425" />
			</td></tr>
		</table>
		<table align="center" style="width: 900px">
			<tr>
			<td>
			<ol start="12">
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



