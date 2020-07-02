<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Main Directional Menu</title>

<?php include("topv.php"); ?>

<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width: 900px">
	<tr>
		<td class="h5"  align="center"><a name="start"></a>Interactive Hand-Controller Menus - click on green buttons to 
		Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style7" width="450px">
		To see what the numbers on this screen means Select any number.
		<map id="ImgMap2" name="ImgMap2">
				<area coords="156, 510, 291, 586" href="E012.php#start" shape="rect" />
				<area coords="309, 506, 445, 585" href="E028.php" shape="rect" />
				<area alt="" coords="10, 512, 140, 586" href="E004-MOVE.php#start" shape="rect" />
				<area alt="" coords="15, 114, 442, 192" href="E004_coordinate.php" shape="rect" target="_blank" />
				<area alt="" coords="315, 460, 430, 500" href="E004_coordinate.php" shape="rect" />

			</map>
			<img height="611"src="En-Images/E004-slew.jpg" width="450"usemap="#ImgMap2" /></td>

		<td width="10px"></td>
		<td class="style6">
		This is the main menu where all other functions can be 
		Navigated from: <br />
		<br />
		The Top box has 2 messages lines that displays the current status in the 
		top and the previous in the second line.&nbsp; This sometimes changes 
		when other functions are being preformed also, such as GOTO's.<br />
		<br />
		The four diamond buttons are movement buttons.&nbsp; The top and bottom 
		button are for the Dec, and the left and right button are for RA.&nbsp; 
		They will move the mount at the speed selected by the speed button on the 
		lower left.&nbsp; The Speed button will take you through Slew, Move, 
		Center and Guide speeds, and then back to Slew.<br />
		<br />
		Now the direction buttons have two modes of operation. If you push down 
		and slide you finger off the button the mount will keep moving in the 
		direction of the button until you press it again. If you press and hold, 
		and the let off without sliding your finger off, it works like a normal 
		button. <br />
		<br />
		Since the graphics screen is not multi-touch, if you use the finger 
		slide off method, and touch the opposite button, the mount will speed 
		up.&nbsp; The speeds are in the same order as the speed button.<br /><br />
		Also see <a href="/stickybuttons.php" target="_blank">sticky buttons 
		explanation</a><br /><br />
		Also see What <a href="E004_coordinate.php">numbers on screen mean</a>.
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
			The Menu button will take you to Main-Selection-Menu.  The "GOTO" button will take you to the GOTO menu where you select a Catalog, The Solar 				System,	Coordinate input, Do a bookmark, or Park the mount.
		<br />
		 <br />
		 The buttons on the back of the hand controller work like the buttons do 
		on the Gemini-1, and are multi-touch.</td>
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


