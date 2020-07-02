<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="../gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<script type="text/javascript" src="xweb-popup.js" ></script>



</head>

<body style="color: #FFFFFF; background-color: #000000">

<table align="center" style="width: 900px">
	<tr>
		<td class="style3">Warning: If you have an Equatorial Mount, DO NOT 
		SELECT ALT/AZ</td>
	</tr> 
	<tr>
		<td class="style7">
		<map id="ImgMap0" name="ImgMap0">
			<area alt="" coords="17, 1426, 82, 1457" href="index.php" shape="rect" />
		</map>
		<img alt="" height="1557" src="images/mount.jpg" width="900" usemap="#ImgMap0" /><br /></td>
	</tr> 
	<tr>
		<td class="style3">Warning: If you have an Equatorial Mount, DO NOT 
		SELECT ALT/AZ</td>
	</tr> 
	<tr>
		<td class="style6">This menu lets you set up your mount type, and all 
		the associated gearing parameters.<br />
		</td>
	</tr> 
	<tr>
		<td class="style6">
		<ul><li>Mount Design - You can select Equatorial type mount or ALT/AZ 
			mount.&nbsp; Please note that a Cold start needs to be done after 
			changing this mode.</li>
			<li>Mount Type -&nbsp;
		You can select Custom, GM-8, GM-11, HGM-200, MI-250, Titan, Titan 50, G11T and G811.<br />
		Note: Titan50 is normally default.</li>
			<li>Gearing - Please see <a href="default_gearing_setting.php" target="xPopUp" title="Default Gearing" onclick="xPopUp(this.href, 'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',800,400,'pixel','center','center'); return false;">Default Gearing setting</a></li>
			<li>Speeds -&nbsp; These setting let you set the speeds ofr each of 
			the slewing modes, GoTo modes, the acceleration setting, and the 
			centering rate.</li>
			<li>Safety Limits - Please see <a href="../hc/En-limits.php">
			Safety Limits Page</a></li>
			<li>Axis Encoders: this is the total resolution of the encoders in 
			motor ticks.</li>
			<li>Default Startup mode:<ul>
				<li>Ask if Possible - This will ask between Quick Start, Cold 
				Start, Warm Start, and Warm Restart.&nbsp; Please see the
				<a href="../definitions.php" target="_blank">Definitions page</a> 
				for an explanation of these. </li>
				<li>Cold Start - Startup in Cold Start mode.</li>
				<li>Warm Start - Startup in Warm Start mode.</li>
				<li>Warm Restart - Startup in Warm Restart mode.</li>
				<li>After selecting one of the above modes you must hit "Select 
				Mode" button for that mode to be saved as the default startup 
				mode. </li>
			</ul>
			</li>
		</ul>
		<br />
		</td>
	</tr>
			<tr><td></td></tr>
</table>
<table align="center" width="900px" class="tableborder1">
	<tr><td class="style6-border-white"><em>If your Gemini-2 is connected Via Ethernet, 
		turned ON, and 
		Responds to <a href="http://gemini/mountpar.cgi" target="_blank">http://gemini</a> then this link 
		will open this page in the Gemini-2 web interface, after prompting for a 
		log-in.</em></td></tr>
	
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on March 28, 2017
		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



