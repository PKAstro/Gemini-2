t <!DOCTYPE html PUBLIC "//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Funktionen</title></head>
t <body style="width:800px;margin:0 auto;">
t <h1 style="text-align: center;">Funktionen</h1>
t <h2>GoTo-Koordinateneingabe</h2>
t <FORM ACTION=functions.cgi METHOD=GET NAME=CGI>
t <H3>RA/DEC</H3>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
#
t <tr><td style="text-align: right;">Rektaszension<br> </td>
c C r <td style="text-align: center;">%02d:%02u:%02u</td>
t <td style="text-align: right;">Deklination<br> </td>
c C d <td style="text-align: center;">%c%02d:%02u:%02u<br> </td></tr>
#
t <tr> <td style="text-align: right;">Objekt-RA</td>
c C R <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=tr VALUE="%02u:%02u:%02u"
t SIZE=9 MAXLENGTH=9></TD>
t <td style="text-align: right;">Objekt-Deklination</td>
c C D <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=td VALUE="%c%02u:%02u:%02u"
t SIZE=10 MAXLENGTH=10></TD></TR>
#
t </tbody></table>
# Here are the button definitions
t <CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Setze Objektkoordinaten">
t <INPUT TYPE=SUBMIT NAME=GT VALUE="GoTo RA/DEC">
#t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen">
t </CENTER></FORM>
# -----------------------------------------------
t <FORM ACTION=functions.cgi METHOD=GET NAME=CGI>
t <H3>Physische Position</H3>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
t <tr><td style="text-align: right;">Physische Position Stundenachse</td>
c C p <td style="text-align: center;">%08d</td>
t <td style="text-align: right;">Physische Position Deklinationachse</td>
c C q <td style="text-align: center;">%08u</td></tr>
#
t <tr><td style="text-align: right;">Physischer Stundenwinkel des Objekts</td>
c C s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=tR VALUE="%08u"
t SIZE=11 MAXLENGTH=11></TD>
#c C s <td style="text-align: center;">%08d</td>
t <td style="text-align: right;">Physische Deklination des Objekts</td>
c C t <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=tD VALUE="%08u"
t SIZE=11 MAXLENGTH=11></TD></TR>
#c C t <td style="text-align: center;">%08d<br> </td></tr>
#
t </tbody></table>
# Here are the button definitions
t <CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Setze Physische Objektkoordinaten">
t <INPUT TYPE=SUBMIT NAME=GP VALUE="Physisches GoTo">
#t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER></FORM>
# -----------------------------------------------
t <FORM ACTION=functions.cgi METHOD=GET NAME=CGI>
# t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
#
t <h3>Azimuth/H&ouml;he</h3>
t <table style="width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
# t  <caption></caption>
t <tr><td style="text-align: right;">Azimuth</td><td style="text-align: center;">
c C a %03d:%02u:%02u</td>
t <td style="text-align: right;">H&ouml;he<br></td>
c C e <td style="text-align: center;">%c%02d:%02u:%02u</td></tr>
#
t <tr><td style="text-align: right;">Azimuth des Objekts</td>
c C A <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ta VALUE="%03u:%02u:%02u"
t SIZE=11 MAXLENGTH=11></TD>
t <td style="text-align: right;">H&ouml;he des Objekts</td>
c C E <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=te VALUE="%c%02u:%02u:%02u" 
t SIZE=10 MAXLENGTH=10></TD></TR>
#c C E <td style="text-align: center;">%c%02d:%02u:%02u</td></tr>
t </tbody></table>
# Here are the button definitions
t <CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Setze Objekt Az/H" id="sbm">
t <INPUT TYPE=SUBMIT NAME=GP VALUE="Az/H GoTo">
t </CENTER></FORM><HR>
# -----------------------------------------------
t <h2>Montierung parken/aktivieren/Neu starten</h2>
t <CENTER><form action="functions.cgi" METHOD=GET NAME=CGI>
t <INPUT TYPE=SUBMIT NAME="PC" VALUE="Parke @ CWD">
t <INPUT TYPE=SUBMIT NAME="PZ" VALUE="Parke @ Zenit">
t <INPUT TYPE=SUBMIT NAME="PH" VALUE="Parke @ Heimatposition">
t <INPUT TYPE=SUBMIT NAME="Ph" VALUE="Setze Heimatposition"><BR>
t <INPUT TYPE=SUBMIT NAME="PS" VALUE="Nachf&uuml;hrung anhalten">
t <INPUT TYPE=SUBMIT NAME="PW" VALUE="Nachf&uuml;hrung fortsetzen"><BR>
t <INPUT TYPE=SUBMIT NAME="bO" VALUE="Neustart">
t <INPUT TYPE=SUBMIT NAME="bC" VALUE="Kaltstart">
t </form></CENTER><HR>
# -----------------------------------------------
t <h2>Einstellung des Parkmodus</h2>
t <CENTER><form action="functions.cgi"><select name="PM" size="1">
c R 0 <option value="0" %s>Parkmodus 0</option>
c R 1 <option value="1" %s>Parkmodus 1</option>
c R 2 <option value="2" %s>Parkmodus 2</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Setze Parkmodus">
t </form></CENTER><HR>
# -----------------------------------------------
t <h2>Periodischen Fehler (PEC) verwalten</h2>
t <CENTER><form action="functions.cgi" METHOD=GET NAME=CGI>
t <INPUT TYPE=SUBMIT NAME="pt" VALUE="PEC Trainieren">
t <INPUT TYPE=SUBMIT NAME="pa" VALUE="PEC Training abbrechen">
t <INPUT TYPE=SUBMIT NAME="ps" VALUE="PEC aktivieren">
t <INPUT TYPE=SUBMIT NAME="pe" VALUE="PEC deaktivieren">
t </form></CENTER><HR>
# -----------------------------------------------
t <h2>Modus der klassischen Handsteuerung</h2>
t <form action="functions.cgi">
t <CENTER><select name="hc" size="1">
c h 0 <option value="0" %s>Visueller Modus</option>
c h 1 <option value="1" %s>Photo Modus</option>
c h 2 <option value="2" %s>Alle Geschwindigkeiten</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Setze Modus">
#t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER></form><HR>
# -----------------------------------------------
t <h2>Nachf&uuml;hrgeschwindigkeit</h2>
t <CENTER><P><form action="functions.cgi"><select name="ts" size="1">
c n 0 <option value="0" %s>Siderisch</option>
c n 1 <option value="1" %s>King-Rate</option>
c n 2 <option value="2" %s>Lunar</option>
c n 3 <option value="3" %s>Solar</option>
c n 4 <option value="4" %s>Terrestrisch</option>
c n 5 <option value="5" %s>Zyklisch</option>
c n 5 <option value="6" %s>Komet/Benutzerdefiniert</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="W&auml;hle Nachf&uuml;rung">
t </form></CENTER><HR>
# -----------------------------------------------
t <P><INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Aktualisieren" OnClick="location='/functions.cgi'">
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Nachtmodus</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Tagmodus</a>
t </p></body></html>
.
