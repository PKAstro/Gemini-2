<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Semi Automatic Modeling East 15</title>

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
		<td class="style7">
		<map id="ImgMap0" name="ImgMap0">
			<area coords="308, 514, 437, 588" href="En-SAE-16.php" shape="rect" />
		</map>
		<img height="611"src="En-Images/En-SAE-15.jpg" width="450"usemap="#ImgMap0" />
		<br/>
		<ul class="style6"><li>Polar Axis is in ArcSec.</li>
			<li>Non Perpendicularity is in ArcSec</li>
			<li>Counterweight Fexure is in ArcSec</li>
		</ul></td>
		
		<td width="10px"></td>
		<td class="style6">
		Notice that you only have 
		the Polar Axis errors calculated also.<br />
		<br />
		You use the BACK button to take you to the next Star selection screen.<br />
		<br />
		The Switch button will switch the Error screens between the East and 
		West model Error screens.<br />
		<br />
		The UNDO button will remove the Last star added to the model.<br />
		<br />
		Please hit Back for this Demo<br />
		<br />
		This screen shows the mount alignment parameters that the current model has.<br />
		<br />
		To select between models to see the other model, just hit switch and select either model 1 (east) or model 
		0 
		(west).<br />
		<br />
		The math behind calculating these errors:<br />
		1st alignments set the index parameters ID, IH.<br />
		<br />
		3-5 alignments calculate MA, ME additionally.<br />
		<br />
		6th..9th alignment add CH and NP non-perpendicularity parameters to the 
		model.<br />
		<br />
		From 10th alignment up counterweight flexure DAF is added</td>
	</tr>
</table>

<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on April 15, 2017
		</td>
	</tr>
</table>
</body>

<?php include("bottom.php"); ?>


