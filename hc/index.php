<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text.phpl; charset=utf-8" http-equiv="Content-Type" />
<title>Initial Startup</title>


<?php include("topv.php"); ?>

<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >

<table align="center" style="width: 900px">
	<tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click 
		on green buttons to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">	<tr>
		<td class="style6" width="450px">
		<map id="ImgMap0" name="ImgMap0">
				<area coords="28, 62, 418, 143" href="index%20-%20QSpushed.php" shape="rect" target="_self" />
				<area coords="23, 193, 420, 276" href="index%20-%20Coldpushed.php" shape="rect" />
				<area coords="13, 323, 421, 410" href="index%20-%20WarmStpushed%20.php" shape="rect" />
				<area alt="" coords="23, 456, 421, 543" href="index%20-%20WarmRestPushed.php" shape="rect" />
			</map>
			<span class="style6">The green buttons are links to more pages. If your cursor changes into a pointer when over one, then that button is an active link. 
		You can click on it to go to it's page. Please note that most of the 
		buttons act the same as in the actual hand controller.&nbsp; You can go 
		through them as you would on the hand controller.<br /><br /></span>
		
			<img alt="" height="611"src="En-Images/E001.jpg" width="450"usemap="#ImgMap0"  /><br />
			If this is your first time operating the mount select the Quick Start 
		 option.&nbsp; All buttons do take you to the appropriate menu.&nbsp; There is 
		 also a menu that can select which default mode the Gemini-2 starts up 
		 in.<br />
		 You will see this menu if you have "Ask if possible" selected as the 
		 default start up mode. That menu is under "Mount" then "Startup" in a 
		 later menu.
		</td>

		<td style="width: 10px"></td>
		<td class="style6">
		You have 4 choices for startup. 
	<br />
		<br />
		<strong><em>"Quick Start"</em></strong> - This selection will take you to 
		menu's to select your "Mount Type", Enter your "Location", then "Time, 
		Time Zone and Date" Then you will go to the "Main Screen" This also does 
		a "Cold Start".<br />
		<br />
		<strong><em>"Cold Start"</em></strong> - A cold start wipes out all stored 
		modeling. You need to have your mount positioned at want is called CWD.&nbsp; 
		This is with the counter weights down, and the Declination pointed 
		towards Polaris in the Northern Hemisphere, and the South Celestial Pole in the Southern Hemisphere. 
		The processor in the Gemini-2 uses this approximant position to start 
		it's calculations from.&nbsp; It expects you&nbsp;to do an alignment, or 
		synchronize on a bright star.&nbsp; When you align or synchronize on the 
		bright start, then the processor refines the known position in the sky and also 
		repositions the limits correctly.&nbsp; It also updates the All modeling calculations will 
		start from this point in space.<br />
		<br />
		<em><strong>"Warm Start" </strong></em>- This is basically the same as a 
		cold start, but does not wipe out any models built. It also remembers 
		all your setting. You still must start with the mount pointed to CWD 
		position as in a cold start. If you have models built, but have moved 
		your Right Ascension axis or Declination axis, but not the location of 
		the mount itself, then you can use this startup mode. Warm Start uses 
		the CWD position as an approximant starting position, but expects you to do either an 
		alignment, or synchronize on a bright star.&nbsp; When you align or 
		synchronize on the bright start, then the processors re-centers the 
		model, and positions the limits correctly. <br />
		<br />	<strong><em>"Warm Restart"</em></strong> - This mode also remembers your 
		modeling and all setting. You can only use this mode if, and only if you 
		have not moved both the Right Ascension axis or Declination axis and 
		also have not moved the mount in position.&nbsp; All calculations will 
		start from this point.
		&nbsp; 
		</td>
	</tr>
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
		Page last updated on May 30, 2016
		</td>
	</tr>
</table>

</body>

<?php include("bottom.php"); ?>


