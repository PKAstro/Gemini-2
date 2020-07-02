<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="../gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">
	<tr>
		<td class="style7">This page lets you select any of the Stars/objects in 
		the extensive list of catalogs, and then slew to them.<br /> Please 
		note: Only targets above the horizonal will be shown.</td>
	</tr> 
	<tr>
		<td class="style7">
		
		
		<map id="ImgMap0" name="ImgMap0">
			<area alt="" coords="4, 537, 47, 571" href="index.php" shape="rect" />
		</map>
		
		
		<img alt="" height="639" src="images/objects.jpg" width="900" usemap="#ImgMap0" /></td></tr>
	<tr>
		<td class="style6">Select that catalog from the list on the Left, and 
		then click on the desired object from the list on the right.&nbsp;
		If you then hit select object from the menu box Select Object, the mount 
		will then present you with a Select Object menu (see below) and a
		GO TO object button. <br /></td>
	</tr> 
	</table>
<table align="center" style="width: 900px">
		<tr>
		<td class="style7"><br />
		<map id="ImgMap1" name="ImgMap1">
			<area alt="" coords="3, 640, 82, 682" href="index.php" shape="rect" />
		</map>
		<img alt="" height="683" src="images/objects1.jpg" usemap="#ImgMap1" width="900" /></td>
	</tr> 
	<tr>
		<td class="style6">There is also a Enforce Flip checkbox.&nbsp; If you 
		select this, the mount will try to do a Meridian Flip to reach the 
		object, but only if it is safe to do one. <br />
		The Home button is for going to the main menu</td>
	</tr> 
	<tr><td class="style6">You can add your own catalogs into this selection of catalogs if you wish.&nbsp;
		<a href="http://garriou.didier.perso.neuf.fr/gemini_anglais.html" target="_blank">Mr. Didier Garriou web site</a> as a great selection of catalogs that he 
		has built or modified, and also the instructions on how to add them to 
		the Gemini-2, this site is in both French and English.&nbsp; His 
		instructions tell you how to put them into the hand controller.<br />
		If you want to put then into the main unit follow these instructions:<ol>
			<li>establish a fixed IP to your computer (eg 192.168.0.1)<br />
			Control Panel / Network Connections / network connection properties 
			/ TCP IP <br />
			</li>
			<li>use your web browser by connecting to the address 192.168.0.111 
			or if you already have a DHCP connection, then you can skip steps 1 
			and 2.&nbsp;&nbsp; You can also try <a href="http://gemini">http://gemini</a> 
			and see if that will connect instead of having to type in an IP 
			address.<br />
			</li>
			<li>in the new window : username = admin and validated without 
			password<br />
			</li>
			<li>Gemini homepage appears<br />
			click on "SD Card" then "Catalogs" </li>
			<li>select the new catalog (click on Browse, select .guc file)<br />
			and press Submit </li>
		</ol>
		</td></tr>
					<tr><td></td></tr>
</table>
<table align="center" width="900px" class="tableborder1">
	<tr><td class="style6-border-white"><em>If your Gemini-2 is connected Via Ethernet, 
		turned ON, and 
		Responds to <a href="http://gemini/cats.htm" target="_blank">http://gemini</a> then this link 
		will open this page in the Gemini-2 web interface, after prompting for a 
		log-in.</em></td></tr>

</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Aug 9, 2016
		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



