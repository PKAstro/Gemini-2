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
		<td class="h3">How Gemini-2 Calculates UTC time and date</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		What does the Gemini-2 use the local time/date and site offset for?  <br />
		Well the answer is
to only calculate the UTC time and date.  <br />
		The Gemini-2, only uses UTC time/date plus current Latitude and 
		Longitude to calculate
sky positions.<br />
		If a model is built, then this model is also used to refine the 
		positions in the sky, that the UTC time/date, latitude and longitude 
		have calculated.<br />
		<br />
		Now for a broad Statement:
<br />
		“As long as the time entered into the local time box, and the site offset entered into the site offset box, results in the Gemini-2, calculating the correct UTC 
		time and date, it does not matter where that time and time zone offset is positioned from.”
		<br />
		<br />
		Example 1:  If you set a time/date from Los Angles and the proper time zone offset for Los Angles 
		(-8 for standard&nbsp; time, and -7 for daylight saving time), and the Gemini-2 is calculating the correct UTC time/date, you do not need to change the Time/date and site offset even if you take your Gemini-2 to a remote location, lets say in Arizona or Texas for example.  You only have to enter a new Latitude and Longitude for where the Gemini-2 is currently at.  Actually you can take the Gemini-2 anyplace in the world with the Los Angles time and time offset, and it will still work.  Just change the Latitude and Longitude to it’s current location.  Only exception is the north or south pole.  The Gemini-2 cannot calculate the sky position from the north or south pole.<br />
		<br />

Example 2:  Now let’s say that instead of entering the local time and date, you always enter the UTC time and date in the local time boxes, and enter a 0 (zero) in the Site offset.  Well you can take the Gemini-2 anywhere in the world (except the north or south pole) and only have to change the Latitude and Longitude to where the Gemini-2 is at, for it to calculate the correct sky positions.

		<br />
		<br />
		As you can see from the above examples, the Gemini-2 only uses UTC Time/Date and Longitude and Latitude to do all of its calculations for its current position on the earth.  From a proper start up position,
normally “Counter Weight Down” (CWD) and the Dec pointing towards the north pole in the northern hemisphere, and the south pole in the southern hemisphere, the Gemini-2 should be able to calculate the desired points in the sky.&nbsp; 
		Building a model can help refine these calculations, but proper UTC 
		time/date, and longitude/latitude is always the starting point for these 
		calculations.<br />
		<br />
		Now what happens if you use a GPS receiver: All GPS receivers return UTC 
		date and time, plus the local Latitude and Longitude. That is all the 
		information that the Gemini-2 needs from the GPS to do its calculations. 
		Now the Gemini-2 will try and show you current local time, based on the 
		time zone offset you have set. If the time zone offset is set wrong, 
		then the local time the Gemini-2 shows you will be incorrect. It really 
		does not make a difference to the Gemini-2, because it is going to use 
		the correct UTC Time/date it got from the GPS receiver. My suggestion is 
		to set the time zone offset to zero, then the Gemini-2 will show you the 
		UTC time and date on the hand controller, when using a GPS receiver.</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



