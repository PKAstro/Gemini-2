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
		<td class="h3">Deleting the Cur_HGM.bin file<br />
		Latest change to this page: Jan 15, 2015</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp; <br />
		You are going to have to delete the Cur_HGM.bin file from the micro 
		SDcard.&nbsp; You can do this by either removing the micro SDcard from 
		the Gemini-2 main unit and using a card reader, or by FTPing into micro 
		SDcard with an FTP program or Windows File Explorer.<br />
		<br />
		YOU must 
		normally be connected to the local network system (LAN), and the Gemini-II via Ethernet&nbsp; 
		to delete this file.&nbsp; The internet is not required for this step, 
		but the internet will be required for running GFU to do the full update.<br />
		<br />
		FTPing into the micro SDcard is very easy with Windows File Explorer.&nbsp; 
		If you are using Windows 8 or Windows 8.1 the following might not work 
		for you.&nbsp; Please see <a href="faqG2.php/#Q26" target="_blank">FAQ 
		#26</a>.&nbsp; Just open up Windows File explorer (the Windows Key + E) and 
		in the file bar type FTP://admin@gemini&nbsp; 
		You should see a window come up similar to this: (note: If 
		FTP://admin@gemini does not work, try FTP://admin@the&nbsp; IP address 
		of your gemini 2 )<br />
		<br />
		I have created a set if movies showing how to do this.&nbsp;&nbsp;&nbsp;
		<a href="http://gemini-2.com/videos/MP4/ftpaccess_microsdcard.mp4" target="_blank">Access micro SDcard movie</a>&nbsp;&nbsp;&nbsp;
		<!--<a href="http://youtu.be/ucRAQdEKplw" target="_blank">YouTube Version</a> -->
		<br />
		<br />
		<img alt="" height="615" src="gemini-images/GFU/delete_Cur_Gem.JPG" width="900" /><br />
		<br />
		Right mouse click on the file Cur_Gem2.bin file and select delete.&nbsp; When 
		the pop-up asks you to confirm this deletion click yes.&nbsp;
		<a href="http://gemini-2.com/videos/MP4/delete_Cur_Gem2.mp4" target="_blank">
		Delete Cur_Bin2.bin movie</a>.<br />
		<br />
		You can now go back to the&nbsp; <a href="http://www.gemini-2.com/gfu.php" target="_blank">Firmware Update program</a>&nbsp; 
		and update your firmware with that, but during that process you will see 
		the following error message:
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		<img alt="" height="248" src="gemini-images/GFU/error_message.JPG" width="455" /><br />
</td>
	</tr>
</table>
<table class="tableborder1" align="center" style="width:900px">
	<tr>
		<td class="style6">
		Telling you that your current firmware is older that Dec 18, 2012 and you must update to the Dec 18 2012 firmware.
		If you have deleted the "Cur_Gem2.bin" file as described above, then you can just click "YES" to the message, and 
		continue on.
		</td>
	</tr>

	</table>
<table class="tableborder1" align="center" style="width:900px">
	<tr>
		<td class="style6">
		
		If when using the Gemini Firmware update program Failed to update your Gemini-2 then you are going to have to use the emergency
		methid to update your firmware. The <a href="emergency_flash.php" target="_blank">Emergency Method is here</a>. Please note that
		this Emergency method web page takes you through some of the same steps you have just completed.
		</td>
	</tr>

	</table>

</body>




<?php include("bottom.php"); ?>



