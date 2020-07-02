<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>G2 Experimental Firmware</title>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />



<?php include("topv.php"); ?>




<style type="text/css">
a {
	color: #FFFF00;
}
a:visited {
	color: #FF00FF;
}
</style>




</head>

<body style="color: #FFFFFF; background-color: #000000;">
	
	
	<table align="center" style="width: 900px">
		<tr>
			<td class="h2">
			<br/>
				Information about the new Level 5 Version 
			1 - 23 June Experimental Firmware<br />
			
			</td>
		</tr>

	</table>
	<br />


	<table align="center" style="width: 900px">
		<tr>
			<td class="style6">
			<br />
			Why do we call this Experimental:&nbsp; This is the first firmware 
			that is using a brand new load of what is called middle-ware.&nbsp; 
			This is the code that the compiler generates for the code René 
			writes.&nbsp; This middleware has many new features.&nbsp;&nbsp; One 
			of them is that the USB-A port might be able to in the near future 
			provide a way of updating the firmware with a USB memory stick.&nbsp; 
			Now that is a ways off, but still a possibility.&nbsp; The previous 
			version of the middleware would not let this USB port be used.<br />
			Here is some of the changes in this version, that René has 
			implemented. <br />
			<ul><li>
			The HC buttons background will be programmable.
			
			</li>
				<li>
				The HC has a new Balance Menu.&nbsp; Menu--Mount--&gt;Balance*</li>
				<li>
				The HC now starts up in the Centering speed.</li>


				<li>
				The Model building menus have been reworked from East to West. 
				Also the menus has been change some. Once you GOTO a star and 
				center that star, instead of pressing the GOTO button you now 
				press a button in the same location that says MODEL, which is a 
				little less confusing. </li>
				<li>
				Comet Tracking - On hand controller 
				Menu--&gt;Track--&gt;Comet/User Defined</li>
				<li>
				There is now a balance menu added to the mount page.</li></ul>
			</td>
		</tr>
	</table>


	<table align="center" style="width: 900px">
		<tr class="style6">
			<td>
			
	



				<p>This list of catalogs that should be in the hand controller 
				and main unit after the update is:
				<ol><li>&nbsp;Arp_EN</li>
					<li>&nbsp;BSL</li>
					<li>&nbsp;Caldwell_EN</li>
					<li>Cederblad_EN</li>
					<li>&nbsp;Combined Constellation Stars</li>
					<li>G2V_EN</li>
					<li>Herschel400_EN</li>
					<li>IC</li>
					<li>&nbsp;LBN</li>
					<li>&nbsp;LDN</li>
					<li>&nbsp;Messier</li>
					<li>&nbsp;IC *</li>
					<li>&nbsp;NCG *</li>
					<li>&nbsp;NGC_Constellation *</li>
					<li>&nbsp;PN</li>
					<li>&nbsp;SAO</li>
					<li>&nbsp;SH2</li>
					<li>Sharpless_EN</li>
					<li>&nbsp;Southern Constellation Stars</li>
					<li>Struve_EN</li>
					<li>WDS</li></ol>
				Catalogs marked with * are provided courtesy of Didier Garriou. 
				He completely redid the IC.guc that Scott Losmandy licensed from 
				Wolfgang Steinicke.</p>
					</td>
				</tr>
				<tr><td class="style7"> 
				This is a sample of what the proposed Balance menus will look like.<br />
				</td>
			</tr>
			</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style7" width="450px">
		<img height="588"src="hc-English/En-Images/proposed_menus/EN-balance.jpg" width="450"usemap="#ImgMap0" /><br /></td>		<td width="10px"></td>
		<td class="style6" style="width: 454px">
		This menu shows the Servo Duty cycles for both the RA and DEC motors.
		<br /><br />The DEC is the Y: PWM. Any torque on the Dec motor will 
		result in the lines lengthening.
		<br /><br />The RA is the X: PWM. Any torque on the RA motor will 
		result in the lines lengthening. <br />
		<br />
		The Back button takes you all the way back to<br />
		the Main Menu.<br />
		<br />
		NOTE: This menu will not function if the Servo control processors are 
		not undated with new firmware.&nbsp; &nbsp; Losmandy has not 
		made public any plans to provide this upgrade as of yet.&nbsp; This is 
		because this upgrade is still in the beta stage, and completely 
		dependent on Aveox providing a final version.&nbsp; Hopefully they will, 
		but have been very slow, which is a major frustration for all concerned.&nbsp; 
		The version we do have provides for increased torque with all the 
		different type motors, 
		and allows for the feedback necessary for this balance menu to function. 
		NOTE: All the other functions of the Gemini work fine with the stock Servo 
		firmware. But if you want this upgrade now, you will have to do it 
		yourself, which would involve you purchasing a PIC programmer, and 
		making a cable. You also risk the possibility of making your Gemini-2 
		non-functional if you do it wrong.<br /></td>
	</tr>
		
	</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
				<img alt="Dec out of balance" height="588" src="hc-English/En-Images/proposed_menus/EN-DEC-balance.jpg" width="450" usemap="#ImgMap1" /><br />
		DEC out of balance 
		in one direction. Lines will reverse for out of balance in the other 
		direction.</td><td> </td>
		<td class="style7" style="width: 454px"> 

		<img alt="RA out of Balance" height="590" src="hc-English/En-Images/proposed_menus//EN-RA-balance.jpg" width="450" usemap="#ImgMap2" /><br />
		RA out of balance in one direction. Lines will reverse for out of 
		balance in the other direction<br />
		</td></tr>
</table>


		
			</body>
</html>



	<?php include("bottom.php"); ?>





