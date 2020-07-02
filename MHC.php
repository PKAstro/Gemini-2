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
			the Mobile Hand Controller <br/>
			</td>
		</tr>

	</table>

	<table align="center" style="width: 900px">
		<tr><td class="style6">Please note:<br />
			<br />
			Scott Losmandy has requested that the Mobile Hand controller (MHC) 
			be removed from the Gemini-2 Firmware code. This is because this 
			product is out of date, the writer of that product has since dropped 
			all his hobbies of astronomy, and therefore is no longer supporting 
			the MHC. The MHC is also not finished, and does not support many of 
			the new changes include loading the newer and larger star catalogs.&nbsp; 
			It is also based of Java Script that has many security flaws, that 
			could lead to corruption of the Gemini-2 firmware or a remote 
			operator taking over your telescope. All new Gemini-2 units will be 
			shipped without it.<br />
			<br />
			These instructions will tell you how to update your Gemini-2 with 
			the mobile hand controller (MHC). This will provide the MHC 
			directory, and a replacement Index.html file for each language in 
			the web interface.&nbsp; Please note, that no support from Scott 
			Losmandy, myself (Tom Hilton), or René Görlich will be provided, nor 
			will any email addressing the MHC in the users groups be answered by 
			the three of us concerning the use of MHC. There is just not enough 
			time to address it. You are totally on your own if you install the 
			MHC, when it comes to MHC related questions.&nbsp; Any future update of 
			the SDcard files will probably overwrite the index files, and the 
			MHC will have to be reloaded using the<br />
			instructions below. <br />
			<br />
		</td></tr>
				<tr><td class="style6"><br />This set of instructions assumes that you have 
			already downloaded and installed FileZilla FTP.&nbsp; If you have 
			not, then see <a href="installing-filezillaftp.php" target="_blank">
			Installing-FileZilla</a> and then come back here.&nbsp; You are also going to need some kind of file 
			unzipping program.&nbsp; I recommend
			<a href="http://www.7-zip.org/download.html" target="_blank">7Zip</a> 
			as it is free for Windows or
			<a href="http://www.kekaosx.com/en/" target="_blank">Kela for Mac</a> 
			(which uses the 7zip engine) and is free.&nbsp; Just download and follow 
			the prompts the installation prompts. You also must have already have 
			a current version of the firmware installed into the 
			Gemini-2 main unit.&nbsp; This update will provide a MHC 
			directory, and 4 language directories with new Index.html 
			file to overwrite the current index.html files in the main unit.
			</td>
		</tr>
		<tr><td class="style6" style="height: 119px"><br />
				1.&nbsp;
				Turn on the Gemini-2 and make sure you have an ethernet 
			connection to it.<br />
			<br />
			2. It is best to start with an empty directory to put the files in and unzip them.  I Use C:\MHC in this
				example.  So create a subdirectory at the root of Drive C, called MHC.
				<br />Now click on this download link 
			<a href="http://gemini-2.com/firmware1/MHC.zip">MHC</a>. with your web browser.&nbsp;&nbsp; 
			Use the save or save as option if the browser and browse to the 
			C:\MHC directory on your hard drive and put the file there. You 
			should have a directory that looks like fig 1. 
			
			</td></tr></table>
		<table align="center" style="width: 900px">
				<tr><td class="style7">
					<img alt="" height="281" src="gemini-images/MHC/mhc1.jpg" width="900" /><br />Fig 1</td></tr>
				<tr><td class="style6">
					3.&nbsp;
					Use 7Zip to unzip to unzip file MHC.zip and select unzip here to obtain what looks like Fig 2.</td></tr>
				<tr><td class="style7"><br />
					<img alt="" height="381" src="gemini-images/MHC/mhc2.jpg" width="900" /><br />
					Fig 2 	Fig 2 </td></tr>
				<tr><td class="style6"><br />
					4.&nbsp;
					Now Delete only the file MHC.zip so you are left with what is in 
					fig 3</td></tr>
				<tr><td class="style7"><br />
					<img alt="" height="424" src="gemini-images/MHC/mhc3.jpg" width="900" /><br />Fig 3 
					Again the Alt/AZ directory should be present.</td></tr>
					</table>
					
			<table align="center" style="width: 900px">
		<tr>
			
			<td class="style6"><br />5. Now you need to open up Filezilla. </td>
		</tr>
		<tr>
			<td class="style6"><br />6. Click on the File and select Site manager. A 
			window similar to Fig 4 should open. </td>
		</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr>
			<td class="style7" Width="550px" ><br /><img alt="" height="438" src="gemini-images/FTP/filezilla/Filezilla13.jpg" width="519" />
			<br />Fig 4</td>
			<td class="style6"><br />
				7. Fill out the form with these values:<br />
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
			<td class="style6"><br />8. A window similar&nbsp; to figure 5 should 
			open.&nbsp; You will need to change the Local Site to C:\MHC </td>
		</tr>
		<tr>
			<td class="style7"><br />
						<img alt="" height="756" src="gemini-images/MHC/mhc4.jpg" width="900" /><br />Fig. 5&nbsp; 
			Please include Alt/Az also in the move from left to right.</td>
		</tr>

				<tr><td class="style6">
					9. Now highlight the MHC, DE,EN, ES and FR and AltAZ (not 
					shown in the above pictures) 
					directories in the left pain as shown below, in Fig 6.<br />
					<br />
					10. Then right mouse click on the high-lighted directories 
					and select upload.<br />
				</td></tr>
				<tr><td class="style7">

					<img alt="" height="666" src="gemini-images/MHC/mhc5.jpg" width="900" /><br />Fig 6 
					Please also highlight the AltAz directory also. I added it 
					after creating the above windows.</td>
				</tr>


				<tr><td class="style6"><br />
				11. 	The below window will more than likely pop up.&nbsp; Please 
					select "Always use this action" and then select "OK"</td></tr>


				<tr><td class="style7">
					<img alt="" height="344" src="gemini-images/MHC/mhc6.jpg" width="538" /><br />Fig 7</td></tr>


				<tr><td class="style6">
					12. You now have successfully applied the updates to have 
					the MHC file windows. You will have to restart the Gemini-2 
					to see them.</td></tr>


				<tr><td class="style7">
				</td></tr>


				<tr><td class="style7">
				</td></tr>


				<tr><td class="style7">
				</td></tr>
		</table>
			
			
</body>

</html>


	<?php include("bottom.php"); ?>

