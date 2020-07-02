t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es> 
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Autenticidad</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Autenticidad</H2>
t <P><FORM ACTION=index.htm METHOD=POST NAME=CGI>
t <INPUT TYPE=HIDDEN VALUE="sys" NAME=pg>
t <TABLE BORDER=0 WIDTH=99%>
t <TR>
t <TH WIDTH=40%>Item</TH>
t <TH WIDTH=60%>Valor</TH></TR>
#
c d 1 <TR><TD><IMG SRC=pabb.gif>Autenticidad</TD><TD><b>%s</b></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Clave 'admin'</TD>
c d 2 <TD><INPUT TYPE=PASSWORD NAME=pw SIZE=10 MAXLENGTH=10 VALUE="%s"></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Introducir algo</TD>
c d 2 <TD><INPUT TYPE=PASSWORD NAME=pw2 SIZE=10 MAXLENGTH=10 VALUE="%s"></TD></TR>
t <TR><TD>&nbsp;</TD><TD>&nbsp;</TD></TR><TR><TD></TD><TD align="right">
#
t <INPUT TYPE=SUBMIT NAME=set VALUE="Enviar" id="sbm">
t <INPUT TYPE=RESET VALUE="Deshacer">
t <INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'">
t </TD></TR></FORM></P>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </BODY></HTML>
.
