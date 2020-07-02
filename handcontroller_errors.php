<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Handcontroller Errors</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">We will investage the common problems with the hand 
		controller.&nbsp; Almost all of these result in an "Connecting to the 
		Gemini..." message without connecting.</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">1. The most common porblem is that the hand 
		controller is plugged into Serial Port 1, <br />
		instead of Serial Port 2.&nbsp; This is the labeling on the Original 
		Version of the Gemini-2.&nbsp; The new Mini Version has the port labeled 
		HC.</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">2. If you have the first version of the hand 
		controller, the next most common problem is that the micro SDcard inside the hand controller is loose and not pushed in all the 
		way.&nbsp; Here is a
		<a href="http://gemini-2.com/updatingsirmwareselection_files/Movie/HC-remove-replace-SDcard.wmv" target="_blank">
		movie</a> of the older version of the hand controller that normally has 
		this problem.</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">3. The next most common problem is that the cable has gone bad on one end.  You can order a replacement
		from Losmandy.  
		Also see 		<a href="http://gemini-2.com/handcontroller-cable-ends.php" target="_blank">
		hand controller cable</a>  for more information on these.&nbsp; Also look 
		at the connectors in the main unit and make sure the pins in the Female 
		RJ-12 connectors are straight and no trash is in them.&nbsp; It was 
		common for the RS-232 IC to go bad with static electricty on the 
		Gemini-1 units, but I have heard of no cases of this happening with the 
		Gemini-2 units.</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">4. If you do not see the initial Logo Screen on the 
		hand controller when you power up the gemini 2, then this is an 
		indication that the mico-SDcard is loose, or has become corrupted, and 
		needs to be reformated and reprogrammed.&nbsp; In this case, you will 
		most likely have to remove the micro-SDcard.&nbsp; Please observe all 
		warnings, as the LCD is easly pulled off the circuit board if the gasket 
		gets to sticky.&nbsp; See 		<a href="http://gemini-2.com/Removing_SDCards.php" target="_blank">
		removing and replacing the micro SDcards</a>.</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">5.&nbsp; The other most common problem is that the 
		screen will change language.&nbsp; Now this is only on the first version 
		of the Hand controllers (blue circuit boards).&nbsp; On that version, is some hidden buttons 
		at the bottom of the screen.&nbsp;They are normally hidden by the bezel, 
		but if the screen is not calibrated when 
		first powered on, the touch position will not align with the graphics 
		and these buttons might be able to be touched.&nbsp; 
		You have about two seconds to initialize the touch screen calibration 
		sequence.&nbsp; See
		<a href="http://gemini-2.com/quickstart/screenalign-1.php" target="_blank">
		Calibrating the touch screen</a>.&nbsp; This is part of the Quick start 
		and screen alignment demo.</td>
	</tr>
</table>
 

<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on 
		July 23, 2016
		</td>
	</tr>
</table>


</body>




<?php include("bottom.php"); ?>


