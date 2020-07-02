<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Safty Linits</title>

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

<table align="center" style="width: 900px">
	<tr>
		<td class="style7" width="450px">
		<map id="ImgMap0" name="ImgMap0">
				<area coords="306, 520, 438, 598" href="limits.php" shape="rect" />
				<area coords="92, 164, 358, 243" href="limits-safety_Eastern.php" shape="rect" />
				<area coords="96, 281, 359, 365" href="limits-safety_Western.php" shape="rect" />
				<area coords="97, 399, 359, 478" href="limits-safety_goto.php" shape="rect" />
			</map>
			<img height="611"src="gemini-images/LimitSwitches/safetylimit.jpg" width="450"usemap="#ImgMap0" /></td>
		<td width="10px"></td>

		<td class="style6">
		This is the Safety Limit setting screen.  It is 
		also described on the 
		<a href="http://www.gemini-2.com/hc/En-limits.php" target="_blank">http://www.gemini-2.com/hc/En-limits.php</a>.<br />
		<br />
		Note: Safety Limits may not take effect until you power down and back up. 
		This has been my experience.&nbsp; The writer of the code says they take 
		effect when set.<br />
		<br />The limits can be set either using the Web interface, on the Mount 
		Selection Page, (it is under Menu--&gt;Mount--&gt;Limits) or on the menu 
		to the left.<br />
		<br />
		Note that the Web limits are set for left and right side, while the hand 
		controller uses East and West.&nbsp; If 
		using the hand controller, follow these steps. (The hand controller 
		method only works correctly on August 16 or later firmware.)<br />
	<ol>
		<li>
		Turn off tracking by placing the mount into Terrestrial mode.&nbsp; 
		Menu-&gt;Track-&gt;Terrestrial</li>
		<li>
		Move the RA using the Left-Right buttons to the Eastern Limit.&nbsp; 
		Loosen the clutch in Dec. Make sure you can spin the telescope 360 
		degrees in Dec without it hitting the mount.&nbsp; Use the 
		Menu-&gt;Mount-&gt;Limits-&gt;"Set Limits Here" button, to set the Eastern Limit.&nbsp;
		</li>
	</ol>
	</td></tr>

</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style6">
	<ol start="3">
		<li>
		Move the RA using the Left-Right buttons to the Western Limit.&nbsp; 
		Loosen the clutch in Dec. Spin the Dec as much as you can and make it is 
		not hitting the mount.&nbsp; Use the 
		Menu-&gt;Mount-&gt;Limits-&gt;"Set Limits Here" button, to set the Western Limit. 
		You now have set the Limits</li>
	<li>
		The Western Goto Limit determines how far pass the meridian that the
		Gemini-2 will do a flip.&nbsp; It is calculated like this. Note
		that the Meridian is at 90 degrees. The point of Meridian Flip = Western
		Safety Limit - Goto Limit.&nbsp; An example is if you have the Western
		Safety limit set to 100 degrees - The Western GoTo limit of 2.5 degrees
		(default) you end up with a point of flip of 97.5 degrees, or 7.5
		degrees past the meridian. Any target selected that is past this
		will do a meridian flip.&nbsp; Any target on the East side (Northern
		Hemisphere) will not do a meridian flip.</li>
		
	</ol>
		</td>
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

<?php 
if ($i ==1)
include("bottom.php");
?>


