<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Model Error Parameters</title>

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
			<area coords="302, 510, 434, 588" href="E013.php" shape="rect" />
		</map>
		<img height="611"src="En-Images/E025.jpg" width="450"usemap="#ImgMap0" />
		</td>
		
		<td width="10px"></td>
		<td class="style6">
		This screen shows the mount alignment parameters that the current model has.<br />
		<br />
		To select between models to see the other model, you have to use the web 
		interface modeling page and select either model 1 (east) or model 0 
		(west).<br />
		<br />
		The math behind calculating these errors:<br />
		1st alignments set the index parameters ID, IH.<br />
		<br />
		3-5 alignments calculate MA, ME additionally.<br />
		Values are in ArcSecs<br />
		<br />
		6th..9th alignment add CH and NP non-perpendicularity parameters to the 
		model.<br />
		Values are in ArcSecs<br />
		<br />
		From 10th alignment up counterweight flexure DAF is added. Values are in 
		ArcSecs</td>
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


