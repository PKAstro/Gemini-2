<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Set TimeZone Offset</title>

<?php include("topv.php"); ?>
<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width: 900px">
	<tr>
		<td class="h5" align="center">Quick Start Tutorial - click on green button to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style7" width="450px">
		<map id="ImgMap0" name="ImgMap0">
			<area coords="341, 463, 425, 539" href="En-site.php" shape="rect" />
		</map>
		<img height="611"src="En-images/En-timezoneoffset.jpg" width="450"usemap="#ImgMap0" /></td>

		<td width="10px"></td>
		<td class="style6">Here is where you set your time zone offset from UTC.  Note: you do have to compensate for daylight saving time in this offset.			&nbsp;&nbsp; 
		Positive offsets do not need a leading zero if they are only one digit.&nbsp; 
		The Gemini 2 will take care of that.&nbsp; Notice offsets West of UTC is 
		negative, and East is positive.<br />
		<br />
		The date, time and this offset is used to compute the correct UTC time 
		and date for the Gemini-2 to calculate all of the star locations, along 
		with your latitude and longitude.&nbsp; The more accurate you can set 
		the time, the more accurate your first star go to will be.&nbsp; Once you 
		align on your first star, then the Gemini-2 will make corrections from 
		that star, and any more stars you align on.<br />
		<br />
		Hit "ENT" and go to go back to the previous page.</td>
	</tr>
</table>
</body>

<?php include ("bottom.php"); ?>

