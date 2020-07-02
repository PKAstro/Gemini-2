t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Ort/Zeit</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Beobachungsort</H2>
t <B>Vordefinierte Orte</b>
t <CENTER>
t <form action="sitetime.cgi"><select name="si" size="1">
c i 0 <option value="0" %s>%s</option>
c i 1 <option value="1" %s>%s</option>
c i 2 <option value="2" %s>%s</option>
c i 3 <option value="3" %s>%s</option>
c i 4 <option value="4" %s>%s</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Ort ausw&auml;hlen" id="sbm">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen"></P></form></CENTER>
# -----------------------------------------------
t <P><B>Geographischer Ort</B></P><FORM ACTION=sitetime.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 90%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">Name des Ortes</td>
c s n <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sn VALUE="%s"
t SIZE=15 MAXLENGTH=15></TD>
t <td style="text-align: right;">Zeitzone</td>
c s t <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=st VALUE="%d:%02d"
t SIZE=6 MAXLENGTH=6></TD></TR>
#
t <tr><td style="text-align: right;">L&auml;ngengrad</td>
c s o <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=so VALUE="%c%d&deg;%02d'%02d"
t SIZE=11 MAXLENGTH=11></TD>
t <td style="text-align: right;">Breitengrad</td>
c s a <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sa VALUE="%c%d&deg;%02d'%02d"
t SIZE=10 MAXLENGTH=10></TD></TR>
t <tr><td style="text-align: right;">H&ouml;he (m)</td>
c s e <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=se VALUE="%d"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">Speichern als Ort Nr. </td>
c s # <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=s# VALUE="%d"
t SIZE=1 MAXLENGTH=1></TD></TR>
t </tbody></table></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Setze Ort" id="sbm">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen">
t </CENTER></P></FORM>
# -----------------------------------------------
t <FORM ACTION=sitetime.cgi METHOD=GET NAME=CGI>
t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
#
t <hr style="width: 100%; height: 2px;">
t <h2 style="text-align: center;">Zeiteinstellungen</h2>
t <table style="text-align: left; width: 90%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
#
t <tr><td style="text-align: center;">B&uuml;rgerliche Zeit</td>
c T c <td style="text-align: center;"><INPUT TYPE=TEXT NAME=tc VALUE="%02d:%02u:%02u"
t SIZE=9 MAXLENGTH=9></TD>
t <td style="text-align: right;">B&uuml;rgerliches Datum(dd.mm.yyyy)</td>
c T C  <td style="text-align: center;"><INPUT TYPE=TEXT NAME=dc VALUE="%02u.%02u.%04u"
t SIZE=11 MAXLENGTH=11></TD></tr>
t </tbody></table>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Setzen" id="sbm">
t <INPUT TYPE=BUTTON VALUE="Aktualisieren" OnClick="location='/sitetime.cgi'">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen">
t </CENTER></P></FORM>
# -----------------------------------------------
t <FORM ACTION=sitetime.cgi METHOD=GET NAME=CGI>
# t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
#
t <table style="text-align: left; width: 90%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
#
t <tr><td style="text-align: center;">UTC Zeit</td>
c T u  <td style="text-align: center;"><INPUT TYPE=TEXT NAME=tu VALUE="%02d:%02u:%02u"
t SIZE=10 MAXLENGTH=10></td>
t <td style="text-align: right;">UTC Datum(dd.mm.yyyy)</td>
c T U <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=du VALUE="%02u.%02u.%04u"
t SIZE=10 MAXLENGTH=10></TD></tr>
#
t <tr><td style="text-align: right;">Sternzeit</td>
c T s  <td style="text-align: center;">%02d:%02u:%02u</td>
t <td style="text-align: right;">Julianisches Datum</td>
c T m <td style="text-align: center;">%11.5f</td></tr>
#
t </tbody></table><br>
# UTC button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Setze UTC" id="sbm">
t <INPUT TYPE=BUTTON VALUE="Aktualisieren" OnClick="location='/sitetime.cgi'">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen"></P><HR>
t </CENTER></P></FORM>
# -----------------------------------------------
t <H2 ALIGN=CENTER>GPS-Empf&auml;nger abrufen</H2>
t <CENTER><P><form action="sitetime.cgi"><select name="gp" size="1">
c q 0 <option value="0" %s>Serial 1</option>
c q 1 <option value="1" %s>Serial 2</option>
c q 2 <option value="2" %s>Serial 3</option>
c q 3 <option value="3" %s>Serial 4</option>
c q 4 <option value="4" %s>Undefined</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="GPS abrufen">
c F ? <P><B>%s</B></P>
t </P></form></CENTER><HR>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Aktualisieren" OnClick="location='/sitetime.cgi'"></P>
t <p>Mittels dieser Seite können 4 permanent gespeicherte und ein aktueller Beobachtungsort verwaltet 
t werden.<BR>Der Ort Nr. 0 wird für die Berechnungen benutzt.
t Die Orte Nr. 1 ... 4 k&ouml;nnen zur schnellen Auswahl selektiert werden und deren Daten werden dann
t in den Ort 0 kopiert.</P>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Nachtmodus</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Tagmodus</a>
t </p>
t </body></html>
.
