<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Format SDcard -Yes/No</title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width: 900px"><tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click on green button to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">	<tr>
		<td class="style7" width="450px">
		<map id="ImgMap0" name="ImgMap0">
			<area coords="307, 518, 439, 596" href="En-hc_SDcard.php" shape="rect" />
		</map>
		<img height="611"src="En-Images/En-sdcard-formatyesno.jpg" usemap="#ImgMap0" width="450"/></td>

		<td width="10px"></td>
		<td class="style6">
		Format Yes? No?<br />
		<br />
		If you press YES, the micro-SDcard in the hand controller will be 
		formatted, and the <span lang="en-us"></span>directory structure will be put back.&nbsp; 
		However none of the files will be put back.<br />
		<br />
		You can restore the catalogs by putting them in the Firmware directory 
		of the micro-SDcard in the main Gemini-2 unit. You can also put the 
		GemLogo.b16 file in the same directory, and it will also be uploaded to 
		the correct location.<br />
		<br />
		You would then use the Upload Files command from the SD card menu, to 
		cause all the files in the Firmware directory to be uploaded to the 
		hand controller.<br />
		<br />
		NOTE: the upload Files button does not upload the programing file 
		gemhc.bin to the hand controller.&nbsp; That is only done when the hand 
		controller is powered up, either by turning the complete Gemini-2 unit 
		off and on, or unplugging and re-plugging the hand controller when power 
		is applied to the main Gemini-2 unit.</td>
	</tr>
</table>
</body>

<?php include("bottom.php"); ?>


