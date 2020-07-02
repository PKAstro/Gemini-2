t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
t  "http://www.w3.org/TR/html4/loose.dtd">
t <html><head>
t <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type" "content=text/html">
t <META http-equiv="Content-Language" "content=en-us">
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Motor State</title>
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
#
t <body style="width:800px;margin:0 auto;">
t <FORM ACTION=motor.cgi METHOD=POST NAME=motor accept-charset="utf-8">
t <INPUT TYPE=HIDDEN VALUE="state" NAME=pg>
t <CENTER><H2>Motor States and Settings</H2></CENTER>
#
t <P><table style="text-align: left; width: 75%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
# t  <caption></caption>
t <tbody>
t <tr><td style="text-align: right;">UTC Date (dd.mm.yyyy):</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
c T U id="UTCDate" value="%02u.%02u.%04u"></td>
t <td style="text-align: right;">UTC Time:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
c T u id="UTCTime" value="%02d:%02u:%02u"></td></tr>
t </tbody></table><br></P>
#
t <P><B>Telescopic Coordinates:</B></P>
t <P><table style="text-align: right; width: 96%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
# t  <caption></caption>
t <tbody><tr><td style="width: 38%;">Hour Angle Axis State:</td>
t <td style="width: 10%;"><input type="text" readonly style="background-color: 
t transparent; border: 0px" align=center size=20 maxsize=20
c t x id="VelocityR" value="%s"></td>
t <td style="width: 38%;">Declination Axis State:</td>
t <td style="width: 10%;"><input type="text" readonly style="background-color: 
t transparent; border: 0px" align=center size=20 maxsize=20
c t y id="VelocityD" value="%s"></td></tr>
#
t <tr><td style="text-align: right;">Hour Angle Axis Physical Position:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C p id="HA_PhP" value="%08d"></td>
t <td style="text-align: right;">Declination Axis Physical Position:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C q id="DEC_PhP" value="%08d"></td></tr>
#
t <tr><td>RA Servo Lag:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c t L id="RA_Lag" value="%d"></td>
#
t <td>DEC Servo Lag:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c t l id="DEC_Lag" value="%d"></td></tr>
t <tr><td>RA Duty:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c t P id="RA_PWM" value="%d"></td>
#
t <td>DEC Duty:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c t p id="DEC_PWM" value="%d"></td></tr>
t </tbody></table></P>
# -----------------------------------------------
t <HR><P><B>Information Buffer Content:
c I I <textarea id="Info" name="Info" readonly="readonly" cols="64" rows="2">%s</textarea></B>
#
t <HR><P><table><tr><td><B>Current Display Content:</B></td><td>
c I H <input id="HC" name="HC" type="text" readonly="readonly" size=64 maxlength=64 value="%s">
t </td></tr><tr><td><B>Previous Display Content:</B></td><td>
c I P <input id="HP" name="HP" type="text" readonly="readonly" size=64 maxlength=64 value="%s">
t </td></tr></table></P><HR>
t <p align=center>
t <INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <input type=button value="Refresh" onclick="updateMultiple(formUpdate)">
t Periodic:<input type="checkbox" id="StateChkBox" onclick="periodicUpdateState()">
t </form><HR>
# -----------------------------------------------
t <P><B>Thresholds Setup</B></P>
#
t <FORM ACTION=motor.cgi METHOD=GET NAME=motor accept-charset="utf-8">
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">RA Tracking Lag</td>
c t T <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ST VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">DEC Tracking Lag</td>
c t t <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=St VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">RA Tracking Power Percentage</td>
c t H <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=SH VALUE="%hd"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">DEC Tracking Power Percentage</td>
c t h <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sh VALUE="%hd"
t SIZE=3 MAXLENGTH=3></TD></TR>
#
t <tr><td style="text-align: right;">RA Slewing Power Percentage</td>
c t S <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=SS VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">DEC Slewing Power Percentage</td>
c t s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Ss VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t </table>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Set Thresholds" id="sbm">
t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER>
t <p align=center>
t <INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <input type=button value="Refresh" onclick="updateMultiple(formUpdate)">
t </form>
#
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Night mode</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Day mode</a>
t </p>
t </body></html>
.
