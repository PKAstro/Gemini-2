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
			<area coords="308, 519, 440, 597" href="E018.php" shape="rect" />
		</map>
		<img height="611"src="En-Images/E018a.jpg" width="450"usemap="#ImgMap0" /><br /></td>		<td width="10px"></td>
		<td class="style6">
		From this menu is where 
		can select between the Equatorial Mount type and ALT/AZ mount type.
		<br />
		<br />
		<strong>Equatorial Mount
		Type</strong> - This would be an Custom Mount, GM8, G11, HGM-200, 
		MI-250, Titan25 or Titan50, or any other Equatorial mounts you set up 
		under custom.<br />
		<br />
		ALT/AZ Mount Type - <span class="style2">Please be warned that if you have an 
		Equatorial 
		Mount type and select this you could slew your telescope into a limit and 
		maybe do mechanical damage</span>.<br />
		<br />
		This behavior is caused by the coordinate system transformation 
		necessary when switching the mount design settings. If you start up the
		mount as Equatorial in the CWD position it has the same physical step 	
		coordinates as an Alt/Az mount pointing at the Zenith. The problem is,
		that at the Zenith there is a cone inside which no Alt/Az mount is able
		to track, since the speed goes up to infinity. Since this is where the
		mount supposes to be when switching from Equatorial to Alt/Az without a
		Cold Start, the Az axis has to track very quickly while pointing near to
		the Zenith, causing a stall. <br />
		<br />
		The standard Alt/Az starting position is pointing due South with an 
		Elevation of ZERO.<br />
		<br />
		A Cold Start is a mandatory function after changing Mount 
		Design/Type/Gearing. 		</td>
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


