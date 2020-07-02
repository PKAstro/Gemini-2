<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Connect ASCOM first time</title>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" /> 


<?php include("topv.php"); ?>




</head>

<body style="color: #FFFFFF; background-color: #000000">

<table style="width: 900px" align="center">
	<tr>
		<td class="h2"><br />
		ASCOM 
		Virtual Handcontroller
		</td>
	</tr>
	<tr><td></td></tr>
</table>



<table style="width: 1000px" align="center">
	<tr>
		<td class="style6" width="1000px" align="left">
		The virtual hand box provides the main user 
		interface to the driver; from here you can control the motion of the 
		mount, and reach all the configuration menus. The Hand box can be 
		divided up into three main areas of functionality. Status and 
		information display area Motion control area Setup and functionality 
		Status and Information The top line displays the current motion status 
		of your mount. You will see items such as Track, Stop, Center, Slew, 
		Park etc. displayed here. The next three lines show the current Local 
		Sidereal Time, Right Ascension, and Declination of the mount. To Limit: 
		This displays how long it will be before your mount encounters the next 
		tracking safety limit set in Gemini. Typically you can use this to see 
		how long it will be before you will have to perform a meridian flip when 
		imaging. 		</td></tr>
</table>

<table style="width: 1000px" align="center">
	<tr>
	<td class="style7" width="200px" align="left">
	<img alt="" height="553" src="gemini-images/ascom/ascom-handcontroller-connect.jpg" width="196" />	
		 <br />Fig 1.</td>	
	
	<td  class="style6"  align="left" width="1-px"></td>

	<td  class="style6"  align="left">
1. 
	Please hit the Connect button.&nbsp; The ASCOM driver should try and connect 
	to the Gemini,&nbsp; If it does, then the Connect box should change to 
	Disconnect.<br />
	<br />
	2. If a boot mode such as Cold Start, Warm Start, or Warm restart has not 
	already been selected, then the ASCOM will pop up a window asking you which 
	one to start with.&nbsp; You can select Cold Start if you wish, and then Start 
	now<br />
	<br />
	<span class="style7">
	<img alt="" height="253" src="gemini-images/ascom/bootmode.jpg" width="321" style="margin-left:50px"  /><Br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fig 
	2.</span><br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	</td></tr>
</table>
<table style="width: 1000px" align="center">
	<tr>
	<td class="style6" width="1000px" align="left">
		 

		Motion Control The motion control area contains four large buttons that
		
		replicate the buttons on the physical Gemini handset. Pressing one of
		
		these buttons will cause the mount to move at the currently selected
		
		speed (set by the radio buttons below the large motion buttons), motion
		
		will continue until you release the button. Page 11 You can also use
		
		your computer keyboard to activate the large motion buttons by pressing
		
		plus one of the four direction arrow keys to activate the corresponding
		
		button. Motion will continue so long as you keep the keys pressed. Note
		
		that the virtual hand box must be the active application on your Windows
		
		desktop for this feature to work. Like the physical Gemini hand box, you
		
		can use the checkboxes to reverse the direction of the motion buttons.
		
		This helps align the buttons with the direction the sky moves in your
		
		eyepiece or camera. Finally in this area you can turn mount tracking on
		
		and off, and enable or disable PEC (if it has been programmed). Both
		
		these check boxes reflect the current value in Gemini, so if you switch
		
		PEC off via the physical hand box the change in status will also be
		
		reflected on the virtual hand box. If the Ascom Driver detects a slewing like in
		a GO TO then it will pop up a Stop button.
		 </td>
	</tr>
</table>

<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Mar 21, 2018</td>
	</tr>
</table>

</body>


<?php include("bottom.php"); ?>

