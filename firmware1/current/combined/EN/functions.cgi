i pg_header.inc
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Functions</title></head>
t <body style="width:800px;margin:0 auto;">
t <h1 style="text-align: center;">Functions</h1>
t <h2>GoTo Coordinate Input</h2>
t <FORM ACTION=functions.cgi METHOD=GET NAME=CGI>
t <H3>RA/DEC</H3>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
#
t <tr><td style="text-align: right;">Right Ascension<br> </td>
c C r <td style="text-align: center;">%02d:%02u:%02u</td>
t <td style="text-align: right;">Declination<br> </td>
c C d <td style="text-align: center;">%c%02d:%02u:%02u<br> </td></tr>
#
t <tr> <td style="text-align: right;">Target Right Ascension</td>
c C R <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=tr VALUE="%02u:%02u:%02u"
t SIZE=9 MAXLENGTH=9></TD>
t <td style="text-align: right;">Target Declination</td>
c C D <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=td VALUE="%c%02u:%02u:%02u"
t SIZE=10 MAXLENGTH=10></TD></TR>
#
t </tbody></table>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Set Target RA/DEC">
t <INPUT TYPE=SUBMIT NAME=GT VALUE="GoTo RA/DEC">
#t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER></FORM>
# -----------------------------------------------
t <FORM ACTION=functions.cgi METHOD=GET NAME=CGI>
t <H3>Physical Position</H3>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
t <tr><td style="text-align: right;">Hour Angle Axis Physical Position</td>
c C p <td style="text-align: center;">%08d</td>
t <td style="text-align: right;">Declination Axis Physical Position</td>
c C q <td style="text-align: center;">%08u</td></tr>
#
t <tr><td style="text-align: right;">Hour Angle Target Physical Position</td>
c C s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=tR VALUE="%08u"
t SIZE=11 MAXLENGTH=11></TD>
#c C s <td style="text-align: center;">%08d</td>
t <td style="text-align: right;">Declination Axis Target Physical Position</td>
c C t <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=tD VALUE="%08u"
t SIZE=11 MAXLENGTH=11></TD></TR>
#c C t <td style="text-align: center;">%08d<br> </td></tr>
#
t </tbody></table>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Set Physical Target">
t <INPUT TYPE=SUBMIT NAME=GP VALUE="Physical GoTo">
#t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER></FORM>
# -----------------------------------------------
t <FORM ACTION=functions.cgi METHOD=GET NAME=CGI>
# t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
#
t <h3>Alt/Az</h3>
t <table style="width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
# t  <caption></caption>
t <tr><td style="text-align: right;">Azimuth</td><td style="text-align: center;">
c C a %03d:%02u:%02u</td>
t <td style="text-align: right;">Elevation<br></td>
c C e <td style="text-align: center;">%c%02d:%02u:%02u</td></tr>
#
t <tr><td style="text-align: right;">Target Azimuth</td>
c C A <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ta VALUE="%03u:%02u:%02u"
t SIZE=11 MAXLENGTH=11></TD>
t <td style="text-align: right;">Target Elevation</td>
c C E <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=te VALUE="%c%02u:%02u:%02u" 
t SIZE=10 MAXLENGTH=10></TD></TR>
#c C E <td style="text-align: center;">%c%02d:%02u:%02u</td></tr>
t </tbody></table>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Set Target Az/El" id="sbm">
t <INPUT TYPE=SUBMIT NAME=GP VALUE="Alt/Az GoTo">
t </CENTER></FORM><HR>
# -----------------------------------------------
t <h2>Park/Sleep/Wakeup/Reboot Mount</h2>
t <CENTER><form action="functions.cgi" METHOD=GET NAME=CGI>
t <INPUT TYPE=SUBMIT NAME="PC" VALUE="Park @ CWD">
t <INPUT TYPE=SUBMIT NAME="PZ" VALUE="Park @ Zenith">
t <INPUT TYPE=SUBMIT NAME="PH" VALUE="Park @ Home">
t <INPUT TYPE=SUBMIT NAME="Ph" VALUE="Set Home Position"><BR>
t <INPUT TYPE=SUBMIT NAME="PS" VALUE="Stop Tracking">
t <INPUT TYPE=SUBMIT NAME="PW" VALUE="Restart Tracking"><BR>
t <INPUT TYPE=SUBMIT NAME="PW" VALUE="UnPark"><BR>
t <INPUT TYPE=SUBMIT NAME="bO" VALUE="Reboot">
t <INPUT TYPE=SUBMIT NAME="bC" VALUE="Cold Reboot">
t </form></CENTER><HR>
# -----------------------------------------------
t <h2>Manage Parking modes</h2>
t <CENTER><form action="functions.cgi"><select name="PM" size="1">
c R 0 <option value="0" %s>Park Mode 0</option>
c R 1 <option value="1" %s>Park Mode 1</option>
c R 2 <option value="2" %s>Park Mode 2</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Select Parking Mode">
t </form></CENTER><HR>
# -----------------------------------------------
t <h2>Manage Periodic Error Control</h2>
t <CENTER><form action="functions.cgi" METHOD=GET NAME=CGI>
t <INPUT TYPE=SUBMIT NAME="pt" VALUE="Train PEC">
t <INPUT TYPE=SUBMIT NAME="pa" VALUE="Abort PEC Training">
t <INPUT TYPE=SUBMIT NAME="ps" VALUE="Start PEC Replay">
t <INPUT TYPE=SUBMIT NAME="pe" VALUE="End PEC Replay">
t </form></CENTER><HR>
# -----------------------------------------------
t <h2>Classic Hand Controller Mode</h2>
t <CENTER><form action="functions.cgi"><select name="hc" size="1">
c h 0 <option value="0" %s>Visual Mode</option>
c h 1 <option value="1" %s>Photo Mode</option>
c h 2 <option value="2" %s>All Speeds Mode</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Set HC Mode">
#t <INPUT TYPE=RESET VALUE="Undo">
t </form></CENTER><HR>
# -----------------------------------------------
t <h2>Tracking Speed</h2>
t <CENTER><form action="functions.cgi"><select name="ts" size="1">
c n 0 <option value="0" %s>Sidereal</option>
c n 1 <option value="1" %s>King Rate</option>
c n 2 <option value="2" %s>Lunar</option>
c n 3 <option value="3" %s>Solar</option>
c n 4 <option value="4" %s>Terrestrial</option>
c n 5 <option value="5" %s>Closed Loop</option>
c n 5 <option value="6" %s>Comet/Used Defined</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Set Tracking Rate">
t </form></CENTER><HR>
# -----------------------------------------------
t <INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/functions.cgi'">
# t </FORM></CENTER>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Night mode</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Day mode</a>
t </p></body></html>
.
