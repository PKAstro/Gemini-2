<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini-2</title>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" /> 


<?php include("topv.php"); ?>




<style type="text/css">
.auto-style1 {
	margin-left: 5px;
	margin-right: 5px;
}
.auto-style2 {
	vertical-align: middle;
}
.auto-style3 {
	border-width: 0px;
	vertical-align: middle;
}
</style>




</head>

<body style="color: #FFFFFF; background-color: #000000">

<table style="width: 750px" align="center">
	<tr>
		<td class="h2"><br />
		Getting GPS Data into the ASCOM Driver interface of Gemini 2
		</td>
	</tr>
	<tr>
		<td class="style6"><br />
		This guide will help you get the 
		GPS data from a GPS connected directly to the computer into the 
		Gemini.net ASCOM driver.&nbsp; This can then be used to update the 
		Gemini-2 mount controller,
		</td>
	</tr>
	<tr>
		<td class="style6"><br />
		Advantages of using 
		a GPS connected directly to the computer.
		<ul><li>Able to get the GPS data into multiple applications such as 
			TheSky, Maxim DL and also the Gemini.net driver. </li>
			<li>USB GPS units are usually much cheaper to purchase than units 
			that connect directly to a mount.</li>
			<li>Most ASCOM drivers for mounts support getting GPS data from the 
			computer.&nbsp; This means if you have multiple types of mounts that 
			run ASCOM, then one GPS might work for all of them.</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td class="style6">
		So lets get started.  Now these instructions only cover configuring the 
		GPS and sending the data to the Gemini 1 or 2 mount.&nbsp; </td>
	</tr>
</table>


<table align="center" style="width: 750px">
	<tr>
		<td>&nbsp;</td>
	</tr>
</table>


<table style="width: 750px" align="center">
	<tr><td class="style6" width="750px" align="left">
		&nbsp;
		&nbsp;1.  <img alt="" height="82" src="gemini-images/ascom/geminitelescopeicon.jpg" width="55" class="auto-style2" />&nbsp;&nbsp;&nbsp;	
		First Click on the Gemini-2 Icon on your Screen 
		
	</td></tr>
	<tr><td class="style6" width="750px" align="left">
		&nbsp;</td></tr>
</table>

<table style="width: 750px" align="center">
	<tr><td class="style6" width="750px" align="left">
	<ol start="2"><li>
		<map id="ImgMap2" name="ImgMap2">
			<area alt="" coords="183, 694, 268, 740" href="#comfiguretelbutton" shape="rect" />
		</map>
		<img alt="" height="814" src="gemini-images/ascom/Ascom-HC.jpg" style="float: right" width="281" usemap="#ImgMap2" /> 
		On this menu click on the <strong>"SETUP"</strong> at the bottom Right 
		of the MENU. This will bring up the next pop-up menu.</li></ol>
	</td></tr>
</table>
<table style="width: 750px" align="center">
	<tr><td class="style6" width="750px" align="left">
	<ol start="3"><li>
			
		<map id="ImgMap0" name="ImgMap0">
			<area alt="" coords="16, 258, 76, 282" href="http://www.gemini-2.com/Gemini2_drivers/Gemini_Telescope_Net_Installation_and_Operation.pdf" shape="rect" target="_blank" />
			<area alt="" coords="20, 11, 247, 44" href="#configuretelescope" shape="rect" />
		</map>
			
		<img alt="" class="auto-style1" height="393" src="gemini-images/ascom/menuselection.jpg" style="float: right" width="388" usemap="#ImgMap0" /><a name="comfiguretelbutton"></a>Select 
		on "Configure Telescope" from this Menu which is the first selection</li></ol>
	</td></tr>
</table>
<br />
<table style="width: 750px" align="center">
	<tr><td class="style6" width="750px" align="left">
	<a name="configuretelescope"></a>
			
		<map id="ImgMap1" name="ImgMap1">
			<area alt="" coords="172, 67, 273, 93" href="#Ethernetmenu" shape="rect" />
			<area href="Gemini2_drivers/Gemini_Telescope_Net_Installation_and_Operation.pdf" shape="default" />
			<area coords="0, 0, 10000, 10000" href="Gemini2_drivers/Gemini_Telescope_Net_Installation_and_Operation.pdf" shape="rect" />
		</map>
		<img alt="" height="581" src="gemini-images/ascom/config-ethernet1.jpg" width="750" class="auto-style3" usemap="#ImgMap1" /><br />
		<a name="gps"></a>Now click on the GPS setting box in the lower middle of the screen. 
		The below menu should pop up.<br />
		<p align="center">
		<map id="ImgMap3" name="ImgMap3">
			<area alt="" coords="151, 292, 231, 321" href="getting-GPS-into-ASCOMdriver.php#gps" shape="rect" target="_self" />
		</map>
		<img alt="" height="342" src="gemini-images/ascom/get-gps.jpg" width="399" usemap="#ImgMap3" /></p>
		<br />
		<ol start="4"><li>There will be several selections we need to change on 
			this screen.<ol>
				<li>The ASCOM driver will configure Precision Pulse Guide and 
				Asynchronous Pulse Guide Correctly when connecting to a Gemini 
				2. See <a href="http://gemini-2.com/definitions.php#pulseguide" target="blank">Pulse Guide</a> 
				under the definitions page for an explanation of these, and the 
				image differences above.</li>
				<li>On a Gemini one these setting should be 
				Asynchronous Pulse Guide is unchecked, and Precision Pulse Guide 
				is checked. Yes I know that you cannot connect a Gemini-1 
				via Ethernet.</li>
				<li>(Gemini-2 only for this step and beyond.) Now click on the 
				black down arrow to the right of the Com Port list box. In the 
				drop down menu, click on Ethernet. A pop-up window should appear 
				that will let you configure the Ethernet setting. If the window 
				doesn't appear, click on the down arrow again, and again click 
				on Ethernet."</li>
			</ol>
		</li>
		</ol>
	</td></tr>
	</table>
<table style="width: 750px" align="center">
	<tr><td class="style7" width="350px">
	<a name="Ethernetmenu"></a><br />
		
		<img alt="" height="303" src="gemini-images/ascom/DHCP-ASCOM_network_selectiom.jpg" width="315" />
		<br />NetBIOS Selected
		</td>
		<td class="style7" width="50px"><a name="Ethernetmenu"></a>OR</td>
		<td class="style7" width="375px"> <br />
		<img alt="" height="303" src="gemini-images/ascom/network.jpg" width="315" />
		<br />NetBIOS Not Selected
		</td></tr>
</table>
<table style="width: 750px" align="center">
	<tr><td class="style6" align="left" style="width: 759px">
	<ol start="5"><li>
	<a name="Ethernetmenu"></a>This is the Ethernet configuration window <br />
		<img alt="" height="294" src="gemini-images/ascom/configureEthernetAscom.jpg" style="float: right" width="305" /></li>
	&nbsp;<ol>
	<li>
		If you cannot connect to the Gemini.net ASCOM driver with the NetBIOS 
		Name Resolution box checked, as on the left picture above, then that probably means that you do not have 
		<a href="Enabling_netbios.php" target="_blank">NETBIOS 
		enabled</a> or working.&nbsp; That really is the best solution.</li>
			<li>
			But if you cannot use NETBIOS, then uncheck NetBIOS Name Resolution, as 
			in the picture on the right, and in the 
			<strong>"Gemini IP address"</strong> block enter the IP address of the Gemini-2 
			Telescope controller as shown on the Gemini-2 hand controller or the 
			Gemini-2 network web page. Do not uncheck "Use UDP port" or change 
			the port number. Do not change 
			User name or password.&nbsp; Keep Bypass proxy checked, and then 
			click OK.</li>
			<li>
			Please note that some firewalls or Routers might block Port 11110.&nbsp; 
			If they do, then you need to unblock them. There is no way that I 
			can cover how to do that.&nbsp; You will have to refer to your 
			firewall or router manual to do that.</li>
		</ol>
		</ol>
		<p>&nbsp;</p>
	</td></tr>
</table>
<table style="width: 750px" align="center">
	<tr><td class="style6">
		Now these instructions only deal with the Ethernet portion of the ASCOM 
		Gemini.net driver.&nbsp; See The ASCOM HELP pages that is included in 
		the driver it self for the rest.</td></tr>
</table>
</body>


<?php include("bottom.php"); ?>




</html>
