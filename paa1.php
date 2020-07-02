<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">

<body>



<p class="style6">
<table align="center" style="width: 80%">
	<tr>
		<td class="h2">This is the Polar Axis Assist Routine</td>
	</tr>
</table>
<table align="center" style="width: 80%">
	<tr>
		<td class="style6">
		This 
		routine is designed to help get the mount polar aligned to within one 
		degree of either the north or south pole. This routine will take at least 3 iterations to get as close as a polar scope can get you.
		
		YOU CANNOT HAVE A MODEL BUILT AND EXPECT THIS ROUTINE TO WORK.&nbsp; Do 
		it after doing a cold start.</td></tr>
</table>
<table align="center" style="width: 80%">
	<tr>
		<td class="style6">
	<ol><li> 
		It is very important that you do as accurate&nbsp; Counter-Weight-Down, and Pointing the 
		Dec to the pole as you can before powering on the Gemini-2.&nbsp; This 
		will help this alignment be more accurate.</li>
		<li> 
After you have cold started&nbsp; select "Menu"--&gt; "Align -->more.. -->Polar Align Assist" menu item.  

</li>
		<li> 
		You will be in the menu of Choose First Star, Choose Second star and Iterate. 

You will need to select 2 stars for this alignment process.  The first one should be near the celestial equator (Dec. near 0) and within about 20° of the eastern or western horizon 
		(about + or - six hours east or west). The other star should be near the meridian (such as Polaris in the northern hemisphere).  

</li>
		<li> 
		Use the UP and Down buttons to scroll through the list of stars and 
		select the first one by using the selecting it. Once again the Gemini-2 
		will display the Choose first star, Choose Second Star, and Iterate.  

</li>
		<li> 
		Choose the second star and select a star from the menu of stars.  Scroll through the list and select the second star. 

The menu will again return to the Choose First Star, Choose Second star and 
		Iterate menu.  

</li>
		<li> 
		Select the Iterate button and the  the mount will slew to the first star. Once it reaches the star, "center object" will appear on the display. If the star is the one near the meridian, center the star only using the mount's elevation adjustment knob (ignore azimuth).  If it is in the western or eastern part of the sky, center the star using only the mount's azimuth adjustment knob (ignore elevation).  

</li>
		<li> 
		Having done this, completely center the star in both RA and Dec. using 
		the Hand Controller.
  

</li>
		<li> 
		Press the Iterate button and the telescope will slew to the other star.  Center it using the procedure described above.   Repeat this about 3 times, each time pressing the Iterate button to slew back and forth between the two stars. When you are finished, press the Back button.   

</li>
		<li> 
		You can expect to get to
within one degree of the pole using this method.

IMPORTANT: Because this method depends on the mount pointing to where the stars should be if the mount were polar aligned, you cannot use this function if modeling parameters have already been calculated.  You should only use it after a Cold Start before you do any Alignments, or immediately after selecting the "Reset Alignment" menu item.</li>
		</ol>
		<p>&nbsp;</p>
		</td></tr>
</table>
</body>




<?php include("bottom.php"); ?>



