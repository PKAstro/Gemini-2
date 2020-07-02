<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<title>Gemini ASCOM Park Menu</title>


<?php include("topv.php"); ?>


<link href="gemini-2.css" rel="stylesheet" type="text/css" />


</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Config ASCOM Gemini.net Park menu</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		</td> 
	</tr>
	<tr>
		<td class="style6">
		To configure the park commands, right mouse click on the PARK button.  You should see a menu similar Fig 1 below.<br /><br />
	</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="" height="546" src="gemini-images/ascom/select_park_Menu.jpg" width="281"><br />Fig 1.<br />
			
		</td>
	</tr>
	<tr>
		<td class="style6">
		The menu options are:
		<ol>
		<li>
		Park&nbsp; 
		- when you hit this this ASCOM driver will ask you if you want to park 
		at the current mode selected in the Park Behavior menu. See Park 
		Behavior menu.&nbsp; See 
		Fig 2. below.</li>
			<li>
			Park at Start-up Position (CDW) - As stated the mount will slew to 
			CDW and the park.</li>
			<li>
			Park at Home Position - The mount will slew to the Defined Home 
			position and park.</li>
			<li>
			Part at Current Mount Position - The mount will park where it is.</li>
			<li>
			Unpark Gemini - unparks the Gemini and starts tracking.</li>
			<li>
			Configure Park Position...&nbsp; 
			- opens up the Park Behavior Setting menu. See Fig 2.</li>
		</ol>
		</td> 
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		<br>To get to the Park Behavior setting menu click on the Configure Park 
		Position.
	</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="" height="286" src="gemini-images/ascom/config_park_Alt-AZ_coordinates.JPG" width="420"><br />Fig 2.<br />
		</td>
	</tr>
	<tr>
		<td class="style6">
		The menu 
		for Park Behavior options are:
		<ol>
		<li>
		No Slew before Parking&nbsp; 
		- the mount will park where it is at.</li>
			<li>
			Slew to Home before Parking - When Park is selected, the mount will 
			slew to Home then Park.</li>
			<li>
			Slew tp CDW before Parking - The mount will slew to CDW then
			Park.</li>
			<li>
			Slew to Alt/AZ coordinates before parking.</li>
			
		</ol>
			Below that is two enter boxes.&nbsp; 1 for Altitude an another for Azimuth.&nbsp; 
		Enter&nbsp; the desired coordinates into these boxes if you want to have 
		the mount slew to them and Park.&nbsp; If you position the mount to 
		where you want this park command to park at, the hit the "Get Current 
		Alt/AZ Coordinates" box, the Altitude and Azimuth box will be populated 
		with where the mount is pointing at.<br><br>The next check box "Prevent 
		accidental unparking by software, if checked will prevent any programs 
		such as TheSky from unparking the mount.<br /><br />
	</td>

</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
 <table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on June 1, 2018
		</td>
	</tr>
</table>



</body>




<?php include("bottom.php"); ?>



