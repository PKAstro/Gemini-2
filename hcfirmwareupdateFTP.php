<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>G2 Serial Port Modes</title>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />



<?php include("topv.php"); ?>










<style type="text/css">
a {
	color: #FFFF00;
}
a:visited {
	color: #00FFFF;
}
a:hover {
	color: #FF00FF;
}
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: medium;
	color: #FFFFFF;
	text-align: left;
	margin-left: 40px;
}
.style12 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: medium;
	color: #FFFFFF;
	text-align: center;
}
.auto-style1 {
	text-decoration: underline;
}
</style>







</head>

<body style="color: #FFFFFF; background-color: #000000;">
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
			using a FTP client interface.<br /> this demo uses 
			<a href="http://www.wsftple.com/download.aspx" target="_blank">WS_FTP_LE</a>
			</td>
		</tr>

		<tr>
			<td class="style6">
			<br/>
				<a href="ConnectingtoG2.php" target="_blank">If you have not already connected to 
				the Gemini 2 via Ethernet and need instructions click here</a><br/>
			</td>
		</tr>
		<tr><td class="style6">
					<br />
			There is a bug in the Hand Controller that will not always let the gemhc.bin file upload and flash correctly. 
			This can be avoided	if the boot method is changed from "Ask if possible" to "Cold boot" You can do this on the Web interface under mount 
			(see above paragraph to get to the web interface), all the way to the bottom of the page. See 
				<a href="gemini-images/FTP/Extra/mount.JPG" target="_blank">Mount page</a>.&nbsp; 
				or enter
			<a href="http://gemini/mountpar.cgi?bm=0&amp;set=Select+Mode=&quot;Cold Start&quot;" target="_blank">
			http://gemini/mountpar.cgi?bm=0&amp;set=Select+Mode="Cold Start"</a> 
			into your address bar of your browser. You may have to substitute 
			your Gemini's IP address for gemini in the above string.<br /> Remember to return it back to your desired setting after 
				updating the firmware. <br /><strong><span class="auto-style1">
					Now cycle the main Gemini power off then back on.</span><em>.</em></strong></p>
			

		</td></tr>
		<tr>
			<td class="style6">
			<br />
				1.&nbsp; Download the latest hand controller firmware from 
				<a href="http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Touch_Screen_HC/">http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Touch_Screen_HC/</a> 
				(Note: The filename now contains a date such as gemhc_date.zip. Use 
			the lasted dated file.)
			</td>
		</tr>
			
		<tr>
			<td class="style6">
			<br/>
				Updating to the Latest Hand Controller Firmware
			</td>
		</tr>

		<tr>
			<td class="style7">
			<br />
				<a href="gemini-images/firmware_update/Getfilehc.JPG" target="_blank">
				<img alt="" height="356" src="gemini-images/firmware_update/Getfilehc_small.JPG" width="600" /></a>
				<br />
				Fig 1 - Click on image to open full page image
			</td>
		</tr>

		<tr>
			<td class="style6">
			<br/>
				2.&nbsp; Unzip the downloaded file and extract the gemhc.bin file and save it on your computer.  
				Remember the folder where you save it since you will need it later. I put mine on drive C: 
				and named it Gemini2.  I created 2 sub folders, HC and Main. I am using Windows 7.
				<br /><br />
				3.&nbsp; Use your favorite FTP program to access the Gemini-2 main SDcard 
				directory.<br />
				This is what mine looks like using WS_FTP_LE.
						
			(please note that you need to make the left panel point to where you 
			downloaded and unzipped the gemhc.bin file.)</td>
		</tr>

		<tr>
			<td class="style7">
			<br />
			
			
			<a href="gemini-images/FTP/wsftp/8WS_FTP.JPG" target="_blank">
			<img alt="Hand controller update" height="370" src="gemini-images/FTP/wsftp/thumbnails/8WS_FTP_small.jpg" width="600" /></a>
			<br />
			&nbsp;<br />
			Fig 2 - Click on image to open full page image

			</td>
		</tr>

		<tr>
			<td class="style6">
			<br/>
				4.&nbsp; Double Click on the HCFirmware Subdirectory to select it. 
			(In Right panel)</td>
		</tr>

		<tr>
			<td class="style7">
			<a href="gemini-images/FTP/wsftp/9WS_FTP.JPG" target="_blank">
			<img alt="Hand controller update" height="370" src="gemini-images/FTP/wsftp/thumbnails/9WS_FTP_small.jpg" width="600" /></a>
			<br />
			&nbsp;<br />
			Fig 3 - Click on image to open full page image
			</td>
		</tr>
		<tr>
			<td class="style6"><br /><br />
				5. You now have to get the gemhc.bin from the left panel to the right panel. With WS_FTP you highlight 
				the the gemhc.bin file and use the green right arror between the panels. If you are using a different
				FTP client then your process will depend on that client. See below for what it looks like.
		</td></tr>
		<tr>
			<td class="style7"><br />
			<a href="gemini-images/FTP/wsftp/9WS_FTP.JPG" target="_blank">
			<img alt="Hand controller update" height="370" src="gemini-images/FTP/wsftp/thumbnails/9WS_FTP_small.jpg" width="600" /></a>
			<br />
			&nbsp;<br />
			Fig 4 - Click on image to open full page image
			</td>
		</tr>
		<tr>
			<td class="style6">
			<br/>
				6.&nbsp; You now have 2 choices: You can either up-plug the hand controller, 
				wait about 1 or 2 seconds, and then plug it back in, or Power off the Gemini, 
				and then power it back on.  You should see a message on the hand controller that a 
				file is being uploaded and then another message that a file is being flashed.&nbsp; 
			Below is an example of what the hand controller screen should look 
			like when uploading the firmware, and then flashing the firmware.</td>
		</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr class="style6">			
			<td>
			<ol start="7">
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
				<ol start="8">
				<li>When this screen 
				on the left is done, it usually takes about 5 minutes are so,
			then the flashing screen will appear.</li></ol>
			<img alt="" height="565" src="gemini-images/HandcontrollerImages/HC_Flashing.jpg" style="float: right" width="425" /></td></tr>
		</table>
		<table align="center" style="width: 900px">
			<tr>
			<td>
			<ol start="9">
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





