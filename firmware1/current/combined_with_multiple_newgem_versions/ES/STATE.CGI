t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es>
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <script language=JavaScript type="text/javascript">
# Define URL and refresh timeout
t var formUpdate = new periodicObj("state.cgx", 500);
t function periodicUpdateState() {
t  if(document.getElementById("StateChkBox").checked == true) {
t   updateMultiple(formUpdate);
t   st_elTime = setTimeout(periodicUpdateState, formUpdate.period);
t  } else clearTimeout(st_elTime);
t }
t </script>
t <title>Estado del Gemini</title></head>
t <body style="width:800px;margin:0 auto;">
t <FORM ACTION=state.cgi METHOD=POST NAME=state>
t <INPUT TYPE=HIDDEN VALUE="state" NAME=pg>
t <CENTER><H2>Estado de Gemini</H2></CENTER>
#
t <P><table style="text-align: left; width: 75%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
# t  <caption></caption>
t <tbody>
t <tr><td style="text-align: right;">Fecha TU (dd.mm.yyyy):</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
c T U id="UTCDate" value="%02u.%02u.%04u"></td>
t <td style="text-align: right;">Hora TU:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
c T u id="UTCTime" value="%02d:%02u:%02u"></td></tr>
t </tbody></table></P>
#
t <P><B>Coordenadas del Telescopio:</B></P>
t <P><table style="text-align: right; width: 96%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
# t  <caption></caption>
t <tbody><tr><td style="width: 38%;">Estado del eje horario:</td>
t <td style="width: 10%;"><input type="text" readonly style="background-color: 
t transparent; border: 0px" align=center size=20 maxsize=20
c t x id="VelocityR" value="%s"></td>
t <td style="width: 38%;">Estado del eje de declinaci&#243;n:</td>
t <td style="width: 10%;"><input type="text" readonly style="background-color: 
t transparent; border: 0px" align=center size=20 maxsize=20
c t y id="VelocityD" value="%s"></td></tr>
#
t <tr><td>Posici&#243;n f&#237;sica del eje de AR:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C p id="HA_PhP" value="%08d"></td>
t <td>Posici&#243;n f&#237;sica del eje de DEC:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C q id="DEC_PhP" value="%08d"></td></tr>
#
t <tr><td>Posici&#243;n RA PEC:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C Y id="RA_PeP" value="%05d"></td>
#
t <td>Tiempo de seguimiento al límite Oeste:</td>
t <td align=center><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c L t id="HA_TrT" value="%02d:%02u:%02u"></td><tr>
#
t <tr><td style="text-align: right;">Ascensi&#243;n recta telesc&#243;pica:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C i id="RA_t" value="%02d:%02u:%02u"></td>
t <td>Declinaci&#243;n telesc&#243;pica:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C j id="DEC_t" value="%c%02d:%02u:%02u"></td></tr>
t <tr><td style="text-align: right;">Ascensión Recta aparente:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C r id="RA_hP" value="%02d:%02u:%02u"></td>
t <td style="text-align: right;">Declinaci&#243;n aparente:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C d id="DEC_hP" value="%c%02d:%02u:%02u"></td></tr>
t </tbody></table></P>
#
t <P><B>Destino: 
t <input type="text" readonly style="background-color: transparent; border: 0px" id="OName"
c O n value="%s">
t </B></P><P><table style="text-align: right; width: 96%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
#
t <tr><td style="text-align: right; width: 38%;">Ascensi&#243;n Recta de objetivo:</td>
t <td align=center style="width: 10%;"><input align="center" type="text" readonly style="background-color:
t transparent; border: 0px"
t align=center size=10 maxsize=10
c C R id="RA_TP" value="%02d:%02u:%02u"></td>
t <td style="width: 38%;">Declinación de objetivo:</td>
t <td align=center style="width: 10%;"><input type="text" readonly style="background-color:
t transparent; border: 0px"
t align=center size=10 maxsize=10
c C D id="DEC_TP" value="%c%02d:%02u:%02u"></td></tr>
#
t <tr><td style="text-align: right;">Delta AR:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C u id="RA_DP" value="%c%02d:%02u:%02u"></td>
t <td style="text-align: right;">Delta DEC:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C v id="DEC_DP" value="%c%02d:%02u:%02u"></td></tr>
#
t <tr><td style="text-align: right;">Posici&#243;n f&#237;sica del objetivo con modelo en AR:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C s id="TR_PhP" value="%08d"></td>
t <td style="text-align: right;">Posici&#243;n f&#237;sica del objetivo con modelo en DEC:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C t id="TD_PhP" value="%08d"></td></tr>
#
t <tr><td style="text-align: right;">Posici&#243;n f&#237;sica del objetivo en AR:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C h id="TR_uPhP" value="%08d"></td>
t <td style="text-align: right;">Posici&#243;n f&#237;sica del objetivo en DEC:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C m id="TD_uPhP" value="%08d"></td></tr>
#
t <tr><td style="text-align: right;">Azimut del objetivo:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C A id="AZ_TP" value="%03d:%02u:%02u"></td>
t <td style="text-align: right;">Elevaci&#243;n del objetivo:</td>
t <td align="center"><input type="text" readonly style="background-color: transparent; border: 0px"
t align=center size=10 maxsize=10
c C E id="EL_TP" value="%c%02d:%02u:%02u"></td></tr>
t </table></P>
#
t <HR><P><B>Informaci&#243;n del contenido del buffer:&nbsp;
c I I <textarea id="Info" name="Info" readonly="readonly" cols="64" rows="2">%s</textarea></B></P>
#
t <HR><P><table><tr><td><B>Pantalla corriente:</B></td><td>
c I H <input id="HC" name="HC" type="text" readonly="readonly" size=64 maxlength=64 value="%s">
t </td></tr><tr><td><B>Pantalla previa:</B></td><td>
c I P <input id="HP" name="HP" type="text" readonly="readonly" size=64 maxlength=64 value="%s">
t </td></tr></table></P><HR>
#
t <p align=center>
t <INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'">
t <input type=button value="Actualizar" onclick="updateMultiple(formUpdate)">
t Peri&#243;dico:<input type="checkbox" id="StateChkBox" onclick="periodicUpdateState()">
t </form>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </body></html>
.
