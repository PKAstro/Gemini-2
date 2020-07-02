t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es> 
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Solar System objects</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Objetos del Sistema Solar</H2>
t <CENTER>
t <form action="catnames.cgi" target="Catsel"><select name="SO" size="1">
t <B>Object</b>
t <option value="0">Sol</option>
t <option value="1">Mercurio</option>
t <option value="2">Venus</option>
t <option value="3">Luna</option>
t <option value="4">Marte</option>
t <option value="5">J&#250;piter</option>
t <option value="6">Saturno</option>
t <option value="7">Urano</option>
t <option value="8">Neptuno</option>
t <option value="9">Plut&#243;n</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Seleccionar Objeto"></P></form></CENTER>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'">
# t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/smp.cgi'">
t </CENTER></P>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </body></html>
.
