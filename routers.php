<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

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
		<td class="h3">Expand Router's IP Range</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
	<td class="style6">
	Normally different routers come with different Router IP address and networks assigned.  For instant, if your router is a Netgear,
	is is a very good possibility that is base IP address is 192.168.1.1, while a D-Link will probably have 192.168.0.1 as it's base address.&nbsp;&nbsp; 
	There is a way to let these two different network ranges work together.&nbsp; 
	Want we have to do is change the network mask.&nbsp; Normally the network 
	mask in either of the router brands would be 255.255.255.0&nbsp; This limits 
	the router to 256 addresses starting at it's base address.&nbsp; Now if you 
	have a Netgear for instant, with a base address of 192.168.1.1 and it's 
	network mask is 255.255.255.0 then it cannot see the default address of the 
	Gemini-2 which is 192.168.0.111<br />
	But if you change the network mask in the netgear to 255.255.254.0 then it 
	can see the Gemini-2 default address.&nbsp; This gives the router access to 
	512 IP addresses spanding from 192.168.0.1 through 192.168.1.255<br />
	This is an easy way to make sure a Netgear Router can see the default IP 
	address of the Gemini-2. Notice that the D-Link is already in the default IP 
	address range of the Gemini-2.</td>
	</tr>

			<tr>
		<td class="style7">
		<br />
		<a href="gemini-images/Routers/Netgear_genie.jpg" target="_blank">		
		<img alt="" height="355" src="gemini-images/Routers/Netgear_genie_small.jpg" width="900" class="auto-style1" />
		</a>
		<br /> click on image to see larger view</td>
	</tr>
	<tr><td class="style6">
	In the above Netgear picture, if you change the default 255.255.255.0 to 255.255.254.0 then it will be able to see the
	Gemini-2 static IP address of 192.168.0.111.  This is especially helpful if the Gemini-2 did not pick up a DHCP address
	from the router and defaults to it's static IP.  Without this change, you would not be able to see the Gemini-2 if it
	goes to the default static IP address.</td></tr>
	<tr>
		<td class="style7">
		<br />
		<a href="gemini-images/Routers/D-Link.jpg">
		<img alt="" class="auto-style1" height="664" src="gemini-images/Routers/D-Link_small.jpg" width="900" /></a>
		<br /> click on image to see larger view</td>
	</tr>
	<tr><td class="style6"><br />
	Now the D-link router has a default base address of 192.168.0.1, and with an Net mask of 255.255.255.0 it has a total
	of 256 IP address it can handle.&nbsp; Now both the Netgear and the D-Link 
		can only assign DHCP address across 256 addresses.&nbsp; The Netgear can 
		only do it from it base address while the D-Link can possibly cross 
		network boundaries, but the max is still only 256 addresses.<br />
		If you change the netmask in a D-Link, to 255.255.254.0 it can see a 
		total of 512 IP address, which would be from 192.168.0.1 through 
		192.168.1.255.<br />
		<br />
		I have given an example of the pages you have to change in each type of 
		Router, but I cannot cover all makes and models.&nbsp; You will have to 
		do some studying of your routers manual to find where to change the 
		local network mask.</td></tr>
</table>

</body>




<?php include("bottom.php"); ?>



