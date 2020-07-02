<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Enter Eastern Safty Linit</title>

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
		<area coords="352, 503, 438, 586" href="En-limits-safety.php" shape="rect" />
			</map>
			<img height="611"src="En-Images/En-safety-limit-eastern.jpg" width="450"usemap="#ImgMap0" /></td>
					
		<td style="width: 10px"></td>
		<td class="style6">
			Note that the Web limits are set for left and right side, while the hand 
			controller uses East and West.&nbsp; If 
			using the hand controller, follow these steps. (The hand controller 
			method only works correctly on August 16 or later firmware.) Also the safety limits are referenced to the CCW startup position.  If you did not start up with a Cold start, or Warm Start with the mount at CCW, you must do this before setting the limits.
It a very bad idea to start up with a "Warm Restart" and assume that the Gemini 2 has remembered the CCW.  You can tell the Gemini-2 to part at CCW to make sure it knows where CCW is.<br />
	<ol>
		<li>
		Turn off tracking by placing the mount into Terrestrial mode.&nbsp; 
		Menu-&gt;Track-&gt;Terrestrial</li>
		<li>
		Move the RA using the Left-Right buttons to the Eastern Limit.&nbsp; 
		Loosen the clutch in Dec. Make sure you can spin the telescope 360 
		degrees in Dec without it hitting the mount.&nbsp; Use the 
		Menu-&gt;Mount-&gt;Limits-&gt;"Set Limits Here" button, to set the Eastern Limit.</li>
		<li>
		Hit the ENT button to return to the previous menu.&nbsp;
		</li>
	</ol>
	<br /><br />
		Note: Safety Limits may not take effect until you power down and back up. 
			That has been my experience, however the writer of the firmware says 
			they take effect when set. <br />
			<br />
			Also Limits are entered as degrees:minutes, not decimal degrees,</td>
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


