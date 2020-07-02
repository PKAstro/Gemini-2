<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<title>Getting Started with the Gemini-2 Controller</title>


<?php include("topv.php"); ?>


<link href="gemini-2.css" rel="stylesheet" type="text/css" />


</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Getting Started with the Gemini-2 Controller</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		All links on this WEB page reference difference pages in this web site.
		<br /><br />
		</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		<ol type="1">
		<li>
				Make sure you have at least +12V 3 Amp power
				to the Gemini-2 controller.<br /><br />
			</li>
			<li>
				Plug the hand controller into the proper port.&nbsp; On the 
				Original Gemini-2 use the "Serial 2" port.&nbsp; On the Mini 
				Gemini-2 use the "HC" port.<br /><br />
		</li>
		<li>
				Please go through the
				<a href="quickstart/index.php" target="_blank" title="This tutorial will help you set started">
				quick start tutorial</a>. You do not have to have the motors connected to do all 
				of the steps in paragraph 3 through 8.  
				The mount will beep at you, but it does not hurt anything.
		</li>
		<ul style="list-style-type:square">
		<li>
			Make sure you have your mount type set correctly.<br /><br /></li>
					<li>
					Set you Longitude, Latitude and time zone. The
					<a href="http://www.gemini-2.com/lat_long_from_address.php" target="_blank" title="Computes your latitude, longitude from your address.">
					Compute Lat, Long from your address</a> will help you do 
					this correctly. It can compute for almost any address in the 
					world.
				<br /><br /></li>
				<li>
					Input your local time correctly.&nbsp; Make sure to count for 
					Daylight saving time.&nbsp; The Computation above also gives you the correct "Time-Zone-Offset" to use.
				<br /><br /></li>
			</ul>
		<li>
				You really want to
				<a href="limits.php" target="_blank" title="Explains Limits and helps you set them.">
				set your "Limits"</a> so that you do not damage the mount or 
				telescope.
		<br /><br /></li>
		<li>
				Connecting to your computer.
		</li>
		<ul style="list-style-type:square">
			<li>Connecting via Ethernet directly to a computers Ethernet port.
			</li>
			<ul style="list-style-type:disc">
			<li> You will need to determine the default gateway of your network.  
			</li>
			<ul style="list-style-type:circle">
			<li>
				Click Start &gt; All Programs &gt; Accessories &gt; Command Prompt.
				OR
			<br /><br /></li>
				<li>
				in Windows 10 right mouse click the start icon and select 
				"Windows Power Shell (admin)"
				<br /><br /></li>
				<li>When Command Prompt is open, type the following command: ipconfig | findstr /i "Gateway"&nbsp;&nbsp; 
				You normally can copy and past the command.
				<br /><br /></li>
				<li>You should see your default gateway (router) IP address is 
				xxx.xxx.xxx.xxx an example might be: 192.168.0.1
				<br /><br /></li>
			</ul>
			<li>If you are going to directly connect the Gemini-2 to a Ethernet port of a computer, you will have to modify the 
			<a href="crossovernetwork.php" target="_blank">Computer's Ethernet port to a Static IP address</a>.
			<br /><br /></li>
			
				<li>Set the IP address on the <a href="/hc/En-networkmenu_A.php" target="_blank" title="Set network to DHCP.">
			hand control</a> to Static by unchecking the DHCP checkbox.
			<br /><br /></li>
				<li>Make sure that the IP address you set in the hand controller 
				IS NOT the same one you set for your computers Ethernet port.
			<br /><br /></li>
			</ul>
			<li>If you are 
			going to connect the to your network via a Ethernet switch or 
			router, then you want to make sure the Gemini-2 is set for DHCP.&nbsp; 
			Do this on the
			<a href="/hc/En-networkmenu_A.php" target="_blank" title="Set network to DHCP.">
			hand control</a>.
			<br /><br /></li>
		    </ul>
		<li>
		Now make sure you can see the WEB interface of the Gemini-2 controller.  
		</li>
		<ul style="list-style-type:square">	
		<li>
			Open up a Web browser such as Firefox or Chrome.<br /><br /></li>
			<li>
			In the address bar, type the IP address that is found in the 
			<a href="hc/En-networkmenu_A.php" target="_blank">Hand 
			Controllers Network page</a>. An example might be http://192.168.0.111</li>
			<br /><br ?><li>
			When the login box appears, type "admin" for the user (without the 
			quotes), and leave the password blank.&nbsp; Hit "Enter"
			<br /><br /></li>
			<li>
			If you cannot connect to the Web Interface, you will not be able to 
			connect to the ASCOM Gemini.net Driver.
			<br /><br /></li>
		</ul>
		<li>
				<a href="configuringASCOMfirsttime.php" target="_blank">Configuring ASCOM the First Time</a> is important to keep it 
				from writing over all the setting you just made.
		<br /><br /></li>
		<li>
				Setting 
				<a href="configuringEthernetASCOMdriver.php" target="_blank">ASCOM to use the Ethernet Port</a>.&nbsp; 
				Instructions on how to set up the Ethernet port.
		<br /><br /></li>
		<li>
				Please go through the <a href="hc/index.php" target="_blank">Hand Controller Tutorial</a>.
		<br /><br /></li>
		</ol>
		
		 
		</td>
	</tr>
</table>
<!--
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
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
-->

 <table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on June 25, 2018
		</td>
	</tr>
</table>



</body>




<?php include("bottom.php"); ?>



