<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>HC SDcard Menu</title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width: 900px">
	<tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click on green button to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style7" width="450px">
		<map id="ImgMap5" name="ImgMap5">
				<area coords="306, 517, 437, 595" href="E020.php" shape="rect" />
				<area coords="18, 72, 424, 153" href="En-formatyesno.php" shape="rect" />
				<area coords="17, 204, 427, 288" href="En-hc_SDcard_delete_catalog.php" shape="rect" />
		</map>
			<img height="611"src="En-Images/En-hc_sdcard_menu.jpg" width="450"usemap="#ImgMap5" /></td>
			
		<td width="10px"></td>
		<td class="style6">
		This menu will let you format the micro-SDcard in the hand-controller, Delete files 
		and catalogs from it, or upload files/catalogs to it.
		<br />
		<br />
		The Format selection will completely wipe out the micro-SDcard of all if 
		its files. Once that is done, you can reload the files by putting them 
		in the HCFirmware directory of the main units micro-SDcard, and then 
		hitting Upload Files. When you select format SD card another screen will 
		come up asking if you are sure, No or Yes.<br />
		<br />
		The Delete File button will bring up the list of catalogs and any other 
		file stored in the catalog directories.&nbsp; You can only delete whole 
		catalogs, not the individual entries in them.&nbsp; The reason for this 
		is that a catalog is really a single file.<br />
		<br />
		You can also use this 
		Upload Files to upload additional catalogs to 
		the hand controller.&nbsp; You can create your own custom catalogs and 
		upload them this way.&nbsp; The easiest way to do this is use the 
		Windows File Explorer in an FTP mode.&nbsp; Do this by typing
		<a href="ftp://admin@gemini">ftp://admin@gemini</a> into the file 
		manager bar at the top of Windows explorer. (not an Internet browser) If you have your Gemini-2 
		connected to your computer via Ethernet, then you should see the 
		contents of the 
		<a href="En-Images/ExplorerFileExample.jpg" target="_blank">
		<span lang="en-us"></span>G2 main micro-SDcard contents.</a><br />
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		<span class="style2">YOU CANNOT USE THIS UPLOAD FILES FUNCTION TO DO A 
		FIRMWARE UPDATE.</span>
		
		If you would like to learn how to build your own catalogs, visit this 
		wonderful site:<br />
		<a href="http://garriou.didier.perso.neuf.fr/gemini_anglais.php" target="_blank">
		http://garriou.didier.perso.neuf.fr/gemini_anglais.php</a>
		</td> 
	</tr>
</table>
<!--
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		&nbsp;</td>
	</tr>
</table>
-->
</body>

<?php include("bottom.php"); ?>


