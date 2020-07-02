t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Teleskopmodell</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Teleskopmodellierung</H2>
t <B>Aktuelles Teleskopmodell:</b>
t <CENTER>
t <form action="modeling.cgi"><select name="mn" size="1">
c P 0 <option value="0" %s>0</option>
c P 1 <option value="1" %s>1</option>
c P 2 <option value="2" %s>2</option>
c P 3 <option value="3" %s>3</option>
c P 4 <option value="4" %s>4</option>
c P 5 <option value="5" %s>5</option>
c P 6 <option value="6" %s>6</option>
c P 7 <option value="7" %s>7</option>
c P 8 <option value="8" %s>8</option>
c P 9 <option value="9" %s>9</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Modell ausw&auml;hlen" id="sbm">
t <INPUT TYPE=SUBMIT NAME=cm VALUE="Modell r&uuml;cksetzen" id="cm">
#t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen">
t </CENTER></form></P><HR>
t <B>Aktuelles Teleskopmodell bearbeiten:</b>
t <CENTER>
t <form action="modeling.cgi" METHOD=GET NAME=CGI>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=aa VALUE="Messpunkt hinzuf&uuml;gen" id="sbm">
t <INPUT TYPE=SUBMIT NAME=cp VALUE="Letzten Messpunkt entfernen" id="cm">
t <INPUT TYPE=SUBMIT NAME=Sm VALUE="Synchronisieren" id="cm">
t <INPUT TYPE=SUBMIT NAME=ia VALUE="Modell initialisieren" id="cm">
t </CENTER></form></P><HR>
t <P><B>Modellparameter:</B><br>
t <FORM ACTION=modeling.cgi METHOD=GET NAME=CGI>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tbody>
t <tr><td style="text-align: right;"><B>Anzahl Dateneingaben</B></td>
c P E <td style="text-align: center;">Osten: %05d</td>
c P W <td style="text-align: center;">Westen: %05d<br> </td></tr>
#
t <tr><td style="text-align: right;"><B>Fehler in der Polachsenausrichtung</B></td>
c P a <td style="text-align: center;">Azimuth: %05d</td>
c P e <td style="text-align: center;">H&ouml;he: %05d<br> </td></tr>
#
t <tr><td style="text-align: right;"><B>Orthogonalit&auml;tsfehler</B></td>
c P c <td style="text-align: center;">Meridian: %05d</td>
c P n <td style="text-align: center;">Pol: %05d</td></tr>
#
t <tr><td style="text-align: right;"><B>Durchbiegung</B></td>
c P t <td style="text-align: center;">Tubus: %05d</td>
c P C <td style="text-align: center;">Gegengewicht: %05d</td></tr>
#
t <tr><td style="text-align: right;"><B>Indexfehler</B></td>
c P h <td style="text-align: center;">RA-Achse: %05d</td>
c P d <td style="text-align: center;">DEC-Achse: %05d</td></tr>
#
t </tbody></table><br></P><HR>
t <P><B>Aktuelles Teleskopmodell speichern als Modell Nr.:</b>
t <CENTER>
t <form action="modeling.cgi"><select name="sm" size="1">
c Q 0 <option value="0" %s>0</option>
c Q 1 <option value="1" %s>1</option>
c Q 2 <option value="2" %s>2</option>
c Q 3 <option value="3" %s>3</option>
c Q 4 <option value="4" %s>4</option>
c Q 5 <option value="5" %s>5</option>
c Q 6 <option value="6" %s>6</option>
c Q 7 <option value="7" %s>7</option>
c Q 8 <option value="8" %s>8</option>
c Q 9 <option value="9" %s>9</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Modell speichern" id="sbm">
t </CENTER></form></P>
# Page buttons
t <HR><P><INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Aktualisieren" OnClick="location='/modeling.cgi'">
t </P></FORM>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Nachtmodus</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Tagmodus</a>
t </p>
t </body></html>
.
