<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Mount Menu</title>

<?php include("topv.php"); ?>




<link href="../gemini-2.css" rel="stylesheet" type="text/css" />

<style type="text/css">
.auto-style1 {
	border-color: #FFFFFF;
	border-width: 0;
}
.auto-style2 {
	border: 2px solid #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: medium;
	color: #FFFFFF;
	text-align: left;
	margin: 10px;
}
</style>

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >

<table align="center" style="width: 900px">
	<tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click on green button to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px" class="auto-style1">
	<tr>
		<td class="auto-style2" width="450px">
		<map id="ImgMap0" name="ImgMap0">
			<area coords="311, 507, 443, 585" href="E004.php#start" shape="rect" />
		</map>
		<img height="588"src="En-Images/EN-balance.jpg" width="450"usemap="#ImgMap0" /><br />
			<span class="smalltext">
				This menu will not function if the Servo processors, (Separate 
				from the ARM processor) has not been programmed with the 
				firmware for them that was released around Sept 2012.&nbsp; This 
				firmware requires a separate hardware PIC programmer and special 
				cables to install this 
				firmware and is not part of any firmware download for either the 
				main unit or hand controller. It is only available at 
				special request. All newer Gemini-2 units are shipped with 
				this firmware installed. If your balance menu functions, 
				then you have it. Losmandy has not 
		made public any plans to provide this upgrade as of yet. This is 
		because this upgrade is still beta, hopefully with more updates coming 
		in the future. It does provide for increased torque with all the motors, 
		and allows for the feedback necessary for this balance menu to function. 
		The other functions of the Gemini work fine with the stock Servo 
		firmware.&nbsp; If you are interested here are instruction on
		<a href="../servo_programmer.php" target="_blank">updating the firmware</a>.</span></td>
		
		<td width="6px"></td>

		<td class="auto-style2" style="width: 454px">
		This menu shows the Servo Duty cycles for both the RA and DEC motors.
		<br /><br />Y:&nbsp; PWM.&nbsp; 
		is DEC. Any torque on the Dec motor will 
		result in the lines lengthening. These lines indicate more power is 
		being sent to the motor, to try and correct the positional error. <a href="http://en.wikipedia.org/wiki/Pulse-width_modulation" target="_blank">PWM</a> 
		stands for Pulse width modulation. 0% would be no pulses and 100% would 
		be full power&nbsp;&nbsp; The higher the number the wider the power 
		pulse feed to the motor.&nbsp; The offset is how much the motor shaft is 
		from the desired position.
		<br /><br />X: PWM is the RA axis. Any torque on the RA motor will 
		result in the lines lengthening. These lines indicate more power is 
		being sent to the motor, to try and correct the positional error. PWM 
		stands for Pulse width modulation. 0% would be no pulses and 100% would 
		be full power&nbsp;&nbsp; The higher the number the wider the power 
		pulse feed to the motor.&nbsp; The offset is how much the motor shaft is 
		from the desired position. <br />
		<br />
		<br />
		The Back button takes you all the way back to<br />
		the Main Menu.<br />
		<br />
		The rear tactical buttons are active so that you can move the mount 
		while in this screen.&nbsp; They were made active with the Sept 20, 2013 
		hand controller firmware update.<br />
		<br />
		The firmware to make this option possible within the Gemini-2 was first 
		provided to the beta group around Sept of 2012.&nbsp; Sometime later, 
		Losmandy started including this firmware in shipped models, but I have 
		no idea of exactly when this started. Please see text to the left.<br />
		<br />There is also text under the below pictures.
		</td>
	</tr>
	<tr>
	<td class="auto-style2"> 
		<map id="ImgMap1" name="ImgMap1">
			<area alt="" coords="307, 506, 443, 579" href="E004.php#start" shape="rect" />
		</map>
		<img alt="Dec out of balance" height="588" src="En-Images/EN-DEC-balance.jpg" width="450" usemap="#ImgMap1" /><br />
		DEC out of balance 
		in one direction. Lines will reverse for out of balance in the other 
		direction.<br />
		Now I am going to reference the motor shaft.<br />
		If the Yellow line is getting longer towards the top, the motor is CW of 
		it's desired position.&nbsp; If the yellow is going down, then the motor 
		is CCW of it's desired position.</td>
		
		<td width="6px"></td>
		<td class="auto-style2" style="width: 454px"> 
		<map id="ImgMap2" name="ImgMap2">
			<area alt="" coords="308, 506, 445, 585" href="E004.php#start" shape="rect" />
		</map>
		<img alt="RA out of Balance" height="590" src="En-Images/EN-RA-balance.jpg" width="450" usemap="#ImgMap2" /><br />
		RA out of balance in one direction. Lines will reverse for out of balance in the other 
		direction.<br />
		The above with the yellow to the Right indicated the RA is leading, or 
		probably heavy on the west side. If the Yellow is on the Left the the RA 
		would be lagging, or heavy to the East.
		</td>
	</tr>
</table>
<table  align="center" style="width:920px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Sept 8, 2016
		</td>
	</tr>
</table>

</body>

<?php include("bottom.php"); ?>


