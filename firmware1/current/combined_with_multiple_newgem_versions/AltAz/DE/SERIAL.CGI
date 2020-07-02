t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Serielle Schnittstellen</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Serielle Schnittstellen</H2>
t <B>Serielle Schnittstelle 1, Baudrate:
t <CENTER><form action="serial.cgi"><select name="s0" size="1">
c p 0 0 <option value="0" %s>4800</option>
c p 0 1 <option value="1" %s>9600</option>
c p 0 2 <option value="2" %s>19200</option>
c p 0 3 <option value="3" %s>38400</option>
c p 0 4 <option value="4" %s>57600</option>
c p 0 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Setze Baudrate" id="sbm">
t </form></CENTER>
# -----------------------------------------------
t <B>Serielle Schnittstelle 2, Baudrate:
t <CENTER><form action="serial.cgi"><select name="s1" size="1">
c p 1 0 <option value="0" %s>4800</option>
c p 1 1 <option value="1" %s>9600</option>
c p 1 2 <option value="2" %s>19200</option>
c p 1 3 <option value="3" %s>38400</option>
c p 1 4 <option value="4" %s>57600</option>
c p 1 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Setze Baudrate" id="sbm">
t </form></CENTER>
# -----------------------------------------------
t <B>Serielle Schnittstelle 3, Baudrate:
t Note: Diese Schnittstelle ist Teil der Feature-Schnittstelle und muss im Hardware-Men&uuml; aktiviert werden.</b>
t <CENTER><form action="serial.cgi"><select name="s2" size="1">
c p 2 0 <option value="0" %s>4800</option>
c p 2 1 <option value="1" %s>9600</option>
c p 2 2 <option value="2" %s>19200</option>
c p 2 3 <option value="3" %s>38400</option>
c p 2 4 <option value="4" %s>57600</option>
c p 2 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Setze Baudrate" id="sbm">
t </form></CENTER>
# -----------------------------------------------
t <B>Serielle Schnittstelle 4, Baudrate:
t Note: Diese Schnittstelle ist Teil der Feature-Schnittstelle und muss im Hardware-Men&uuml; aktiviert werden.</b>
t <CENTER><form action="serial.cgi"><select name="s3" size="1">
c p 3 0 <option value="0" %s>4800</option>
c p 3 1 <option value="1" %s>9600</option>
c p 3 2 <option value="2" %s>19200</option>
c p 3 3 <option value="3" %s>38400</option>
c p 3 4 <option value="4" %s>57600</option>
c p 3 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Setze Baudrate" id="sbm">
t </form></CENTER>
# -----------------------------------------------
t <B>Baudrate des GPS-Empfängers</b>
t <CENTER><form action="serial.cgi"><select name="sg" size="1">
c p g 0 <option value="0" %s>4800</option>
c p g 1 <option value="1" %s>9600</option>
c p g 2 <option value="2" %s>19200</option>
c p g 3 <option value="3" %s>38400</option>
c p g 4 <option value="4" %s>57600</option>
c p g 5 <option value="5" %s>115200</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Setze GPS Baudrate">
t </form></CENTER>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Aktualisieren" OnClick="location='/serial.cgi'">
t </CENTER></P>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Nachtmodus</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Tagmodus</a>
t </p>
t </body></html>
.
