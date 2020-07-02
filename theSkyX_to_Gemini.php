<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Connecting TheSkyX to ASCOM Gemini.net Driver</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>




<style type="text/css">
.auto-style1 {
	border-style: solid;
	border-width: 2px;
}
</style>



</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Opening the Gemini.net driver form TheSkyX</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td>Please note that TheSkyX as of March 2013 will support the ASCOM interface, when the Dec 28 Update and daily builds of March 2013 
		and later are installed.&nbsp; You do not need to install any plugins for TheSkyX and the Gemini.net ASCOM driver to communicate with each other 
		such as TeleAPI, which was needed in the past.&nbsp; 
		Please make sure you have the latest version, latest update and the 
		<span class="style2"><strong>latest daily 
		downloads</strong> </span>available on the Software Bisque site. 
		<span class="style2"><strong>Please note that you 
		need to download the latest Update (Dec 2012) and the Daily build of theSkyX. The Dec 2012 update 
		does not provide for the new ASCOM driver interface. It has to have the 
		latest the daily download, also installed.</strong></span><br /><br />You will have to also install 
		the
		<a href="http://download.ascom-standards.org/ASCOMPlatform63.exe" target="_blank">
		ASCOM 6.3</a> interface from the ASCOM web site, and the ASCOM 
		Gemini.net driver to use the ASCOM driver with theSkyX if you what to 
		use the ASCOM Gemini.net driver in addition to the above updates to 
		theSkyX.&nbsp; Now software like MaxomDL and PHD need the ASCOM driver 
		if you want to do Pulse Guiding instead of guiding with the ST4 port.
		<br />
		<br />
		<br />
		</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		<ol><li>Before opening up TheSkyX, make sure that the Gemini.net driver is not running. When you open up TheSkyX it should look 
			similar to below.</li>
		</ol>
		</td></tr>
	
		<tr><td class="style7">
		<a href="gemini-images/TheSkyX/Open_TheSkyX.jpg" target="_blank">
		<img alt="Open Up TheSkyx" class="auto-style1" height="568" src="gemini-images/TheSkyX/thumbnails/Open_TheSkyX_small.jpg" width="900" /></a></td>
	</tr>
	
	<tr>
		<td class="style6">
		<ol start="2"><li>In the upper menu bar click on the Telescope Selection.  You should see the below pull down show up.&nbsp; 
			You can click on the image to see a larger image if necessary.</li></ol></td>
	</tr>

		<tr><td class="style7">
			<img alt="Open Telescope pull down" height="264" src="gemini-images/TheSkyX/Open_Telescope_pulldown.jpg" width="605" /></td>
	</tr>
	<tr>
		<td class="style6">
		<ol start="3"><li>Click Telescope Setup.  The below menu should open.&nbsp; Now several users have said that theSkyX 
			will not open the Gemini.net driver for them, so they have to have 
			the Gemini.net driver up and running. Also both programs have to be 
			either running in non-administrator&nbsp; mode or administrator 
			mode.&nbsp; We recomment that you do not run in adminstrator mode. <br />
			(Do this only in if you have to: If you right click on both program's icons and select 
			run as administrator, then hopefully that will fix them not seeing 
			each other.&nbsp; But if you do this, then any other program you 
			need to use the ASCOM Gemini-net driver with will have to be opened 
			the same way.&nbsp; So if you are not seeing the ASCOM selection, 
			the close theSkyX, and open both theSkyX and Gemini.net in Admin 
			mode and start over at step 2, but leave the Gemini.net running )</li>
		</ol></td>
	</tr>
	<tr>
		<td class="style7">
		<img src="gemini-images/TheSkyX/imgA.jpg" /><br />
		</td>
	</tr>
	<tr>
		<td class="style6">
				<ol start="4"><li>Click Mount Setup.  The below popup menu should open.
		</li></ol></td>
	</tr>
	<tr>
		<td class="style7">
		<img src="gemini-images/TheSkyX/imgB.jpg" /><br />
		</td>
	</tr>
	<tr>
		<td class="style6">
		<ol start="5"><li>Click the Choose selection.  The below popup menu should open.
		</li></ol>
		</td>
	</tr>
	<tr>
		<td class="style6">
		<ol start="6"><li>Notice that the ASCOM selection might not be showing the 
			ASCOM Mount as a sub 
			item as in the above picture.  If it is not showing any selections, then Click on the ASCOM arrow to the left of ASCOM.  The 
			sub items should open.  If ASCOM Mount is there, then select it and 
			click OK.
		</li></ol>
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img src="gemini-images/TheSkyX/imgD.jpg" /><br />
		<br />
		</td>
	</tr>
	<tr>
		<td class="style6">
				<ol start="7"><li>Click Mount Setup.  The below popup menu should open.
					Click on Settings...</li></ol></td>
	</tr>
	<tr>
		<td class="style7">
		<img src="gemini-images/TheSkyX/img7.jpg" />&nbsp;</td>
	</tr>
	<tr>
		<td class="style7">
		&nbsp;</td>
	</tr>
		<td class="style6">
				<ol start="9"><li>You should 
					then see the ASCOM Telescope Chooser come up.</li></ol>
		</td>
	<tr>
		<td class="style7">
		<img alt="ASCOM Chooser" height="254" src="gemini-images/TheSkyX/ASCOM_Chooser.jpg" width="437" /></td>
	</tr>
	<tr>
		<td class="style6">
				<ol start="10"><li>Click the Down arrow to the left of 
					Properties.&nbsp; A selection similar to the one below should appear.</li></ol>
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="" height="259" src="gemini-images/TheSkyX/ASCOM_Chosser_w_Gemini_dot_net.jpg" width="449" /><br />
		</td>
	</tr>
		<td class="style6">
				<ol start="11"><li>Select the Gemini Telescope.NET selection and then click OK 
					.<br />
				You now have several ways to tell TheSkyX to connect to the Gemini-2 mount.
				</li></ol>
		</td>
	<tr>
		<td class="style7">
		<img src="gemini-images/TheSkyX/img9.jpg" /></td>
	</tr>
	
	<tr>
		<td class="style6">
				<ol start="12"><li>You can select the mount Setup button, then click Connect.&nbsp;
				</li></ol>
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="Telescope Menu Pulldown" height="330" src="gemini-images/TheSkyX/Telescope_menu_pulldown.jpg" width="657" /></td>
	</tr>
	<tr>
		<td class="style6">
				<ol start="13"><li>Or you can use the Telescope menu pulldown and selec connect.&nbsp; 
					Now if this is the first time doing this, you might get an 
					error message "command Failed. Error 206.&nbsp; Close.&nbsp; 
					This happens alot.<br /> Just close TheSkyX, and make sure the ASCOM Gemini.net driver is also closed.</li>
				</ol>
		</td>
	</tr>
	<tr>
		<td class="style6">
				<ol start="14"><li>Just Close theSkyX and then reopen it.  Select either one of the above connect 
					methods.<br />
				If every thing goes OK you should see an Gemini Logo 
					in the bottom taskbar.&nbsp; See below.<br />
					This will happen if the Gemini-2 is waiting on the selection of a startup mode. If a starup
					mode has already been selected, then skip to step 17.</li>
				</ol>
				<p>&nbsp;</p>
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="" height="183" src="gemini-images/TheSkyX/Gemini_logo.jpg" width="588" /></td>
	</tr>
	<tr>
		<td class="style6">
				<ol start="15"><li>Double click on the Gemini Logo. If the Gemini is waiting for a startup mode selection, the following menu should appear.
				</li></ol>
		</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="Gemini Startup selection" height="249" src="gemini-images/TheSkyX/Gemini_startup_selection.jpg" width="317" /></td>
	</tr>
		<td class="style6">
				<ol start="16"><li>Chose your desired startup selection, and then hit Start Now.  The Gemini-2 icon in the task bar will 
					disappear.
				</li></ol>
		</td>
		<tr><td class="style6"><ol start="17"><li>You should see a popup saying the the Gemini.net is now connected. 
		You should also then see a target on the screen of theSKYX. You are on you way.</li></ol></td></tr>
		
		<tr><td class="style6"><ol start="18"><li>A side note about opening theSkyX (or for that matter any program) when using the gemini.net driver that has to communicate
		with the Gemini.net driver. You can start programs in
		normal mode or administrator mode.  You always must start all programs that is going to use the ASCOM Gemini.net driver in the same mode.  
			I.E If you start Gemini.net in administrator mode, then you will 
			have to run theSkyX in administrator mode.&nbsp; If you start 
			Gemini.net in normal mode, then you will have to run theSkyX in 
			normal mode.&nbsp; If you do not, they will not
		be able to communicate with each other.<br /><br /></li>
			</ol>
		</td>
	</tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Jan 3, 2017
		</td>
	</tr>
</table>


</body>


<?php include("bottom.php"); ?>



