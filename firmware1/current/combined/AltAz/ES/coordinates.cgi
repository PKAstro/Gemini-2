t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es> 
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Coordinates and Time</title></head>
t <body style="width:800px;margin:0 auto;">
t <h1 style="text-align: center;">Mount Coordinates</h1><br>
t <FORM ACTION=coordinates.cgi METHOD=GET NAME=CGI>
#t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
# t  <caption></caption>
t <tbody>
t <tr><td style="text-align: right;">Hour Angle Axis Physical Position<br> </td>
c C p <td style="text-align: center;">%08d</td>
t <td style="text-align: right;">Declination Axis Physical Position<br> </td>
c C q <td style="text-align: center;">%08d<br> </td></tr>
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
t <tr><td style="text-align: right;">Hour Angle Target Physical Position<br> </td>
c C s <td style="text-align: center;">%08d</td>
t <td style="text-align: right;">Declination Axis Target Physical Position<br> </td>
c C t <td style="text-align: center;">%08d<br> </td></tr>
#
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Set Target RA/DEC" id="sbm">
t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <FORM ACTION=coordinates.cgi METHOD=GET NAME=CGI>
# t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
#
t <table style="width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
# t  <caption></caption>
t <tr><td style="text-align: right;">Azimuth</td>
c C a <td style="text-align: center;">%03d:%02u:%02u</td>
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
t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <FORM ACTION=coordinates.cgi METHOD=GET NAME=CGI>
t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
#
t <hr style="width: 100%; height: 2px;">
t <h1 style="text-align: center;">Time Settings</h1>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
#
t <tr><td style="text-align: right;">Civil Date(dd.mm.yyyy)</td>
c T C  <td style="text-align: center;"><INPUT TYPE=TEXT NAME=dc VALUE="%02u.%02u.%04u"
t SIZE=11 MAXLENGTH=11></TD>
t  <td style="text-align: center;">Civil Time</td>
c T c  <td style="text-align: center;"><INPUT TYPE=TEXT NAME=tc VALUE="%02d:%02u:%02u"
t SIZE=9 MAXLENGTH=9></TD></td></tr>
#
t </tbody></table><br>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Set Civil" id="sbm">
t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <FORM ACTION=coordinates.cgi METHOD=GET NAME=CGI>
# t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
#
t <tr><td style="text-align: right;">UTC Date(dd.mm.yyyy)</td>
c T U <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=du VALUE="%02u.%02u.%04u"
t SIZE=10 MAXLENGTH=10></TD>
t  <td style="text-align: center;">UTC Time<br></td>
c T u  <td style="text-align: center;"><INPUT TYPE=TEXT NAME=tu VALUE="%02d:%02u:%02u"
t SIZE=10 MAXLENGTH=10></td></tr>
#
t <tr><td style="text-align: right;">Julian Date</td>
c T m <td style="text-align: center;">%11.5f</td>
t <td style="text-align: center;">Sidereal Time</td>
c T s  <td style="text-align: center;">%02d:%02u:%02u</td></tr>
#
t </tbody></table><br>
# UTC button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Set UTC" id="sbm">
t <INPUT TYPE=RESET VALUE="Undo"></P><BR><HR>
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/coordinates.cgi'">
t </CENTER></P></TD></TR></FORM>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </body></html>
.
