<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>G2 Serial Port Modes</title>
<link href="gemini.css" rel="stylesheet" type="text/css" />



<?php include("topv.php"); ?>




<style type="text/css">
.auto-style1 {
	border-style: solid;
	border-width: 2px;
}
</style>

</head>

<body style="color: #FFFFFF; background-color: #000000;">
	
	<table align="center" style="width: 800px">
		<tr>
			<td class="h2">
			<br/>
				Installation of FileZilla and Firmware Update<br/>
			</td>
		</tr>

	</table>
	
	

	
	<br />
	<table align="center" style="width: 900px">
		<tr class="style6">
			<td>
			<p>
			There is a bug in the Hand Controller that will not always let the gemhc.bin file upload and flash correctly. This can be avoided if the boot method is changed from "Ask if possible" to "Cold boot" You can do this on the Web interface under mount 
			(see above paragraph to get to the web interface), all the way to the bottom of the page. See 
			<a href="gemini-images/FTP/Extra/mount.JPG" target="_blank">Mount page</a>.&nbsp; 
			or enter
			<a href="http://gemini/mountpar.cgi?bm=0&amp;set=Select+Mode=&quot;Cold Start&quot;" target="_blank">
			http://gemini/mountpar.cgi?bm=0&amp;set=Select+Mode="Cold Start"</a> 
			into your address bar of your browser. You may have to substitute 
			your Gemini's IP address for gemini in the above string.<br /> Remember to return it back to your desired setting after 
			updating the firmware.</p>
			
				<p>This guide will help you install the FileZilla FTP program 
				and the help you use it to update the firmware to the Gemini-2 
				controller. Note: If you already have FIleZilla installed you 
				can jump down to <a href="#14.">step 14</a></p> 
				
				<p>1. Goto <a href="http://filezilla-project.org">http://filezilla-project.org</a>&nbsp; 
				You will see the Page in figure 1.&nbsp; </p>
			<div class="style7">
				<a href="gemini-images/FTP/filezilla/Filezilla1.jpg" target="_blank">
				<img alt="" height="324" src="gemini-images/FTP/filezilla/thumbnails/Filezilla1_small.jpg" width="600" class="auto-style1" /></a>
				<br />Fig 1 - Click on image to open full page image
			</div>
			<p>
				2. You see 2 gray boxes at the top of the page.  Click on the one that says "Download FileZilla Client"
				Figure 2 should appear.
			</p>
			<div class="style7">
				<a href="gemini-images/FTP/filezilla/Filezilla2.jpg" target="_blank">
				<img alt="" height="325" src="gemini-images/FTP/filezilla/thumbnails/Filezilla2_small.jpg" width="600" class="auto-style1" /></a>
				<br />Fig 2 - Click on image to open full page image
			</div>
			<p>
			3.
			There are selections on this page for what every type of operating system you have. You will download the one correct for your system.
			This demo shows Windows, using the Win32-setup.exe file.  (this file changes often as FileZIlla is 
			continuously updated.<br />
			Click on the one 
			appropriate for you system.  A page similar to fig 3 should appear.</p>
			<div class="style7">
				<a href="gemini-images/FTP/filezilla/Filezilla3.jpg" target="_blank">
				<img alt="" height="325" src="gemini-images/FTP/filezilla/thumbnails/Filezilla3_small.jpg" width="600" class="auto-style1" /></a>
				<br />Fig 3 - Click on image to open full page image
			</div>
			<p>
			4.
			Save the file to where every you want it stored.  I used save-as and stored mine in a directory called 
			Desk top downloads, but you can save it anywhere on your computer.
			</p>
			<div class="style7">
				<a href="gemini-images/FTP/filezilla/Filezilla4.jpg" target="_blank">
				<img alt="" height="325" src="gemini-images/FTP/filezilla/thumbnails/Filezilla4_small.jpg" width="600" class="auto-style1" /></a>
				<br />Fig 4 - Click on image to open full page image
			</div>
			<p>
			5.
			Figure 4 shows it stored where I wanted it.  Your page might look different according to where you stored it.
			</p>
			<div class="style7">
				<img alt="" height="389" src="gemini-images/FTP/filezilla/Filezilla5.jpg" width="503" />
				<br />Fig 5
			</div>
			<p>
			6.
			Normally A license agreement will show up as soon as the program has been stored.  It should look something like figure 5.<br />
			If this license agreement does not pop up, then you are going to have to run the program listed in Figure 4.  Normally 
			double-clicking will run it in Windows, other operating system might have a different 
			procedure to install a program. 			</p>
			<div class="style7">
				<img alt="" height="389" src="gemini-images/FTP/filezilla/Filezilla6.jpg" width="503" />
				<br />Fig 6
			</div>
			<p>
			7.&nbsp; Figure 6 lets you select who on your system can run FileZilla.  
			Either choice is fine. After making a choice
			click next.</p>
			<div class="style7">
				<img alt="" height="389" src="gemini-images/FTP/filezilla/Filezilla7.jpg" width="503" />
				<br />Fig 7
			</div>
			<p>
			8.&nbsp; Figure 7 shows the components to install."Normally leave default selections."&nbsp; I however do add the 
			"Desktop Icon"&nbsp; <br />Select Next.</p>
			<div class="style7">
				<img alt="" height="389" src="gemini-images/FTP/filezilla/Filezilla8.jpg" width="503" />
				<br />Fig 8
			</div>
			<p>
			9.&nbsp; Figure 8 shows where the program will be installed.  I normally do not change it from the default location. If you 
			are computer knowledgeable then you can do as you like. Click Next.  (If you are computer 
			knowledgeable why are you reading these instruction?)</p>
			<div class="style7">
				<img alt="" height="389" src="gemini-images/FTP/filezilla/Filezilla9.jpg" width="503" />
				<br />Fig 9
			</div>
			<p>
			10.&nbsp;
			You should now get a page asking you where Start Menu to place the program shortcuts. Other 
			operating systems
			may not show this page. Just hit next.</p>
			<div class="style7">
				<img alt="" height="389" src="gemini-images/FTP/filezilla/Filezilla10.jpg" width="503" />
				<br />Fig 10
			</div>
			<p>
			11.
			The Completing Setup window should appear.  Select the Start FileZilla now box, and then select Finish.
			</p>
			<div class="style7">
				<a href="gemini-images/FTP/filezilla/Filezilla11.jpg" target="_blank">
				<img alt="" height="325" src="gemini-images/FTP/filezilla/thumbnails/Filezilla11_small.jpg" width="600" class="auto-style1" /></a>
				<br />Fig 11 - Click on image to open full page image
			</div>
			<p>
			12.&nbsp;
			You should receive a popup window similar to the one in Fig 11 with FileZilla in the background.  Select OK
			in the popup. <br /> A entry similar to Figure 12 should appear.  If it does not, then on the File Selection Menu
			in the upper left of the FileZilla page select "Site Manager"</p>
			<div class="style7">
				<img alt="" height="438" src="gemini-images/FTP/filezilla/Filezilla12.jpg" width="519" />
				<br />Fig 12
			</div>
			<p>
			13.&nbsp;
			Figure 12 is the site configuration window.  We will fill in the 
			values as shown in Figure 13.
			</p>
			<div class="style7">
				<img alt="" height="438" src="gemini-images/FTP/filezilla/Filezilla13.jpg" width="519" />
				<br />Fig 13
			</div>
				<a name="14.">14.</a>&nbsp;
			In the HOST block, you need to put in the IP address of your Gemini-2. The default is 192.168.0.111<br />
			You should also be able to find this address in your hand controller. 
			On the Main menu page press Menu, then<br />Mount, then Network buttons on the hand controller.  
			The Gemini-2 IP address should be in the top bar.
			<ul>
					<li>Make sure FTP - FIle Transfer Protocal is selected.
								
					</li>
					<li>For Encryption use: Use palin FTP 
			
					</li>
					<li>For Login type select Normal For user: put admin
			For the password: clear out any entries shown, it needs to be blank.
					</li>
				</ul>
			Select Connect.&nbsp;&nbsp;&nbsp;&nbsp; A Page 
				similar to Fig 14 should appear.
			
			<div class="style7">
				<a href="gemini-images/FTP/filezilla/Filezilla14.jpg" target="_blank">
				<img alt="" height="325" src="gemini-images/FTP/filezilla/thumbnails/Filezilla14_small.jpg" width="600" class="auto-style1" /></a>
				<br />Fig 14 - Click on image to open full page image
			</div>
			<p>
			15.&nbsp; The Left set of panels are your computer files.  The Right set of panels 
			shows the files on the Gemini-2 micro-SDcard.&nbsp; The top boxes of each panel can be turned on and off.  Under View in the upper menu bar, are 2 selections:
			Local Directory tree is for the left panel, and Remote directory tree is for the right panel.
			<ul>
				<li>
					We recommend you enable "local directory tree" and "remote 
					directory tree" from the View menu. This will make 
					navigation easier."</li>
				<li>You can now shrink down or hide the FileZilla page for 
					now. On windows 7 this is done by clicking the - (negative) sign in the upper right 
					corner of the page.</li>
				<li>We are going to get the file to update the Gemini 2 with 
					now.</li>
			</ul>
			</p>
			<div class="style7">
				<a href="gemini-images/FTP/filezilla/Filezilla15.jpg" target="_blank">
				<img alt="" height="325" src="gemini-images/FTP/filezilla/thumbnails/Filezilla15_small.jpg" width="600" class="auto-style1" /></a>
				<br />Fig 15 - Click on image to open full page image
			</div>
				16. We are going to make an empty directory, download 
					and unzip the update file. Here are the steps:
				<ul>
					<li>
						Please make an empty directory on your computer. For windows I used "Gemini Firmware update", but you can use anything you like.
					</li>
					<li>
						Now we are going to download the file to update your Gemini 2.  
						Please select
						<a href="http://www.gemini-2.com/firmware1/combined.zip" target="_blank">
						combined.zip</a> and put it into
						the empty directory you made.
					</li>
					<li>
						Use "Save AS"
						to select where the download should be saved onto your 
						computer. The specific wording of this message and 
						default directory may vary depending on the browser you 
						are using."
					</li>
					<li>
						It should look similar to figure 15, if using Windows 7. 
						once downloaded.
					</li>
				</ul>
			<div class="style7">
				<a href="gemini-images/FTP/filezilla/Filezilla16.jpg" target="_blank">
				<img alt="" height="325" src="gemini-images/FTP/filezilla/thumbnails/Filezilla16_small.jpg" width="600" class="auto-style1" /></a>
				<br />Fig 16 - Click on image to open full page image
			</div>
			<p>
			17.&nbsp;&nbsp; Now right click on the downloaded file.&nbsp;&nbsp; 
			I changed the download destination to "C:\Gemini Firmware update" instead of 
			"C:\Gemini Firmware update\combined."  The choice is yours.&nbsp; 
			<br />Hit Extract.&nbsp;&nbsp; (Windows 7 provides a built in 
			extraction function by right clicking on a file. If your computer 
			does not then you are going to have to find and load a program.&nbsp; 
			I recommend <a href="http://www.7-zip.org/" target="_blank">7-Zip</a>)</p>
			<div class="style7">
				<a href="gemini-images/FTP/filezilla/Filezilla18.jpg" target="_blank">
				<img alt="" height="325" src="gemini-images/FTP/filezilla/thumbnails/Filezilla18_small.jpg" width="600" class="auto-style1" /></a>
				<br />Fig 17 - Click on image to open full page image
			</div>
			<p>
			18. You should now have a file page similar to Figure 17
			</p>
			
			<div class="style7">
				<a href="gemini-images/FTP/filezilla/Filezilla19.jpg" target="_blank">
				<img alt="" height="325" src="gemini-images/FTP/filezilla/thumbnails/Filezilla19_small.jpg" width="600" class="auto-style1" /></a>
				<br />Fig 18 - Click on image to open full page image
				</div>
			<p>19.&nbsp; Now open up the FileZilla window&nbsp; you shrunk down in step&nbsp; 15 above
			<ul>
				<li>
				Now using the Left panel browse to the directory you created in 
				step 16 above, so that the left panel looks like above&nbsp; (Figure 18).</li>
					<li>On the right panel we need to delete the Catalogs, DE, 
					EN, ES (you might not have this one), FR, and HCFirmware 
					Directories.&nbsp; Highlight all of these, then right mouse 
					click and select delete. </li>
				<li>
					DO NOT DELETE THE LOGS DIRECTORY.
				</li>
				<li>
					Once finished deleting these directories it should look like Figure 19 below.
				</li>
				</ul>
			</p>	
			<div class="style7">
				<a href="gemini-images/FTP/filezilla/Filezilla20.jpg" target="_blank">
				<img alt="" height="325" src="gemini-images/FTP/filezilla/thumbnails/Filezilla20_small.jpg" width="600" class="auto-style1" /></a>
				<br />Fig 19 - Click on image to open full page image
			</div>
			<p>20.&nbsp; We are now going to copy the files from the left panel to the right panel.&nbsp; 
			To move a directory from the left side to the right side can be done 
			either by <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1. Right Clicking of the Directory name and selecting 
			upload, or<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.
			Highlighting the directory and dragging it to the right panel. 
			
			(Be careful where you drop them, <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; and make
			sure it is not on the top of another 
			directory,)
			<ul>
				<li>
					Right click on the Catalogs Directory in the left panel, Select upload&nbsp; 
					(or use the drag method)</li>
				<li>
					Right click on the DE Directory in the left panel, Select upload&nbsp;&nbsp; 
					(or use the drag method)</li>
				<li>
					Right click on the EN Directory in the left panel, Select upload&nbsp;&nbsp; 
					(or use the drag method)</li>
				<li>
					Right click on the FR Directory in the left panel, Select upload&nbsp;&nbsp; 
					(or use the drag method)</li>
				<li>
					Right click on the ES Directory in the left panel, Select upload&nbsp; 
					(or use the drag method) (Note the image I captured was an older 
					version of the combined.zip file, later versions should have this directory.
				</li>
				<li>
					Right click on the HCFirmware Directory in the left panel, Select upload&nbsp; 
					(or use the drag method)</li>
				<li>
					Right click on the HGM_Gem2.bin file in the left panel, Select upload&nbsp; 
					(or use the drag method)</li>
				<li>
					Once finished copying&nbsp; these directories it should look like Figure 20 below.
				</li>
				</ul>
			</p>	

			<div class="style7">
				<a href="gemini-images/FTP/filezilla/Filezilla21.jpg" target="_blank">
				<img alt="" height="325" src="gemini-images/FTP/filezilla/thumbnails/Filezilla21_small.jpg" width="600" class="auto-style1" /></a>
				<br />Fig 20 - Click on image to open full page image
			</div>
			<p>
			21.&nbsp; Now power down the Gemini 2.&nbsp; .
						<ul>
				<li>
					Un-plug the Hand Controller</li>
							<li>
							Power the Gemini-2 back on with the hand controller 
							disconnected.</li>
							<li>
							You will probably lose connection to the computer.&nbsp; 
							When the Gemini re-programs itself the IP address 
							normally defaults back to 192.168.0.111</li>
							<li>
							If you would like to confirm that it re-programmed 
							itself, then you can try reconnecting to FileZilla.</li>
							<li>
							Under the Server tab in the upper menu bar,  
							use Reconnect.</li>
							<li>
							Once this is done, you will see that HGM_Gem2.bin 
							has been renamed to Cur_Gem2.bin</li>
							<li>
							You can erase this file if you desire.</li>
				</ul>
			</p>

			<div class="style7">
				<a href="gemini-images/FTP/filezilla/Filezilla22.jpg" target="_blank">
				<img alt="" height="325" src="gemini-images/FTP/filezilla/thumbnails/Filezilla22_small.jpg" width="600" class="auto-style1" /></a>
				<br />Fig 21 - Click on image to open full page image
			</div>
			
			<p>
			22. PLEASE READ THIS WHOLE STEP BEFORE PROCEEDING.<br />The Gemini 
			must be through the boot process. To make sure it is use the
			<a href="ConnectingtoG2.php" target="_blank">Web interface</a> to 
			select the Mount page. At the bottom of the Mount page is a Default 
			StartUp selection box. Please select cold start and then select 
			mode.&nbsp; Please recycle the power then. You can set it back to 
			which every mode you like after the hand controller is programmed.<br />Now plug in the Hand Controller with the Gemini STILL POWERED ON.
			The Gemini Hand Controller should display a message, "Uploading 
			New Firmware"&nbsp; If this is not the message it gives, then you 
			did not follow instructions, and had the Gemini powered off when 
			plugging in the hand controller.&nbsp; If you did this, then start 
			over at step 15.<br /> 
			This process takes about 5 minutes or longer.&nbsp; WARNING, DO NOT 
			POWER DOWN THE GEMINI WHILE THE UPDATE IS IN PROGRESS, EVEN IF YOU 
			DID NOT FOLLOW INSTRUCTION AND 
			THE WRONG MESSAGE DISPLAYED. After it has "Uploaded the 
			new firmware" It will give a message "Flashing New Firmware" and 
			then go to the menu screen or boot screen. Here are what the upload 
			and flashing should look like on the hand controller.</p>
			</td>
		</tr>
	</table>

	<table align="center" style="width: 900px">
		<tr class="style6">			
			<td>
			<ol start="23">
				<li>	You should see a screen like the one on the 
						below. It shows 
						that the hand controller firmware is being uploaded to the hand 
						controller micro SDcard. <br />
						<br />
						If this does not happen try powering Gemini off and
						on again.
						<img alt="" height="571" src="gemini-images/HandcontrollerImages/uploadingnewfirmware.jpg" 
						style="float: left" width="425" /></li></ol>
			</td>
			<td>
				<ol start="24">
				<li>When this screen 
				on the left is done, it usually takes about 5 minutes are so,
			then the flashing screen will appear.</li></ol>
			<img alt="" height="565" src="gemini-images/HandcontrollerImages/HC_Flashing.jpg" style="float: right" width="425" /></li></td></tr>
		</table>
		<table align="center" style="width: 900px">
			<tr>
			<td>
			<ol start="25">
			<li>	After the Gemini hand controller has flashed it new firmware the HCFirmware 
				directory in the main unit should be empty and the hand controller 
				should have the new firmware loaded. It will again look like Figure 4 above.<br /><br /> </li>
			<li>Note that catalog updates, *.quc files can also be updated the same way.
				Just upload them the same way you would a gemhc.bin file
			</td>
		</tr>


	</table>

</body>
</html>



	<?php include("bottom.php"); ?>





