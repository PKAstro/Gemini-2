#=====================================================================================
#  Solar System objects 
#=====================================================================================
i pg_header.inc
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Objets de Syst&egrave;me Solaire</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Objets de Syst&egrave;me Solaire</H2>
# t <INPUT TYPE=HIDDEN VALUE="mountpar" NAME=pg>
t <CENTER>
t <form action="catnames.cgi" target="Catsel"><select name="SO" size="1">
t <B>Object</b>
t <option value="0">Soleil</option>
t <option value="1">Mercure</option>
t <option value="2">Venus</option>
t <option value="3">Lune</option>
t <option value="4">Mars</option>
t <option value="5">Jupiter</option>
t <option value="6">Saturne</option>
t <option value="7">Uranus</option>
t <option value="8">Neptune</option>
t <option value="9">Pluton</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="S&eacute;lection d'Objet"></P></form></CENTER>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Accueil" OnClick="location='/index.htm'">
# t <INPUT TYPE=BUTTON VALUE="Rafraichir" OnClick="location='/smp.cgi'">
t </CENTER></P>
t </body></html>
.
