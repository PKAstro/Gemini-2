<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Using Filezilla to update firmware</title>
<meta content="Gemini-2, Firmware" name="keywords" />
<meta content="How to undate firmware in Gemini-2 using Filezilla" name="description" />
<link href="gemini-2.css" rel="stylesheet" type="text/css" />
</head>

<?php include("topv.php"); ?>



<body style="color: #FFFFFF; background-color: #000000">

	<table align="center" style="width: 900px">
		<tr>
			<td class="h2">
			<br/>
				Using FileZilla to install 
			Aug 13, 2013 beta firmware<br/>
			</td>
		</tr>

	</table>

	<table align="center" style="width: 900px">
		<tr><td class="style6">Comments from René about this beta firmware:<br />
			I hope to have a good firmware finally!&nbsp; As always, it took 
			much longer than expected, due to the complexity and also to some tweaks 
		I've implemented additionally.<br />
		Greg Crawford's wish for saver parking brought a lot of effort on both firmware. <br />
		Many things had to be fumbled in at many places both in the HC and in the main board.<br /><br /> 
		<u><strong>This recommends to start a new round of beta testing.</strong></u><br /><br />
		At the HC, I've adapted the main screen. The GoTo button changes into an Unpark button while parking. <br />
		The Diamond buttons are disabled while in parking level 1 or 2. <br />
		The Park screen was adapted to show Sleep/Wakeup/Unpark.<br />
		The new firmware should cause an SRAM reset, because the parking mode preselection had to be added.<br />
		There is a new set of .c16 files for the buttons.<br />
		There are new network setting added, to help protect the port operations.<br />
		</td></tr>
		<tr>
			<td class="style6">
		


</td></tr>
		<tr>
			<td class="style6">This set of instructions assumes that you have 
			already downloaded and installed FileZilla FTP.&nbsp; If you have 
			not, then see <a href="installing-filezillaftp.php" target="_blank">
			Installing-FileZilla</a> and then come back here.</td>
		</tr>
		<tr>
			<td class="style6"><br />1. Before you start, you need to make an empty 
			directory to download the updated firmware into. I suggest creating 
			one at C:\Gemini-2</td>
		</tr>
		<tr>
			<td class="style6"><br />
			2. You are going to need some kind of file 
			unzipping program.&nbsp; I recommend
			<a href="http://www.7-zip.org/download.html" target="_blank">7Zip</a> 
			as it is free for Windows or
			<a href="http://www.kekaosx.com/en/" target="_blank">Kela for Mac</a> 
			(which uses the 7zip engine) and is free.&nbsp; Just download and follow 
			the prompts the installation promps.</td>
		</tr>
		<tr>
			<td class="style6"><br /><a name="3">3</a>. You will need to download the program.&nbsp; 
			Click this link to start
			<a href="http://www.gemini-2.com/betafirmware/combined-Aug-13-2013-Full.zip" target="_blank">combined-Aug-13-2013-Full.zip</a>&nbsp; 
			Please note, that most of the pictures are going to refer to combined.zip instead of combined-Aug-13-2013-Full.zip.&nbsp; <br />
			Now 1 of the three windows should pop up 
			depending which Web browser you are using.<ul><li>If using Windows IE:
				<a _self"="" href="using_filezilla-IE__Aug13-13.php" target="_self">click here</a> to see window. 
				Please use the Save as option and browse to C:\Gemini-2 for the 
				save location.</li>
				<li>If using Firefox: 
				<a href="using_filezilla-firefox_Aug13-13.php" target="_self">Click here</a> to see window.</li>
				<li>If using Chrome: 
				<a href="gemini-images/FTP/filezilla/chome-File-save.jpg" target="_blank">Click here</a> to see window. 
				You will need to browse to the C:\Gemini-2 folder.</li></ul>
			</td>
		</tr>
		<tr>
			<td class="style6">4. After doing one of the above save 
			options, you should have a window that looks like Fig 1 below. For 
			you MAC users, you will have to use what ever MAC provides in place 
			of File Explorer that windows uses,&nbsp; I think it is called the 
			"Finder."</td>
		</tr>
		<tr>
			<td class="style7"><br />
			
				<a href="gemini-images/FTP/filezilla/Filezilla15.jpg" target="_blank">
				<img alt="" src="gemini-images/FTP/filezilla/thumbnails/Filezilla15_small1.jpg"  height="404" width="900" /></a>
				<br />Fig 1 - click on image to see larger image
			</td>
		</tr>
		<tr>
			<td class="style6"><br />5. In the next figure (Fig 2), you will be using 7-Zip to 
			extract all the files into the same directory as the combined-Aug-13-2013-Full.zip 
			file.<ul><li>Right mouse click on the combined-Aug-13-2013-Full.zip file.</li>
				<li>Right mouse click on the the 7-Zip selection</li>
				<li>select the "Extract here" option.&nbsp; See figure 2 below.</li></ul></td>
		</tr>
		<tr>
			<td class="style7"><br />
			<img alt="" height="521" src="gemini-images/FTP/filezilla/extract-combined-to-here.jpg" width="900" /><br />Fig 2</td>
		</tr>
		<tr>
			<td class="style6"><br />4. The directory should look like below, if you 
			used the "Extract here option"<br />  <img alt="" height="52" src="gemini-images/FTP/filezilla/more-options.jpg" style="float: right" width="93" />(I 
			have &nbsp;Large Icons selected under more options<br />on the right 
			top menu bar.) 			</td>
		</tr>
		<tr>
			<td class="style7"><br />
							<a href="gemini-images/FTP/filezilla/Filezilla18.jpg" target="_blank">
				<img alt="" height="404" src="gemini-images/FTP/filezilla/thumbnails/Filezilla18_small1.jpg" width="900" /></a>
				<br />Fig 3 - Click on image to open full page image

			</td>
		</tr>
		<tr>
			<td class="style6"><br />5. Now right click on the combined-Aug-13-2013-Full.zip 
			folder/file, and either use Cut and paste it in another directory on 
			the hard drive or delete it.&nbsp; Your choice as we will not need 
			it anymore.&nbsp; You can always download it again.</td>
		</tr>
		<tr>
			<td class="style6"><br />6. Now you need to open up Filezilla. </td>
		</tr>
		<tr>
			<td class="style6"><br />7. Click on the File and select Site manager. A 
			window similar to Fig 4 should open. </td>
		</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr>
			<td class="style7" Width="550px" ><br /><img alt="" height="438" src="gemini-images/FTP/filezilla/Filezilla13.jpg" width="519" />
			<br />Fig 4</td>
			<td class="style6"><br />
				8. Fill out the form with these values:<br />
			<ul>
				<li>
				In the box Host: put 192.168.0.111 or whatever your Gemini-2 IP address is.</li>
				<li>
				Protocol: - Select File Transfer Protocol</li>
				<li>
				Encryption - select use plain FTP</li>
				<li>
				&nbsp;Login Type - Select Normal</li>
				<li>
				User: Put in "admin" without the quotes.</li>
				<li>
				Password - leave blank</li>
				<li>
				Select Connect or OK
				
				</li>
			</ul>
			</td>
		</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr>
			<td class="style6"><br />9. A window similar&nbsp; to figure 5 should 
			open.&nbsp; You will need to change the Local Site to C:\Gemini-2 </td>
		</tr>
		<tr>
			<td class="style7"><br />
			<a href="gemini-images/FTP/filezilla/Filezilla19.jpg" target="_blank">
			<img alt="" height="517" src="gemini-images/FTP/filezilla/Filezilla19_small.jpg" width="900"  /></a>
			<br />Fig. 5
		</td>
		</tr>
		<tr>
			<td class="style6"><br />10. Now in the Left window (Local Site) highlight 
			all the directories and files as shown below To do this:<br />
			Click on the top file or directory, Then press the shift key down, 
			and while holding it down, click the last file in the left pane.</td>
		</tr>
		<tr>
			<td class="style7"><br />
			<a href="gemini-images/FTP/filezilla/filezilla-selected-files.jpg" target="_blank">
			<img alt="" height="518" src="gemini-images/FTP/filezilla/filezilla-selected-files_small1.jpg" width="900" /></a>
			<br />Fig. 6
		</td>
		</tr>

		<tr>
			<td class="style6"><br />11. After they are highlighted, right mouse click 
			and select upload.  The next window (Fig 7) will pop up. Make 
			sure Overwrite is selected, the select the check box "Always use his 
			action" and then click OK.
		</td>
		</tr>

		<tr>
		<td class="style7"><br />
			<img alt="" height="342" src="gemini-images/FTP/filezilla/Filezilla-over-write.jpg" width="537" /><br />Fig 7</td>
		</tr>

		<tr>
		<td class="style6" ><br />12. Filezilla just uploaded 
			all the new files overwriting the previous versions of the files. We 
			are now going to tell the Gemini-2 to program the new firmware into 
			the main unit.&nbsp; This will be done with a Web browser.&nbsp; You 
			can now close Filezilla.
		</td>
		</tr>
		<tr>
			<td class="style6"><br />13. Open up your favorite Web browser.&nbsp; In 
			the address bar put in <a href="http://192.168.0.111">
			http://192.168.0.111</a> or the IP address of your Gemini-2.&nbsp; 
			You can find this on the hand controller under 
			Menu--&gt;Mount--&gt;Network.
		</td>
		</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr>
			<td class="style7" width="550px">
			<br />
			<img alt="" height="388" src="gemini-images/FTP/filezilla/gemini-login.jpg" width="547" /><br/>
			Fig 8</td>
			<td wodth="20px"></td>
			<td>14.&nbsp; Enter admin in the user block<br />
				15.&nbsp;
				Leave password box empty<br />
				16.&nbsp;
				Hit OK</td>
		</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr>
			<td class="style7">
			<br />
			<img alt="" height="663" src="gemini-images/5_1/image13.jpg" width="900" /><br />
			Fig 9
			</td>
		</tr>
		<tr>
			<td class="style6"><br />17. Select the Firmware/SRAM Tab.</td>
		</tr>
		<tr>
			<td class="style7"><br />						<a href="gemini-images/loading_beta/flash-firmware.jpg" target="_blank">
			<img alt="" class="auto-style5" height="474" src="gemini-images/loading_beta/flash-firmware-small.jpg" width="900" /></a>
			<Br />Fig. 10</td>
		</tr>
		<tr>
			<td class="style6"><br />18.&nbsp; Push on the Flash Firmware tab in the 
			on your Gemini-2 as illustrated above if Fig 10. This will flash the 
			current program into the ARM processor inside the Gemini-2. The 
			screen will change to Fig 11 below.</td>
		</tr>
		<tr>
			<td class="style7">
			
			<a href="gemini-images/FTP/filezilla/Please-wait.jpg">
			<img alt=""  height="503" src="gemini-images/FTP/filezilla/Please-wait_small.jpg" width="900" /></a>
			<br />Fig 11.</td>
		</tr>
		<tr>
			<td class="style6"><br />19.  The screen should stay like this for about 30 seconds or so. and then come back to Fig 12. 
			If it does not, that means that you are probably using an IPaddress other than 
			<a href="HTTP://192.168.0.111">HTTP://192.168.0.111</a>.&nbsp; If it 
			does not come back try putting in <a href="Http://Gemini">Http://Gemini</a> and see if it comes back. 
			If it does not then you will have to goto troubleshooting connection problems.  If you have to do that 
			please look at Menu-->Mount-->network, and write down the setting. 
			Then un-plug the hand controller, and proceed to troubling 
			Connections.</td>
		</tr>
		<tr>
			<td class="style7"><br />
			<img alt="" height="938" src="gemini-images/FTP/filezilla/flashed-main.jpg" width="848" /><br />
			Fig 12</td>
		</tr>
		<tr>
			<td class="style6"><br />20. Now unplug the hand controller for about 5 seconds and replug it back in.</td>
		</tr>
		<tr>
			<td class="style6">&nbsp;</td>
		</tr>
		<tr>
			<td class="style6">&nbsp;</td>
		</tr>

	</table>

	<table align="center" style="width: 900px">
		<tr class="style6">			
			<td>
			
				<br />21.&nbsp; You should see a screen like the one on the 
						below. It shows 
						that the hand controller firmware is being uploaded to the hand 
						controller micro SDcard. <br />
						<br />
						If this does not happen try powering Gemini off and
						on again.
						<img alt="" height="571" src="gemini-images/HandcontrollerImages/uploadingnewfirmware.jpg" 
						style="float: left" width="425" />
			</td>
			<td>
				<br />25.&nbsp; When this screen 
				on the left is done, it usually takes about 5 minutes are so,
			then the flashing screen will appear.
			<img alt="" height="565" src="gemini-images/HandcontrollerImages/HC_Flashing.jpg" style="float: right" width="425" /></td></tr>
		</table>
		<table align="center" style="width: 900px">
			<tr>
			<td>
			
			<br />23.	After the Gemini hand controller has flashed it new firmware the HCFirmware 
				directory in the main unit should be empty and the hand controller 
				should have the new firmware loaded. It will again look like Figure 4 above.<br /><br />
			<br />24.
			Note that the catalog updates, *.quc files, the button files will now upload.  
			This can take as much as 30 minutes or so.  When they are all finished uploading, 
			the the hand controller should start over and you will see the
			logo screen, the calibration promt screen and finally the main menu screen.
			You are done when that happens.  Don't forget to reset all the parameters, such
			as limits, Site location, and most importantly mount type.
			</td>
		</tr>


	</table>
</body>

</html>


	<?php include("bottom.php"); ?>

