<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini-2 Recovering HC from Failed update</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">








<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Recovering Hand Controller for a failed upgrade. </td>
	</tr>
</table>
<table align="center" style="width: 900px">

	<tr>
		<td class="style6">You will be pulling the hand controller apart to do these instructions.  
		You have to be really careful doing this because the gasket
		on earlier Hand Controllers would stick to the screen, 
		and there is a possibility of pulling the Screen off of it's PCB board. 
		This can void any warrenty you have, <span class="style2">SO YOU ARE DOING THIS AT YOUR OWN RISK.</span><br />
		Please read all instructions first and make sure you understand before 
		proceeding.
		</td>
	</tr>
</table>		

<table align="center" style="width: 900px">
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">1. Since all the files did not upload correctly, they 
		are still in the HCFirmware directory<br />
		of the main units micro SDcard.&nbsp; These have to be deleted.&nbsp; This can be 
		done with an FTP<br />
		program or Windows File Explorer.&nbsp; I like Windows File Explorer for it's 
		simplicity.<br />
		Open Windows File explorer by right mouse clicking on the Windows symbol 
		<img alt="" height="49" src="gemini-images/windows-icon.jpg" width="64" /> in the<br />
		task panel, and select Windows File Explorer.&nbsp; In the address bar at the 
		top <br />
		Put <a href="ftp://admin@gemini">ftp://admin@gemini</a><br />
					<img alt="" height="180" src="gemini-images/5_1/image10.jpg" width="465" />

		<br /><br />
		This should open the Windows File Explorer into the
		main SDcard contents. See sample below.<br />
		<br />
		<img alt="" height="613" src="gemini-images/wfexplorer-gemini2.jpg" width="738" /><br /><br />
		2. go into the HCFirmware directory and delete any files in that 
		directory, leaving the directory itself in place but empty.&nbsp; You 
		will delete any of the files as shown below.&nbsp; The reason for this 
		is to keep them from being uploaded again into the Hand Controller.<br />
		<br />
		<img alt="" height="200" src="gemini-images/HChandcontroller-contents.JPG" width="621" />
		<br /><br />
		3. go to 
		<a href="http://gemini-2.com/Removing_SDCards.php" target="_blank">http://gemini-2.com/Removing_SDCards.php</a> 
		for instructions and remove the micro-SDcard from the hand controller.&nbsp; 
		Now Losmandy has shipped 2
		different versions of the hand controller, but I only have seen the one 
		we call blue screen.&nbsp; I hope that is what you have,
		so the pictures match.&nbsp; If not you will have to find the micro SDcard 
		and remove it.<br />
		<br />
		4. Now you need to format it, but I want you to use a specific program 
		to do this.&nbsp; <br />
		Goto
		<a href="https://www.sdcard.org/downloads/formatter_4/" target="_blank">https://www.sdcard.org/downloads/formatter_4/</a> and download and 
		install&nbsp; the official SD Formatter for Windows
		(or if you have a Mac use that one).<br />
		<br />
		5. when formatting the micro SDcard&nbsp; on the Options tab, select Full 
		(overwrite).&nbsp; Click OK the Click Format. (note: your drive letter 
		will probably be different that what is shown below.)<br />
		<br />
		
		<img alt="" height="568" src="gemini-images/Sdformatter-option-selection.jpg" width="578" />
		<br />
		<br />

		6. Now on your PC create a clean directory.&nbsp; Suggestion 
		<a href="file:///C:/handcontroller">C:\handcontroller</a><br />
		<br />
		7. Download the following file and make sure it goes into the clean 
		directory:<br />
		<a href="http://www.gemini-2.com/firmware1/handcontroller-2-26-2013.zip" target="_blank">http://www.gemini-2.com/firmware1/handcontroller-2-26-2013.zip</a><br />
		<br />
		8. Unzip the directory.&nbsp; I use 
		<a href="http://www.7-zip.org/" target="_blank">7Zip</a> and I select "Extract Here", I 
		suggest you do the same.<br />
		<br />
		9. delete handcontroller-2-26-2013.zip or move it to another directory.<br />
		<br />
		10. Copy the contents of the directory to the micro SDcard, using your 
		reader/writer.<br />
		You will have 2 directories and 1 file.&nbsp; Catalogs - A directory, 
		HCfirmware - A directory, and gemhc.bin a file.<br />
		<br />
		11. Put the micro SDcard back into the Hand controller.&nbsp; Wait to put the 
		cover back to make sure everything works.<br />
		<br />
		12. Hook the Hand controller back to the main unit, and power on the 
		main unit.<br />
		<br />
		13. You should see a message Flashing Firmware, and the a short time 
		later the Hand controller should initial and then
		give the message connecting to Gemini, and then a short time later show 
		the menu screens.<br />
		<br />
		14. if this happens then put the top cover back on, and you are done.<br />
		<br />
		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



