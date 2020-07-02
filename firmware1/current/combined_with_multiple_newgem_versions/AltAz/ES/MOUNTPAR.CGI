#=====================================================================================
#  Gemini mount parameter setup 
#=====================================================================================
t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es> 
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Par&#225;metros montura</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Configuraci&#243;n par&#225;metros montura</H2>
# -----------------------------------------------
t <B>Manera de montura</b><CENTER>
t <form action="mountpar.cgi"><select name="mD" size="1">
c N 0 <option value="0" %s>Ecuatorial</option>
c N 1 <option value="1" %s>Alt/Az</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Ajuste manera de montura">
t <INPUT TYPE=RESET VALUE="Deshacer"></P></form></CENTER><HR>
# -----------------------------------------------
t <B>Tipo de montura</b><CENTER>
t <form action="mountpar.cgi"><select name="mt" size="1">
c m 0 <option value="0" %s>Montura personalizada</option>
c m 1 <option value="1" %s>GM-8</option>
c m 2 <option value="2" %s>G11</option>
c m 3 <option value="3" %s>HGM-200</option>
c m 4 <option value="4" %s>MI-250</option>
c m 5 <option value="5" %s>Titan</option>
c m 6 <option value="6" %s>Titan50</option>
c m 7 <option value="7" %s>G11T</option>
c m 8 <option value="8" %s>G811</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Ajuste tipo de montura" id="sbm">
t <INPUT TYPE=RESET VALUE="Deshacer"></P></form></CENTER>
# -----------------------------------------------
t <P><B>Reducci&#243;n</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 90%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">Ratio del Bisinfin en AR</td>
c M W <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=wr VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">Ratio del Bisinfin en DEC</td>
c M w <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=wd VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">Reducci&#243;n en AR</td>
c M S <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sr VALUE="%hd"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">Reducci&#243;n en DEC</td>
c M s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sd VALUE="%hd"
t SIZE=3 MAXLENGTH=3></TD></TR>
#
t <tr><td style="text-align: right;">Resoluci&#243;n del encoder del motor de AR</td>
c M R <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=mr VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">Resoluci&#243;n del encoder del motor de DEC</td>
c M r <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=md VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">Resoluci&#243;n de posici&#243;n en AR</td>
c M A <TD style="text-align: center;">%lf"</td>
t <td style="text-align: right;">Resoluci&#243;n de posici&#243;n en DEC</td>
c M a <TD style="text-align: center;">%lf"</td></tr>
#
t <tr><td style="text-align: right;"><br></td>
c M R <TD style="text-align: center;"><br></td>
t <td style="text-align: right;">Cuenta de pasos TVC en DEC</td>
c M T <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=dt VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Ajuste reducci&#243;n" id="sbm">
t <INPUT TYPE=RESET VALUE="Deshacer">
t </CENTER></P></TD></TR></FORM>
#
# -----------------------------------------------
t <HR><P><B>Velocidades</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
#
t <tr><td style="text-align: right;">Velocidad de Slewing manual en AR</td>
c V S <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VM VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">Velocidad de Slewing manual en DEC</td>
c V s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vm VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">Velocidad de GOTO en AR</td>
c V T <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VT VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">Velocidad de GOTO en DEC</td>
c V t <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vt VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">Velocidad de Move en AR</td>
c V M <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VV VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">Velocidad de Move en DEC</td>
c V m <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vv VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">Aceleraci&#243;n de velocidad Slewing en AR</td>
c V A <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VA VALUE="%6f"
t SIZE=6 MAXLENGTH=7></TD>
t <td style="text-align: right;">Aceleraci&#243;n de velocidad Slewing en DEC</td>
c V a <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Va VALUE="%6f"
t SIZE=6 MAXLENGTH=7></TD></TR>
#
t <tr><td style="text-align: right;">Velocidad de centrado en AR</td>
c V C <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VC VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">Velocidad de centrado en DEC</td>
c V c <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vc VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">Velocidad de guiado en AR</td>
c V G <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VG VALUE="%d.%d"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">Velocidad de guiado en DEC</td>
c V g <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vg VALUE="%d.%d"
t SIZE=3 MAXLENGTH=3></TD></TR>
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Seleccionar Velocidad" id="sbm">
t <INPUT TYPE=RESET VALUE="Deshacer">
t </CENTER></P></TD></TR></FORM>
#
# -----------------------------------------------
t <HR><P><B>L&#237;mites de seguridad</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">L&#237;mite de seguridad izquierdo</td>
c S l <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sl VALUE="%d°%02d'"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">L&#237;mite de seguridad derecho</td>
c S r <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sr VALUE="%d°%02d'"
t SIZE=7 MAXLENGTH=7></TD></TR>
#
t <tr><td style="text-align: right;">Posici&#243;n límite de seguridad izquierda</td>
c L l <TD style="text-align: center;">%d</TD>
t <td style="text-align: right;">Posici&#243;n l&#237;mite de seguridad derecha</td>
c L r <TD style="text-align: center;">%d</TD></TR>
#
t <tr><td style="text-align: right;">L&#237;mite de GOTO en el oeste</td>
c S g <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sg VALUE="%d°%02d'"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">Posici&#243;n l&#237;mite de GOTO en el oeste</td>
c L g <TD style="text-align: center;">%d</TD></TR>
#
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Definir los l&#237;mites de seguridad" id="sbm">
t <INPUT TYPE=RESET VALUE="Deshacer">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <HR><P><B>Encoders de ejes</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">Resoluci&#243;n encoder de AR</td>
c E R <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ER VALUE="%d"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">Resoluci&#243;n encoder de DEC</td>
c E D <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ED VALUE="%d"
t SIZE=7 MAXLENGTH=7></TD></TR>
##
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Definir los encoders de los ejes">
t <INPUT TYPE=RESET VALUE="Deshacer">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
#t <H2 ALIGN=CENTER>Modo de arranque predefinido</H2>
t <HR><B>Modo de arranque predefinido</b>
t <CENTER><P>
t <form action="mountpar.cgi"><select name="bm" size="1">
c b 0 <option value="0" %s>%s</option>
c b 1 <option value="1" %s>%s</option>
c b 2 <option value="2" %s>%s</option>
c b 3 <option value="3" %s>%s</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Selección de modo">
#t <INPUT TYPE=RESET VALUE="Deshacer">
t </form></P></CENTER>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Actualizar" OnClick="location='/mountpar.cgi'">
t </CENTER></P>
t <p>Esta p&#225;gina permite entrar los par&#225;metros de la montura. &#218;sela con precauci&#243;n! 
t Es necesario un reinicio en frio antes de usar la montura con los nuevos par&#225;metros<BR>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </body></html>
.
