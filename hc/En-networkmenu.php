<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Network Menu</title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width: 900px">
	<tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click on green button to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">	<tr>
		<td class="style7" width="450px">
		<map id="ImgMap0" name="ImgMap0">
			<area coords="306, 520, 438, 598" href="E018.php" shape="rect" />
			<area coords="97, 56, 363, 134" href="En-IPsettingmenu.php" shape="rect" />
			<area coords="98, 165, 363, 249" href="En-IPnetmask.php" shape="rect" />
			<area coords="98, 284, 361, 367" href="En-IPdefaultgateway.php" shape="rect" />
			<area coords="99, 399, 361, 480" href="En-IPDNSserver.php" shape="rect" />
		</map>
		<img height="611"src="En-Images/En-Networkmainmenu.jpg" usemap="#ImgMap0" width="450"/></td>
		
		<td width="10px"></td>
		<td class="style6">
		Network Setting menu<br />
		This is where you can set up your network setting.&nbsp; It is also 
		where you will see what the Gemini has set the IP address to if you are 
		using DHCP setting.&nbsp; Notice that in the picture at the left that 
		the IP address is 192.168.0.150, this is not the default IP address of 
		192.168.0.111, because it was set by DHCP.&nbsp; There is a web page 
		that describes how to setup and connect your Gemini to your computer. 
		See http://www.gemini-2.com/ConnectingtoG2.php 
		</td>
	</tr>
</table>
<!--
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		&nbsp;</td>
	</tr>
</table>
-->
</body>

<?php include("bottom.php"); ?>


