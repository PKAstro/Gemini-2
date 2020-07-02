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
		<td class="h3">Replacing the Blue HC PCB</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">This page is going to show you how to replace the 
		Blue Board HC with a new unit.&nbsp; You will be removing one existing 
		connector, and adding two more connectors.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		Here are the phycial
		Items you are going to need.
		<ol>
			<li>The replacement Board from&nbsp;
			<a href="http://store.gravitech.us/arlpwi2tftto.html" target="_blank">
			ARM7 LPC2378 with 2.8" TFT Touch Screen LCD 240 x 320 BlueScreen</a></li>
			<li>The Serial RS-232 Gemini-2 Cable from Losmandy
			<a href="http://www.losmandy.com/access.html" target="_blank">GCC 
			GEM 2</a> or you can make one of your own following the wiring 
			diagrams
			<a href="http://gemini-2.com/cable_wiring.php" target="_blank">here</a> or 
			<a href="http://gemini-2.com/Losmandy_Serial_Cable.php" target="_blank">here</a>.</li>
			<li>A null modem cable
			<a href="https://www.cablewholesale.com/products/computer-products/computer-adaptors/product-31d1-28200.php" target="_blank">
			adapter</a>.&nbsp; This reverses pins 2 and 3.&nbsp;
			</li>
			<li>The replacement connectors.&nbsp; I got mine from Digikey.com 
			here are the part numbers.<ol>
				<li>One each  
				<a href="http://www.digikey.com/product-search/en?lang=en&amp;site=us&amp;keywords=A34262-05-ND&amp;x=0&amp;y=0" target="_blank">
				A34262-05-ND</a>&nbsp; manufacturer TE Connectivity part number 
				9-146303-0-05</li>
				<li>One each 
				<a href="http://www.digikey.com/product-search/en?KeyWords=A34262-08-ND&amp;WT.z_header=search_go" target="_blank">
				A34262-08-ND</a>&nbsp; manufacturer TE Connectivity part number 
				9-146304-0-08 </li>
			</ol>
			</li>
			<li>A soldering pencil, rosin core solder (small diameter), small 
			cutters, small needle nose plyers, and Solder wick.</li>
			<li>A USB cable that has a 
			<a href="gemini-images/BlueScreen/usb-minib-5pin-m-a.gif" target="_blank">mini type connector</a>, to supply +5V to the 
			blue board for powering it. Many cell phones used this type of 
			connect about 3 or 4 years ago, and you still might be able to find 
			one around your house.&nbsp;&nbsp; Even if you use a USB port on 
			your computer to provide the power, that is all this cable will do, 
			as there is no communication through the USB connector of the Blue 
			Graphics Board.</li>
			<li>If your computer does not have a Serial Port, then you are going 
			to need a USB to serial adapter. I suggest one that uses the FTDI 
			chip sets. They are available at
			<a href="http://www.mouser.com/ProductDetail/FTDI/UC232R-10/?qs=sGAEpiMZZMsgIz308WEU05%2fFT98N1WNz5XOIxDVOepk%3d" target="_blank">
			Mouser</a> or
			<a href="http://www.digikey.com/product-detail/en/UC232R-10/768-1014-ND/1836392" target="_blank">
			Digikey</a></li>
			<li>And of course a Windows based computer.&nbsp; I recommend Win 7 
			as that is what I will be demoing with.<br /></li>
		</ol>
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6"">
		The Software you will need is:
		<ol>
			<li>
			Driver for the USB to Serial Adapter.  I will not be covering the installation of these as it depends of which USB to Serial adapter your use.
			</li>
			<li>
			You will need the files in
			<a href="http://gemini-2.com/downloads/BlueScreen/ProgramHC_w_FlashMagic.zip" target="_blank">
			ProgramHC_w_FlashMagic.zip</a>.&nbsp; Please download and unzip this 
			file into a clean directory on your PC.</li>
			<li>
			A micro SDcard with the latest Gemini-2 Hand Controller firmware on 
			it.&nbsp; This can be the one that was in your broken hand controller.&nbsp; 
			You will have to load a new gemHC.bin file onto it, if you take it 
			from your old hand controller, as when that file is programmed into 
			the ARM processor on the display card, it is erased from the 
			mini-SDcard.&nbsp; I recommend you starting fresh by formating the card 
			and putting a fresh load of firmware on it, using a card 
			reader/writer. Use the files
			<a href="http://www.gemini-2.com/firmware1/current/HC_SDcard.zip" target="_blank">
			http://www.gemini-2.com/firmware1/current/HC_SDcard.zip</a> and
			<a href="http://www.gemini-2.com/firmware1/current/gemhc.zip">
			http://www.gemini-2.com/firmware1/current/gemhc.zip</a> to do this.&nbsp; 
			You might also have to use the
			<a href="http://www.gemini-2.com/firmware1/current/catalogs.zip" target="_blank">
			catalog.zip</a> also.</li>
		</ol>
		<p>&nbsp;</p>
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		<hr style="width: 600px" />
		Replacing parts on PCB board.
		
.		<ol start="1">
			<li>You will have to remove the connector P1 from the board.&nbsp; 
			You are going to have to replace it with the <a href="http://www.digikey.com/product-search/en?KeyWords=A34262-08-ND&amp;WT.z_header=search_go" target="_blank">
				A34262-08-ND</a>&nbsp; See how it is installed on the broken 
			board.&nbsp; A movie here</li>
			<li>You will also install <a href="http://www.digikey.com/product-search/en?lang=en&amp;site=us&amp;keywords=A34262-05-ND&amp;x=0&amp;y=0" target="_blank">
				A34262-05-ND</a> on the inside row of P4 on the bottom of the 
			board.&nbsp; This is where the buttons on the back of the HC 
			connect.&nbsp; See your broken board.&nbsp; A movie here.</li>
		</ol>
		
		<p>&nbsp;</p>
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		<hr style="width: 600px" />
		Programming the boot loader.
		
.		<ol start="1">
			<li>
			Next you will put a jumper on the two pins of J1 of the Blue Board.</li>
			<li>
			Plug the LCD board back into the bottom board of the Hand Controller 
			assembly.</li>
			<li>
			Next connect a hand controller cable, through a null modem cable to 
			a USB to Serial adapter into your PC.</li>
			<li>
			You will need to power the Blue board through the micro USB 
			port.&nbsp; It is only used for power.</li>
			<li>After powering up the Blue board, it expects a boot loader to be 
			applied using the Flash Magic program to load the boot loader.&nbsp; The 
			boot loader file is the HC_BL.hex file in the above zip file.</li>
			<li>Use the FlashMagic.jpg file as a demo for the setting.&nbsp; 
			Make sure the Box "Erase all Flash+Code RD Prot" is UNCHECKED.&nbsp; 
			</li>
			<li>Check the box "Erase blocks used by the Hex File.</li>
			<li>Make sure the Select Device is LPC2378.&nbsp; </li>
			<li>Set the com port 
			to what your USB to Serial adapter uses.</li>
			<li>Use the browse button to scroll to the HC_Bl.hex file.</li>
			<li>Make sure "Verfy after programming is Checked.</li>
			<li>Make sure "Fill unused Flash is UN-Checked.</li>
			<li>Click Start.&nbsp; It should only take a couple of seconds to 
			upload the boot loader.</li>
			<li>Unpower the board.&nbsp; Disconnect the hand controller cable.</li>
			<li>Remove the top board from the assembly.</li>
			<li>Remove the jumper from J1.</li>
			<li>Put in the micro SDcard with all the files on it.</li>
			<li>Repower up the blue board.&nbsp; It does not need to be on the 
			bottom board for this step.</li>
			<li>It should flash the firmware and then come up with the message 
			"connecting to Gemini"</li>
			<li>If step 17 worked, then you can unpower the board. Put the 
			assembly back together.</li>
			<li>Connect the Hand controller to the Gemini-2 and see if it 
			connects.&nbsp; If it does, you have successfully reprogrammed the 
			blue board to work with the Gemini-2. Congradulation.</li>
		</ol>
		
		<p>&nbsp;</p>
		
		</td>
	</tr>
</table>
<!--

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
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
</body>




<?php include("bottom.php"); ?>



