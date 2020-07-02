<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>G2 Serial Port Modes</title>
<link href="gemini-2.css" rel="stylesheet" type="text/css" />

<?php include("topv.php"); ?>


</head>

<body style="color: #FFFFFF; background-color: #000000;">

	


	

	
	

	


	

	<table align="center" style="width: 850px">
		<tr>
			<td class="h2">
				Rebuilding the Gemini 2 Hand Controller SDcard Firmware
			</td>
		</tr>
		<tr>
			<td class="style7">
			This guide will help you update <br/>the firmware in your Gemini 2&nbsp; 
			hand controller using a&nbsp; SDcard reader/writer to L5V1<br />
			</td>
		</tr>
		<tr class="style6">
			<td class="style14"><br />Note: You do this at your own risk. No-one 
				associated with this web site can be held responsible if something goes wrong. 
				If you have to send you unit back for repair, you will bear all associated cost.
			</td>
		</tr>
		<tr>
			<td class="style6">	<br />
			Please<a href="Removing_SDCards.php" target="_blank"> Remove the Hand Controller&nbsp; SDcard using these 
			instruction.</a> Then come back here.<br/>
			</td>
		</tr>
		<tr>
			<td class="style6">
			<br/>
				Since you are rebuilding the SDCard, I am going to 
			<span class="style2">highly suggest that you format the card</span>. 
				This will remove any file corruption on the SDCard.  If the card is 2GB card you 
			should
				use FAT or 
			FAT16.  (Don't use FAT32 or FAT64 for a 2GB card.) If the Card is 4GB 
			(4GB cards have not been tested to work, but should.&nbsp; Cards 
			larger than 4GB will not work.) you need to select FAT32 from
				the format size window.  To get to the format screen, you right click on the drive
				directory.  My SD card reader comes up as J:  In my case I right click of the 
			J: and 
				select Format from the drop down menus. Step 5 below will tell 
			you when to do this.
			</td>
		</tr>
	</table>
	<table align="center" style="width: 850px">
	<tr>
		<td class="style6">
			<ol>
				<li>Download the latest hand controller firmware from
						<a href="http://www.gemini-2.com/firmware1/L5_V1/Handcontroller_L5V1_complete.zip" target="_blank">
				Handcontroller_L5V1_complete.zip</a> and put 
				it into a blank directory.&nbsp; I use D:/Gemini-2/Handcontroller 
				as an example.</li>
			</ol>
		</td>
	</tr>
	
	<tr>
		<td class="style7">
		
	<img alt="" height="239" src="gemini-images/HC_firmware_update/download_HC_L5V1.jpg" width="655" /><br/>Fig 1
		</td>
	</tr>
	<tr>
		<td class="style6">
		<ol start="2">
			<li>
					Unzip the downloaded file and extract the 
					Handcontroller_L5V1_complete.zip files and save it on your 
					computer.&nbsp;
					I use a program like <a href="http://www.7zip.com/" target="_blank">7Zip.</a>
					With 7Zip I use the Extract here function by right clicking on the zip file ans select "Extract Here"
				</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td class="style7">
			<img alt="" height="325" src="gemini-images/HC_firmware_update/extracted_HC_L5V1.jpg" width="934" /><br />Fig 2</td>
		</tr>
		<tr>
			<td class="style6">
			<ol start="3">
				<li>You can now delete the Handcontroller_L5V1_complete.zip file 
				leaving the Catalogs Directory, the HCFirmware Directory and 
				gemhc.bin intact.
			</li>
		</ol>
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="" height="317" src="gemini-images/HC_firmware_update/deleted_HC_L5V1.jpg" width="812" /><br />Fig 3</td>
	</tr>
	<tr>
		<td class="style6">
			<ol start="4">
				<li>Put your Hand Controller SDCard into your&nbsp; SDCard 
				reader.&nbsp; Copy all the files to a backup location if you wish, 
				this is especially important if you have any custom catalog 
				files.&nbsp; Now you are going to format the&nbsp; SDCard. Use 
				the Fat or Fat16 (see paragraph at top of page) file system, of your computers file manager<br/>
				</li>
				<li>
					Copy all the files left in the directory (see Fig 3) onto 
					the&nbsp; SDCard.<br /> 
					See Fig 4 below. Notice that my card reader was labeled J
				</li>
			</ol>
			</td>
		</tr>
		<tr>
		<td class="style7"><br />
			<img alt="" height="254" src="gemini-images/firmware_update/hc/yahoo-files-updatefirmware-hc-image4.jpg" width="600" />
			<br />Fig. 4
		</td>
	</tr>
	<tr>
		<td class="style6">
			<ol start="6">
				<li>Put the&nbsp; SDCard back into the hand controller
			</li>
			<li>
				Put the hand controller back together and connect it to the Gemini. Power on the Gemini
				You should see a message on the hand controller that a file is being flashed. 
			</li>
			<li>If this does not happen try powering Gemini off and on again.
			</li>
				<li>Once the Flashing has finished, you should see the logo 
				screen, and then the message "Connecting to Gemini"&nbsp; It 
				should only take about 5 seconds for it to connect to the 
				Gemini-2.&nbsp; Make sure you have it plugged into Serial Port 
				2/Graphics HC.</li>
			</ol>
		</td>
	</tr>
	</table>


</body>
<?php include("bottom.php"); ?>
