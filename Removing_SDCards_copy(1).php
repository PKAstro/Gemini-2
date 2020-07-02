<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Rwmoving/Installing SDcards</title>


<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />




<?php include("topv.php"); ?>




</head>

<body style="color: #FFFFFF; background-color: #000000">

	<table align="center" style="width: 750px">
		<tr>
			<td class="h2">
				Removing and Reinstalling <br/>the micro-SDcards in the Gemini 2 
				Hand Controller and Main Unit<br /><br />
			</td>
		</tr>
		<tr class="style6">
			<td>During the development phase of Gemini 2, you will likely need to update the firmware in 
				the hand controller and main unit fairly frequently. While this will normally be done through 
				the web interfaceor the FTP interface, or the new Firmware 
			loader program, it is possible that you may need 
				to disassemble the hand controller or remove the cover from the main board. Please be aware of 
				these warnings if you do so.
			</td>
		</tr>
		<tr class="style6">
			<td class="style14"><br/>
				Please note, that if you damage either the Hand Controller 
				or the Gemini Main Unit, you are doing this at your own risk. Repair will be solely at 
				Losmandy's discretion, and you may be liable for repair cost and shipping cost.
			</td>
		</tr>
		<tr>
			<td class="style6"><br/>1. When disassembling the hand controller, be forewarned 
				that the gasket that is between the LCD and top plastic cover sometimes sticks to the LCD. 
				It is possible for the LCD to be pulled off the base PCB that it is mounted to. The best 
				way to remove the top cover after removing the 4 screws is to gently push down on the LCD 
				glass while slowing loosing the top cover, separating the glass from the gasket.&nbsp; 
			Putting the Hand Controller in a warm place also might help loosen 
			the gasket. If you place it in direct sunlight, turn the LCD down, 
			so that the sunlight is not shining on it. Direct sunlight can 
			damage LCD's.</td>
		</tr>
		<tr>
			<td class="style6"><br/>2. Also while apart, there are icons at the bottom of the 
				LCD screen. They are touch sensitive. If you are touching any of these while you apply 
				power to the LCD module, or hand controller the hand controller will not boot. The 
				gasket can also cause this same effect if pushing on these icons to hard. In later 
				units this gasket has been shaved a few hundred’s of a mm to prevent this. 
			</td>
		</tr>
		<tr>
			<td class="style6"><br/>3. If you remove the front panel of the main Gemini unit, do 
				not plug the motor cables into the unit. Sideways pressure on the motor connectors can 
				break them. The front panel	provides the mechanical stability to keep this from happening. 
				You can safely power up the Gemini 2 without motors connected. You might receive motor 
				lag messages, but that is normal, when no motors are connected. 
			You can stop this by using the Track menu and select "Terrestrial" 
			as the speed.</td>
		</tr>
		<tr><td>
		</td></tr>
		<tr>
			<td class="style6">The microSDcards supplied by Losmandy are 2GB cards 
			for both the main unit and hand controller.&nbsp; This 
			is the recommended size. Both SD and SDHC types are supported.&nbsp; 
			Use the default Fat size for the 2Gbyte size of microSDcards to 
			format them.&nbsp;&nbsp; 4GB is the maximum size but has not been tested by the writer of the 
			firmware. If using 4GB microSDcards, they MUST be formatted using 
			Fat32.&nbsp; The default under Windows 7 is FAT64, Do not use this for 
			formatting the SDcards, it will not work<br />
			<br />
			This instructions of updating the main card is at
			<a href="rebuildmainSDcardfirmware.php" target="_blank">Updaing SDcard with reade/writer</a></td>
		</tr>
	</table>
	

	<p class="h2">All Pictures open larger pictures in a new window</p>

		
		

<table align="center" cellpadding="4" cellspacing="4" style="width: 900px" class="style23">
<!-- Row 1 --> 
	<tr class="style12">
		<td class="h2" width="450px">Removing and Reinstalling the micro-SDcard in the Hand Controller</span>
		</td>
		
		<td class="h2" width="450px">
			Removing and Reinstalling the micro-SDcard in the Main Unit</span>
		</td>
	</tr>
</table>


<table align="center" cellpadding="4" cellspacing="4" style="width: 900px" class="style23">
		<tr>
		<td class="style12" width="450px">
You can see a short movie of me removing and replacing the 
			<a href="updatingsirmwareselection_files/Movie/HC-remove-replace-SDcard.wmv">
			hand controller micro-SDcard here.</a>
			 <br />For a 
		<a href="http://www.youtube.com/watch?v=rlwZ-KRM5dA&amp;feature=youtube_gdata">U-Tube version click here</a></td>
			
			
		<td class="style12" width="450px">
			To See a movie of removing main micro SDcard either
		<a href="updatingsirmwareselection_files/Movie/Gemini-2-micro_SDcard-removeal-Replace.wmv" target="_blank">
		click here for one from this site</a>,<br />or here for a
		<a href="http://www.youtube.com/watch?v=pKflaCwZF1M&amp;feature=youtube_gdata">
		U-tube version</a>.</td>
		</tr>
	</table>


<!-- Row 2 --> 
<table align="center" cellpadding="4" cellspacing="4" style="width: 900px" class="style23">
	<tr>
		<td class="style11" style="width: 450px; height: 357px;"><a href="gemini-images/HandcontrollerImages/1-RemoveScrews.JPG"target="_blank">
			<img alt="Remove Screws" height="192" src="gemini-images/HandcontrollerImages/1-RemoveScrews_small.JPG" style="float: left" width="256" class="style19" /></a>
				1.The first step is to completely remove the 4 
			screws from the back.
		</td>
				
		<td class="style11" style="width: 450px"><a href="gemini-images/MainImages/MainUintCoverV.jpg"target="_blank">
			<img alt="" height="329" src="gemini-images/MainImages/MainUintCoverV_small.jpg" width="256" style="float: left" class="style21" /></a> 
		1. 
				Gemini with cover in place.&nbsp; Remove the 6 Allen head 
				screws. 1/16 Inch Allen wrench will be necessary
		</td>
	</tr>
</table>

<!-- Row 2 --> 
<table align="center" cellpadding="4" cellspacing="4" style="width: 900px" class="style23">
	<tr>
		<td class="style11" style="width: 450px">
			<a href="gemini-images/HandcontrollerImages/2-PryOnFace.JPG"target="_blank">
			<img alt="Pry off Plastic Cover" height="192" src="gemini-images/HandcontrollerImages/2-PryOnFace_small.JPG" style="float: left" width="256" 						class="style20" /></a>
			2. Then hold down on the LCD screen while gently prying up the top cover.
		</td>

		<td class="style11" style="width: 450px">
			<a href="gemini-images/MainImages/SDcardClosed.jpg"target="_blank">
			<img alt="" height="342" src="gemini-images/MainImages/SDcardClosed_small.jpg" width="256" style="float: left" class="style21" /></a> 
			2. 	The Gemini 2 with cover removed. See the micro-SDcard socket on 
			the left middle side.&nbsp; It is always a good idea to slide a 
			piece of paper under the battery clip when removing and replacing 
			the micro-SDcard</td>
		</tr>
</table>

<!-- Row 3 --> 
<table align="center" cellpadding="4" cellspacing="4" style="width: 900px" class="style23">
	<tr>
		<td class="style11" style="width: 450px">
		     <a href="gemini-images/HandcontrollerImages/3-RemoveFaceplate.JPG"target="_blank">
			<img alt="Remove Faceplate" height="192" src="gemini-images/HandcontrollerImages/3-RemoveFaceplate_small.JPG" style="float: left" width="256" /></a>
			3. Remove Face Plate<br /><br />
	    </td>
		
		<td class="style11" style="width: 450px">
			<a href="gemini-images/MainImages/SDCardCoverOpen.jpg"target="_blank">
			<img alt="" height="236" src="gemini-images/MainImages/SDCardCoverOpen_small.jpg" width="256" style="float: left" class="style21" /></a> 
			3. 
			This is a picture with the cover vertical.&nbsp; You do this by 
			first sliding the cover to the right slightly, to unlock it. 
			Then you can grab the left side and slowly lift it up.&nbsp; It 
			is on a sliding hinge, hinged on the right side.
		</td>
	</tr>
</table>

<!-- Row 6 -->
<table align="center" cellpadding="4" cellspacing="4" style="width: 900px" class="style23">
	<tr>
		<td class="style11" style="width: 450px">
		     <a href="gemini-images/HandcontrollerImages/HCSDCardHolder.jpg"target="_blank">
			<img alt="" height="192" src="gemini-images/HandcontrollerImages/HCSDCardHolder_small.jpg" style="float: left" width="256" /></a>
			4. You can see our target socket in the upper right corner of the 
			picture.&nbsp; It is silver in color.&nbsp; No SDCard is in the 
			socket.
		</td>
		
		<td class="style11" width="450px"><a href="gemini-images/MainImages/SDCardCoverOpen1.jpg"target="_blank">
			<img alt="" height="235" src="gemini-images/MainImages/SDCardCoverOpen1_small.jpg" width="256" style="float: left" class="style21" /></a> 
			4.You can see it even more opened.
		</td>
	</tr>
</table>

<!-- Row 5 -->	
<table align="center" cellpadding="4" cellspacing="4" style="width: 900px" class="style23">
	<tr>
		<td class="style11" style="width: 450px">
		    <a href="gemini-images/HandcontrollerImages/4-WhereSDCardIS.JPG"target="_blank">
			<img alt="Locate SD card" height="192" src="gemini-images/HandcontrollerImages/4-WhereSDCardIS_small.JPG" width="256" style="float: left" /></a>
			5. The micro-SDcard is below the PCB-but above the screwdriver tip.
		</td>

		<td class="style11" style="width: 450px">
				<a href="gemini-images/MainImages/SDCardCoverOpen2.jpg"target="_blank">
				<img alt="" height="269" src="gemini-images/MainImages/SDCardCoverOpen2_small.jpg" width="256" style="float: left" class="style21" /></a> 
				5.
				Here it is fully opened.&nbsp; I have turned over the micro-SDcard. 
				Notice the contacts still point to the right.
		</td>
	</tr>
</table>

<!-- Row 6 -->	
<table align="center" cellpadding="4" cellspacing="4" style="width: 900px" class="style23">
	<tr>
		<td class="style11" style="width: 450px">
				     <a href="gemini-images/HandcontrollerImages/5-SDCardPartlyPoppedOut.JPG"target="_blank">
					<img alt="" height="192" src="gemini-images/HandcontrollerImages/5-SDCardPartlyPoppedOut_small.JPG" style="float: left" width="256" class="style21"  /></a>
					6. The 	micro SD card partly popped out. This is accomplished by pressing in on it first 
					then letting it pop out. When you reinstall it 
					you do the reverse. Push it in until it stops and then let go.
		</td>
		
		<td class="style11" style="width: 450px">
			<a href="gemini-images/MainImages/SDCardCoverOpen3.jpg"target="_blank">
				<img alt="" height="304" src="gemini-images/MainImages/SDCardCoverOpen3_small.jpg" width="256" style="float: left" class="style21" /></a> 
			6. 
				This is with the micro-SDcard complete removed.&nbsp; To replace 
				the micro-SDcard, just follow the reverse steps.&nbsp; 
				<span class="style16">Make sure that the micro-SDCard is seated 
				correctly before trying to close the cover.</span> After you 
				get the cover closed, make sure you slide it to the left to lock 
				it in place.&nbsp; Don&#39;t forget to remove the piece of paper 
				from under the battery clip.
		</td>
	</tr>
</table>

<!-- Row 7 -->	
<table align="center" cellpadding="4" cellspacing="4" style="width: 900px" class="style23">
	<tr>
		<td class="style11" style="width: 450px">
			     <br/><a href="gemini-images/HandcontrollerImages/6-RemovingSDCard.JPG"target="_blank">
				<img alt="" height="192" src="gemini-images/HandcontrollerImages/6-RemovingSDCard_small.JPG" style="float: left" width="256" class="style21" /></a>
				7. You can see the card part way out now. When you pull it out completely you will see that it has the 
				contacts pointing up.
		</td>
		<td class="style11">&nbsp;
		7. To reprogram the micro-SDcard in the main unit with a reader/writer go 
		to:
		<a href="http://www.gemini-2.com/rebuildmainSDcardfirmware.php" target="_blank">
		Rebuilding Main unit SDcard Firmware</a><br />
		Remember that doing this will normally reset the Gemini-2 default IP address back to
		192.168.0.111</td>
	</tr>
</table>

<!-- Row 8 -->	
<table align="center" cellpadding="4" cellspacing="4" style="width: 900px" class="style23">
	<tr>
		<td class="style11" style="width: 450px">
		     <a href="gemini-images/HandcontrollerImages/7-SDcardOut.JPG"target="_blank">
			<img alt="" height="192" src="gemini-images/HandcontrollerImages/7-SDcardOut_small.JPG" style="float: left" width="256" /></a>
			8. See gold contacts.&nbsp; You can now take the card and put it 
			into a micro-SDcard reader. You would follow the instruction on 
			rebuilding the file structure on the that. This will be out 
			lined in a different document.
		</td>
		
		<td class="style6">&nbsp;
		</td>
	</tr>
</table>

<!-- Row 9 -->	
<table align="center" cellpadding="4" cellspacing="4" style="width: 900px" class="style23">
	<tr>
		<td class="style11" style="width: 450px">
			<a href="gemini-images/HandcontrollerImages/8-SldingInSDCard.JPG"target="_blank">
			<img alt="" height="192" src="gemini-images/HandcontrollerImages/8-SldingInSDCard_small.JPG" style="float: left" width="256" /></a>
			9. You	can see that I have found the holder and started to slide the card 
			back into it&#39;s holder.
		</td>
	
		<td class="style6">&nbsp;
		</td>
	</tr>
</table>

<!-- Row 10 -->	
<table align="center" cellpadding="4" cellspacing="4" style="width: 900px" class="style23">
	<tr>
		<td class="style11" style="width: 450px">
			<a href="gemini-images/HandcontrollerImages/10-SDCardAlmostIm.JPG"target="_blank">
			<img alt="" height="192" src="gemini-images/HandcontrollerImages/10-SDCardAlmostIm_small.JPG" style="float: left" width="256" /></a>
			10. micro-SDcard almost all the way in.
		</td>
		
		<td class="style6">&nbsp;
		</td>
	</tr>
</table>

<!-- Row 11 -->	
<table align="center" cellpadding="4" cellspacing="4" style="width: 900px" class="style23">
	<tr>
		<td class="style11" style="width: 450px">
			<a href="gemini-images/HandcontrollerImages/11-SDCardALL-the-way-in.JPG"target="_blank">
			<img alt="" height="192" src="gemini-images/HandcontrollerImages/11-SDCardALL-the-way-in_small.JPG" style="float: left" width="256" /></a>
			11. micro-SDcard fully inserted 
		</td>
		
		<td class="style24">&nbsp;
		</td>
	</tr>
	<tr>
		<td class="style11" style="width: 450px">
		12.
		To reprogram the micro-SDcard in the Hand-controller unit with a reader/writer go 
		to:
		<a href="http://www.gemini-2.com/rebuildhcSDcardfirmwareup.php" target="_blank">
		Rebuilding Hand-Controller unit SDcard Firmware</a></td>
		              
	</tr>

</table>



<?php include("bottom.php"); ?>




</body>
</html>
