t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es> 
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Puertos Serie</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Puertos Serie</H2>
t <B>Puerto Serie 1 tasa de baudios:
t <CENTER><form action="serial.cgi"><select name="s0" size="1">
c p 0 0 <option value="0" %s>4800</option>
c p 0 1 <option value="1" %s>9600</option>
c p 0 2 <option value="2" %s>19200</option>
c p 0 3 <option value="3" %s>38400</option>
c p 0 4 <option value="4" %s>57600</option>
c p 0 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Ajuste tasa de baudios" id="sbm">
t </form></CENTER>
# -----------------------------------------------
t <B>Puerto Serie 2 tasa de baudios:
t <CENTER><form action="serial.cgi"><select name="s1" size="1">
c p 1 0 <option value="0" %s>4800</option>
c p 1 1 <option value="1" %s>9600</option>
c p 1 2 <option value="2" %s>19200</option>
c p 1 3 <option value="3" %s>38400</option>
c p 1 4 <option value="4" %s>57600</option>
c p 1 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Ajuste tasa de baudios">
t </form></CENTER>
# -----------------------------------------------
t <B>Puerto Serie 3 (Pins 6,7 de Puerto F, 3.3V level) tasa de baudios:</b><BR>
t <b>Atenci&#243;n: &Eacute;ste puerto serie es parte del puerto F y tiene que 
t ser activado mediante el men&#250; de Hardware.</b>
t <CENTER><form action="serial.cgi"><select name="s2" size="1">
c p 2 0 <option value="0" %s>4800</option>
c p 2 1 <option value="1" %s>9600</option>
c p 2 2 <option value="2" %s>19200</option>
c p 2 3 <option value="3" %s>38400</option>
c p 2 4 <option value="4" %s>57600</option>
c p 2 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Ajuste tasa de baudios">
t </form></CENTER>
# -----------------------------------------------
t <b>Puerto Serie 4 (Pins 4,5 de Puerto F, 3.3V level) tasa de baudios:</b><BR>
t <b>Atenci&#243;n: &Eacute;ste puerto serie es parte del puerto F y tiene que ser 
t activado mediante el men&#250; de Hardware.</b>
t <CENTER><form action="serial.cgi"><select name="s3" size="1">
c p 3 0 <option value="0" %s>4800</option>
c p 3 1 <option value="1" %s>9600</option>
c p 3 2 <option value="2" %s>19200</option>
c p 3 3 <option value="3" %s>38400</option>
c p 3 4 <option value="4" %s>57600</option>
c p 3 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Ajuste tasa de baudios">
t </form></CENTER><HR>
# -----------------------------------------------
t <B>Tasa de baudios GPS</b>
t <CENTER><form action="serial.cgi"><select name="sg" size="1">
c p g 0 <option value="0" %s>4800</option>
c p g 1 <option value="1" %s>9600</option>
c p g 2 <option value="2" %s>19200</option>
c p g 3 <option value="3" %s>38400</option>
c p g 4 <option value="4" %s>57600</option>
c p g 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Ajuste tasa de baudios GPS">
t </form></CENTER>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Actualizar" OnClick="location='/serial.cgi'">
t </CENTER></P>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </body></html>
.
