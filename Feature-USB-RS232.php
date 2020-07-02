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
		<td class="h3">How to make a USB cable for the Feature Port.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">The Feature port of the Gemini-2 has 2 TTL 3.3Volt 
		Serial ports.&nbsp; See below for Pinout.</td>
	</tr>
	<tr>
		<td class="style7">
		<img alt="Feature Port" height="554" src="gemini-images/FTDI-USB/Feature_Port.jpg" width="436" /></td>
	</tr>
	<tr>
		<td class="style6">We are going to connect a FTDI - USB to 3.3V TTL 
		converter cable to pins 8, 7 and 6.&nbsp; This is the microprocessors 
		serial port 0, the default serial port for the processor.&nbsp; But when 
		configuring the speed for this port in the web interface on the Serial 
		Port tab, it will be called Serial Port 3.</td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">Parts that you will need to make the cable are:<br />
		<ol><li>
			FTDI cable part number TTL-232RG-VSW3V3-WE<ol>
				<li>Source -
				<a href="http://www.mouser.com/ProductDetail/FTDI/TTL-232RG-VSW3V3-WE/?qs=%2fha2pyFadujx5k75gqjHkmpAn3IlpKKaC1rnK7I50i9vxTXezB1X3Rvwf6fld%2f0l" target="_blank">
				Mouser</a>,
				<a href="http://www.digikey.com/product-search/en?x=20&amp;y=16&amp;lang=en&amp;site=us&amp;KeyWords=TTL-232RG-VSW3V3-WE" target="_blank">
				Digikey</a>,
				<a href="http://www.futureelectronics.com/en/Search.aspx?dsNav=Ntk:ManufacturerPartNumberUpshiftedSearch%7c*TTL%2f-232RG%2f-VSW3V3%2f-WE*%7c1%7c,Ny:True,Nea:True" target="_blank">
				Future Electronics</a>,
				<a href="http://components.arrow.com/part/detail/53349221S27669N4933?region=na" target="_blank">
				Arrow Electronics</a>,
				<a href="http://apple.clickandbuild.com/cnb/shop/ftdichip?productID=126&amp;op=catalogue-product_info-null&amp;prodCategoryID=102" target="_blank">
				FTDIchip</a>.</li>
			</ol>
		</li>
			<li>A RJ45 Male 8C8P connector.&nbsp; Available almost everywhere.</li>
			<li>Small Heat Shrink tubing.</li>
			<li>Tools<ol>
				<li>RJ45 crimper</li>
				<li>Heat shrink gun, a hair dryer will probably work.&nbsp; One 
				from
				<a href="http://www.harborfreight.com/1500-watt-dual-temperature-heat-gun-572-1112-96289.html" target="_blank">
				Harbor Freight</a> works great.</li>
				<li>Soldering Iron 30W, and rosin core solder, Again
				<a href="http://www.harborfreight.com/catalogsearch/result?q=Soldering">
				Harbor Freight</a> or
				<a href="http://www.radioshack.com/family/index.jsp?categoryId=2032313&amp;sr=1&amp;origkw=Solder">
				Radio Shack</a></li>
				<li>Wire Strippers</li>
			</ol>
			</li>
		</ol>
		<p>&nbsp;</p>
		</td>
	</tr>
	<tr>
		<td class="style6">There are 6 wires on the end of the cable.&nbsp; They 
		are:<br />
		<ol><li>
		Red Color&nbsp; 
			Power VCC not used</li>
			<li>
			Black Color&nbsp; Power/Signal GND&nbsp; Used</li>
			<li>
			Yellow Color Signal RXD used</li>
			<li>
			Orange Color Signal TXD used</li>
			<li value="8">
			Green Color&nbsp; Signal RTS&nbsp; not used</li>
			<li>
			Brown Color Signal CTS&nbsp; not used.</li>
		</ol>
		<br />As you can see, we are only going to use the Black, Yellow and Orange 
		wires.<br />
		<br />The Black wire is going to go into Pin 8 of the RJ45 connector.
		<br />The Orange wire is going to go into Pin 7 of the RJ45 connector.
		<br />The Yellow wire is going to go into Pin 6 of the RJ45 connector.
		
		</td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style7">
		<a href="gemini-images/FTDI-USB/cable-spliced.jpg">
		<img alt="" height="506" src="gemini-images/FTDI-USB/cable-spliced_small.jpg" width="900" class="auto-style1" /></a></td>
	</tr>
	<tr>
		<td class="style7"><a href="gemini-images/FTDI-USB/connector.jpg">
		<img alt="" class="auto-style1" height="506" src="gemini-images/FTDI-USB/connector_small.jpg" width="900" /></a></td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



