<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Configuring the ZyXEL MWR102 for client mode</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">Please be aware that ZyXEL is no longer producing the 
		MWE102, they have replaced it with a MBG2105.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">1.&nbsp; Before powering up the MWE102, on the side 
		is a switch marked "Router" or "AP".&nbsp; Please put the switch into 
		the AP mode.&nbsp; You will connect the short cable supplied from the 
		port marked LAN into the ethernet port of your computer to configure the 
		MWE102.&nbsp; Please note that the 10/100 LAN port on the MWE102 will 
		switch between either a Straight Ethernet cable, or a Crossover Ethernet 
		cable, automatically.&nbsp; This is the first 10/100 device I have seen 
		that will do that.&nbsp; Wish the Gemini-2 would.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">2. The 
		<a href="zyxel/MWR102-UserGuide.pdf" target="_blank">User Guide</a> for the ZyXEL MWR102 does not include how to configure this 
		device as a client Bridge. There is a document that they will email to you that is in Word DocX format, but I have it and converted it
		to pdf format.  We will use that documentent along with additional instructions here.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">3. You are going to have to configure your Laptops 
		Manual IP address in the range of 192.168.100.xxx where xxx is not 001, 
		in order to communicate with the MWE102 to configure it. This document
		<a href="zyxel/MWR102%20Client%20Mode%20Configuration.pdf" target="_blank">
		MWR102 Client Mode Configuration</a> (called configuration guide for the 
		rest of these instructions)explains how to do that.&nbsp; But 
		you also need to do an additional step that I will cover next.&nbsp; So 
		do not close the configuration menu after setting up the site survey and 
		entering your password for your network.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">4. Follow Steps 1-A-B-C in the <a href="zyxel/MWR102%20Client%20Mode%20Configuration.pdf" target="_blank">
		configuration guide</a>&nbsp; according to your 
		computer type to change your computer's IP address.&nbsp; I have 
		instruction also for doing this at 
		<a href="http://gemini-2.com/crossovernetwork.php" target="_blank">http://gemini-2.com/crossovernetwork.php</a>&nbsp; 
		with pictures, but you are going to have to set the IP address to 
		192.168.100.010 or so, instead of the 192.168.0.100 as suggested on that 
		page.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">5. Don't do step D) in the configuration guide yet.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">6. Do the 2. Setting up the MWR102 in the users 
		guide.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">7. Select your Routers SSID from the Site Survey 
		menu.&nbsp; Then enter your security code.&nbsp; Make sure the 
		Pre-Shared Key Format is Passphase.&nbsp; You enter your security key in 
		the Pre-Shared Key box and the hit "Connect"&nbsp; In section 3 it tells 
		you to close the brouser and reset the computer back to<br />
		it's DHCP setting.&nbsp; Don't do that yet.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">8. In the left menu, click on the Network Setting &gt; 
		Lan Interface.&nbsp; You should see a menu similar to Fig 1. below.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		
		<img alt="Set Lan address" height="730" src="zyxel/setLANaddress.jpg" width="795" /><br />Fig 1</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">9. Now in the Router IP address set this IP address 
		to an empty IP address in the range of your normal network setting.&nbsp; 
		This will enable you to get back into this MWR102 network interface 
		using a web browser for any computer on your network without having to 
		reconfigure the network setting of your computer.&nbsp; An example would 
		be 192.168.0.10&nbsp; if your routers Gateway is 192.168.0.1<br />
		If your routers gateway is 192.168.1.1&nbsp; then an example would be 
		192.168.1.10.&nbsp; Now make sure whatever IP address you select, is not 
		used anywhere in your local network by any device.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">10.&nbsp; Keey DHCP as disabled, or you will not know 
		what IP address your router is assigning the MWR102, incase you have to 
		change it's configuration.&nbsp;
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">11.&nbsp; Click Apply changes, and wait for them to 
		take effect.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">12. Now you can close the browser.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">13.&nbsp; Now go back to the network setting in your 
		computer and restore them to DHCP, as stated in step 3 of the 
		Configuration guide.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">14.&nbsp; You can now disconnect the MWR102 from your 
		computer and connect it's LAN port into the Etherport of the Gemini-2.&nbsp; 
		Power on the Gemini-2 and you should be able to see it wirelessly.
		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



