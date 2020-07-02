<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Enter Western GOTO Limit</title>

<?php 
$i=1;
if ($i ==1)
include("topv.php");
?>


<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width: 900px">
	<tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click on green button to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">	<tr>
		<td class="style7" width="450px">
		<map id="ImgMap0" name="ImgMap0">
		<area coords="350, 506, 438, 592" href="limits.php" shape="rect" />
			</map>
			<img height="611"src="gemini-images\LimitSwitches\safetylimit-goto.jpg" width="450"usemap="#ImgMap0" /></td>
			
		<td></td>
		<td class="style6">
		The Western Goto Limit determines how far pass the meridian that the
		Gemini-2 will do a flip.&nbsp; It is calculated like this. Note
		that the Meridian is at 90&#176. The point of Meridian Flip = Western
		Safety Limit - Goto Limit.&nbsp; An example is if you have the Western
		Safety limit set to 100&#176 - The Western GoTo limit of 2.5&#176
		(default) you end up with a point of flip of 97.5&#176, or 7.5
		degrees past the meridian. Any target selected that is past this
		will do a meridian flip.&nbsp; Any target on the East side (Northern
		Hemisphere) will not do a meridian flip.<br />
		<br />
		100&#176 - 90&#176 = 10&#176 - 2.5&#176 = 7.5&#176.<br />
		or 90&#176 + 7.5&#176 = 97.5&#176 (point of flip)<br />
		<br />
		Note: Safety Limits may not take effect until you power down and back up. 
		That has been my experience, however the writer of the firmware says 
		they take effect when set.</td>
	</tr>
</table>
</body>

<?php 
if ($i ==1)
include("bottom.php");
?>


