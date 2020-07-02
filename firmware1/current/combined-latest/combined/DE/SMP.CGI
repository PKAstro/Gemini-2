t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Sonnensystem</title></head>
t <body>
t <H2 ALIGN=CENTER>Sonnensystem</H2>
# t <INPUT TYPE=HIDDEN VALUE="mountpar" NAME=pg>
t <CENTER>
t <form action="catnames.cgi" target="Catsel"><select name="SO" size="1">
# t <B>Object</b>
t <option value="0">Sonne</option>
t <option value="1">Merkur</option>
t <option value="2">Venus</option>
t <option value="3">Mond</option>
t <option value="4">Mars</option>
t <option value="5">Jupiter</option>
t <option value="6">Saturn</option>
t <option value="7">Uranus</option>
t <option value="8">Neptun</option>
t <option value="9">Pluto</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="W&auml;hle Objekt"></P></form></CENTER>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
# t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/smp.cgi'">
t </CENTER></P>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Nachtmodus</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Tagmodus</a>
t </p>
t </body></html>
.
