t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Kataloge</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Kataloge</H2><P><CENTER>
t <B>Kataloge auf der SD-Karte</B>
c D f %s
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="W&auml;hle Katalog" id="sbm">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen"></P></form></CENTER>
# -----------------------------------------------
t <P><B>Inhalt des Katalogs</B></P><P>
c D t
t </P>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="R&uuml;cksetzen" OnClick="location='/catalogues.cgi'">
t </CENTER></P>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Nachtmodus</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Tagmodus</a>
t </p>
t </body></html>
.
