t <!DOCTYPE html PUBLIC "//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es> 
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Parámetros Red</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Parámetros Red</H2>
t <FORM ACTION=network.cgi METHOD=GET NAME=CGI>
t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
t <P><TABLE BORDER=0>
t <TR BGCOLOR=#aaccff><TH WIDTH=40%>&#205;tem</TH>
t <TH WIDTH=30%>Actual</TH><TH WIDTH=30%>Guardado</TH></TR>
t <TR><TD><IMG SRC=pabb.gif>Direcci&#243;n IP de red</TD>
c a i <TD><INPUT TYPE=TEXT NAME=ip VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a I <TD><INPUT TYPE=TEXT NAME=Ip VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Mascara de red</TD>
c a m <TD><INPUT TYPE=TEXT NAME=msk VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a M <TD><INPUT TYPE=TEXT NAME=Msk VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Pasarela predefinida</TD>
c a g <TD><INPUT TYPE=TEXT NAME=gw VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a G <TD><INPUT TYPE=TEXT NAME=Gw VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Servidor DNS primario</TD>
c a p <TD><INPUT TYPE=TEXT NAME=pdns VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a P <TD><INPUT TYPE=TEXT NAME=Pdns VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Servidor DNS secundario</TD>
c a s <TD><INPUT TYPE=TEXT NAME=sdns VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a S <TD><INPUT TYPE=TEXT NAME=Sdns VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Servidor de protocolo de tiempo de red</TD>
c a N <TD><INPUT TYPE=TEXT NAME=NTPS VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>MAC Address</TD>
c a a <TD><INPUT TYPE=TEXT NAME=mac VALUE="%02x:%02x:%02x:%02x:%02x:%02x" SIZE=17 MAXLENGTH=17></TD>
c a A <TD><INPUT TYPE=TEXT NAME=mac VALUE="%02x:%02x:%02x:%02x:%02x:%02x" SIZE=17 MAXLENGTH=17></TD></TR>
#
t <TR><TD><IMG SRC=pabb.gif>UDP socket port</TD>
c a U <TD><INPUT TYPE=TEXT NAME=UP VALUE="%d" SIZE=5 MAXLENGTH=5></TD><TD></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Accepted UDP peer host</TD><TD><INPUT TYPE=TEXT NAME=Up 
c a u VALUE="%u.%u.%u.%u" SIZE=15 MAXLENGTH=15></TD>
t <TD>If an IP address 0.0.0.0 is set, all network hosts are allowed
t to communicate with Gemini!</TD></TR>
#
t <TR><TD><IMG SRC=pabb.gif>Transparent TCP socket port</TD>
c a t <TD><INPUT TYPE=TEXT NAME=TP VALUE="%d" SIZE=5 MAXLENGTH=5></TD><TD></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Accepted TCP peer host</TD><TD><INPUT TYPE=TEXT NAME=Tp 
c a c VALUE="%u.%u.%u.%u" SIZE=15 MAXLENGTH=15></TD>
t <TD>Véase arriba!</TD></TR><TR><TD></TD></TR>
#
t <TR><TD>DHCP Servidor Tiempo limite de desconexion [segundos]:</TD><TD>
c a T <INPUT TYPE=TEXT NAME=dht VALUE="%d" SIZE=2 MAXLENGTH=2></TD><TD></TD></TR>
c a d <TR><TD>Usar DHCP:</TD><TD><input type="checkbox" name="dhcp" %s></TD>
t <TD>On success, these settings take precedence over the stored static configuration.</TD></TR>
t <TR><TD></TD><TD align="left">
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Guardar" id="sbm">
t <INPUT TYPE=RESET VALUE="Deshacer"></TD><TD></TD></TR></table>
t <INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Actualizar" OnClick="location='/network.cgi'">
t </FORM>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </P></BODY></HTML>
.
