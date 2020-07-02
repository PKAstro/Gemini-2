#=====================================================================================
# ----- This is a TcpNet Script file which runs on TcpNet -------
#  SD card catalogues
#=====================================================================================
t <html><head><title>Catalogues</title></head>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t </head>
t <body>
t <H2 ALIGN=CENTER>Catalogues</H2>
# t <INPUT TYPE=HIDDEN VALUE="catalogues" NAME=pg>
t <P><CENTER>
t <B>SD Card Files</B>
c D f %s
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Select Catalogue" id="sbm">
t <INPUT TYPE=RESET VALUE="Undo"></P></form></CENTER>
# -----------------------------------------------
t <P><B>SD Card Content</B></P><P>
c D t
t </P>
#
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/catalogues.cgi'">
t </CENTER></P>
# t Please push the <b>Set</b> button or hit the Return key to submit the changes.</p>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Mode nuit</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Mode jour</a>
t </p>
t </body></html>
