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

<body style="color: #FFFFFF; background-color: #000000;">

	<table align="center" style="width: 850px">
		<tr>
			<tb class="h2">
				Rebuilding the Gemini 2 Hand Controller SDcard Firmware
			</tb>
		</tr>
		<tr>
			<td class="style7">
			This guide will help you update <br/>the firmware in your Gemini 2&nbsp; 
			hand controller using a micro SDcard reader/writer.<br />
			</td>
		</tr>
		<tr class="style6">
			<td class="style14"><br />Note: You do this at your own risk. No-one 
				associated with this web site can be held responsible if something goes wrong. If you have to send you unit back for repair, you will bear all associated cost.
			</td>
		</tr>
		<tr>
			<td class="style6">	
			Please<a href="Removing_SDCards.php" target="_blank"> Remove the Hand Controller micro SDcard using these instruction.</a> Then come back here.<br/></p>
			</td>
		</tr>
		<tr>
			<td class="style6">
			<br/>
				Since you are rebuilding the SDCard, I am going to suggest that you format the card. 
				This will remove any file corruption on the SDCard.  If the card is 2GB card you can
				use the default Windows format size.  If the Card is 4GB you need to select FAT32 from
				the format size window.  To get to the format screen, you right click on the drive
				directory.  My SD card reader comes up as H:  In my case I right click of the H: and 
				select Format from the drop down menus.
			</td>
		</tr>
		<tr>
			<td class="style6">
			<br/>
				<ol>
					<li>Download the latest hand controller firmware from
						<a href="http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Touch_Screen_HC/HC_SD_card.zip">http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Touch_Screen_HC/HC_SD_card.zip</a>
					</li>
				</oe>
			</td>
		</tr>
		<tr>
			<td class="style7">
			<br/>
				<a href="gemini-images/firmware_update/Getfilehc.JPG" target="_blank">
				<img alt="" height="356" src="gemini-images/firmware_update/Getfilehc_small.JPG" width="600" /></a>
				<br />Fig 1 - Click on image to open full page image
			</td>
		</tr>
		<tr>
			<td class="style6">
			<ol start="2">
				<li>
					Unzip the downloaded file and extract the 
					HC_SDcard.zip files and save it on your computer.  
					Remember the folder where you save it since you will need it later. I put mine on drive C: 
					and named it Gemini2.  I created 2 sub folders, HC and Main. I am using Windows 7.
				</li>
				<li>Put your Hand Controller SDCard into your micro 
					SDCard reader.&nbsp; Copy all the files to a backup location if you 
					wish, this is especially important if you have any custom catalog 
					files.&nbsp; Now you are going to format the micro SDCard. Use the 
					Fat or Fat32 file system, of your computers file manager<br/>
				</li>
				<li>
					Copy all the files you unzipped in step 2 above onto the Mini SDCard.
				</li>
				<li>
					See The <a href="DirStructure_hc.php" target="_blank">Hand Controller Directory 
					Structure</a>.<br/>
				</li>
				<li>
					If the director structure is similar, then you are ok so 
					for. Note that the Catalog files might not be the same.&nbsp; If you had and 
					custom.guc files Then you can get them from the backup you made above. and put 
					them in the Catalog directory.<br/>
				</li>
				<li>
					Download the latest hand controller firmware from
					<a href="http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Touch_Screen_HC/gemhc.zip">http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Touch_Screen_HC/gemhc.zip</a>
				</li>
				</oe>
			</td>
		</tr>
		<tr>
			<td class="style7"><br />
				<a href="gemini-images/firmware_update/Getfilehc.JPG" target="_blank">
				<img alt="" height="356" src="gemini-images/firmware_update/Getfilehc_small.JPG" width="600" /></a>
				<br />Fig 1a - Click on image to open full page image
			</td>
		</tr>
		<tr>
			<td class="style6">
			<ol start="8">
					
			<li>
				Unzip the downloaded file and extract the gemhc.bin file and save it on your computer.
			<li>
				You will now put the extracted gemhc.bin file at the root 
				of the Mini SDCard.
			</li>
			<li>
				Put the micro SDCard back into the hand controller
			</li>
			<li>
				Put the hand controller back together and connect it to the Gemini. Power on the Gemini
				You should see a message on the hand controller that a file is being flashed. 
			</li>
			<li>If this does not happen try powering Gemini off and on again.
		</td>
	</tr>
	</table>



<?php include("bottom.php"); ?>




</body>
</html>
