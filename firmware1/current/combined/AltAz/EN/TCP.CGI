#================================================================
# ----- This is a TcpNet Script file which runs on TcpNet -------
# It displays the status of the Tcp Sockets.
#================================================================
t <HTML>
t   <head>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t     <title>TCP Socket Status</title>
t     <meta http-equiv="refresh" content="5">
t   </head>
t <body style="width:800px;margin:0 auto;">
t 	  <H2 ALIGN=CENTER>TCP Socket status</H2>
t 	  <center>
t 	  <TABLE BORDER=0 WIDTH=600>
t 	  <TR>
t 	    <TH WIDTH=14%>Socket</TH>
t 	    <TH WIDTH=20%>State</TH>
t 	    <TH WIDTH=20%>Rem IP</TH>
t 	    <TH WIDTH=16%>Rem Port</TH>
t 	    <TH WIDTH=16%>Loc Port</TH>
t 	    <TH WIDTH=14%>Timer</TH>
t 	  </TR>
c c
t 	  </td></tr></table>
t 	  <FORM ACTION=tcp.cgi METHOD=POST NAME=form1>
t 	  <table WIDTH=660>
t 	  <TR><TD ALIGN="left">
t 	  <INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t 	  <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/tcp.cgi'">
t 	  </TD></TR></TABLE>
t 	  </center>
t 	  </FORM>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Night mode</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Day mode</a>
t </p> 
t   </body>
t </html> 
.
