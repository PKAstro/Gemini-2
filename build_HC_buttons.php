<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller Build HC Buttons</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<style type="text/css">
.auto-style1 {
	border-width: 0px;
}
.auto-style2 {
	border-style: solid;
	border-width: 2px;
}
</style>



<script type="text/javascript" src="xweb-popup.js"></script>



</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Building HC button Back Grounds</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">V5.10 has a new feature that allow for the 
		customization of the Hand Controller buttons background images.&nbsp; These 
		background images are first created in an graphics program as a bmp or 
		jpg file. Then a special file is used to convert them to files that can 
		be uploaded to the hand controller.&nbsp; The program generates a xxx.bin 
		file, and that has to be renamed to xxx.b16<br />
		The buttons 
		name has it's first letter start with either G, B, or R for Green, Blue or 
		Red.<br />
		The next letter in the file name is either _ for button not pushed or P 
		for button pushed.<br />
		There are 3 sizes of buttons:&nbsp; 70x40, 140x40 and 220x40 pixels.&nbsp; 
		One of these make up the next part of the file name.&nbsp;&nbsp; There 
		are also several other displayable items, Directional buttons which<br />
		are 78x78, Checkboxes which are 24x24 and Radio buttons which are 21x21.&nbsp; There are 6 
		backgrounds for each size of button.&nbsp; 2 Green, 2 Blue and 2 Red.&nbsp;<br />
		Please note that while checkboxes are 24x24, the use 48x48 of the screen 
		for activation. &nbsp; This is to make them easier to hit. <br />
&nbsp;<br />
		The buttons are a specific size and file name.&nbsp; <a href="button_file_names.php" target="xPopUp" title="button details" onclick="xPopUp(this.href, 'location=no,menubar=yes,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',900,1100,'pixel','10','10'); return false;">Here's the list</a>		<ol>
			<li>Here is an example of the Green un-pressed buttons in jpg&nbsp;format 
			that I created:<br /><br /></li>
			 
			 <a href="downloads/HC-buttons/HC-buttons.zip" target="_blank">			 
			 <img alt="" height="40" src="downloads/HC-buttons/G_70x40.jpg" width="70" class="auto-style1" /></a>&nbsp;&nbsp;
			 
			 <a href="downloads/HC-buttons/HC-buttons.zip" target="_blank">			 
			 <img alt="" height="40" src="downloads/HC-buttons/G_140x40.jpg" width="140" class="auto-style1" /></a>&nbsp;&nbsp;
			
			<a href="downloads/HC-buttons/HC-buttons.zip" target="_blank">			
			<img alt="" height="40" src="downloads/HC-buttons/G_220x40.jpg" width="220" class="auto-style1" /></a>&nbsp;&nbsp;
			
			<a href="downloads/HC-buttons/HC-buttons.zip" target="_blank">			
			<img alt="" height="78" src="downloads/HC-buttons/G_78x78.jpg" width="78" class="auto-style1" /></a><br />
			Click on any of the images to 
			download these four examples.<br /><br />
			<li>
			I did not create a new Checkboxs or Radio buttons as I find the 
			defaults to be fine.</li>
			<li>
			Once you create a jpg similar to the above buttons for both the 
			pressed and un-pressed state, you have to then create a xxxxx.bin 
			file, then you will rename the xxxxx.bin file to xxxxx.b16</li>
			<li>
			Here is a link to the
			<a href="downloads/HC-buttons/bmp2h_conv.zip" target="_blank">
			program</a> you use to convert the jpg or bmp to a .bin file.&nbsp; 
			You will need to download it and unzip it.&nbsp; It requires no 
			installation at all.&nbsp; Just run it.</li>
			<li>
			Also later on, Rene suggested using bmp instead of jpg for the 
			source buttons.<br /><br /></li>
			</ol>
			<a href="downloads/HC-buttons/bmp2h_conv.JPG" target="_blank">
			<img alt="" class="auto-style2" height="670" src="downloads/HC-buttons/bmp2h_conv_small.JPG" style="float: right" width="900" /></a>
			</td>
			</tr>
			</table>
	<table align="center" style="width: 900px">
		<tr>
			<td class="style6">			<br />
			<ol start="5"> <li>
			The program is shown with the G_70x40.jpg file loaded.&nbsp;&nbsp; Just use 
			the Load and browse to the file you want to convert.&nbsp; Also make 
			sure that the radio buttons on the right side of the program is 
			selected as above.</li>
			<li>
			Now to save the file, hit "Generate" at the top and a Windows 
			Explorer window will pop-up.&nbsp; Select the location you would like to 
			save the 
			file.&nbsp; In this case name the file G_70x40 and leave the 
			extension off.&nbsp; The program will give it the name G_70x40.bin&nbsp; 
			All you have to do is rename it to G_70x40.b16</li>
			<li>
			Now it is ready to put in the HCFirmware directory of the main units 
			micro SDcard.&nbsp; You can either un-plug and plug in the hand 
			controller or go into the Menu-&gt;HC-&gt;SD CARD and hit "Upload Files".</li>
			<li>
			You can do all the backgrounds one at a time, or do them all at 
			once.&nbsp;&nbsp; PS, if you don't like one of the files, just use 
			the new "Delete Image" button under the SD card menu, to remove it.<br /><br />&nbsp; 
			Have fun customizing your hand controller.&nbsp; </li>
			
			</ol>
			</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



