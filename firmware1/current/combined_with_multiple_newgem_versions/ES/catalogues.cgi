t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es> 
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Catalogues</title></head>
t <body text=#000000 BGCOLOR=#ccddff LINK=#0000FF VLINK=#0000FF ALINK=#FF0000>
t <H2 ALIGN=CENTER>Catalogues</H2>
# t <INPUT TYPE=HIDDEN VALUE="catalogues" NAME=pg>
t <P><CENTER>
t <B>SD Card Catalogue</B>
c D f %s
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Select Catalogue" id="sbm">
t <INPUT TYPE=RESET VALUE="Undo"></P></form></CENTER>
# -----------------------------------------------
t <P><B>Catalogue Content</B></P><P>
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
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </body></html>
.