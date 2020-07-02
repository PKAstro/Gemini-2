<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="../gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">

<body>


<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		<map id="ImgMap0" name="ImgMap0">
			<area alt="" coords="17, 1006, 84, 1039" href="index.php" shape="rect" />
			<area alt="" coords="16, 440, 127, 461" href="web-HCfirmware.php" shape="rect" target="_blank" />
		</map>
		<img alt="" height="1081" src="images/sdcard.jpg" usemap="#ImgMap0" width="900" /></td>
	</tr> 
	<tr>
		<td class="style7">This web page will allow you to inspect the contents 
		of the micro_SDcard in the Gemini-2.</td>
	</tr> 
	<tr>
		<td class="style6"><ul><li>You can look at any directory by clicking on that directory.&nbsp; 
			Now if you Click on the EN (English), FR, (French), ES (Spanish), or 
			DE (German) directories, your browser might switch to that language. 
			To get back to your native language, you have to go back to the main 
			menu using the .. directory symbols. </li>
			<li>"Select a File to Upload to SD card" - You can upload a file to 
			any of the directories of the Root of the SDcard.&nbsp; This can be 
			useful update the hand controller firmware, or add catalogs to the 
			hand controller.&nbsp; Any file put into the 
			<a href="web-HCfirmware.php" target="_blank">HCFirmware directory 
			</a>will be uploaded to the Hand controller on the next power up of the 
			hand controller.</li>
			<li>"Format SD Card" - this will allow you to do a complete format 
			of the SD Card.&nbsp; Now note that the Gemini-2 is going to 
			automatically put back the LOGS directory.&nbsp; Even if you do 
			this, you can access the web interface, but it is going to be blank, 
			as the support files will be missing.&nbsp; You can use an FTP 
			program to access the SD Card and restore the files.&nbsp; On the 
			Yahoo users group for the Gemini-2, in the files section, is 
			normally a file starting with the name combined-then a date. See
			<a href="http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Combined_Firmware_file/" target="_blank">
			http://groups.yahoo.com/neo/groups/Gemini-II/files/Firmware_Updates/Combined_Firmware_file/</a> 
			to find the file.&nbsp; It will contain all the files to restore the 
			SDcard, and also update the Gemini-2 and Hand Controller to the 
			latest version.</li>
		</ul></td>
	</tr> 
			<tr><td></td></tr>
</table>
<table align="center" width="900px" class="tableborder1">
	<tr><td class="style6-border-white"><em>If your Gemini-2 is connected Via Ethernet, 
		turned ON, and 
		Responds to <a href="http://gemini/sd.cgi" target="_blank">http://gemini/sd.cgi</a> then this link 
		will open this page in the Gemini-2 web interface, after prompting for a 
		log-in.</em></td></tr>
</table>

</body>




<?php include("bottom.php"); ?>



