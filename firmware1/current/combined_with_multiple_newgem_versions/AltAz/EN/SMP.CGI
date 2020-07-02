#=====================================================================================
#  Solar System objects 
#=====================================================================================
i pg_header.inc
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Solar System objects</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Solar System objects</H2>
t <CENTER>
t <form action="catnames.cgi" target="Catsel"><select name="SO" size="1">
t <B>Object</b>
t <option value="0">Sun</option>
t <option value="1">Mercury</option>
t <option value="2">Venus</option>
t <option value="3">Moon</option>
t <option value="4">Mars</option>
t <option value="5">Jupiter</option>
t <option value="6">Saturn</option>
t <option value="7">Uranus</option>
t <option value="8">Neptune</option>
t <option value="9">Pluto</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Select Object"></P></form></CENTER>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
# t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/smp.cgi'">
t </CENTER></P>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Night mode</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Day mode</a>
t </p>
t </body></html>
.
