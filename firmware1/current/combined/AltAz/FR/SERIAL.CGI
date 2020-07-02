#=====================================================================================
#  Gemini serial port settings 
#=====================================================================================
i pg_header.inc
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Serial Ports</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Serial Ports settings</H2>
t <B>Serial Port 1</b>
t <CENTER><form action="serial.cgi"><select name="s0" size="1">
t <B>Serial Port 0 Baudrate:
c p 0 0 <option value="0" %s>4800</option>
c p 0 1 <option value="1" %s>9600</option>
c p 0 2 <option value="2" %s>19200</option>
c p 0 3 <option value="3" %s>38400</option>
c p 0 4 <option value="4" %s>57600</option>
c p 0 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Set Baudrate" id="sbm">
t </form></CENTER>
# -----------------------------------------------
t <B>Serial Port 2</b>
t <CENTER><form action="serial.cgi"><select name="s1" size="1">
t <B>Serial Port 1 Baudrate:
c p 1 0 <option value="0" %s>4800</option>
c p 1 1 <option value="1" %s>9600</option>
c p 1 2 <option value="2" %s>19200</option>
c p 1 3 <option value="3" %s>38400</option>
c p 1 4 <option value="4" %s>57600</option>
c p 1 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Set Baudrate" id="sbm">
t </form></CENTER>
# -----------------------------------------------
t <B>Serial Port 3 (Pins 6,7 of the Feature port, 3.3V level)</b>
t <CENTER><form action="serial.cgi"><select name="s2" size="1">
t <B>Serial Port 2 Baudrate:
t Note: This port is part of the Feature Port and has to be activated using the Hardware menu</b>
c p 2 0 <option value="0" %s>4800</option>
c p 2 1 <option value="1" %s>9600</option>
c p 2 2 <option value="2" %s>19200</option>
c p 2 3 <option value="3" %s>38400</option>
c p 2 4 <option value="4" %s>57600</option>
c p 2 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Set Baudrate" id="sbm">
t </form></CENTER>
# -----------------------------------------------
t <B>Serial Port 4 (Pins 4,5 of the Feature port, 3.3V level)</b>
t <CENTER><form action="serial.cgi"><select name="s3" size="1">
t <B>Serial Port 3 Baudrate:
t Note: This port is part of the Feature Port and has to be activated using the Hardware menu</b>
c p 3 0 <option value="0" %s>4800</option>
c p 3 1 <option value="1" %s>9600</option>
c p 3 2 <option value="2" %s>19200</option>
c p 3 3 <option value="3" %s>38400</option>
c p 3 4 <option value="4" %s>57600</option>
c p 3 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Set Baudrate" id="sbm">
t </form></CENTER>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Accueil" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Rafraîchir" OnClick="location='/serial.cgi'">
t </CENTER></P>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Mode nuit</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Mode jour</a>
t </p>
t </body></html>
.
