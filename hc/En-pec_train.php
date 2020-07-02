<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Mount Menu</title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

<style type="text/css">
.auto-style1 {
	margin-right: 0px;
}
</style>

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
			<area coords="20, 132, 437, 217" href="En-pec_training.php" shape="rect" />
			<area coords="310, 522, 434, 601" href="E018.php" shape="rect" />
		</map>
		<img height="611"src="En-Images/En-pec_train.jpg" width="450"usemap="#ImgMap0" class="auto-style1" /></td>
		
		<td width="10px"></td>
		<td class="style6">
		<br />
		<br />
		This is the PEC menu when the PEC has not been trained.&nbsp; Clicking 
		on the Train PEC button will take you to a menu that looks like the main 
		menu.<br /><br />
		Warning:<br />
		Note that if you are using PemPro or the Gemini.net driver to build your 
		PEC data, that the "Include PEC Data" check box as talked about on page
		23 of the
		<a href="
/Gemini2_drivers/Gemini_Telescope_Net_Installation_and_Operation.pdf" target="_blank">Gemini.net ASCOM manual</a> is most important.  Using PemPro, which requires use of the Gemini.net driver will not
		store a Pec curve in the default Gemini.net data that is stored on your 
		PC and can be uploaded upon connection of this driver.<br /><br />
		If you do not go back and have the Gemini.net driver get the PEC curve from the Gemini-2, 
		before disconnecting the Gemini.net ASCOM driver from the Gemini-2, and 
		happen&nbsp; leave the "Include PEC Data" check box checked, then the
		next time you connect the Gemini.net driver to the Gemini-2, any saved PEC curve will be wiped out.&nbsp; 
		See image below.</td>
	</tr>
</table>
<table align="center" style="width: 900px">	
<tr><td> 
	<img alt="" height="291" src="En-Images/save_Pec_check_box.jpg" width="872" /></td> </tr>
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


