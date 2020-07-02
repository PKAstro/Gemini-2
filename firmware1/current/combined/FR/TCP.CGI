#================================================================
# This file displays the status of the Tcp Sockets.
#================================================================
t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t    <META http-equiv=Content-Language content=fr-fr>
t    <meta http-equiv="refresh" content="5">
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t    <title>Statut Socket TCP</title>
t  </head>
t <body style="width:800px;margin:0 auto;">
t	<H2 ALIGN=CENTER>Statut Socket TCP</H2>
t 	<center>
t 	  <TABLE BORDER=0 WIDTH=600>
t 	   <TR>
t 	    <TH WIDTH=14%>Socket</TH>
t 	    <TH WIDTH=20%>Statut</TH>
t 	    <TH WIDTH=20%>Rem IP</TH>
t 	    <TH WIDTH=16%>Rem Port</TH>
t 	    <TH WIDTH=16%>Loc Port</TH>
t 	    <TH WIDTH=14%>Temps</TH>
t 	   </TR>
c c
t	  </td></tr></table>
t 	  <FORM ACTION=tcp.cgi METHOD=POST NAME=form1>
t 	  <table WIDTH=660>
t 	    <TR><TD ALIGN="right">
t 	    <INPUT TYPE=BUTTON VALUE="Rafraichir" OnClick="location='/tcp.cgi'">
t 	    <INPUT TYPE=BUTTON VALUE="Accueil" OnClick="location='/index.htm'">
t 	    </TD></TR></TABLE>
t   	  </FORM> 
t 	</center>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Mode nuit</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Mode jour</a>
t </p>
t   </body>
t </html> 
.
