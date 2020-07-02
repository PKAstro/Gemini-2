<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">

<body>

</body>
<table  align="center" style="width:900px">
<tr><td class="style6" >
	<br />
	The Gemini 2 provides 2 methods of helping you do a Polar alignment. They 
	are Polar Align Assist and Polar Axis Correction.<br />
	<br />
Polar Align Assist
<br />
	After you have cold started and completed the first “Menu-&gt;Align-&gt;Goto 
	Bright Star-&gt;Select Bright&nbsp; Start Then Alignment,”
select the “Menu-&gt;Funct-&gt;Polar Al. Assist” menu item. You will be in the menu of
stars you can use for polar alignment.
<br />
	<br />
	You will need to select 2 stars for this alignment process. The first one should be near
the celestial equator (Dec. near 0) and within about 20° of the eastern or western horizon.
The other star should be near the meridian (such as Polaris in the northern hemisphere).
Use the DEC buttons to scroll through the list of stars and select the first one by using the
RA+ button. Gemini will display “Calculating…” briefly and then once again display the
menu of stars. Scroll through the list and select the second star.
<br />
	<br />
	After you use the RA+ button to select the second star, the mount will slew to the first
star. Once it reaches the star, “center object” will appear on the display. If the star is the
one near the meridian, center the star only using the mount’s elevation adjustment knob
(ignore azimuth). If it is in the western or eastern part of the sky, center the star using
only the mount’s azimuth adjustment knob (ignore elevation). Having done this,
completely center the star in both RA and Dec. using the Hand Controller.
<br />
	<br />
	Press the MENU button and the telescope will slew to the other star. Center it using the
procedure described above. Repeat this about 3 times, each time pressing the MENU&nbsp;
button to slew back and forth between the two stars. When you are finished, press the
MENU button once more, and when the telescope starts to slew, press the RA+ button to
escape from the loop and finish the polar alignment routine. You can expect to get to
within one degree of the pole using this method.
IMPORTANT: Because this method depends on the mount pointing to where the stars
should be if the mount were polar aligned, you cannot use this function if modeling
parameters have already been calculated. You should only use it after a Cold Start before
you do any Additional Aligns, or immediately after selecting the “Reset Alignment”
menu item.
<br />
	<br />
	Polar Axis Correction
<br />
	<br />
	This feature assists you in accurately polar aligning your mount. Because Gemini's
modeling feature calculates the mount's deviation from perfect polar alignment, it can be
used to guide you to alignment as you adjust the mount's azimuth and elevation. It is
important to note that before you can use this function, you must build an accurate
pointing model by doing several Additional Aligns.

<br />
	<br />
	After you have done several alignments on different objects, select an object from the
Object Database that is near the intersection of the celestial equator and the meridian. GoTo the object and center it in the eyepiece using the HC buttons. Now, select "Align
Telescope-><br>			Polar Axis Corr." from the menu. Gemini will move the mount to where the
object should be if the mount were accurately polar aligned. You should adjust the polar
alignment of the mount using the azimuth and elevation adjustment knobs until the object
is again centered in the eyepiece. Since the mount will approximate perfect polar
alignment, all subsequent GoTo operations should result in target objects being near the
center of the eyepiece. If not (for instance, because the mount's initial misalignment
exceeded several degrees), you may repeat the correction process. Note that after using
this function, the modeling parameters will be reset and you will need to rebuild the
model by performing several alignments on different objects. If you are within about 2
degrees of being polar aligned and have done at least 5 Additional Aligns, you can expect
this function to get you within 2 arc minutes of precise polar alignment.
<br />
	<br />
	3.4.3 Accuracy Required
<br />
	<br />
	How well must Gemini be polar aligned? The answer to this question really depends on
what you are doing. For visual observing, it does not need to be well aligned at all. You
can be as much as 6° off, and the modeling parameters will still allow accurate GoTo
performance. In addition, you can use Closed Loop tracking to keep objects centered
while observing.
<br />
	<br />
	Imaging requires more accurate polar alignment due to the possibility of image rotation.
While Gemini can GoTo and track objects when polar alignment is off, the field of view
in the telescope will slowly rotate as tracking takes place. The closer the mount is to
being polar aligned, the less field rotation will occur. Field rotation is a problem&nbsp;
especially for longer exposures. It is recommended that you use one of the polar
alignment methods above to achieve the best possible alignment before imaging.
	<br />
	<br />
	3.5 Mount Modeling
<br />
	<br />
	One of the features that distinguishes the Gemini control system from anything else
available today is its built-in sophisticated modeling that provides highly accurate
pointing and tracking capabilities. This modeling allows Gemini to compensate for
inaccurate polar alignment and a large variety of mechanical misalignments in both the
mount and the telescope.
<br />
	<br />
	3.5.1 Definition
<br />
	<br />
	Without any kind of modeling, a telescope control system must assume that a given
number of pulses to the RA motor will always move the telescope a certain constant
distance in RA with no movement in declination at all. The same applies to pulses to the
declination motor. This would only be true if the mount were exactly polar aligned, the
RA and Dec. axes of the mount were exactly orthogonal, and there was no mechanical
play of any sort in the system. Unfortunately, this is never the case in even the best
professional mounts.
<br />
	<br />
	Modeling is a way to analyze the various imperfections in your system so that the system
can compensate for them when pointing and guiding. By pointing the telescope at
various known objects (usually bright stars) and performing an “Additional Align”
function, you teach Gemini about the imperfections in your particular setup. For each
additional alignment, Gemini calculates the model parameters based on the best fit of all
the alignment points so far and then synchronizes the model to the coordinates of the
latest alignment object. Because there are several parameters in the model, it won’t
converge on nominal values until you have performed at least 4 or 5 alignments on one
side of the meridian. As mentioned earlier, you will get the best results if you pick
alignment objects with substantially different hour angles. An additional source of
inaccuracy – gear play – is calculated with the first alignment on the opposite side of the
meridian.
<br />
	<br />
	Up to 10 different models can be stored and reestablished. This can be useful if you swap
your Gemini system between multiple mounts.
<br />
	<br />
	3.5.2 System Startup Modes
<br />
	<br />
	Because Gemini stores the modeling parameters in non-volatile memory, it may be
powered off at any time without losing its pointing model. In fact, the model can continue
to be refined from observing session to observing session by adding more alignment
points. However, the modeling parameters are only valid if the telescope and mount have
not been moved between observing sessions. Whenever you turn the Gemini unit on, you
need to tell it whether anything has been moved since it was turned off. This allows
Gemini to decide how much of the model is still valid. There are 3 startup modes that tell
Gemini what has been moved:


<br />
	<br />
	• Cold Start
<br />
	• Warm Start
<br />
	• Warm Restart
<br />
	<br />
	When the Gemini is powered up for the first time or after a CMOS reset, "Cold Start" is
the only menu choice since there was no valid model in memory. Once a model has been
established, subsequent power-ups will add "Warm Start" and "Warm Restart" to the
startup menu.
<br />
	<br />
	"Cold Start" is the "start-from-scratch" startup choice because it deletes all previously
established model parameters of the current model derived from previous alignments. It
is the startup mode that must be used anytime the mount has been moved from its
previous polar-aligned position.
<br />
	<br />
	Upon selecting "Cold Start,” Gemini allows you to change the UTC Date/Time,
Longitude, and Latitude. You should enter these parameters at this point unless they are
still valid from a previous observation, or were provided by a GPS receiver that was
connected to the Gemini when it was powered on.
<br />
	<br />
	Assuming Gemini was powered on with the telescope in Startup Position, you can easily
find a first alignment star using the Align Telescope->GoTo Bright Star command which
displays a list of well-known bright stars currently above the horizon and slews to the
selected star. Alternatively, you can select a star by navigating to the "Databases" menu,
selecting a star from the Bright Star Catalog, and performing a GoTo operation. In either
case, you should then center the star in the telescope's field of view, and select the
“Align->Synchronize” menu item. Synchronizing on this object constitutes the initial
star alignment in the process of building a pointing model. Subsequent star alignments
can then be performed one at a time by slewing (via GoTo) to other Bright Stars,
centering, and executing "Additional Align."
<br />
	<br />
	“Warm Start” is used to tell Gemini that the mount itself has not been moved since it was
powered down, but the clutches were loosened and the telescope was moved by hand.
Gemini keeps all of the modeling parameters from the previous session, but resets its
assumed position to the startup position (counterweight down and OTA pointing to the
pole). For this reason, you must make sure you have moved the telescope to the Startup
Position before selecting “Warm Start.”
<br />
	<br />
	Finally, if the Gemini is subsequently powered on without the telescope or mount having
been moved in any way since the last observation, "Warm Restart" is the startup mode of
choice, and the telescope is immediately ready for use. All modeling parameters and
positional information is retained from the previous session. This startup mode is most
useful for permanent installations, multi-night star parties, and daylight observing.
	<br />
	<br />
	IMPORTANT: If you use the “Setup” menu to change Gemini's Geographic Location
or UTC Date/Time immediately after a Cold Start, the new values are not used to set the
initial pointing model or calculate Local Time until Gemini is powered off, powered back&nbsp;
on, and Cold Started again. This does not apply to geographic coordinates or UTC
Date/Time that are changed when prompted during a Cold Start.
<br />
	<br />
	3.5.3 Modeling Parameters
<br />
	Gemini models the following mount and telescope parameters:
<br />
	• Azimuth misalignment from the pole
<br />
	• Elevation misalignment from the pole
<br />
	• Axis non-perpendicularity at the pole
<br />
	• Axis non-perpendicularity at the equator
<br />
	• Gear play
<br />
	• Mirror flop
<br />
	• Index error in hour angle
<br />
	• Index error in declination
<br />
	• Counterweight flexure
<br />
	<br />
	You can examine each of these parameters immediately after an additional alignment.
The azimuth and elevation misalignment (A and E) are displayed right after the
“Additional Align” is executed. You can also use the “Show Information” menu item to
display the other parameters: NP = non-perpendicularity at the pole, NE = nonperpendicularity
at the equator, FR = gear play (in RA), FD = mirror flop (in Dec.), IH =
Hour Angle index error, ID = declination index error, and CF = counterweight flexure.
All values are given in minutes of arc. These values give you valuable information about
your alignment, your mount and your telescope.&nbsp; <br />
	<br />
4 Considerations for Imaging
<br />
	<br />
	The Gemini system has many features that make it especially suitable as an imaging
platform. These include polar alignment tools, multiple tracking rates, guiding modes, an autoguider input, and a very sophisticated set of Periodic Error Control (PEC) functions.
This chapter describes how to take full advantage of your Gemini when imaging.
	<br />
	<br />
	4.1 Accuracy of Polar Alignment
<br />
	<br />
	As mentioned previously, accurate polar alignment is extremely important when imaging.
Even though Gemini’s pointing model and closed loop tracking can compensate for
inaccurate polar alignment, photographs and CCD images can be ruined by field rotation.
Gemini’s Polar Axis Correction function helps you achieve sufficiently accurate polar
alignment quickly for all but the longest wide field images, for which only the technique
of drift alignment is likely to suffice.
<br />
	<br />
	4.2 Guiding
<br />
	<br />
	Theoretically, good polar alignment and the appropriate tracking rate (such as the
adaptive King rate) should be enough to keep the telescope pointing at an object
throughout a long exposure. In reality, however, mechanical imperfections, alignment
errors and other factors will cause the telescope to stray slightly from perfect tracking.
This can result in stars being trailed or bloated, or otherwise distorted in an image. To
overcome this, most astrophotographers guide their mounts for exposures over a minute
or two. This involves making occasional slight adjustments to the RA and Dec. so that a
star (or the object being photographed) stays in exactly the same spot in the telescope’s
field of view throughout the exposure. Guiding corrections can be made manually using
buttons on a Hand Controller, automatically using a CCD autoguider or by sending
guiding commands over the serial ports. In all cases, these corrections are fed into the
Gemini system, which actually moves the mount.
<br />
	<br />
	You can set the speed at which guiding corrections are made using the “Setup->Mount
Parameters-><br>			Moving Speeds->Guiding” menu item. You can select a guiding rate
between 0.2x sidereal and 0.8x sidereal. While the guiding occurs at a constant speed
north or south in Dec., it is added to or subtracted from the tracking speed (1x sidereal) in
RA. The RA drive always tracks the telescope to the west; it just speeds up or slows
down when it receives a guiding correction. The standard Guiding Speed is 0.5x, giving
0.5x and 1.5x sidereal speed in RA. The highest guiding speed is 0.8x, giving
approximately 0.8x tracking speed in Dec., and 0.2x and 1.8x in RA.
<br />
	<br />
	4.2.1 The Autoguider Port
<br />
	Note: The autoguider port is only active in the Photographic Mode and All-
Speeds Mode of the Gemini system. Selecting the Visual Mode disables Guiding
and therefore the Autoguider Port.
<br />
	<br />
	4.2.2 Manual Guiding
<br />
	<br />
	Manual guiding is usually done using an eyepiece with an illuminated reticle attached to
an off-axis guider or separate guidescope. You center a star (or the object being
photographed) in the reticle and use the buttons on the Deluxe Hand Controller to apply
guiding corrections to keep the star on the reticle throughout the duration of the exposure.
Rather than using the Deluxe Hand Controller, you can instead guide with a Losmandy
Standard Hand Controller plugged into the autoguider port. The LED of the Standard
Hand Controller will not normally be lit, but will light up anytime the alarm sounds.
Using a Standard Hand Controller in the autoguider port has a big advantage for manual
guiding, in that accidentally pressing opposite directional buttons simultaneously will not
result in movement at centering speed, as happens with the Hand Controller in its normal
socket, or when using the Deluxe Hand Controller. This reduces the risk of spoiling a
long exposure photograph due to an accidental key press.</td></tr>
	</table>
</body>


<?php include("bottom.php"); ?>



