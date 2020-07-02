t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es> 
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t  <title>Conexi&#243;nes TCP</title>
t   <meta http-equiv="refresh" content="5">
t </head>
t <body style="width:800px;margin:0 auto;">
t  <H2 ALIGN=CENTER>Estado de las conexi&#243;nes TCP</H2>
t  <center>
t  <TABLE BORDER=0 WIDTH=600>
t   <TR>
t    <TH WIDTH=14%>Conexi&#243;n</TH>
t    <TH WIDTH=20%>Estado</TH>
t    <TH WIDTH=20%>IP Distante</TH>
t    <TH WIDTH=16%>Puerto Distante</TH>
t    <TH WIDTH=16%>Puerto Local</TH>
t    <TH WIDTH=14%>Contador</TH>
t  </TR>
c c
t  </td></tr></table>
t  <FORM ACTION=tcp.cgi METHOD=POST NAME=form1>
t  <table WIDTH=660>
t   <TR><TD ALIGN="left">
t   <INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'">
t   <INPUT TYPE=BUTTON VALUE="Actualizar" OnClick="location='/tcp.cgi'">
t   </TD></TR></TABLE>
t   </center>
t  </FORM> 
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </body></html> 
.
