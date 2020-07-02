<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>HC Display Colors</title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="xweb-popup.js" ></script>

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width: 900px">
	<tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click on green button to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6" width="450px">
		<map id="ImgMap4" name="ImgMap4">
				<area coords="10, 9, 142, 87" href="E020.php" shape="rect" />
				<area alt="" coords="59, 135, 112, 179" href="En-hcdisplay.php" target="_self" shape="rect" />
		</map>
		<img height="611"src="En-Images/En-hc_display_menu_rotated.jpg" usemap="#ImgMap4" width="450"/><br />
				<span class="style3">A word of caution.&nbsp; You cannot 
		do an Screen calibration when the Screen is flipped. If you do you will
		have a problem.</span>. </td>
		
		<td width="10px"></td>
		<td class="style6">
		This screen allows you to select the screen color you what to view the hand controller in.  If the adaptive color check-box is checked, then the 			screen will change color automatically.  Here is how it does that:&nbsp;
		<br />
		The color change is only done at startup. The altitude of the sun is 
		calculated. Above horizon screen will be green, down to 10 degrees below 
		horizon blue. Below 10 degrees, the color that was saved will be used. 
		So your site and time have to be set correctly for this to happen.<br />
		<br />
		If the adaptive color is unchecked, the screen will startup in what ever 
		color is checked.<br />
		<br />
		The nighttime mode screen uses X to indicate a button push.&nbsp; This is 
		because the screen is so dark that a change in high-lights cannot be 
		distinguished. Note: for these setting to stick through power off and 
		back on, use the back button, then store setting.<br />
		<br />
		The Dim button will dim the display in 8 Steps.&nbsp; When not in the 
		brightest setting a BRIGHT button will also be shown.<br />
		<br />
		There is a chart on how the screen reacts on the
		<a href="En-default_color_setting.php" target="xPopUp" title="Default Color Setting Page" onclick="xPopUp(this.href, 			'location=no,menubar=yes,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',800,400,'pixel','center','center'); 
		return false;">default color setting page</a><br />
		<br />
		There is a new option to flip the screen 180° on the Himax graphics version of the hand controller. 
		(With L5.2 firmware only) Click the Flip checkbox to flip or un-flip the screen. To get either 
		option to stay, hit the back button and then the "Store Setting" 
		button.</td>
	</tr>
</table><table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on July 04, 2015
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


