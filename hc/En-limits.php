<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Linits Menu Discription</title>

<?php include("topv.php"); ?>

<style type="text/css">
.auto-style2 {
	border-style: solid;
	border-width: 2px;
}
</style>
<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />
</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width:900px">
<tr><td class="style7" 
>
	<img height="677" src="En-Images/limitsN_small.jpg" width="900" class="auto-style2" /><br />
	Fig 1. </td></tr>
	</table>

<table  align="center" style="width:900px">
	<tr><td style="width: 450px" class="style7">
	
		<img alt="North Hemisphere East Side" height="419" src="En-Images/N114D.jpg" width="350" /><br />
		Figure 2</td>
		<td class="style7">
		<img alt="North Hemisphere West side" height="466" src="En-Images/N123D.jpg" width="350" /><br />
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
	Titan 50.&nbsp; The MI-250 angles are different, and should be 95 for the 
	Left limit and 92 degrees 
	for the Right limit.&nbsp; Note: the Hemisphere is selected totally by the 
	sign of the Latitude in the Gemini-2. Positive for Northern Hemisphere and 
	negative for Southern Hemisphere.&nbsp; It was the same in the Gemini-1 
	also.&nbsp; No switches to change at all.<br /><br /></td></tr>

</table>

<table  align="center" style="width:900px">
<tr><td class="style7" 
>
	
	<img height="675" src="En-Images/limitsS_small.jpg" width="900" class="auto-style2" /><br />
	Fig 4. </td></tr>
	</table>



<table  align="center" style="width:900px">
	<tr><td style="width: 450px" class="style7">
	
		<img alt="114D Southern Hemisphere" height="419" src="En-Images/S114D.jpg" width="367" />
		<br />Figure 5</td>
		<td class="style7">
		<img alt="123 D Southern Hemisphere" height="419" src="En-Images/S123D.jpg" width="307" />		
		<br />Figure 6<br />
		</td></tr>
</table>

<table  align="center" style="width:900px">
	<tr><td  class="style7"><br />
	
	
		
		<img alt="WebInterface Set Safety Limits" class="auto-style2" height="177" src="En-Images/SetSafetyLimits_small.jpg" width="900" />
		<br />Fig 7, Click on image for larger image</td></tr>
	<tr><td  class="style7">
	
		&nbsp;</td></tr>
</table>
<table  align="center" style="width:900px">
<tr>
<td class="style7">
<img height="611"src="En-Images/En-safetylimit.jpg" width="450"/>
<p align="center">Fig 8</p>
 </td>
<td width="10px"></td>
<td class="style6">
<br />The limits can be set either using the Web interface, on the Mount 
		Selection Page, See Fig 7.&nbsp; or on the hand controller see figure 8 
left. (it is under Menu--&gt;Mount--&gt;Limits<br />
	Note that the Web limits are set for left and right side, while the hand 
	controller uses East and West.&nbsp; If 
		using the hand controller, follow these steps. (The hand controller 
	method only works correctly on August 16 or later firmware.) Also the safety 
limits are referenced to the CCW startup position.&nbsp; If you did not start up 
with a Cold start, or Warm Start with the mount at CCW, you must do this before 
setting the limits.<br />
It a very bad idea to start up with a "Warm Restart" and assume that the Gemini 
2 has remembered the CCW.&nbsp; You can tell the Gemini-2 to part at CCW to make 
sure it knows where CCW is.<br />
	<ol>
		<li>
		Turn off tracking by placing the mount into Terrestrial mode.&nbsp; 
		Menu-&gt;Track-&gt;Terrestrial</li>
		<li>
		Move the RA using the Left-Right buttons to the Eastern Limit.&nbsp; 
		<span class="style2">NOTE: ALWAYS START WITH THE EAST LIMIT. </span>Loosen the clutch in Dec. Make sure you can spin the telescope as much 
		as possible in Dec without it hitting the mount.&nbsp; Use the 
		Menu-&gt;Mount-&gt;Limits-&gt;"Set Limits Here" button, to set the Eastern Limit.&nbsp;
		</li>
		<li>
		Move the RA using the Left-Right buttons to the Western Limit.&nbsp; 
		Loosen the clutch in Dec. Make sure you can spin the telescope as much 
		as possible in Dec without it hitting the mount.&nbsp; Use the 
		Menu-&gt;Mount-&gt;Limits-&gt;"Set Limits Here" button, to set the Western Limit. 
		You now have set the Limits</li>
		<br />
		
		
	</ol>
	</td></tr>

</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style6">
	<ol start="4">
	<li>
		The Western Goto Limit determines how far pass the meridian that the
		Gemini-2 will do a flip.&nbsp; It is calculated like this. Note
		that the Meridian is at 90 degrees. <br />The point of Meridian Flip = Western
		Safety Limit - Western Goto Limit.<br /> An example is if you have the Western
		Safety limit set to 100 degrees - The Western GOTO limit of 2.5 degrees
		(default) you end up with a point of flip of 97.5 degrees, or 7.5
		degrees past the meridian. Any target selected that is past this
		will do a meridian flip.&nbsp; Any target on the East side (Northern
		Hemisphere) will not do a meridian flip.</li>
		<li>
		Note: Limits do not take effect till the mount is powered off and then back on.</li>
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

<?php include("bottom.php"); ?>


