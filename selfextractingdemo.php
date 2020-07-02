<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Self Extraction Demo</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<style type="text/css">
.auto-style1 {
	border-style: solid;
	border-width: 2px;
}
.auto-style2 {
	border: 2px solid #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: medium;
	color: #FFFFFF;
	text-align: left;
	margin: 10px;
}
.auto-style3 {
	border: 2px solid #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: medium;
	color: #FFFFFF;
	text-align: center;
	margin: 10px;
}
.auto-style4 {
	margin-left: 0px;
}
</style>



</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Self Extracting Demo windows</td>
	</tr>
</table>
<table class="tableborder1" align="center" style="width:960px"><tr><td class="style6">
For this demo to function correctly, your network and computer must provide NetBios support. That means that your system must support 
	<a href="http://gemini">http://admin@gemini</a>
or <a href="ftp://admin@gemini">ftp://admin@gemini</a> If it does not have NetBios enabled on your network you can try to enable it by going 
	<a href="Enabling_netbios.php" target="_blank">here.</a>&nbsp;&nbsp; This is 
	because it uses a hardcoded command of <a href="ftp://admin@gemini">ftp://admin@gemini</a> 
	in the EXE.&nbsp; There is no way for me to make it so you could put in an 
	IP address in that command instead.<br />
	<br />
	This combined.exe does the following actions:<br />
	<ul><li>
	Downloads the combined.exe file to a temp directory.
	</li>
		<li>
		Extracts the the files to C:\Gemini2</li>
		<li>
		Runs an embed BAT that opens up two File Explorer panes.</li>
		<li>
		Points one of the two File Explorer pains to C:\gemini2</li>
		<li>
		Points the other File Explorer pain to FTP://admin@gemini</li>
		<li>
		Deletes the temp files.</li>
		<li>
		Deletes the combined.exe file</li>
		<li>
		Deletes the BAT FIle</li>
	</ul>
	<p>After all that you continue with a manual process to copy the files from 
	the C:\gemini2 pane to the FTP pane. Then you would flash the NewGem.bin 
	file, Do a CMOS reset, let the hand controller update, then restore all of 
	the Gemini2 setting. Then you could update any catalogs in the hand 
	controller if you wish.&nbsp; That would finalize a complete firmware update 
	of both the main unit and the hand controller. </p>
</td></tr>
</table>
<table align="center" class="tableborder1" style="width: 940px">
	<!--<tr>
		<td class="auto-style2" width="20">&nbsp;</td>
		<td class="auto-style3" width="450">This Column is for IE </td>
		<td class="auto-style3" width="450">This Column is for FireFox</td>
	</tr>
	
	<tr>
		<td class="auto-style2" width="10">&nbsp;</td>
		<td class="auto-style2" width="450">&nbsp;</td>
		<td class="auto-style2" width="450">
		If using FireFox. FireFox does not normally provide a 
		Run option when you download an exe file.&nbsp; To be able for FireFox 
		to do this you need to provide an Addon
		<a href="https://addons.mozilla.org/en-US/firefox/addon/opendownload-10902/contribute/roadblock/?src=dp-btn-primary&amp;version=3.5.1" target="_blank">
		OpenDownload</a> and select add to Firefox.</td>
	</tr>
-->
	<tr>
		<td class="auto-style2" width="10">1.</td>
		<td class="auto-style3" width="450">Click on the link
		<a href="http://gemini-2.com/firmware1/current/combined.exe" target="_blank">
		http://gemini-2.com/firmware1/current/combined.exe</a></td>
		<td class="auto-style3" width="450">Click on the link
		<a href="http://gemini-2.com/firmware1/current/combined.exe" target="_blank">
		http://gemini-2.com/firmware1/current/combined.exe</a></td>
	</tr>
	<tr>
		<td class="auto-style2" width="10">2.</td>
		<td class="auto-style3" width="450px">
		<a href="gemini-images/SelfExtracting/IE/Run-Save-Bar.jpg" target="_blank">
		<img alt=""  src="gemini-images/SelfExtracting/IE/Run-Save-Bar_small.jpg" class="auto-style1" height="33" width="450" /></a>
		Click on image to see a bigger view.  <br />
		Please select RUN

		</td>

	<td class="auto-style3" width="450px">
	
	
	<br /> Please Select Save, the go to the place you saved it and run it.</td>
	</tr>
	<tr>
		<td class="auto-style2" width="10">3.</td>
		<td  class="auto-style3" width="450px">
		<a href="gemini-images/SelfExtracting/IE/IE-Warning-Bar.jpg" target="_blank">
		<img alt="" height="48" src="gemini-images/SelfExtracting/IE/IE-Warning-Bar_small.jpg" width="450" class="auto-style1" /></a>
		<br />Please Select Actions</td>
		<td  class="auto-style3" width="450px"> Skipped for FireFox</td>
	</tr>
	<tr>
		<td class="auto-style2" width="10">4.&nbsp;&nbsp;  </td>
		<td  class="auto-style3" width="450px">
		<img alt="" "gemini-images/SelfExtracting/IE/IE-Harm-Computer-window.jpg" height="390" src="gemini-images/SelfExtracting/IE/IE-Harm-Computer-window.jpg" width="450" />
		
		<br /> Please Select Run Anyway</td>
		<td  class="auto-style3" width="450px">
			<img alt="" height="293" src="gemini-images/SelfExtracting/FireFox/Warning.jpg" width="450" /><br />
			Please select "RUN"<br />
			<br />
			<br />
&nbsp;</td>
	</tr>
	</table>
	<table align="center" class="tableborder1" style="width: 920px">
	<tr>
		<td class="auto-style2" width="20">5,</td>
		<td class="auto-style3" width="900">
		<img alt="" height="221" src="gemini-images/SelfExtracting/Extraction-Window.jpg" width="648" /><br />
		This is the File Extraction menu.  Please leave the Unzip to dir. alone and hit the "Unzip" 
		button.<br /><br /></td>
	</tr>
	<tr>
		<td class="auto-style2" width="10">6.</td>
		<td class="auto-style3" width="900">
		<img alt="" height="222" src="gemini-images/SelfExtracting/firmware-download-done.jpg" width="651" class="auto-style4" />
		<br />Please hit the "OK button".<br /><br /></td>
	</tr>
	<tr>
		<td class="auto-style2" width="10">7.</td>
		<td class="auto-style2" width="900">
		<img alt="" height="935" src="gemini-images/SelfExtracting/two-file-explorer-windows-open.jpg" width="900" /><br />
		The above two windows should open up on your computer.  Now they may not be positioned as above. One might even be
		covering the other.&nbsp; The Top one is the contents of the 
		micro-SDcard inside the Gemini-2.&nbsp; The Bottom one is the contents 
		of the C:\Gemini file folder on you hard drive. <em>Now the top box may not 
		show up if your system does not respond to ftp://admin@gemini.&nbsp;&nbsp;(NetBios 
		problem.)&nbsp; 
		You can open up a Explorer Window (Windows key + E) and put 
		http://admin@your-Gemini-2-IP-address in the address bar of the window.&nbsp;&nbsp;&nbsp; 
		If the C:\gemini2 File Explorer window did not open 
		then you can do another Explorer Window (Windows key + E) and browse to C:\gemini2</em> <br /><br />
		</td>
	</tr>
	<tr>
		<td class="auto-style2" width="10">8.</td>
		<td class="auto-style2" width="900">
		<img alt="" height="935" src="gemini-images/SelfExtracting/Selecting-files-copy.jpg" width="900" />
		<br />Now we are going to copy all the directories and files in the bottom window 
		(C:\gemini2 on your hard drive), to the top window (the micro-SDcard in 
		the Gemini2). First highlight all
		the directories and the NewGem.bin file in the bottom window.  Then right 
		mouse click on any of the highlighted directories, and then select Copy
		from the PopUp Menu.<br /><br /></td>
	</tr>
	<tr>
		<td class="auto-style2" width="10">9.</td>
		<td class="auto-style3" width="900">
		<img alt="" height="928" src="gemini-images/SelfExtracting/paste-slected-files.jpg" width="900" />
		<br />Now make sure your mouse is positioned as shown in the TOP window.  Then Right Mouse Click.<br /><br /></td>
	</tr>
	<tr>
		<td class="auto-style2" width="10">10.</td>
		<td class="auto-style3" width="900">
		<img alt="" height="945" src="gemini-images/SelfExtracting/paste-slected-files2.jpg" width="900" />
		<br />Now select Paste on the POPUP menu.<br /><br /></td>
	</tr>
	<tr>
		<td class="auto-style2" width="10">11.</td>
		<td class="auto-style3" width="900">
		<img alt="" height="327" src="gemini-images/SelfExtracting/confirm-copy.jpg" width="508" />
		<br />Please Select the "Yes to All" box.  This completes the downloading of the Files into the
		Gemini-2 micro-SDcard. It will probably take about 20 minutes, depending 
		on the speed of your computer to copy all the files.<br /><br /></td>
	</tr>
	<tr>
		<td class="auto-style2" width="10">12.</td>
		<td class="auto-style3" width="900">To continue with the firmware update go 
		to <a href="updateFileExplorer.php#7" target="_blank">
		updateFileExplorer.php Step 7</a></td>
	</tr>

<tr>
		<td class="auto-style2" width="10">&nbsp;</td>
		<td class="auto-style2" width="900">This new procedure was tested on 3 systems:
		<ul><li>
		a XP system where it failed to open the file pains, but it did download and extract all the files. 
			Part of the problem here is that the Gemini2 uses Static IP address 
			and is not NetBios compatible.
		</li>
			<li>
			A Win7 system where it worked perfectly where two different 
			Titans/Gemini-2 was updated.</li>
			<li>
			A Win7 system where it worked perfectly with a MI-250/Gemini2 
			system.</li></ul>
		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



