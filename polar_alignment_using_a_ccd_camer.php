<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Polar Alignment using a CCD Came</title>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />
</head>


<?php include("topv.php"); ?>




<body style="color: #FFFFFF; margin-left: 100px; margin-right: 100px; background-image: url('images/nebulastarsbg.jpg')">

<table align="center" style="width: 80%">
	<tr>
		<td class="h2">
			Polar Alignment using a CCD Camera
		</td>
		</tr>

		<tr>
			<td class="style6">
				For CCD imagers, the camera is the ideal tool for polar aligning the telescope. 
				The ability to bin and then zoom in on the image or to obtain a sub-frame at full 
				resolution, allows the misalignment motion of a star be detected and corrected 
				without the strain of observing at high magnification with a reticle eyepiece. 
				Follow the procedure below to make polar alignment easy and accurate.
			</td>
		</tr>
		<tr>
			<td class="style6">
			<ol>
				<li>Coarsely align to the celestial pole using two-star alignment or polar scope 
				or by eyeball. Align well enough to ensure that your adjustments will allow polar 
				alignment to be achieved. If you carefully level the base of your mount before 
				beginning the drift alignment, you should only need to make one adjustment on 
				azimuth and one on altitude. If the base of the mount is not perfectly level, 
				then the two adjustments can slightly affect each other, requiring several 
				iterations on each to achieve good polar alignment. </li>
				<li>Aim at the intersection of celestial equator and the meridian. This is the 
				point at which an error in azimuth alignment causes the maximum apparent drift 
				in declination.</li>
				<li>Adjust the camera rotation so that slewing the scope E/W causes no N/S 
				change in the star's position. Move the scope's position if necessary to put 
				a star near the bottom of the frame to make it easy to detect N/S motion as 
				you slew the star E/W. </li>
				<li>Pick star nearest the intersection that can be seen clearly in a 2-3 second 
				exposure. Bin 2x2 or 3x3 if necessary to get reasonably fast update rates. A new 
				exposure every 2-5 seconds is a good rate. Zoom in x3 or x4 to nearly fill the 
				screen with the region around the star. This will make it much easier to observe 
				small rates of drift.</li>
				<li>In CCDSoft, you may want to use focus mode because it continuously takes 
				and displays new images. In CCDSoft, open the histogram control, or for other 
				programs any other small box that be moved around the screen (you could open 
				any program and shrink the window to a small size). Place the top edge of this 
				box so that the bottom half of the star is covered. Your screen will look 
				similar to Figure 1.</li>

			</ol>
			</td>
		</tr>
		<tr>
			<td class="style7">
				<img alt="" height="542" src="images/CCDalignment/CCDdriftAlign.jpg" width="601" />
			</td>
		</tr>
		<tr>
			<td class="style6">
			<ol>
				<li>Now watch the star to see if it drifts north or south. Adjust the 
				AZIMUTH control on your mount or wedge as required to eliminate any N/S 
				drift. After each adjustment, you may need to use a different star, 
				depending on how much adjustment was made. For practice you can turn your 
				azimuth adjustment two or three turns, say clockwise, and observe whether 
				this causes the drift to get better or worse. By experimenting, you will 
				quickly get a feel for how much adjustment is required to correct the 
				observed speed and direction of drift. As you correct the drift rate, it 
				will take longer and longer observations to determine the direction and 
				speed of the drift. My rule of thumb is that if I observe no detectable 
				drift in five minutes, then I am done with that axis. </li>
				<li>For super-fine tuning, turn binning off, take a full frame exposure, 
				select a small window with a medium bright star, and take images in focus 
				mode. Repeat 4-6 in full resolution mode until satisfied with the drift 
				rate. Very low drift rates can be easily observed and corrected in 
				real-time. </li>
				<li>Rotate the scope East or West along the celestial equator to a point 20 
				or so degrees above the horizon. Get as close to the horizon as possible. 
				Seeing will limit how close you can get and obtain reasonably steady stars 
				for alignment. </li>
				<li>Repeat the same procedure but now only adjust the altitude adjustment on 
				your mount until you observe no N/S movement of the star. </li>
				<li>Return to the meridian and verify that the azimuth setting does not need 
				further adjustment or adjust as required. </li>
			</ol>
			</td>
		</tr>
		<tr>
			<td class="style6">
			<p>Once you gain experience with the adjustments on your mount, you should be 
			able to obtain very good polar alignment in 30 minutes or less.</p>
			<p>Zeroing it in. Using a DSLR or CCD to Align Your Scope</p>
			<p>By Robert Vice<br />
			For many years I have spent time learning the Star drift method of alignment for 
			my telescope.&nbsp; Although tedious, it has turned out to be quite beneficial.&nbsp; 
			However, after wasting night after night attempting to align the telescope 
			properly, I have found an easier way of alignment.<br />
			By modifying the photographic method of alignment to incorporate the newer 
			technology such as a CCD cameras or DSLR camera, one can achieve an accurate 
			alignment in just a matter of minutes instead of hours or days.<br />
			</td>
		</tr>
		<tr>
			<td class="style6">
			<ol>
				<li>Setup and align your telescope normally. </li>
				<li>Set your telescope to point due south and at 0 degrees DEC.</li>
				<li>Find a semi-bright star.&nbsp; A 6th magnitude star works perfectly, 
					but a dimmer star can be used.</li>
				<li>Insert your CCD or DSLR camera&nbsp;into the eyepiece holder or attach via 
					the t-adapter.</li>
				<li>Focus the star for the CCD or DSLR.</li>
				<li>Once focused, move the star to the right hand side of the camera sensor.</li>
				<li>Set your telescope to its lowest drive speed.&nbsp; Typically a guide rate mode.</li>
				<li>Set your camera software&nbsp;to take an exposure of 125 seconds.&nbsp; The first 
				5 seconds is used to create a point of reference on the image.</li>
				<li>As soon as the first five seconds have elapsed, then press the W on the telescope 
				keypad to cause the star to move to the opposite side of the sensor.</li>
				<li>For the first minute continue to move the telescope West.&nbsp; As soon as the 
				first minute has elapsed, immediately reverse the telescope direction.</li>
				<li>When the second minute has finished, stop moving the telescope. </li>
				<li>After the image has downloaded, you should have something that looks similar 
					to the image below. </li>
			</ol>
			</td>
		</tr>
		<tr>
			<td class="style7">
			<img alt="" height="320" src="images/CCDalignment/clip_image001.jpg" width="480" />
			</td>
		</tr>
		<tr>
			<td class="style6">
				This is an initial image taken.&nbsp; What you see is the angle of deviation. 
				What we are trying to do is to make the &lt; a solid line.&nbsp; In order to 
				correct this, we have to make some adjustments to the azimuth on the telescope 
				mount.&nbsp; Notice that the initial star point is lower than where the exposure 
				finished.&nbsp; This tells us that the telescope if pointing too far West.&nbsp; 
				So to fix this, make a correction to the azimuth control to move the telescope 
				East. <br />
				Now, follow the same steps again.&nbsp; When the image has downloaded, it should 
				show that the angle of deviation has decreased
			</td>
		</tr>
		<tr>
			<td class="style7">
				<img alt="" height="320" src="images/CCDalignment/clip_image002.jpg" width="480" />
			</td>
		</tr>
	</table>

</body>

</html>


<?php include("bottom.php"); ?>



