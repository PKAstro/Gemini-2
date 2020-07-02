<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Configure HC Buttons</title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />



<script type="text/javascript" src="../other-files/xweb-popup.js"></script>



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
		<map id="ImgMap6" name="ImgMap6">
				<span class="auto-style2"><span class="auto-style3">
				<area coords="307, 501, 439, 579" href="E020.php" shape="rect" />
		</map>
		<img height="611"src="En-Images/En-hc_button_flip.jpg" usemap="#ImgMap6" width="450"/></td>
		
		<td width="10px"></td>
		<td class="style6">
		This menu lets you swap the buttons on the front and on the back of the 
		hand controller. The buttons on the back are called tactile buttons.&nbsp; 
		We call the 4 Diamond shaped directional buttons on the front&nbsp; 
		Directional Diamond buttons, for lack of a better name.&nbsp; <br />
		<br />
		The Allow Speeding up enables/disables the "opposite button trick" for 
		speeding up movements using the tactile buttons.&nbsp; (buttons on the back 
		of the Hand Controller.) This opposite button trick is press the 
		opposite button to cause the mount to speed up to the next speed 
		selection range.<br />
		<br />
		<em>How the Allow Speeding up works</em>:<br />
		If you uncheck this box, the buttons work in a very safe manner. Not 
		only that a movement will never speed up to the next stage, pushing both 
		"opposite" button while the other button is still pressed - ignores the 
		first button and changes the direction for guiding and centering speeds. 
		Movement stops if the button pressed as the last one is released - Ramps 
		down a Move or Slew movement.<br />
		<br />
		With the 
		"Allow Speeding Up" box checked the HC buttons work like the G1 HC 
		buttons worked: Within the mode selected (Photo mode: Guiding can be 
		accelerated to slewing, Visual Mode: Centering to Slewing, ...) with the 
		"opposite key" trick.. The Speed setting on the main screen 
		defines the starting speed.</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		<span class="auto-style1">Persistent Diamonds</span> - there are the 4 
		directional buttons on the front of the hand controller -
		No more 
		<a href="
/stickybuttons.php" onclick="xPopUp(this.href, 'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',600,750,'pixel','center','center'); return false;" target="xPopUp" title="How Sticky (Persistent Diamonds) Work">sticky keys</a> (Persistent Diamonds).  If you don't choose this option.&nbsp;
		You may have to use the "Store Settings" button on the HC menu screen to 
		initialize the variable in the SDRam.&nbsp; In other words uncheck the box if 
		you don't want sticky keys.&nbsp; Please notice that there are small 
		regions around the keys where they are still active, so if you continue 
		to hold down the key while sliding you finger off the key will stay 
		activated until you get out of that area, or lift your finger off the 
		LCD pad.&nbsp; Please be aware that this is a compromise between both 
		button actions being able to be selected. </td>
	</tr>
</table>

</body>

<?php include("bottom.php"); ?>

