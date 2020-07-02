t <!DOCTYPE html PUBLIC "//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es> 
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Funciones</title></head>
t <body style="width:800px;margin:0 auto;">
t <h1 style="text-align: center;">Funciones</h1>
t <h2>Entrada de Coordenadas GoTo</h2>
t <FORM ACTION=functions.cgi METHOD=GET NAME=CGI>
t <H3>RA/DEC</H3>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
#
t <tr><td style="text-align: right;">Ascensi&#243;n Recta<br> </td>
c C r <td style="text-align: center;">%02d:%02u:%02u</td>
t <td style="text-align: right;">Declinaci&#243;n<br> </td>
c C d <td style="text-align: center;">%c%02d:%02u:%02u<br> </td></tr>
#
t <tr> <td style="text-align: right;">Ascensi&#243;n Recta de Objetivo</td>
c C R <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=tr VALUE="%02u:%02u:%02u"
t SIZE=9 MAXLENGTH=9></TD>
t <td style="text-align: right;">Declinaci&#243;n de Objetivo</td>
c C D <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=td VALUE="%c%02u:%02u:%02u"
t SIZE=10 MAXLENGTH=10></TD></TR>
#
t </tbody></table></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Poner AR/DEC de Objetivo">
t <INPUT TYPE=SUBMIT NAME=GT VALUE="GoTo AR/DEC">
#t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <FORM ACTION=functions.cgi METHOD=GET NAME=CGI>
t <H3>Posici&#243;n f&#237;sica</H3>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
t <tr><td style="text-align: right;">Posici&#243;n f&#237;sica de eje horario</td>
c C p <td style="text-align: center;">%08d</td>
t <td style="text-align: right;">Posici&#243;n f&#237;sica de eje de Declinaci&#243;n</td>
c C q <td style="text-align: center;">%08u</td></tr>
#
t <tr><td style="text-align: right;">Posici&#243;n f&#237;sica de Objetivo en AR</td>
c C s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=tR VALUE="%08u"
t SIZE=11 MAXLENGTH=11></TD>
#c C s <td style="text-align: center;">%08d</td>
t <td style="text-align: right;">Posici&#243;n f&#237;sica  de Objetivo en DEC</td>
c C t <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=tD VALUE="%08u"
t SIZE=11 MAXLENGTH=11></TD></TR>
#c C t <td style="text-align: center;">%08d<br> </td></tr>
#
t </tbody></table></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Poner  Objetivo f&#237;sico">
t <INPUT TYPE=SUBMIT NAME=GP VALUE="GoTo f&#237;sico">
#t <INPUT TYPE=RESET VALUE="Deshacer">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <FORM ACTION=functions.cgi METHOD=GET NAME=CGI>
# t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
#
t <h3>Alt/Az</h3>
t <table style="width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
# t  <caption></caption>
t <tr><td style="text-align: right;">Azimut</td><td style="text-align: center;">
c C a %03d:%02u:%02u</td>
t <td style="text-align: right;">Elevaci&#243;n<br></td>
c C e <td style="text-align: center;">%c%02d:%02u:%02u</td></tr>
#
t <tr><td style="text-align: right;">Azimut del Objetivo</td>
c C A <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ta VALUE="%03u:%02u:%02u"
t SIZE=11 MAXLENGTH=11></TD>
t <td style="text-align: right;">Elevaci&#243;n del Objetivo</td>
c C E <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=te VALUE="%c%02u:%02u:%02u" 
t SIZE=10 MAXLENGTH=10></TD></TR>
#c C E <td style="text-align: center;">%c%02d:%02u:%02u</td></tr>
t </tbody></table>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Poner Az/El del Ojetivo" id="sbm">
t <INPUT TYPE=SUBMIT NAME=GP VALUE="Alt/Az GoTo">
t </CENTER></P><HR>
# -----------------------------------------------
t <h2>Aparcar/Despertar Montura</h2>
t <CENTER><P><form action="functions.cgi" METHOD=GET NAME=CGI>
t <INPUT TYPE=SUBMIT NAME="PC" VALUE="Aparcar @ CWD"">
t <INPUT TYPE=SUBMIT NAME="PZ" VALUE="Aparcar @ Zenit">
t <INPUT TYPE=SUBMIT NAME="PH" VALUE="Aparcar @ Home">
t <INPUT TYPE=SUBMIT NAME="Ph" VALUE="Poner Posici&#243;n Home"><BR>
t <INPUT TYPE=SUBMIT NAME="PS" VALUE="Detener Seguimiento">
t <INPUT TYPE=SUBMIT NAME="PW" VALUE="Reiniciar Seguimiento"><BR>
t <INPUT TYPE=SUBMIT NAME="bO" VALUE="Arrancar">
t <INPUT TYPE=SUBMIT NAME="bC" VALUE="Arrancar en frio">
t </CENTER></form></P><HR>
# -----------------------------------------------
t <h2>Modo de Aparcar Montura</h2>
t <CENTER><form action="functions.cgi"><select name="PM" size="1">
c R 0 <option value="0" %s>Modo 0</option>
c R 1 <option value="1" %s>Modo 1</option>
c R 2 <option value="2" %s>Modo 2</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Select Parking Mode">
t </form></CENTER><HR>
# -----------------------------------------------
t <h2>Periodic Error Control</h2>
t <CENTER><P><form action="functions.cgi" METHOD=GET NAME=CGI>
t <INPUT TYPE=SUBMIT NAME="pt" VALUE="Train PEC">
t <INPUT TYPE=SUBMIT NAME="pa" VALUE="Abort PEC Training">
t <INPUT TYPE=SUBMIT NAME="ps" VALUE="Start PEC Replay">
t <INPUT TYPE=SUBMIT NAME="pe" VALUE="End PEC Replay">
t </CENTER></form></P><HR>
# -----------------------------------------------
t <h2>Modo de Control Manual Clásico</h2>
t <CENTER><P><form action="functions.cgi"><select name="hc" size="1">
c h 0 <option value="0" %s>Modo Visual</option>
c h 1 <option value="1" %s>Modo Photo</option>
c h 2 <option value="2" %s>Modo Todas Velocidades</option></P>
# Here are the button definitions
t <BR><P><INPUT TYPE=SUBMIT NAME=set VALUE="Poner Modo CM">
#t <INPUT TYPE=RESET VALUE="Undo">
t </form></P></CENTER><HR>
# -----------------------------------------------
t <h2>Velocidad Seguimiento</h2>
t <CENTER><P><form action="functions.cgi"><select name="ts" size="1">
c n 0 <option value="0" %s>Sideral</option>
c n 1 <option value="1" %s>King Ratio</option>
c n 2 <option value="2" %s>Lunar</option>
c n 3 <option value="3" %s>Solar</option>
c n 4 <option value="4" %s>Terrestre</option>
c n 5 <option value="5" %s>Bucle Cerrado</option>
c n 5 <option value="6" %s>Cometario/Definido por el usuario</option></P>
# Here are the button definitions
t <BR><P><INPUT TYPE=SUBMIT NAME=set VALUE="Poner Ratio Seguimiento">
t </P></CENTER></form><HR>
# -----------------------------------------------
t <P><INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Actualizar" OnClick="location='/functions.cgi'">
t </FORM></CENTER></P>
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </body></html>
.
