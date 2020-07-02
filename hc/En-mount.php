<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Mount Menu</title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >

<table align="center" style="width: 900px">
	<tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click on green button to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style7" width="450px">
		<map id="ImgMap0" name="ImgMap0">
			<area coords="311, 507, 443, 585" href="E012.php" shape="rect" />
			<area coords="311, 108, 442, 184" href="En-limits-safety.php" shape="rect" />
			<area coords="309, 227, 437, 309" href="En-networkmenu.php" shape="rect" />
			<area coords="161, 105, 294, 186" href="En-customgearing.php" shape="rect" />
			<area coords="9, 228, 142, 308" href="En-tvcmenu.php" shape="rect" />
			<area coords="12, 105, 144, 184" href="En-mounttype.php" shape="rect" />
			<area coords="9, 348, 141, 425" href="En-startup-default-ask_if_possible.php" shape="rect" />
			<area coords="159, 226, 291, 304" href="En-pec_train.php" shape="rect" />
			<area alt="" coords="163, 345, 292, 422" href="E018a.php" shape="rect" />
			<area alt="" coords="312, 350, 442, 432" href="En-balance.php" shape="rect" />
		</map>
		<img height="602"src="En-Images/proposed_menus/E018.jpg" width="450"usemap="#ImgMap0" /><br /></td>		<td width="10px"></td>
		<td class="style6">
		From this menu is where you start all the mount parameters.
		<br />
		<br />
		<strong>Type</strong> - select your mount type.<br />
		<br />
		<strong>Gearing</strong> - if you have a custom mount this is where you set your gear 
		ratios.<br />
		<br />
		<strong>Limits</strong> - This is where you set your mount limits.<br />
		<br />
		<strong>TVC</strong> - this is where you set the Dec backlash compensation.<br />
		<br />
		<strong>PEC</strong> - This is where you can compensate for periodic error of the worm 
		gear. <br />
		<br />
		<strong>Network</strong> - This is where you set up your network setting.<br />
		<br />
		<strong>Startup</strong> - this is where you setup the default startup mode.<br />
		<br />
		<strong>Design</strong> - this lets you select between an<br />
		ALT/AZ Mount type and an Equatorial Mount.<br /><br />
		<strong>Balance</strong> If the proper firmware is installed into the
		servo motor IC U18 and U19, then this menu will show the loads 
		on the motors.</td>
	</tr>
	<tr><td> </td></tr>
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


