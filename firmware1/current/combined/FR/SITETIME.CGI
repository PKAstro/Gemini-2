#=====================================================================================
# ----- This is a TcpNet Script file which runs on TcpNet -------
#  Gemini mount parameters 
#=====================================================================================
i pg_header.inc
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Paramètres des sites d'observation</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Paramètres des sites d'observation</H2>
t <B>Sites d'observation prédéfinis</b>
t <CENTER>
t <form action="sitetime.cgi"><select name="si" size="1">
c i 0 <option value="0" %s>%s</option>
c i 1 <option value="1" %s>%s</option>
c i 2 <option value="2" %s>%s</option>
c i 3 <option value="3" %s>%s</option>
c i 4 <option value="4" %s>%s</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Choisir le site" id="sbm">
t <INPUT TYPE=RESET VALUE="Annuler"></P></form></CENTER>
# -----------------------------------------------
t <P><B>Localisation géographique :</B></P><FORM ACTION=sitetime.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">Nom du site</td>
c s n <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sn VALUE="%s"
t SIZE=15 MAXLENGTH=15></TD>
t <td style="text-align: right;">Zone horaire</td>
c s t <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=st VALUE="%d:%02d"
t SIZE=6 MAXLENGTH=6></TD></TR>
#
t <tr><td style="text-align: right;">Longitude</td>
c s o <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=so VALUE="%c%d&deg;%02d'%02d"
t SIZE=11 MAXLENGTH=11></TD>
t <td style="text-align: right;">Latitude</td>
c s a <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sa VALUE="%c%d&deg;%02d'%02d"
t SIZE=10 MAXLENGTH=10></TD></TR>
t <tr><td style="text-align: right;">Altitude [m]</td>
c s e <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=se VALUE="%d"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">Sauvegarder comme site #</td>
c s # <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=s# VALUE="%d"
t SIZE=1 MAXLENGTH=1></TD></TR>
#
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Définir le lieu" id="sbm">
t <INPUT TYPE=RESET VALUE="Annuler">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <FORM ACTION=sitetime.cgi METHOD=GET NAME=CGI>
t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
#
t <hr style="width: 100%; height: 2px;">
t <h2 style="text-align: center;">Réglage de l'heure</h2>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
#
t <tr><td style="text-align: right; width: 25%;">Heure civile</td>
c T c <td style="text-align: center;"><INPUT TYPE=TEXT NAME=tc VALUE="%02d:%02u:%02u"
t SIZE=9 MAXLENGTH=9></TD></td>
t <td style="text-align: right;">Date civile (dd.mm.yyyy)</td>
c T C  <td style="text-align: center;"><INPUT TYPE=TEXT NAME=dc VALUE="%02u.%02u.%04u"
t SIZE=11 MAXLENGTH=11></TD></tr>
#
t </tbody></table><br>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Sauvegarder civil" id="sbm">
t <INPUT TYPE=RESET VALUE="Annuler">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <FORM ACTION=sitetime.cgi METHOD=GET NAME=CGI>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
#
t <tr><td style="text-align: right; width: 25%;">Heure TU<br></td>
c T u  <td style="text-align: center;"><INPUT TYPE=TEXT NAME=tu VALUE="%02d:%02u:%02u"
t SIZE=10 MAXLENGTH=10></td>
t <td style="text-align: right;">Date TU (dd.mm.yyyy)</td>
c T U <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=du VALUE="%02u.%02u.%04u"
t SIZE=10 MAXLENGTH=10></TD></tr>
#
t <tr><td style="text-align: right; width: 25%;">Heure sidérale</td>
c T s  <td style="text-align: center;">%02d:%02u:%02u</td>
t <td style="text-align: right;">Date julienne</td>
c T m <td style="text-align: center;">%11.5f</td></tr>
#
t </tbody></table>
# UTC button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Sauvegarder UTC" id="sbm">
t <INPUT TYPE=RESET VALUE="Annuler"></CENTER></P></form><HR>
# -----------------------------------------------
t <H2 ALIGN=CENTER>Consultation du récepteur GPS</H2>
t <CENTER><P><form action="sitetime.cgi"><select name="gp" size="1">
c q 0 <option value="0" %s>Serial 1</option>
c q 1 <option value="1" %s>Serial 2</option>
c q 2 <option value="2" %s>Serial 3</option>
c q 3 <option value="3" %s>Serial 4</option>
c q 4 <option value="4" %s>Non défini</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Consultation GPS">
c F ? <P><B>%s</B></P>
t </P></form></CENTER><HR>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Accueil" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Rafraîchir" OnClick="location='/sitetime.cgi'">
t </CENTER></P>
t <p>Le site #0 correspond au site le plus courament utilisé. 
t Les sites #1 à #4 peuvent être mémorisés pour une sélection rapide.<BR></p>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Mode nuit</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Mode jour</a>
t </p>
t </body></html>
.
