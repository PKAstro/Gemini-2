t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Koordinaten</title></head>
t <body style="width:800px;margin:0 auto;">
t <h1 style="text-align: left;">Teleskopkoordinaten</h1>
t <FORM ACTION=coordinates.cgi METHOD=GET NAME=CGI>
#t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
t <table style="text-align: left; width: 90%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
# t  <caption></caption>
t <tbody>
t <tr><td style="text-align: right;">Stundenachse, physische Position</td>
c C p <td style="text-align: center;">%08d</td>
t <td style="text-align: right;">Deklinationsachse, physische Position</td>
c C q <td style="text-align: center;">%08d<br> </td></tr>
#
t <tr><td style="text-align: right;">Rektaszension<br> </td>
c C r <td style="text-align: center;">%02d:%02u:%02u</td>
t <td style="text-align: right;">Deklination<br> </td>
c C d <td style="text-align: center;">%c%02d:%02u:%02u<br> </td></tr>
#
t <tr> <td style="text-align: right;">Rektaszension des Zielobjektes</td>
c C R <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=tr VALUE="%02u:%02u:%02u"
t SIZE=9 MAXLENGTH=9></TD>
t <td style="text-align: right;">Deklination des Zielobjektes</td>
c C D <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=td VALUE="%c%02u:%02u:%02u"
t SIZE=10 MAXLENGTH=10></TD></TR>
#
t <tr><td style="text-align: right;">Physische Position des Objektes, Stundenwinkel<br> </td>
c C s <td style="text-align: center;">%08d</td>
t <td style="text-align: right;">Physische Position des Objektes, Deklination<br> </td>
c C t <td style="text-align: center;">%08d<br> </td></tr>
#
t </tbody></table></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Setze RA/DEC" id="sbm">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <FORM ACTION=coordinates.cgi METHOD=GET NAME=CGI>
# t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
#
t <table style="width: 90%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
# t  <caption></caption>
t <tr><td style="text-align: right;">Azimuth</td>
c C a <td style="text-align: center;">%03d:%02u:%02u</td>
t <td style="text-align: right;">H&ouml;he<br></td>
c C e <td style="text-align: center;">%c%02d:%02u:%02u</td></tr>
#
t <tr><td style="text-align: right;">Azimuth des Ziels</td>
c C A <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ta VALUE="%03u:%02u:%02u"
t SIZE=11 MAXLENGTH=11></TD>
t <td style="text-align: right;">H&ouml;he des Ziels</td>
c C E <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=te VALUE="%c%02u:%02u:%02u" 
t SIZE=10 MAXLENGTH=10></TD></TR>
#c C E <td style="text-align: center;">%c%02d:%02u:%02u</td></tr>
t </tbody></table>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Setze Az/H&ouml;he" id="sbm">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Aktualisieren" OnClick="location='/coordinates.cgi'">
t <p class="style_switcher">
t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
t </p>
t </body></html>
.
