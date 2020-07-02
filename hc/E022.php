<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Tracking Speed Menu</title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" onload="FP_preloadImgs(/*url*/'button_images/buttonB2.jpg',/*url*/'button_images/buttonB3.jpg')" >
<table align="center" style="width: 900px">
	<tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click on green button to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>		
		<td class="style7" width="450px">
		This is page 1 of 3 on this subject.
			<map id="ImgMap0" name="ImgMap0">
				<area alt="" coords="308, 513, 438, 588" href="E012.php" shape="rect" />
		</map>
			<img alt="" height="611" src="En-Images/E022.jpg" width="450" style="float: left" usemap="#ImgMap0" class="auto-style1" /> 
		</td>
		<td width="10px"></td>
		<td class="style6">
		This is where you can set the tracking speed.&nbsp; <br />
		<br />
		The RA and Dec Divisor can be changed to provide a custom tracking speed 
		if necessary.
		<br />
		<ol><li>
		<u>Telescope Speeds:</u>&nbsp; Gemini allows tracking in 6 speeds: Sidereal, Lunar, Solar, Adaptive King Rate, Closed
Loop, Comet/User Defined, and Terrestrial (tracking turned off). In addition, the Hand Controller permits the user to move the telescope in both RA and Dec in 3 speeds that are established in the setup menu: Guiding, Centering, and Slewing. The user can also perform go to movements of the telescope at a separate speed that is also established in the Web Mount setup menu. When a "GOTO" operation occurs, the telescope moves at "GOTO" Speed, and then slows down to Centering Speed as it approaches its target. Telescope parking is a separate command that disables tracking and moves the mount to a predetermined Home position – by default, counterweight down with the telescope pointing to Celestial North. Finally, all telescope movement stops and an alarm sounds when the mount slews to either its Eastern or Western safety limit. A warning also sounds when the mount approaches its Western limit while tracking.
		</li>
		</ol>
		</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>		
		<td class="style6">
		<ol start="2">
		<li>
		<u>Sidereal Speed: </u>Sidereal rate is simply the rate that compensates for the Earth’s motion relative to the
		celestial sphere.  It keeps the mount pointed at a constant RA and Dec. coordinate in the
		sky and will probably be the rate that you use the vast majority of the time.  With sidereal
		tracking selected, the telescope makes one revolution per sidereal day (86164.0905
		seconds).  Note: The sidereal rate assumes that your mount is accurately polar aligned.
		</li>
		</ol></td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		<a href="E022A.php">GOTO PAGE OF 2 OF 3</a>	
	</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		Copyright by http://www.gemini-2.com
	</td>
	</tr>
</table>
</body>

<?php include("bottom.php"); ?>


