<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>G2 Serial Port Modes</title>
<link href="gemini-2.css" rel="stylesheet" type="text/css" />

<?php include("topv.php"); ?>


</head>

<body style="color: #FFFFFF; background-color: #000000;">


	<table align="center" style="width: 900px">
		<tr>
			<td class="h2">
				Rebuilding the Gemini 2 Hand Controller SDcard Firmware
			</td>
		</tr>
		<tr>
			<td class="style7">
			This guide will help you update <br/>the firmware in your Gemini 2&nbsp; 
			hand controller using a mini SDcard reader/writer.&nbsp; Please note 
			it is only for the hand contoller, not the main unit.<br />
			</td>
		</tr>
		<tr class="style6">
			<td class="Red">Note: You do this at your own risk. No-one 
				associated with this web site can be held responsible if something goes wrong. 
				If you have to send you unit back for repair, you will bear all associated cost.
			</td>
		</tr>
		<tr>
			<td class="style6">	<br />
			Please<a href="Removing_SDCards.php" target="_blank"> Remove the Hand Controller mini SDcard using these 
			instruction.</a> Then come back here.<br/>
			</td>
		</tr>
		<tr>
			<td class="style6">
			<br/>
				Since you are rebuilding the SDCard, I am going to suggest that you format the card. 
				This will remove any file corruption on the SDCard.  <span class="style2">I highly recommend that you download and use
				the official SDcard Format routine from the SDcard.org. </span>&nbsp;<a href="https://www.sdcard.org" target="_blank">https://www.sdcard.org</a>
<span class="style2">download section.</span><br /><br /></td>
		</tr>
	</table>
	<table align="center" style="width: 850px">
	<tr>
		<td class="style6">
			<ol>
				<li>Download the latest hand controller firmware from
						<a href="http://www.gemini-2.com/firmware1/current/HC-reader-writer_version.zip" target="_blank">HC-reader-writer_version.zip</a>&nbsp;&nbsp; 
				Put this file in an empty/clean directory and unzip it.&nbsp; I used D:\geminiHC 
			</li></ol>
		</td>
	</tr>
	
<!--	<tr>
		<td class="style7">
		  <img alt="" height="282" src="gemini-images/firmware_update/HCsdcard/hcdownloaded-zip-files.jpg" width="900" />	<br />Fig 1</td>
	</tr>
-->
	<tr>
		<td class="style6">
		<ol start="2">
			<li>
					Unzip the downloaded files 
					using a program like <a href="http://www.7zip.com/" target="_blank">7Zip</a>.
					Remember the folder where you save it since you will need it 
					later. I am using Windows 7.&nbsp;&nbsp; 
					See fig 1 for what the downloaded files plus the unzipped 
					files looks like.&nbsp; 
					Notice your names could have different dates.
				</li>
			</ol>
			</td>
		</tr>
		<tr>
			<td class="style7">
			<img alt="" height="337" src="gemini-images/firmware_update/HCsdcard/hcdownloaded-files.jpg" width="900" /><br />
			Fig 1</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>
			
			</td>
		</tr>
		<tr>
			<td class="style6">
			<ol start="3">
				<li>Now delete or move the HC-reader-writer-version.zip&nbsp; files 
				from the directory, leaving on the gemhc.bin file and the 
				HCFirmware directory and Catalogs directory.
			</li>
		</ol>
		</td>
	</tr>
	<tr>
		<td class="style7">
			<img alt="" height="250" src="gemini-images/firmware_update/HCsdcard/hcdownloaded-files-deletedzip.jpg" width="791" />
			<br />
				Fig 2
		</td>
	</tr>
	<tr>
		<td class="style6">
			<ol start="4">
				
				<li>Put your Hand Controller mini SDCard into your mini 
					SDCard reader.&nbsp; Copy all the files on the micro-SDcard to a backup location if you 
					wish, this is especially important if you have any custom catalog 
					files.&nbsp; Now you are going to format the mini SDCard. 
				Please use the Format routine you downloaded earlier from 
				SDcard.org<br/>
				</li>
				<li>
					Copy all the files 
					shown in Fig 2 onto the Mini SDCard.&nbsp; Make sure they 
					are at the root of the micro SDcard.<br /> 
				</li>
			</ol>
			</td>
		</tr>
	<tr>
		<td class="style6">
			<ol start="6">
				<li>Put the mini SDCard back into the hand controller
			</li>
			<li>
				Put the hand controller back together and connect it to the Gemini. Power on the Gemini
				You should see a message on the hand controller that a file is being flashed. 
			</li>
			<li>If this does not happen try powering Gemini off and on again.&nbsp; 
			Once the flashing is done, your hand controller is updated.</li>
			</ol>
		</td>
	</tr>
	</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7">
		Page last updated on May 01, 2015
		</td>
	</tr>
</table>


</body>
<?php include("bottom.php"); ?>