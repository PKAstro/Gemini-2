<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">

<body>
<p></p>
	<table align="center" style="width: 90%">
		<tr>
			<td class="h2">	Using the Free Classic FTP for MAC with Gemini 2
		</td>
		</tr>
	</table>




<table align="center" style="width: 900">
	<tr>
		<td class="style6">These instructions are for the Free
		<a href="http://www.apple.com/downloads/macosx/internet_utilities/classicftpformac.html" target="_blank">
		Classic FTP for Mac 2.15</a> from Apple web site.<br>NOTE: This program can upload files to the Gemini 2, but has a problem 
		when trying to download them to the Mac.&nbsp; We are looking at 
		building a web page for <a href="http://fetchsoftworks.com/">Fetch FTP
		</a>program. It however is not free.<br><br>Please install and launch program
		</td>
	</tr>
</table>



<table align="center" cellpadding="2" style="width: 900px" >
	
	<tr>
		<td>
		<br/><br/>
		</td>
	</tr>
	<tr>
		<td class="style6">
		&nbsp;The default startup is a Site Wizard that walks you through setting up a connection.&nbsp;
		<br><a href="gemini-images/FTP/Mac/mac_gemini01.jpg" target="_blank" >
		<img src="gemini-images/FTP/Mac/Thumbnails/mac_gemini01.jpg"  xthumbnail-orig-image="gemini-images/FTP/Mac/mac_gemini01.jpg" style="float: left" class="style15"></a>
		The first screen is an introduction screen explaining the wizard process:
		
		<br><br><br><br><br>Click next to continue</td>
	</tr>
	
	<tr>
		<td>
		<br/><br/>
		</td>
	</tr>

	<tr>
		<td class="style6">
		&nbsp;<b>Session Setup Information</b> - enter information about the Gemini II mount:

		<a href="gemini-images/FTP/Mac/mac_gemini02.jpg" target="_blank">
		<img src="gemini-images/FTP/Mac/Thumbnails/mac_gemini02.jpg"  xthumbnail-orig-image="gemini-images/FTP/Mac/mac_gemini01.jpg" class="style15" style="float: left"></a>
		<br/>
		<strong>Session name</strong> – any descriptive name you would like – typically something like “Gemini II”
		<br>
		<br/><strong>Internet Address:</strong> enter ip address assigned by DHCP, or the direct connect default IP address of 192.168.0.111
	-	Note: The DHCP name does not work with this program (e.g., entering “Gemini” won’t allow you to proceed to the next screen so use the IP address). 
		<br/><br><strong>User name:</strong> enter your user name: the default user name is admin
		<br>
		<br/><strong>Password:</strong> enter your password: the default password is blank
		</td>
	</tr>
	<tr>
		<td>
		<br/><br/>
		</td>
	</tr>


	<tr>
		<td class="style6">
		&nbsp;
		<a href="gemini-images/FTP/Mac/mac_gemini03.jpg" target="_blank">
		<img src="gemini-images/FTP/Mac/Thumbnails/mac_gemini03.jpg"	bnail-orig-image="gemini-images/FTP/Mac/mac_gemini01.jpg"  style="float: left"></a>
		<br/>In these example the IP address provided by the DHCP server has been entered:

		<br><br>Click next to continue</td>
	</tr>

	<tr>
		<td>
		<br/><br/>
		</td>
	</tr>

	<tr>
		<td class="style6">
		&nbsp;<strong>Security Screen: </strong> 
		<a href="gemini-images/FTP/Mac/mac_gemini04.jpg" target="_blank">
		<img src="gemini-images/FTP/Mac/Thumbnails/mac_gemini04.jpg"  xthumbnail-orig-image="gemini-images/FTP/Mac/mac_gemini01.jpg" class="style15" style="float: left"></a>
		<br/>Security provides you with several options for securing your connection. These settings are optional and are not required for correct operation. If you are in a 
		secure environment, you might consider saving your password to save time:
		<br><br>
		The Gemini II ftp server works in both ftp and 
		secure ftp modes.
		<br/><br/>
		click next to continue
		</td>
	</tr>

	<tr>
		<td>
		<br/><br/>
		</td>
	</tr>



	<tr>
		<td class="style6">
		&nbsp;<strong>Set local and remote default folders.</strong><br/> 
This screen allows you to define default folders for when you connect via ftp.

		<a href="gemini-images/FTP/Mac/mac_gemini05.jpg" target="_blank">
		<img src="gemini-images/FTP/Mac/Thumbnails/mac_gemini05.jpg"  xthumbnail-orig-image="gemini-images/FTP/Mac/mac_gemini01.jpg" class="style15" style="float: left"></a>
		<br/>
		Tip: To keep it simple, recommend you use “/” home directory so you always are starting in the same place when connecting to the Gemini FTP server
        <br/><br/>
		“last directory” will default any ftp session to the last directory you were using when you last exited the program or were disconnected.
		<br/><br/>
		Tip: setup a “Gemini” folder inside documents as shown above to keep all Gemini related updates etc. in one place. The username will be your specific username, not the one shown above
		<br/><br/>
		Click next
		</td>
	</tr>
	<tr>
		<td>
		<br/><br/>
		</td>
	</tr>



	<tr>
		<td class="style6">
		&nbsp;<strong>Test FTP settings</strong>
		<a href="gemini-images/FTP/Mac/mac_gemini06.jpg" target="_blank">
		<img src="gemini-images/FTP/Mac/Thumbnails/mac_gemini06.jpg"  xthumbnail-orig-image="gemini-images/FTP/Mac/mac_gemini01.jpg" class="style15" style="float: left"></a>
		<br/>
		Though not required, it’s a good idea to make sure all your settings will work with the Gemini II and connect correctly. 
		<br><br>Click “Test FTP Settings before saving” to verify the setup parameters for you connection works properly. 
		<br><br>Click the button and if everything connects correctly you will see the following screen:
		<br><br>Click Finish</td>
	</tr>
	
	<tr>
		<td>
		<br/><br/>
		</td>
	</tr>



	<tr>
		<td class="style6">
		&nbsp;<strong>Log in to Gemini ftp server</strong>
		<a href="gemini-images/FTP/Mac/mac_gemini07.jpg" target="_blank">
		<img src="gemini-images/FTP/Mac/Thumbnails/mac_gemini07.jpg"  xthumbnail-orig-image="gemini-images/FTP/Mac/mac_gemini01.jpg" class="style15" style="float: left"></a>
		<br/>it will then ask you for your username and password again:
		<br/><br/>enter your username and password, the same as you entered in the steps above. The defaults are “admin” and a blank password
		
		<br><br>Click OK</td>
	</tr>
	<tr>
		<td>
		<br/><br/>
		</td>
	</tr>



	<tr>
		<td class="style6">
		&nbsp;<strong>The FTP session screen</strong>
		<a href="gemini-images/FTP/Mac/mac_gemini08.jpg" target="_blank">
		<img src="gemini-images/FTP/Mac/Thumbnails/mac_gemini08.jpg"  xthumbnail-orig-image="gemini-images/FTP/Mac/mac_gemini01.jpg" class="style15" style="float: left"></a>
		<br/>You will now see the ftp session started, with your local files on the left side and the Gemini II ftp server on the right side.
		<br/><br/>When you restart the program you will not need to go through these steps again. Instead it will ask you for your username and password, and you can immediately 
		connect to your Gemini ftp server.
		
		</td>
	</tr>
</table>



</body>


<?php include("bottom.php"); ?>



