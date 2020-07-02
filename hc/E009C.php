<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Time Zone Offset</title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="xweb-popup.js"></script>

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width: 900px"><tr>
		<td class="h2">Interactive Hand-Controller Menus</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style7" width="450px">
		<map id="ImgMap0" name="ImgMap0">
			<area coords="344, 460, 434, 547" href="E023.php" shape="rect" />
		</map>
		<img alt="" height="611"src="En-Images/E009.jpg" width="450"usemap="#ImgMap0" /><br /><br />
				<a href="https://time.is/UTC" target="_blank">Get UTC TIME from 
		Time.is/utc</a>
		<br /><br />
			<a href="timezonefacts.php" target="xPopUp" title="Facts about Half and Quarter timezones." onclick="xPopUp(this.href, 'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',600,750,'pixel','center','center'); return false;">Here is more information on Half and Quarter timezones.</a><br /><br />
				Here is a
		<a href="time_zone_offset_chart.php" onclick="xPopUp(this.href, 'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',600,400,'pixel','center','center'); return false;" target="xPopUp" title="Time Zone Offset Chart">Time Zone offset chart for the USA</a>	
		and here is one for the <a href="http://24timezones.com" target="_blank">
		world</a>.<br /><br />
</td>
		<td class="style6">Here is where you set your time zone offset from UTC.  Note: you do have to compensate for daylight saving time in this offset.			&nbsp;&nbsp; 
		Positive offsets do not need a leading zero if they are only one digit.&nbsp; 
		The Gemini 2 will take care of that.&nbsp; Notice offsets West of UTC is 
		negative, and East is positive.<br />
		<br />
				Note: for the ones of you that live where a partial time zone 
				offset is required enter it as Time:minutes such as +6:30 or 
				-03:30<br />
<br />
		The date, time and this offset is used to compute the correct UTC time 
		and date for the Gemini-2 to calculate all of the star locations, along 
		with your latitude and longitude.&nbsp; This offset can be in whole 
		hours, Half hours (entered as :30), quarter hours (Entered as :15), or 
		even in minutes. See the link 
		below.&nbsp; The more accurate you can set 
		the time, the more accurate your first star "GOTO" will be.&nbsp; Once you 
		align on your first star, then the Gemini-2 will make corrections from 
		that star, and any more stars you align on.<br />
		<br />
		Hit "ENT" and go back to the previous menu.<br />
		<br />
		<span class="auto-style1">If you would prefer to only work in UTC, and 
		not have to worry about daylight saving time changes, put&nbsp; 0 in 
		this screen, and then Enter the UTC time and UTC date in the Time and 
		DATE locations.&nbsp; The Gemini-2 will be perfectly happy using only 
		UTC&nbsp; This especially work great for Half and Quarter time zones. <br />
		<br />
		</span>
		
</td>
	</tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on 
		July 16, 2016
		</td>
	</tr>
</table>

</body>

<?php include("bottom.php"); ?>


