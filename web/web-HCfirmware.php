<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="../gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">

<body>


<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		Please Note: These are demo pages from http://www.gemini-2.com/web/web-HCFirmware.php  <br />
		You have to connect to your own gemini-2 units web interface and browse to
		<a href="http://gemini/sd.cgi" target="_blank">http://gemini/sd.cgi </a><br />
		Please note that this link only works if your computer system will see the Gemini-2 unit
		using NETBIOS, and is connected and turned on.  You can also try http://YourGemini2IPAddress/sd.cgi
		Replace YourGemini2IPaddress with the IP address from your units hand controller. </td>
	</tr> 
	</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		If you browsed to this page directly, it is normally selected by doubleclicking on the SD Card tab on the
		web interface home page, or doubling on the HCfirmware directory on that page.
		Please read the whole page before preceding to upload any files.</td>
	</tr> 
	<tr>
		<td class="style7">
		<map id="ImgMap0" name="ImgMap0">
			<area coords="12, 1007, 79, 1039" href="index.php" shape="rect" />
		</map>
		<img alt="" height="1081" src="images/sdcard.jpg" usemap="#ImgMap0" width="900" /></td>
	</tr> 
	</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		To get to the HCFirmware directory of the HC card, DoubleClick on the HCFirmware 
		directory listed above.&nbsp; You should then get this web page as 
		below.</td>
	</tr> 
	<tr>
		<td class="style7">
		&nbsp;</td>
	</tr> 
	<tr>
		<td class="style7">This web page will allow you to upload one file to 
		the micro_SDcard in the Gemini-2 one at a time.</td>
	</tr> 
	<tr>
		<td class="style6"><ul><li>Now that you have the Web interface pointed 
			into the HCFirmware directory, you can upload catalog files to it 
			one at a time.&nbsp; You can download only the catalogs
			<a href="http://www.gemini-2.com/firmware1/current/catalogs.zip" target="_blank">
			here</a>.&nbsp; Unzip the catalogs to an empty directory. </li>
			<li>Use the browse button next to the empty box to locate the catalog file you want to 
			upload.&nbsp; Then click send.</li>
			<li>Now this only puts it into the micro-SDcard in the main unit.&nbsp; 
			To get it to upload to the hand controller do one of the following.<ul>
				<li>In the hand controller use Menu--&gt;HC--&gt;Upload Files.&nbsp; 
				Let the upload finish before doing the next one.</li>
				<li>Unplug and then replug in HC.&nbsp; Please let each catalog 
				file upload before doing the next one.</li>
			</ul>
			</li>
			<li>The reason I state do one at a time, is some of the catalogs are 
			+500K and uploading more than one at a time can cause the HC to 
			malfunction.</li>
		</ul></td>
	</tr> 
			<tr><td></td></tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Oct 1, 2015
		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



