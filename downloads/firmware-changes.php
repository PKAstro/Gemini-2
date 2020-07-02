<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Firmware changes for Gemini 2</title>

<link href="../gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>

</head>

<body style="color: #FFFFFF; background-color: #000000">
<table align="center" style="width: 900px">
	<tr>
		<td class="h2">
			<br/>
				Gemini 2 Firmware 
			Changes since Dec 18, 2012</td>
	</tr>
</table>



<hr class="style2" style="width: 900px" />


	<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6"><br />
			Some of the new features since the Dec 18, 2012 firmware release:<br />
			<em>There is no guarantee that this list is complete.</em> <br />
			
			
			<ul>
				<li>22 Jun 2013<ul>
					<li>The HC has a new 
					<a href="../hc/En-balance.php" target="_blank">Balance Menu.</a>&nbsp; See Menu--Mount--&gt;Balance 
					<span class="x-smalltext">(See note 1 - bottom of page)</span></li>
					<li>The HC now starts up in the Centering speed.</li>
					<li>The <strong>default mount type is now G11</strong></li>
					<li>The Model building menus have been reworked.</li>
					<li>The Dec calibration and Dec guiding has been reworked.</li>
				</ul>
				</li>
				<li>Aug 13, 2012<ul>
					<li>New parking levels 0,1, 2.<br />While the mount resumed tracking in the former (now level 0) parking 
			mode at every button touch, there are two additional parking levels.<br />Level 1 allows that GOTO commands are executed and resume tracking.<br />Level 2 insist on an Unpark. This function is available at the HC, 
			the GoTo button changes to Unpark as long as the mount is parked. It 
			is also available at the Park screen, and in the ASCOM Gemini.net 
			driver (1.0.51.0 and later).</li>
					<li>Serial status command &lt;97 was extended (it returns 8 instead of 6 
			characters now, there's no change in the ENQ macro).</li>
					<li>Serial command 92 was added for managing the parking level. There's 
			no selection for parking levels on the HC yet, it must be done using 
			the serial command over a communication path, ASCOM or the Functions 
			web page.</li>
					<li>Ruggedized TCP socket support.&nbsp;<br />The transparent socket access, using the serial commands, over the 
			default TCP port 4030 has been extended in several ways. First, Keil 
			reacted to the error reports René sent while trying to connect to 
			Southern Stars' Sky Safari. In fact, SkySafari is programmed in a 
			really cruel way that René now uses to shock his students: For each command 
			(like :GR# or :GD#) a TCP socket is opened, then these few bytes are 
			put into the output buffer and the socket is closed. Keil was not 
			prepared for this behavior (although it complies to RF793), but now 
			they are.<br />It's evident (and you can watch the socket port numbers climb up 
			quickly on the Network Statistics web page) that opening and closing 
			several sockets a second doesn't improve SkySafaries performance, 
			but this is the problem of Southern Stars. The iPhone 4 Rene tested 
			with reacts pretty lame.</li>
					<li>There are good news about using 
					<a href="http://www.stellarium.org/" target="_blank">Stellarium</a>. This is a really 
			nice free planetarium program that works on Linux, Mac and Windows. 
			For Windows, there is a 
					<a href="http://www.welshdragoncomputing.ca/index.php?option=com_content&amp;view=category&amp;layout=blog&amp;id=31&amp;Itemid=39" target="_blank">StellariumScope</a> software available that 
			connects over ASCOM. In René's tests it worked flawlessly over ASCOM and 
			Ethernet. René started to work on a Linux driver, once available it 
			should be possible to port it to MacOS.</li>
					<li>Since the transparent sockets are not password protected, René has added 
			some features to switch them off (by setting the TCP port to zero) 
			and to specify a peer IP address to reject all other hosts. In the 
			future this will be possibly to specify a range of IP 
			addresses (similar to a firewall rule).</li>
					<li>Protection for UDP:
			The same security measures (switching off by setting the port to 
			zero and selecting a peer IP) apply here. <br />The settings (both UDP and TCP) can be done over the Network web 
			page. </li>
					<li>Sebastian Mrozek contributed professionally designed buttons for the 
			HC. They replace the built-in buttons. <span class="smalltext">(Aug 22, 2013)</span></li>
				</ul>
				</li>
				<li>Aug 22, 2013<ul>
					<li>Adaptive tracking on the HC.
			If you GOTO Sun, tracking is changed to Solar, for Moon to Lunar, 
			all other objects to Sidereal.&nbsp; <span class="smalltext">(Aug 22, 2013)</span></li>
					<li>Limited Comet Tracking is implemented.<br />Comet Tracking - On hand controller 
				Menu--&gt;Track--&gt;Comet/User Defined</li>
					<li>The tactual buttons on the back of the hand controller is now 
				active in the Balance menu and also the RA tactual buttons are 
				now active on the Hand controller Limits menu.<span class="smalltext">
					</span></li>
					<li>There have been many internal improvements.
				</li>
					<li>Micro-SDcards up to 32Gbytes now work in both the hand 
				controller and main unit. Please make sure you use a premium 
				brand, such as Panasonic, SanDisk, Toshiba or Kingston if you 
				do.&nbsp; <span class="smalltext">30 Sept 2013</span></li>
				</ul>
				</li>
				<li>30 Sept, 2013<ul>
					<li>Corrections to HC Bookmark screen and HC cosmetics </li>
					<li>The delete model buttons now only delete the selected model, 
				either east or west. This is implemented in both the hand 
				controller and the web interface.</li>
				</ul>
				</li>
				<li>Oct 25, 2013<ul>
					<li>The buttons on the
					<a href="../ClassicHandController.php" target="_blank">classic hand 
				controller</a> have been made to react the same as they did with 
				the Gemini-1 system.</li>
				</ul>
				</li>
				<li>20 Feb, 2014<ul>
					<li>The Modeling Functions has been updated to fix a bug in the hand 
				controller.&nbsp; <span class="smalltext">(20 Feb 2014)</span></li>
				</ul>
				</li>
				<li>23 Feb, 2014<ul>
					<li>Fix the Start tracking in the web interface for all three stop 
				modes </li>
					<li>A new script that sets all three passwords from the given input. 
				The telnet password can be changed by using telnet, no separate change is possible for ftp yet.<br />
					</li>
					<li>A German page updated to show motor cgi page published.</li>
				</ul>
				</li>
				<li>1 May, 2014</li>
				<ul>
					<li>Gemini Firmware Updater is now also stored on the micro-SDcard, 
				and can be installed from the Gemini-2 onto you computer 
				(Windows only for this version).&nbsp; It is selected from Tab 
				GFU, of the Web interface.&nbsp; It makes no change in version 
				dates. <span class="smalltext">(May 1, 2014)</span></li>
				</ul>

				<li>5 Nov, 2014<ul>
					<li>When the Gemini-2 Mini was released, René made the 
					necessary changes to support it's wiring changes.&nbsp; He also 
					made it backwards compatible with the Original Gemini-2 
					versions.&nbsp; No changes was made to add and features or fix 
					anything except the wiring changes for the Gemini-2 Mini.</li>
				</ul>
				</li>
				<li>15 Feb 2015<ul>
				<li>Web interface updated to include the Videos Losmandy 
					produced. </li>
					<li>Web interface updated to include the Mobile Hand 
					Controller.</li>
				</ul>
				</li>

				
				<li>3 July 2015</li>
				<ul>
				<li>Bug fix of the Clock Frequency fixed.&nbsp; The Time 
				displayed on the lower right of the main screen should remain 
				constant now.&nbsp; Updated 3 July 2015</li>

				
				<li>The hand controller has new battery warning screens. There 
				are two, a yellow one for Battery of 2.7V or less, and red if 
				battery is 2.5V or less. They stay on the screen for about 40 
				Seconds. You must have the updated Level 5.2,&nbsp; 23 June 2015 or 
				later main firmware loaded for these to work.&nbsp; If you do not 
				then you will get a message when the hand controller to update 
				the main board firmware.&nbsp;</li>
				<li>Bug fix: The hash, CR, LF, NL signs of object information of 
				catalog objects are no longer displayed.&nbsp;</li>
				</ul>
					<li>5 July, 2015
					<ul>
					<li>The Hand Controller info page page now tells you what 
					processor is being used.&nbsp; This indicates which model of 
					hand controller you have.&nbsp; If it says "Himax Graphic chip 
					detected"&nbsp; under the build date, then you have the new 
					version the Losmandy designed from scratch.&nbsp; If it says 
					anything else, then you have one of the older versions.
					</li>
						<li>The HC screen for the newer version (Himax Graphic 
						chip, Green PCB) of the hand controller can be rotated 
						180°.&nbsp; Use the Menu--&gt;HC--&gt;Display screen, and at the 
						bottom of the screen is a place to put a checkmark to 
						flip the screen.&nbsp; Once this is done, for it to stay you 
						have to hit the Back button then Store Setting. Note: 
						Screen Calibration has to be done in non-flipped mode.</li>
					</ul>
				</li>

				<li>date here
				<ul><li></li></ul></li>
				</ul>
			</td>
			</tr>

			<tr><td>
			<ol><li class="x-smalltext">
				This menu will not function if the Servo processors, (Separate 
				from the ARM processor) has not been programmed with the 
				firmware for them that was released around Sept 2012.&nbsp; This 
				firmware requires a separate hardware PIC programmer and special 
				cables to install this 
				firmware and is not part of any firmware download for either the 
				main unit or hand controller.&nbsp; It is only available at 
				special request.&nbsp; All newer Gemini-2 units are shipped with 
				this firmware installed.&nbsp; If your balance menu functions, 
				then you have it.</li></ol></td></tr>
		</table>		
<br />
</body>




<?php include("bottom.php"); ?>



