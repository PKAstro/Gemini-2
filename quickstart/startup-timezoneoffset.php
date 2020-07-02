<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Startup Set Time Zone Offset</title>

<?php include("topv.php"); ?>
<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="xweb-popup.js"></script>

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width: 900px">
	<tr>
		<td class="h2">Quick Start Tutorial - click on green button 
		to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">	<tr>
		<td class="style7" width="450px">
		<map id="ImgMap0" name="ImgMap0">
			<area coords="341, 455, 431, 545" href="startup-time.php" shape="rect" />
		</map>
		<img height="611"src="images/timezoneoffset.jpg" width="450"usemap="#ImgMap0" /><br />
				<br />
		If you would like to avoid the hassle of daylight saving time, then 
		enter the offset as 0 and the time and date as UTC time and Date. The 
		Gemini-2 will work great with these setting anywhere in the world.<br />
		<br />
				<a href="http://www.worldtimeserver.com/current_time_in_UTC.aspx" target="_blank">Get UTC from World Time server.</a>
<br /> <br />

		</td>
		<td width="10px"></td>
		<td class="style6">Here is where you set your time zone offset from UTC.  Note: you do have to compensate for daylight saving time in this offset.			&nbsp;&nbsp; 
		Positive offsets do not need a leading zero if they are only one digit.&nbsp; 
		The Gemini 2 will take care of that.&nbsp; Notice offsets West of UTC is 
		negative, and East is positive.<br />
		<br />
		The date, time and this offset is used to compute the correct UTC time 
		and date for the Gemini-2 to calculate all of the star locations, along 
		with your latitude and longitude.&nbsp; This offset can be in whole hours, Half hours, quarter hours, or even in minutes. See the link 
		below.&nbsp; The more accurate you can set 
		the time, the more accurate your first star "GOTO" will be.&nbsp; Once you 
		align on your first star, then the Gemini-2 will make corrections from 
		that star, and any more stars you align on.<br />
		<br />
		Hit "ENT" and go back to the previous menu.<br />
		<br />
		If you would prefer to only work in UTC, and 
		not have to worry about daylight saving time changes, put&nbsp; 0 in 
		this screen, and then Enter the UTC time and UTC date in the Time and 
		DATE locations.&nbsp; The Gemini-2 will be perfectly happy using only 
		UTC<br />
		<br />
		
		<a href="timezonefacts.php" target="xPopUp" title="Half and Quarter time zone locations" onclick="xPopUp(this.href, 'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',600,750,'pixel','center','center'); return false;">Here is more information on Half and Quarter timezones.</a><br />
						Here is a
		<a href="../hc/time_zone_offset_chart.php" target="xPopUp" title="Time Zone Offset Chart" onclick="xPopUp(this.href, 'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',600,400,'pixel','center','center'); return false;">Time Zone offset chart for the USA</a></td>
	</tr>
</table>

</body>

<?php include ("bottom.php"); ?>

