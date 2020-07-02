<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>G2 Serial Port Modes</title>

<?php include("topv.php"); ?>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />



</head>

<body style="color: #FFFFFF; background-color: #000000;">

<div class="style6">
	<table align="center" style="width: 900px">
		<tr>
			<td class="h2">
			<br/>
				Gemini 2 Hand Controller Firmware Update 
			and Flash example<br/>
			</td>
		</tr>
		</table>
	
	<table align="center" style="width: 900px">
		<tr>			
			<td class="style6">
				You should see a screen like the one on the 
						below. It shows 
						that the hand controller firmware is being uploaded to the hand 
						controller micro SDcard. <br />
				</td></tr>
			<tr>
			<td class="style7">
						<img alt="" height="571" src="gemini-images/HandcontrollerImages/uploadingnewfirmware.jpg" width="425" />
			</td>
			</tr>
			<tr>
			<td class="style6">
				When this screen above is done, it usually takes about 5 minutes are so,
			then the flashing screen will appear. See below.
			</td>
			</tr>
			<tr><td class="style7">
			<img alt="" height="565" src="gemini-images/HandcontrollerImages/HC_Flashing.jpg" width="425" /></li></td></tr>
		</table>
		<table align="center" style="width: 900px">
			<tr>
			<td>
				After the Gemini hand controller has flashed it new firmware the HCFirmware 
				directory in the main unit should be empty and the hand 
				controller should have the new firmware loaded. <br /><br />
			Note that catalog updates, *.quc files can also be updated the same way.
				Just upload them the same way you would a gemhc.bin file
			</td>
		</tr>


	</table>

</body>
</html>

	<?php include("bottom.php"); ?>



