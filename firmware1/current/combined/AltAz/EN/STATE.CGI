t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=en-us>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Gemini State</title>
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <script language=JavaScript type="text/javascript">
# Define URL and refresh timeout
t var formUpdate = new periodicObj("state.cgx", 500);
t function periodicUpdateState() {
t  if(document.getElementById("StateChkBox").checked == true) {
t   updateMultiple(formUpdate);
t   st_elTime = setTimeout(periodicUpdateState, formUpdate.period);
t  } else clearTimeout(st_elTime);
t }
t </script></head>
# body starts
t <body style="width:800px;margin:0 auto;">
t <FORM ACTION=state.cgi METHOD=POST NAME=state>
t <INPUT TYPE=HIDDEN VALUE="state" NAME=pg>
t <CENTER><H2>Gemini State</H2></CENTER>
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
t </tbody></table></P>
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
t <tr><td>Hour Angle Axis Physical Position:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C p id="HA_PhP" value="%08d"></td>
#
t <td>Declination Axis Physical Position:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C q id="DEC_PhP" value="%08d"></td></tr>
#
t <tr><td>RA PEC Pointer:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C Y id="RA_PeP" value="%05d"></td>
#
t <td>Tracking Time to Western Limit:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c L t id="HA_TrT" value="%02d:%02u:%02u"></td></tr>
#t <td>&nbsp;</td>
#t <td>&nbsp;</td></tr>
#
t <tr><td style="text-align: right;">Telescopic Right Ascension:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C i id="RA_t" value="%02d:%02u:%02u"></td>
t <td>Telescopic Declination:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C j id="DEC_t" value="%c%02d:%02u:%02u"></td></tr>
t <tr><td style="text-align: right;">Apparent Right Ascension:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C r id="RA_hP" value="%02d:%02u:%02u"></td>
t <td style="text-align: right;">Apparent Declination:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C d id="DEC_hP" value="%c%02d:%02u:%02u"></td></tr>
t </tbody></table></P>
#
t <P><B>Target: 
t <input type="text" readonly style="background-color: transparent; border: 0px" id="OName"
c O n value="%s">
t </B></P><P><table style="text-align: right; width: 96%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
#
t <tr><td style="text-align: right; width: 38%;">Target Right Ascension:</td>
t <td align=center style="width: 10%;"><input align="center" type="text" readonly style="background-color:
t transparent; border: 0px"
t align=center size=10 maxsize=10
c C R id="RA_TP" value="%02d:%02u:%02u"></td>
t <td style="width: 38%;">Target Declination:</td>
t <td align=center style="width: 10%;"><input type="text" readonly style="background-color:
t transparent; border: 0px"
t align=center size=10 maxsize=10
c C D id="DEC_TP" value="%c%02d:%02u:%02u"></td></tr>
#
t <tr><td style="text-align: right;">Delta RA:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C u id="RA_DP" value="%c%02d:%02u:%02u"></td>
t <td style="text-align: right;">Delta DEC:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C v id="DEC_DP" value="%c%02d:%02u:%02u"></td></tr>
#
t <tr><td style="text-align: right;">Target Modelled Physical Position RA:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C s id="TR_PhP" value="%08d"></td>
t <td style="text-align: right;">Target Modelled Physical Position DEC:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C t id="TD_PhP" value="%08d"></td></tr>
#
t <tr><td style="text-align: right;">Target Physical Position RA:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C h id="TR_uPhP" value="%08d"></td>
t <td style="text-align: right;">Target Physical Position DEC:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C m id="TD_uPhP" value="%08d"></td></tr>
#
t <tr><td style="text-align: right;">Object Azimuth:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C A id="AZ_TP" value="%03d:%02u:%02u"></td>
t <td style="text-align: right;">Object Elevation:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C E id="EL_TP" value="%c%02d:%02u:%02u"></td></tr>
t </table></P>
#
t <HR><P><B>Information Buffer Content:&nbsp;
c I I <textarea id="Info" name="Info" readonly="readonly" cols="64" rows="2">%s</textarea></B></P>
#
t <HR><P><table><tr><td><B>Current Display Content:</B></td><td>
c I H <input id="HC" name="HC" type="text" readonly="readonly" size=64 maxlength=64 value="%s">
t </td></tr><tr><td><B>Previous Display Content:</B></td><td>
c I P <input id="HP" name="HP" type="text" readonly="readonly" size=64 maxlength=64 value="%s">
t </td></tr></table></P><HR>
#
t <p align=center>
#t <input type=button value="Refresh" onclick="updateMultiple(formUpdate,resize)">
t <INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <input type=button value="Refresh" onclick="updateMultiple(formUpdate)">
t Periodic:<input type="checkbox" id="StateChkBox" onclick="periodicUpdateState()">
t </form>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Night mode</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Day mode</a>
t </p>
t </body></html>
.
