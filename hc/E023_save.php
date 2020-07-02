<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Time Set Menu</title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.auto-style1 {
	color: #00FF00;
}
</style>

<script type="text/javascript" src="../xweb-popup.js"></script>

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width: 900px">
	<tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click on green button to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">	<tr>
		<td class="style6" width="450px">
		<map id="ImgMap0" name="ImgMap0">
			<area coords="83, 46, 358, 126" href="E009C.php" shape="rect" />
			<area coords="84, 178, 355, 259" href="E010A.php" shape="rect" />
			<area coords="87, 312, 358, 389" href="E011A.php" shape="rect" />
			<area coords="303, 521, 444, 608" href="E012.php" shape="rect" />
		</map>
		<img height="611"src="En-Images/E023.jpg" width="450"usemap="#ImgMap0" />
		<br />
		Note: If you are using a <a href="../using-gps-receivers.php" target="xPopUp" title="Using GPS Receivers" onclick="xPopUp(this.href, 'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',600,200,'pixel','center','center'); return false;">GPS receiver.</a>  to get the time, then the offset 
		does not matter. The Gemini-2 only uses UTC time for all it's 
		calculations, and a GPS returns UTC time/date only.&nbsp; You can disregard this 
		screen when using a GPS receiver.<br />
		You&nbsp; can have the 
		hand controller show the correct local time by setting the TimeZone 
		Correctly (include DST if active in your time zone.)&nbsp; If you set 
		TimeZone to zero then the time shown will be UTC.&nbsp;&nbsp; <span class="auto-style1">
		However, if your time zone offset is not 
		correct, then the Gemini-2 will show a wrong Local time and date. This 
		really does not throw off any calculations of the sky position 
		calculations, as long as the time was set with the GPS.</span></td>
		
		
		<td width="10px"></td>
		<td class="style6">Here is where you enter your date and time, and your 
		time zone offset. The time is entered in local military time format. IE 
		1.00 PM would be 13:00:00, The date and time will be converted to UTC 
		time and date internal for use.<br />
		<br />
		Touching on each entry on the screen on the left will take you to the 
		setup/Entry screen for that function.&nbsp; Lets do "Offset", "Date" and then 
		"Time" in that order.&nbsp;Each screen will bring you back here after setting 
		each function. Once all are entered you will come back here and hit the 
		"Set" button and then the "BACK" button.&nbsp;&nbsp; Please Note that the time you 
		set, will not take effect until you hit the "Set" button on this screen.<br />
		&nbsp;<br />
		The Time just above the Next button is the calculated Sidereal time. If 
		you would like to make sure it is correct go to&nbsp;
		<a href="http://tycho.usno.navy.mil/sidereal.html" target="_blank">http://tycho.usno.navy.mil/sidereal.html</a> 
		and enter your longitude. It will show your sidereal time and you can 
		compare them to make sure everything is correct.<br />
		<br />
		Also if you enter the time as UTC time and Date and set the Offset to 
		zero, you will never have to worry about daylight saving time again. The 
		mount will completely work fine this way, anywhere in the world, 
		including half and quarter time zones.<br />
				<a href="http://www.worldtimeserver.com/current_time_in_UTC.aspx" target="_blank">
		Get UTC TIME from World Time Server</a>

		<br />
		</td>
	</tr>
</table>

</body>

<?php include("bottom.php"); ?>


