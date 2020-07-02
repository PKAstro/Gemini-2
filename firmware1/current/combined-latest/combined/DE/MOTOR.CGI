t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" 
t http-equiv="Content-Type"><META http-equiv=Content-Language content=de-de>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Motorstatus</title>
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <script language=JavaScript type="text/javascript">
# Define URL and refresh timeout
t var formUpdate = new periodicObj("motor.cgx", 500);
t function periodicUpdateState() {
t  if(document.getElementById("StateChkBox").checked == true) {
t   updateMultiple(formUpdate);
t   st_elTime = setTimeout(periodicUpdateState, formUpdate.period);
t  } else clearTimeout(st_elTime);
t }
t </script></head>
t <body style="width:800px;margin:0 auto;">
t <FORM ACTION=motor.cgi METHOD=POST NAME=motor>
t <INPUT TYPE=HIDDEN VALUE="state" NAME=pg>
t <CENTER><H2>Motorstatus</H2></CENTER>
#
t <P><table style="text-align: left; width: 75%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
# t  <caption></caption>
t <tbody>
t <tr><td style="text-align: right;">UTC Datum (dd.mm.yyyy):</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
c T U id="UTCDate" value="%02u.%02u.%04u"></td>
t <td style="text-align: right;">UTC Zeit:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
c T u id="UTCTime" value="%02d:%02u:%02u"></td></tr>
t </tbody></table><br></P>
#
t <P><B>Teleskopische Koordinaten:</B></P>
t <P><table style="text-align: right; width: 96%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
# t  <caption></caption>
t <tbody><tr><td style="width: 38%;">Status Stundenwinkelachse:</td>
t <td style="width: 10%;"><input type="text" readonly style="background-color: 
t transparent; border: 0px" align=center size=20 maxsize=20
c t x id="VelocityR" value="%s"></td>
t <td style="width: 38%;">Status Deklinationsachse:</td>
t <td style="width: 10%;"><input type="text" readonly style="background-color: 
t transparent; border: 0px" align=center size=20 maxsize=20
c t y id="VelocityD" value="%s"></td></tr>
#
t <tr><td style="text-align: right;">Physische Position:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C p id="HA_PhP" value="%08d"></td>
t <td style="text-align: right;">Physische Position:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C q id="DEC_PhP" value="%08d"></td></tr>
#
t <tr><td>Servoabweichung RA:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c t L id="RA_Lag" value="%d"></td>
#
t <td>Servoabweichung DEC:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c t l id="DEC_Lag" value="%d"></td></tr>
t <tr><td>Leistungswert RA:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c t P id="RA_PWM" value="%d"></td>
#
t <td>Leistungswert DEC:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c t p id="DEC_PWM" value="%d"></td></tr>
t </tbody></table></P>
##
t <HR><P><B>Inhalt Nachrichtenspeicher:
c I I <textarea id="Info" name="Info" readonly="readonly" cols="64" rows="2">%s</textarea></B>
#
t <HR><P><table><tr><td><B>Aktuelle Anzeige:</B></td><td>
c I H <input id="HC" name="HC" type="text" readonly="readonly" size=64 maxlength=64 value="%s">
t </td></tr><tr><td><B>Vorherige Anzeige:</B></td><td>
c I P <input id="HP" name="HP" type="text" readonly="readonly" size=64 maxlength=64 value="%s">
t </td></tr></table></P><HR>
#
t <p align=center>
t <INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t <input type=button value="Aktualisieren" onclick="updateMultiple(formUpdate)">
t Periodisch:<input type="checkbox" id="StateChkBox" onclick="periodicUpdateState()">
t </form><HR>
# -----------------------------------------------
t <P><B>Schwellwerte für Warnungen</B></P>
#
t <FORM ACTION=motor.cgi METHOD=GET NAME=motor accept-charset="utf-8">
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">Servoabweichung RA Nachführung</td>
c t T <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ST VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">Servoabweichung DEC Nachführung</td>
c t t <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=St VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">Motorleistung bei RA Nachführung</td>
c t H <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=SH VALUE="%hd"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">Motorleistung bei DEC Nachführung</td>
c t h <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sh VALUE="%hd"
t SIZE=3 MAXLENGTH=3></TD></TR>
#
t <tr><td style="text-align: right;">Motorleistung bei RA Positionierung</td>
c t S <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=SS VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">Motorleistung bei DEC Positionierung</td>
c t s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Ss VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t </table>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Setze Schwellwerte" id="sbm">
t <INPUT TYPE=RESET VALUE="Zurücksetzen"></CENTER>
t <p align=center>
t <INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t <input type=button value="Aktualisieren:" onclick="updateMultiple(formUpdate)">
t </form>
#
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Nachtmodus</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Tagmodus</a>
t </p>
t </body></html>
.
