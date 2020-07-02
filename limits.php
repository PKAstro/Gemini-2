<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<style type="text/css">
.auto-style2 {
	border-style: solid;
	border-width: 2px;
}
</style>
<base target="_blank" />
</head>

<body style="color: #FFFFFF; background-color: #000000">

<body>

</body>
<table  align="center" style="width:900px">
<tr><td class="style7" 
>
	<a href="gemini-images/LimitSwitches/limitsN.jpg" target="_blank">
	<img alt="" height="675" src="gemini-images/LimitSwitches/limitsN_small.jpg" width="900" class="auto-style2" /></a><br />
	Fig 1. Click on image for larger image.</td></tr>
	</table>

<table  align="center" style="width:900px">
	<tr><td style="width: 450px" class="style7">
	
		<img alt="North Hemisphere East Side" height="419" src="gemini-images/LimitSwitches/N114D.JPG" width="350" /><br />
		Figure 2</td>
		<td class="style7">
		<img alt="North Hemisphere West side" height="466" src="gemini-images/LimitSwitches/N123D.jpg" width="350" /><br />
		Figure 3<br />
		</td></tr>
</table>
<table  align="center" style="width:900px">
<tr><td class="style6">
	<br />Fig 1 and Fig 4 show the relationship of the different in limits 
	between the northern hemisphere and the southern hemisphere.&nbsp; The Limits are 
	switched between the hemispheres as far as east and west is concerned, but 
	stay the same for left and right.&nbsp; Left and Right is determined by 
	standing in front of the telescope with you back to your respective pole.&nbsp; 
	In figures 2, 3 
	and 5, 6, you see the angles that are default for the G8,G11, Titan and 
	Titan 50.&nbsp; The MI-250 angles are different, and should be 92 for the 
	Left limit and 95 degrees 
	for the Right limit.&nbsp; Note: the Hemisphere is selected totally by the 
	sign of the Latitude in the Gemini-2. Positive for Northern Hemisphere and 
	negative for Southern Hemisphere.&nbsp; It was the same in the Gemini-1 
	also.&nbsp; No switches to change at all.&nbsp; <br /><b><em>Please Note: changing the mount type from the hand controller or web 
interface does not change 
the safety limits that are set.&nbsp; Also Please see
<a href="web/web-firmware-sram.php" target="_blank">Reset SRam</a></em></b><br /><br /></td></tr>

</table>

<table  align="center" style="width:900px">
<tr><td class="style7" 
>
	<a href="gemini-images/LimitSwitches/limitsS.jpg" target="_blank">
	<img alt="" height="675" src="gemini-images/LimitSwitches/limitsS_small.jpg" width="900" class="auto-style2" /></a><br />
	Fig 4. Click on image for larger image.</td></tr>
	</table>



<table  align="center" style="width:900px">
	<tr><td style="width: 450px" class="style7">
	
		<img alt="114D Southern Hemisphere" height="419" src="gemini-images/LimitSwitches/S114D.JPG" width="367" />
		<br />Figure 5</td>
		<td class="style7">
		<img alt="123 D Southern Hemisphere" height="419" src="gemini-images/LimitSwitches/S123D.JPG" width="307" />		
		<br />Figure 6<br />
		</td></tr>
</table>

<table  align="center" style="width:900px">
	<tr><td  class="style7"><br />
	
	
		<a href="web/web-mount.php" target="_blank">
		<img alt="WebInterface Set Safety Limits" class="auto-style2" height="177" src="gemini-images/LimitSwitches/SetSafetyLimits_small.JPG" width="900" /></a>
		<br />Fig 7, Click on image for larger image</td></tr>
	<tr><td  class="style7">
	
		&nbsp;</td></tr>
</table>
<table  align="center" style="width:900px">
<tr>
<td class="style7">
<map id="ImgMap0" name="ImgMap0">
				<area coords="105, 201, 425, 291" href="limits-safety_Eastern.php" shape="rect" />
				<area coords="99, 335, 415, 419" href="limits-safety_Western.php" shape="rect" />
				<area coords="101, 469, 414, 548" href="limits-safety_goto.php" shape="rect" />
			</map>
<img alt="" height="720" src="gemini-images/handcontoller_menu_images/safetylimit.jpg" width="530" usemap="#ImgMap0" /><br />Fig 8<br /><p class="style6">
The Eastern Position, Western Position, and Western Goto Limit buttons do take you to the&nbsp; hand-controller menu pages.</p>
<p class="style6">
&nbsp;</p>
<p class="style6">
<b><em>Please Note: changing the mount type from the hand controller or web 
interface does not change 
the safety limits that are set.&nbsp; Also Please see
<a href="web/web-firmware-sram.php" target="_blank">Reset SRam</a></em></b></p>

<td class="style6">
<br />The limits can be set either using the Web interface, on the 
<a href="web/web-mount.php">Mount 
		Selection Page</a>, See Fig 7.&nbsp; or on the hand controller see figure 8 
left. (it is under Menu--&gt;Mount--&gt;Limits<br />
	Note that the Web limits are set for left and right side, while the hand 
	controller uses East and West.&nbsp; If 
		using the hand controller, follow these steps. (The hand controller 
	method only works correctly on August 16 or later firmware.)<br />
	<ol>
		<li>
		Start with the mount at Count Weight Down, using either Cold Start or Warm Start.
		</li>
		<li>
		Turn off tracking by placing the mount into Terrestrial mode.&nbsp; 
		Menu-&gt;Track-&gt;Terrestrial</li>
		<li>
		Move the RA using the Left-Right buttons to the Eastern Limit.&nbsp; 
		Loosen the clutch in Dec. Make sure you can spin the telescope&nbsp; 
		back and forth as far as your cables will allow, or if no cables are 
		connected 360 
		degrees in Dec without it hitting the mount, if possible. There are no 
		DEC limits to set, so you have to make sure your Dec is clear from 
		hitting also. &nbsp; Use the 
		Menu-&gt;Mount-&gt;Limits-&gt;"Set Limits Here" button, to set the Eastern Limit.&nbsp;
		</li>
		<li>
		Move the RA using the Left-Right buttons to the Western Limit.&nbsp; 
		Loosen the clutch in Dec. Do the Dec just as you did in step 2 above.&nbsp; Use the 
		Menu-&gt;Mount-&gt;Limits-&gt;"Set Limits Here" button, to set the Western Limit. 
		You now have set the Limits</li>
		<li>
		The Western Goto Limit determines how far pass the meridian that the 
		Gemini-2 will do a flip.&nbsp; It is calculated like this.&nbsp; Note 
		that the Meridian is at 90 degrees. The point of Meridian Flip = Western 
		Safety Limit - Goto Limit.&nbsp; An example is if you have the Western 
		Safety limit set to 100 degrees - The Western goto limit of 2.5 degrees 
		(default) you end up with a point of flip of 97.5 degrees, or 7.5 
		degrees past the meridian.&nbsp; Any target selected that is past this 
		will do a meridian flip.&nbsp; Any target on the East side (Norhten 
		Hemisphere) will not do a meridian flip. <br />
		
		</li>
	</ol>
	</td></tr>

</table>


</body>

<?php include("bottom.php"); ?>



