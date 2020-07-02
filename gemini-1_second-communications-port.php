<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<style type="text/css">
.auto-style2 {
	border-style: solid;
	border-width: 2px;
}
</style>
</head>

<body style="color: #FFFFFF; background-color: #000000">


<table  align="center" style="width:900px">
	<tr>
		<td class="style6">
		1. This page will teach you how to make a cable that can safely be 
		connected to the to the "DB15 Hand Controller Port" of the Gemini-1.&nbsp; 
		This cable will provide a USB to Serial virtual port into your computer.&nbsp; 
		There are drivers for many different operating systems available.&nbsp; 
		See <a href="http://www.ftdichip.com/Drivers/VCP.htm" target="_blank">
		http://www.ftdichip.com/Drivers/VCP.htm</a>&nbsp; for the different drivers, 
		including MAC OSX, Windows, Windows 8.1 and Linux.
		<!--<br />2. The other thing this cable can be used for is to replace 
		the boot-loader of the main processor if anything goes really wrong, and 
		it seems like the Gemini-2 has died. now 99.9% of the time it is not the 
		boot-loader but the micro-SDcard format messed up, and this cable will 
		not fix that. So don't make the cable just for that reason, this is just 
		added information about what this cable can be used for.-->
		</td></tr>
	<tr>
		<td class="style6"><br />
		<ol>
					<li>A USB to TTL 5V Serial FTDIchip cable. Part number&nbsp; 
					<a href="http://shop.clickandbuild.com/cnb/shop/ftdichip?productID=125&op=catalogue-product_info-null&prodCategoryID=102" target="_blank">TTL-232RG-VIP-WE</a> available from
					<a href="http://www.digikey.com/product-search/en?keywords=TTL-232RG-VIP-WE" target="_blank">
					Digikey</a> or
					<a href="http://www.mouser.com/ProductDetail/FTDI/TTL-232RG-VIP-WE/?qs=%2fha2pyFadujx5k75gqjHkoYcPogD7SIlE6dZpulE3h4Uft8ZSATqhw%3d%3d" target="_blank">
					Mouser</a>.
					</li>
			
					<li>A DB15 Male Connector with Solder cup 
					connections.&nbsp; From
					<a href="http://www.digikey.com/product-detail/en/DA-15P-K87/1003-1885-ND/2581298" target="_blank">
					Digikey</a> from
					<a href="http://www.mouser.com/ProductDetail/HARTING/09642217800/?qs=7xTtp7L5VAcn%2fPcPP6NCZw%3d%3d" target="_blank">
					Mouser</a>
					</li>

					<li>A plastic D-Sub Backshell for covering the 
					connector.&nbsp; From
					<a href="http://www.digikey.com/product-search/en?keywords=1-1991253-5" target="_blank">
					Digikey</a>&nbsp; from
					<a href="http://www.mouser.com/ProductDetail/TE-Connectivity/1-1991253-5/?qs=c%2f3c818u0Z4mKodtYTnNsw%3d%3d" target="_blank">
					Mouser</a></li>

					<li>Some heat shrink to fit over the solder cup 
					connections. </li>

					<li>A short peace of wire.&nbsp; </li>
					<li>A good Soldering Iron, wire cutters and wire strippers, 
					and some way to heat the heat shrink.</li>

		</ol>
		</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		
		<a href="gemini-images/featureport-serial/PC182517.JPG" target="blank">
		
		<img alt="" height="656" src="gemini-images/Gemini1/USB-Serial-cable/TTL-232RG-VIP-WE.JPG" width="900" class="auto-style2" /></a><br />The package as it arrived from 
		Mouser or Digikey, nicely sealed in anti-static packaging.</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/featureport-serial/PC182519.JPG" target="_blank">
		<img alt="" class="auto-style2" height="562" src="gemini-images/featureport-serial/thumbnails/PC182519_small.JPG" width="750" /></a>
		<br /> Cable removed from package, the cable will have an transparent 
		plastic end. </td>
	</tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7">

<img alt="" height="1200" src="gemini-images/Gemini1/USB-Serial-cable/IMG_1671.JPG" width="900" />
	<br /> The parts you will need.</td>
</tr>
	<tr>
		<td class="style6"><br />
		We will use the colored wire table from the FTDI 
		Manual to determine how to wire the cable.
		<hr />
		</td>
	</tr>
	<tr>
		<td class="style7"><br />
		<img alt="" height="477" src="gemini-images/Gemini1/USB-Serial-cable/FTDI_cable_Connections.jpg" width="900" /><br />
		
		</td>
	</tr>
	<tr>
		<td class="style7">
		
		And the chart from the Gemini-1 Users Manual<br />
		<img alt="" height="482" src="gemini-images/Gemini1/USB-Serial-cable/Gemini-1_Manual_table.jpg" width="600" /></td></tr>
</table>
<table  align="center" style="width:900px">

	<tr>
		<td class="style6" width="900">
		Here is how the wires will be connected.
		<ol><li>The Orange Wire (TxD) on the cable will be connected to Pin 11 
			on the DB15 Connector.</li>
			<li>The Yellow Wire (RxD) on the cable will be connected to Pin 15 
			on the DB15 Connector.</li>
			<li>The Red Wire (+5V input) on the cable will be connected to Pin 1 
			on the DB15 Connector. </li>
			<li>The Black Wire (Ground) will need to be connected to two pins of 
			the DB15 connector.<ol type="A">
				<li>&nbsp;&nbsp;This is where the short peace of wire comes in.&nbsp; 
				It will need to be bridged between connector pins 5 and 14.</li>
				<li>The black wire from the cable will need to also go into 
				either pin 5 or 14.</li>
			</ol>
			</li>
		</ol>
		
		</td>
	</tr>
</table>
<table  align="center" style="width:900px">

	<tr>
		<td class="style7" width="900">

		Here a picture of the connector wired.<br />

<img alt="" height="1200" src="gemini-images/Gemini1/USB-Serial-cable/Wired_Connector.JPG" width="900" />

	</td>
	</tr>
</table>


<table  align="center" style="width:900px">

	<tr>
		<td class="style6" width="900">

		Picture of the completed cable: <br />
		<br />
		
				<img alt="" height="828" src="gemini-images/Gemini1/USB-Serial-cable/completed_cable.jpg" width="900" /></td>		
	</tr>
</table>





<table  align="center" style="width:900px">

	<tr>
		<td class="style6" width="900">

		Now Please note that this cable has no electrical isolation built in. I 
		recommend that you provide an USB Isolator such as the one of the below:<br />
				<ul>
				<li>
				<a href="http://www.keterex.com/kxusb150.php" target="_blank">
				http://www.keterex.com/kxusb150.php</a> or same unit at</li>
				<li>
				<a href="http://www.mouser.com/ProductDetail/Keterex/KXUSB-150/?qs=%2fha2pyFadujAILCkpEIfMsVbMBCCnvQep%252baEFHwr61U%3d" target="_blank">
				mouser.com</a></li>
				<li><a href="http://www.olimex.com/dev/usb-iso.html" target="_blank">http://www.olimex.com/dev/usb-iso.html</a>
				</li>
				</ul>
				</td>		
	</tr>
</table>




<table  align="center" style="width:900px">

	<tr>
		<td class="style7" width="900">


		<img alt="" height="924" src="gemini-images/Gemini1/USB-Serial-cable/OLIMEX.jpg" width="900" />
		<br />		Here a picture of the OLMEX USB ISOLATOR.<br />

		</td>
	</tr>
</table>

<table  align="center" style="width:900px">

	<tr>
		<td class="style7" width="900">


		<img alt="" height="900" src="gemini-images/Gemini1/USB-Serial-cable/cable_with_OLMEX.jpg" width="900" />
		<br />		Cable with the OLMEX USB ISOLATOR attached.<br />

		</td>
	</tr>
</table>



<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Jun 29, 2015
		</td>
	</tr>
</table>


</body>




<?php include("bottom.php"); ?>



