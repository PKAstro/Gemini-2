t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <title>TCP Socket Status</title><meta http-equiv="refresh" content="5"></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Aktueller TCP Socket Status</H2>
t <center>
t <TABLE BORDER=0 WIDTH=600>
t   <TR>
t     <TH WIDTH=14%>Socket Nr.</TH>
t     <TH WIDTH=20%>Status</TH>
t     <TH WIDTH=20%>Entf. IP-Adr.</TH>
t     <TH WIDTH=16%>Entf. Port</TH>
t     <TH WIDTH=16%>Lokaler Port</TH>
t     <TH WIDTH=14%>Restzeit</TH>
t   </TR>
c c
t </td></tr></table>
t <FORM ACTION=tcp_de.cgi METHOD=POST NAME=form1>
t  <table WIDTH=660>
t   <TR><TD ALIGN="right">
t   <INPUT TYPE=BUTTON VALUE="Aktualisieren" OnClick="location='/tcp.cgi'">
t   <INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t  </TD></TR></TABLE>
t </center>
t </FORM> 
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Nachtmodus</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Tagmodus</a>
t </p>
t </body></html> 
.
