<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Startup Set Time-Date-Offset</title>

<?php include("topv.php"); ?>
<link href="../hc/gemini-2.css" rel="stylesheet" type="text/css" />

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
			<area coords="293, 472, 432, 551" href="../hc/En-Main-Menu.php" shape="rect" />
			<area coords="92, 285, 352, 361" href="../hc/En-startup-timehours.php" shape="rect" />
			<area coords="89, 160, 350, 244" href="../hc/En-startup-civildate.php" shape="rect" />
			<area coords="92, 39, 350, 114" href="../hc/En-startup-timezoneoffset.php" shape="rect" />
			<area coords="10, 479, 138, 562" href="../hc/En-Main-Menu.php" shape="rect" />
		</map>
		<img height="611"src="../hc/En-Images/En-Timesetmenu.jpg" width="450"usemap="#ImgMap0" /></td>
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
		"Set" button and then the next button.&nbsp;&nbsp; Please Note that the time you 
		set, will not take effect until you hit the "Set" button on this screen.<br />
		&nbsp;<br />
		The Time just above the Next button is the calculated Sidereal time. If 
		you would like to make sure it is correct go to&nbsp;
		<a href="http://tycho.usno.navy.mil/sidereal..html" target="_blank">http://tycho.usno.navy.mil/sidereal..html</a> 
		and enter your longitude. It will show your sidereal time and you can 
		compare them to make sure everything is correct.<br />
		<br />
		Note: If you are using a GPS receiver to get the time, then the offset 
		does not matter. The Gemini-2 only uses UTC time for all it's 
		calculations, and a GPS returns UTC time only.&nbsp; You can disregard this 
		screen when using a GPS receiver.
		</td>
	</tr>
</table>
<!--
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
	</tr>
</table>
-->
</body>

<?php include ("bottom.php"); ?>

