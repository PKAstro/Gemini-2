<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Cold Start</title>

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
			<area coords="13, 513, 275, 597" href="En-startup-restarting-cold_start.php" shape="rect" />
			<area coords="372, 395, 24" href="En-startup-default-ask_if_possible.php" shape="circle" />
			<area coords="370, 300, 24" href="En-startup-default-warm_restart.php" shape="circle" />
			<area coords="369, 205, 24" href="En-startup-default-warm_start.php" shape="circle" />
			<area coords="309, 516, 438, 598" href="E018.php" shape="rect" />
		</map>
		<img height="611"src="En-Images/En-defaultstartupmode_cold_start.jpg" width="450"usemap="#ImgMap0" /></td>		<td width="10px"></td>
		<td class="style6">
		This is where you can set the default startup mode.  If you select "Ask, if Possible" then the Gemini-2 will prompt you for the startup mode, unless it determines a Cold Start is the only possible mode.<br />
		<br />
		Also by hitting the Restart mount button, the mount will be started from 
		the beginning.<br />
		<br />
		How it starts will be determined by which mode was selected.<br />
		<br />
		For this demo, We have Ask, If possible selected, so if you press 
		Restart mount, it will go to the startup menu.&nbsp; <br />
		<br />
		If Cold start is selected it will go to the Function menu, where PAA, 
		Modeling or Catalog Tour can be selected.<br />
		<br />
		If Warm Start or Warm Restart is the selected mode, then it will go to 
		the main menu.</td>
	</tr>
</table>

</body>

<?php include("bottom.php"); ?>

