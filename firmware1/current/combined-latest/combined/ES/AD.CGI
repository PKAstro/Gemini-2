t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es> 
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <script language=JavaScript type="text/javascript">
# Define URL and refresh timeout
t var formUpdate = new periodicObj("ad.cgx", 300);
t function periodicUpdate() {
t  if(document.getElementById("refreshChkBox").checked == true) {
t   updateMultiple(formUpdate);
t   periodicFormTime = setTimeout("periodicUpdate()", formUpdate.period); 
t  }
t  else	clearTimeout(periodicFormTime);
t }
t </script>
t <title>Equipo</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Voltaje de alimentaci&#243;n</H2>
t <P><FORM ACTION=ad.cgi METHOD=POST NAME=AD>
t <INPUT TYPE=HIDDEN VALUE="ad" NAME=pg>
t <TABLE BORDER=0 WIDTH=99%>
t <TR>
t <TH WIDTH=15%>A/D Valor</TH>
t <TH WIDTH=15%>Voltios</TH>
t <TH WIDTH=55%>Gr&#225;fico de barras</TH></TR>
#
c A 1 <TR><TD align="center">0x%03X</TD>
c A 2 <TD align="center">%5.3f V</TD>
t <td height=50><table bgcolor="#FFFFFF" border="2" cellpadding="0" cellspacing="0" width="100%">
c A 3 <tr><td><table width="%d%%" border="0" cellpadding="0" cellspacing="0">
c A C <tr><td bgcolor="%s">
t &nbsp;</td></tr></table></td></tr></table></td></TR></TABLE></P>
#
t <H2 ALIGN=CENTER>Voltaje de la bater&#237;a de Litio</H2>
t <P><FORM ACTION=ad.cgi METHOD=POST NAME=AD>
t <INPUT TYPE=HIDDEN VALUE="ad" NAME=pg>
t <TABLE BORDER=0 WIDTH=99%>
t <TR>
t <TH WIDTH=15%>A/D Valor</TH>
t <TH WIDTH=15%>Voltios</TH>
t <TH WIDTH=55%>Gr&#225;fico de barras</TH></TR>
#
c A 4 <TR><TD align="center">0x%03X</TD>
c A 5 <TD align="center">%5.3f V</TD>
t <td height=50><table bgcolor="#FFFFFF" border="2" cellpadding="0" cellspacing="0" width="100%">
c A 6 <tr><td><table width="%d%%" border="0" cellpadding="0" cellspacing="0">
c A c <tr><td bgcolor="%s">
t &nbsp;</td></tr></table></td></tr></table></td></TR></TABLE></P>
# t <TR><TD>&nbsp;</TD><TD>&nbsp;</TD></TR><TR><TD></TD><TD align="right">
t <p align="center">
# button definitions
t <INPUT TYPE=BUTTON VALUE="Actualizar" OnClick="location='/ad.cgi'">
# t </TD><TD></TD><TD></TD></TR>
# t </TABLE>
t </FORM><HR>
t <h2 align="center">Estado de los conectores</h2>
t <form action="ad.cgi" method="post" id="form1" name="form1">
t <table border="0" width=99%><font size="3">
t <tr>
t  <th width=40%>Item</th>
t  <th width=60%>Estado</th>
t </tr>
t <tr>
t  <td><img src="pabb.gif">Botones CM:</td>
t  <td align="center">
t   <input type="checkbox" disabled id="buttonA">RA-
t   <input type="checkbox" disabled id="buttonB">DEC-
t   <input type="checkbox" disabled id="buttonC">DEC+
t   <input type="checkbox" disabled id="buttonD">RA+
t  </td></tr>
t <tr>
t  <td><img src="pabb.gif">Puerto AG:</td>
t  <td align="center">
t   <input type="checkbox" disabled id="buttonE">RA-
t   <input type="checkbox" disabled id="buttonF">DEC-
t   <input type="checkbox" disabled id="buttonG">DEC+
t   <input type="checkbox" disabled id="buttonH">RA+
t </td></tr>
t <tr>
t  <td><img src="pabb.gif">Puerto F:</td>
t  <td align="center">
t   <input type="checkbox" disabled id="buttonN">F5
t   <input type="checkbox" disabled id="buttonM">F4
t   <input type="checkbox" disabled id="buttonL">F3
t   <input type="checkbox" disabled id="buttonK">F2
t   <input type="checkbox" disabled id="buttonJ">F1
t   <input type="checkbox" disabled id="buttonI">F0
t  </td></tr>
t  <td><img src="pabb.gif">Puerto E:</td>
t  <td align="center">
t   <input type="checkbox" disabled id="buttonR">E3
t   <input type="checkbox" disabled id="buttonQ">E2
t   <input type="checkbox" disabled id="buttonP">E1
t   <input type="checkbox" disabled id="buttonO">E0
t  </td></tr>
t </font></table>
t <p align="center">
t  <input type="button" id="refreshBtn" value="Actualizar" onclick="updateMultiple(formUpdate)">
t  Peri&#243;dico:<input type="checkbox" id="refreshChkBox" onclick="periodicUpdate()">
#t <P><INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'"> 
t </p></form><HR>
# -----------------------------------------------
t <center><h2>Uso del puerto E</h2>
t <form action="ad.cgi"><select name="ep" size="1">
c e 0 <P><option value="0" %s>Ignorar/fuera de servicio</option>
c e 1 <option value="1" %s>Encoder de eje</option>
c e 2 <option value="2" %s>Interruptor final de carrera</option></P>
# Here are the button definitions
t <BR><P><INPUT TYPE=SUBMIT NAME=set VALUE="Definir">
t <INPUT TYPE=RESET VALUE="Undo"></P></form></center><HR>
# -----------------------------------------------
t <center><h2>Estado de Puerto F</h2></center>
t <form action="ad.cgi" method="post" name="form2">
t <P><center><input type="checkbox" id="Feat5">F5
t   <input type="checkbox" id="Feat4">F4
t   <input type="checkbox" id="Feat3">F3
t   <input type="checkbox" id="Feat2">F2
t   <input type="checkbox" id="Feat1">F1
t   <input type="checkbox" id="Feat0">F0</center></P><HR>
t <P><INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'"> 
t </p></form>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </BODY></HTML>
.
