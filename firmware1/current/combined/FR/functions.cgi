i pg_header.inc
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Fonctions</title></head>
t <body style="width:800px;margin:0 auto;">
t <h1 style="text-align: center;">Fonctions</h1>
t <h2>GoTo aux coordonnées</h2>
t <FORM ACTION=functions.cgi METHOD=GET NAME=CGI>
t <H3>AD/DEC</H3>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
#
t <tr><td style="text-align: right;">Ascension droite<br> </td>
c C r <td style="text-align: center;">%02d:%02u:%02u</td>
t <td style="text-align: right;">Déclination<br> </td>
c C d <td style="text-align: center;">%c%02d:%02u:%02u<br> </td></tr>
#
t <tr> <td style="text-align: right;">Ascension droite cible</td>
c C R <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=tr VALUE="%02u:%02u:%02u"
t SIZE=9 MAXLENGTH=9></TD>
t <td style="text-align: right;">Déclinaison cible</td>
c C D <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=td VALUE="%c%02u:%02u:%02u"
t SIZE=10 MAXLENGTH=10></TD></TR>
#
t </tbody></table>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Enregistrer destination AD/DEC">
t <INPUT TYPE=SUBMIT NAME=GT VALUE="GoTo AD/DEC">
#t <INPUT TYPE=RESET VALUE="Annuler">
t </CENTER></FORM>
# -----------------------------------------------
t <FORM ACTION=functions.cgi METHOD=GET NAME=CGI>
t <H3>Position physique</H3>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
t <tr><td style="text-align: right;">Position physique axe AD</td>
c C p <td style="text-align: center;">%08d</td>
t <td style="text-align: right;">Position physique axe DEC</td>
c C q <td style="text-align: center;">%08u</td></tr>
#
t <tr><td style="text-align: right;">Position physique cible en AD</td>
c C s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=tR VALUE="%08u"
t SIZE=11 MAXLENGTH=11></TD>
#c C s <td style="text-align: center;">%08d</td>
t <td style="text-align: right;">Position physique cible en DEC</td>
c C t <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=tD VALUE="%08u"
t SIZE=11 MAXLENGTH=11></TD></TR>
#c C t <td style="text-align: center;">%08d<br> </td></tr>
#
t </tbody></table>
# Here are the button definitions
t <CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Enregistrer position physique">
t <INPUT TYPE=SUBMIT NAME=GP VALUE="GoTo position physique">
#t <INPUT TYPE=RESET VALUE="Annuler">
t </CENTER></FORM>
# -----------------------------------------------
t <FORM ACTION=functions.cgi METHOD=GET NAME=CGI>
# t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
#
t <h3>Alt/Az</h3>
t <table style="width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2"><tbody>
# t  <caption></caption>
t <tr><td style="text-align: right;">Azimut</td><td style="text-align: center;">
c C a %03d:%02u:%02u</td>
t <td style="text-align: right;">Altitude<br></td>
c C e <td style="text-align: center;">%c%02d:%02u:%02u</td></tr>
#
t <tr><td style="text-align: right;">Azimut cible</td>
c C A <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ta VALUE="%03u:%02u:%02u"
t SIZE=11 MAXLENGTH=11></TD>
t <td style="text-align: right;">Altitude cible</td>
c C E <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=te VALUE="%c%02u:%02u:%02u" 
t SIZE=10 MAXLENGTH=10></TD></TR>
#c C E <td style="text-align: center;">%c%02d:%02u:%02u</td></tr>
t </tbody></table>
# Here are the button definitions
t <CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Set Target Az/El" id="sbm">
t <INPUT TYPE=SUBMIT NAME=GP VALUE="Alt/Az GoTo">
t </CENTER></FORM><HR>
# -----------------------------------------------
t <h2>Garer/Arrêt/Réveil/Redémarrage monture</h2>
t <CENTER><form action="functions.cgi" METHOD=GET NAME=CGI>
t <INPUT TYPE=SUBMIT NAME="PC" VALUE="Garer @ CWD">
t <INPUT TYPE=SUBMIT NAME="PZ" VALUE="Garer @ Zénith">
t <INPUT TYPE=SUBMIT NAME="PH" VALUE="Garer @ Home">
t <INPUT TYPE=SUBMIT NAME="Ph" VALUE="Définir position Home"><BR>
t <INPUT TYPE=SUBMIT NAME="PS" VALUE="Arrêt suivi">
t <INPUT TYPE=SUBMIT NAME="PW" VALUE="Redémarrer suivi"><BR>
t <INPUT TYPE=SUBMIT NAME="bO" VALUE="Redémarrage">
t <INPUT TYPE=SUBMIT NAME="bC" VALUE="Redémarrage à froid">
t </form></CENTER><HR>
# -----------------------------------------------
t <h2>Mode Parking</h2>
t <CENTER><form action="functions.cgi"><select name="PM" size="1">
c R 0 <option value="0" %s>Parking Mode 0</option>
c R 1 <option value="1" %s>Parking Mode 1</option>
c R 2 <option value="2" %s>Parking Mode 2</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Enregistrer mode parking">
t </form></CENTER><HR>
# -----------------------------------------------
t <h2>Paramètres du PEC</h2>
t <CENTER><P><form action="functions.cgi" METHOD=GET NAME=CGI>
t <INPUT TYPE=SUBMIT NAME="pt" VALUE="Entrainer PEC">
t <INPUT TYPE=SUBMIT NAME="pa" VALUE="Arreter l'entrainement du PEC">
t <INPUT TYPE=SUBMIT NAME="ps" VALUE="Débuter replay du PEC">
t <INPUT TYPE=SUBMIT NAME="pe" VALUE="Arreter replay du PEC">
t </form></CENTER><HR>
# -----------------------------------------------
t <h2>Mode raquette classique</h2>
t <CENTER><P><form action="functions.cgi"><select name="hc" size="1">
c h 0 <option value="0" %s>Mode visuel</option>
c h 1 <option value="1" %s>Mode photo</option>
c h 2 <option value="2" %s>Mode toutes vitesses</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Enregistrer mode HC">
#t <INPUT TYPE=RESET VALUE="Annuler">
t </form></CENTER><HR>
# -----------------------------------------------
t <h2>Vitesse de suivi</h2>
t <CENTER><form action="functions.cgi"><select name="ts" size="1">
c n 0 <option value="0" %s>Sidérale</option>
c n 1 <option value="1" %s>Vitesse de King</option>
c n 2 <option value="2" %s>Lunaire</option>
c n 3 <option value="3" %s>Solaire</option>
c n 4 <option value="4" %s>Terrestre</option>
c n 5 <option value="5" %s>Boucle fermée</option>
c n 5 <option value="6" %s>Comète/Réglable</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Enregistrer vitesse">
t </form></CENTER><HR>
# -----------------------------------------------
t <P><INPUT TYPE=BUTTON VALUE="Accueil" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Rafraîchir" OnClick="location='/functions.cgi'"></P>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Mode jour</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Mode nuit</a>
t </p></body></html>
.
