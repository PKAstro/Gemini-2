<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="../gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<script type="text/javascript" src="xweb-popup.js" ></script>



</head>

<body style="color: #FFFFFF; background-color: #000000">



<table align="center" style="width: 900px">
	<tr><td class="style7">See Paragraphs below picture for explanations.</td></tr>
	<tr>
		<td class="style7">
		<map id="ImgMap0" name="ImgMap0">
			<area alt="" coords="21, 765, 85, 800" href="index.php" shape="rect" />
		</map>
		<img alt="" height="817" src="images/site-time-NPT.jpg"  Width="838"usemap="#ImgMap0" height="817" />
		</td>
	</tr> 
	<tr>
		<td class="style7">Please Note that you cannot change site 0.&nbsp; It 
		will always default back to Hollywood. <br /> You can however change 
		sites 1 through 4.</td>
	</tr> 
	<tr>
		<td class="style6">
		<ul><li>Predefined Observation Sites - This lets you 
			select between 4 Predefined sites.&nbsp; They are numbered between 1 
			and 4, with 1 being the top one on the hand controller.&nbsp; If you 
			do a firmware update, they will normally return to the default 
			sites.
			You will also have to use "Select Site" to make sure the one you 
			want is the active site.<br /><br /></li>
			<li>Geographic Locations - This is where you can define the 4 
			sites.&nbsp; Notice that Hollywood (Site 1), Phoenix AZ (site2), Berlin Germany (site 3) 
			and Sydney NSN (Site 4) are predefined by default, but they can be 
			changed.</li>&nbsp; See
			<a href="
/videos/MP4/setsiteweb.mp4" target="_blank">movie</a> on 
			changing them.
			<a href="
/web/images/SiteSet.jpg" target="_blank">Hand controller after 
			movie</a>.
			<ul>
			<li>To change one of these, Select a new site name and enter it 
				into the Site Name location. 
			</li>
			<li>Then enter a Time offset from UTC.&nbsp; Not that if you 
				site has daylight saving time, or a partial offset you need to 
				take that into account.
			<a href="../hc/time_zone_offset_chart.php" onclick="xPopUp(this.href,'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',600,400,'pixel','center','center'); return false;" target="_blank" title="Time Zone Offset 	Table">
			Time Zone Offset Chart</a> 		and
				<a href="timezonefacts.php" onclick="xPopUp(this.href, 'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',600,750,'pixel','center','center'); return false;" target="xPopUp" title="Half and Quarter Timezones">Half and Quarter Time zones</a>&nbsp; 
			This site will
			<a href="http://www.earthpoint.us/convert.aspx" target="_blank">
			Convert between the Different Coordinates Systems</a></li>
			<li>Please note the <span lang="en-us"></span>Gemini-2 always uses UTC time and 
			date for it's internal calculations.&nbsp; The time zone offset is just 
			a way that your UTC can be calculated from your local time.&nbsp; If you 
			enter UTC as your local time and set the Time Zone to zero, the Gemini-2 
			will continue to function just fine.&nbsp; You would never have to worry 
			about daylight saving time, or half and quarter time zones, if you live 
			in one of them.
			</li>
			<li>Then enter both latitude and longitude.&nbsp; Notice 
				Longitude is negative for the USA. Latitude is positive for the 
				northern hemisphere.&nbsp; This is the setting that tell the 
				Gemini-2 what hemisphere it is in, there are no switches to flip 
				like on some mounts.
			</li>
			<li>Elevation is optional.&nbsp; </li>
			<li>Enter the Site number you want to store this information 
				for: 2, 3, or 4
			</li>
			<li>Select the set Location button to store the values.</li>
				<li>The undo should put back the original values before hitting 
				Set Location button.</li>
				<li>If you want to use this site you just entered, then you need 
				to select it in the "Predefined Observing Site" pulldown, and 
				then hit "Select Site"<br /><br /></li>
			</ul>
			<li>Time Setting:</li>
				<ul>
				<li>Civil Time: Enter it as Hours (24 hours format) : Minutes : 
				Seconds
				</li>
				<li>Civil Date: Enter it as Month (2 digits). Day (2 digits). 
				Year (4 digits)
				</li>
				<li>Hit Set Civil - this should update sidereal time and Julian 
				date.&nbsp; It should also update the UTC time and date if you 
				have the offset correctly set for the site.
				</li>
				<li>UTC Time: Enter it as Hours (24 hours format) : Minutes : 
				Seconds
				</li>
				<li>UTC Date: Enter it as Month (2 digits). Day (2 digits). 
				Year (4 digits)
				</li>
				<li>Hit Set UTC- this should update sidereal time and Julian 
				date.&nbsp; It should also update the civil&nbsp; time and date if you 
				have the offset correctly set for the site.<br /><br />
				</li>
				</ul>
				<li>The Query NTP Server -&nbsp; You can get the time from a 
				national NTP server or you can make your Windows PC act as a NTP 
				server.&nbsp; (The Window PC will need a Registry Patch to act 
				as a NTP Server.)&nbsp; You do this by putting in the IP address 
				of the NTP server you want to use in the.&nbsp; If you have a 
				proper NTP IP address and internet connection, then hitting the 
				"Query NTP server" button will go out and bring back the time in 
				UTC hours, minutes, seconds and the UTC date.&nbsp; The Time 
				offset for the site does not matter.&nbsp; If you have it 
				correct then your local time and date should show up.&nbsp; If 
				you have the time offset set to ZERO then the local time setting 
				will be the same as the UTC time and date setting.&nbsp; This is 
				because the Gemini-2 only uses UTC time for all it's 
		calculations, and a NTP server returns UTC time/date only.&nbsp; To 
				enter the NTP IP address see <a href="web-network-NTP.php#NetTimeProtocal">Net 
				Time Protocal</a> in the Network web page.<br /><br />
		</li>
		
			<li>The Query GPS Receiver -&nbsp; You can select the serial com 
			port that the GPS receiver tries to use to get GPS setting.&nbsp; 
			Com Port 1 is default.&nbsp; See setting
			<a href="web-serial-ports.php" target="_blank">Serial Ports</a> for 
			setting the GPS baud rate.&nbsp; Hit Query GPS receiver to get a new 
			GPS reading.<br />
		Note: If you are using a 
		<a href="../using-gps-receivers.php" target="xPopUp" title="Using GPS Receivers" onclick="xPopUp(this.href, 'location=no,menubar=no,statusbar=no,scrollbars=yes,resizable=yes,toolbar=no',600,200,'pixel','center','center'); return false;">GPS receiver.</a>  to get the time, then the time zone offset does not matter. 
		The Gemini-2 only uses UTC time for all it's 
		calculations, and a GPS returns UTC time/date only.&nbsp; You can disregard 
		local time when using a GPS receiver.&nbsp;&nbsp; 
		However, if your time zone offset is not 
		correct, then the Gemini-2 will show a wrong Local time and date. This 
		really does not throw off any calculations of the sky position 
		calculations.
		</li>
		</ul>
		
		</td>
	</tr> 
				<tr><td></td></tr>
</table>
<table align="center" width="900px" class="tableborder1">
	<tr><td class="style6-border-white"><em>If your Gemini-2 is connected Via Ethernet, 
		turned ON, and 
		Responds to <a href="http://gemini/sitetime.cgi" target="_blank">
		http://gemini/sitetime.cgi</a> then this link 
		will open this page in the Gemini-2 web interface, after prompting for a 
		log-in.</em></td></tr>

</table>

</body>




<?php include("bottom.php"); ?>



