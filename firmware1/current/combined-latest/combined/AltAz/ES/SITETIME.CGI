t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es> 
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Ubicaci&#243;n de la observaci&#243;n</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Par&#225;metros de ubicaciones</H2>
t <B>Ubicaciones predeterminadas</b>
t <CENTER>
t <form action="sitetime.cgi"><select name="si" size="1">
c i 0 <option value="0" %s>%s</option>
c i 1 <option value="1" %s>%s</option>
c i 2 <option value="2" %s>%s</option>
c i 3 <option value="3" %s>%s</option>
c i 4 <option value="4" %s>%s</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Selecci&#243;n de ubicaci&#243;n" id="sbm">
t <INPUT TYPE=RESET VALUE="Deshacer"></P></form></CENTER>
# -----------------------------------------------
t <P><B>Localizaci&#243;n geogr&#225;fica</B></P><FORM ACTION=sitetime.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">Nombre de la ubicaci&#243;n</td>
c s n <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sn VALUE="%s"
t SIZE=15 MAXLENGTH=15></TD>
t <td style="text-align: right;">Zona horaria</td>
c s t <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=st VALUE="%d:%02d"
t SIZE=6 MAXLENGTH=6></TD></TR>
#
t <tr><td style="text-align: right;">Longitud</td>
c s o <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=so VALUE="%c%d&deg;%02d'%02d"
t SIZE=11 MAXLENGTH=11></TD>
t <td style="text-align: right;">Latitud</td>
c s a <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sa VALUE="%c%d&deg;%02d'%02d"
t SIZE=10 MAXLENGTH=10></TD></TR>
t <tr><td style="text-align: right;">Altura (m)</td>
c s e <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=se VALUE="%d"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">Guardar ubicaci&#243;n como #</td>
c s # <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=s# VALUE="%d"
t SIZE=1 MAXLENGTH=1></TD></TR>
#
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Definici&#243;n de la ubicaci&#243;n" id="sbm">
t <INPUT TYPE=RESET VALUE="Deshacer">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <FORM ACTION=sitetime.cgi METHOD=GET NAME=CGI>
t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
#
t <hr style="width: 100%; height: 2px;">
t <h2 style="text-align: center;">Fecha/Hora</h2>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
#
t <tr><td style="text-align: center;">Hora Civil</td>
c T c  <td style="text-align: center;"><INPUT TYPE=TEXT NAME=tc VALUE="%02d:%02u:%02u"
t SIZE=9 MAXLENGTH=9></TD></td>
t <td style="text-align: right;">Fecha Civil(dd.mm.yyyy)</td>
c T C  <td style="text-align: center;"><INPUT TYPE=TEXT NAME=dc VALUE="%02u.%02u.%04u"
t SIZE=11 MAXLENGTH=11></TD></tr>
#
t </tbody></table><br>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Establecer" id="sbm">
t <INPUT TYPE=RESET VALUE="Deshacer">
t </CENTER></P></FORM>
# -----------------------------------------------
t <FORM ACTION=sitetime.cgi METHOD=GET NAME=CGI>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
#
t <tr><td style="text-align: center;">Hora TU</td>
c T u  <td style="text-align: center;"><INPUT TYPE=TEXT NAME=tu VALUE="%02d:%02u:%02u"
t SIZE=10 MAXLENGTH=10></td>
t <td style="text-align: right;">Fecha TU(dd.mm.yyyy)</td>
c T U <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=du VALUE="%02u.%02u.%04u"
t SIZE=10 MAXLENGTH=10></TD></tr>
#
t <tr><td style="text-align: center;">Tiempo sideral</td>
c T s  <td style="text-align: center;">%02d:%02u:%02u</td>
t <td style="text-align: right;">Fecha juliana</td>
c T m <td style="text-align: center;">%11.5f</td></tr>
t </tbody></table>
# UTC button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Establecer" id="sbm">
t <INPUT TYPE=RESET VALUE="Deshacer"></CENTER></P></form><HR>
# -----------------------------------------------
t <H2 ALIGN=CENTER>Consulta el servidor NTP</H2>
t <CENTER><P>
#t <form action="sitetime.cgi"><select name="nt" size="1">
# Here are the button definitions
t <INPUT TYPE=BUTTON NAME=set VALUE="Consulta el servidor NTP" OnClick="location='/sitetime.cgi?nt=1'">
t </P></CENTER><HR>
# -----------------------------------------------
t <H2 ALIGN=CENTER>Buscar receptor GPS</H2>
t <CENTER><P><form action="sitetime.cgi"><select name="gp" size="1">
c q 0 <option value="0" %s>Puerto Serie 1</option>
c q 1 <option value="1" %s>Puerto Serie 2</option>
c q 2 <option value="2" %s>Puerto Serie 3</option>
c q 3 <option value="3" %s>Puerto Serie 4</option>
c q 4 <option value="4" %s>Indefinido</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Buscar receptor GPS">
c F ? <P><B>%s</B></P>
t </P></form></CENTER><HR>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Actualizar" OnClick="location='/sitetime.cgi'">
t </CENTER></P>
t <p>Esta p&#225;gina permite definir la ubicaci&#243;n geogr&#225;fica y programar hasta 5
t distintas. Ubicaci&#243;n #0 es la actual, ubicaci&#243;n de #1 a #4 se pueden almacenar 
t para una selecci&#243;n rápida
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </body></html>
.
