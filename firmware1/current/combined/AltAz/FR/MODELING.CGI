t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=fr-fr>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Mod&egrave;le de pointage</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Mod&egrave;le de pointage</H2>
t <B>Mod&egrave;le actuel:</b>
t <CENTER>
t <form action="modeling.cgi"><select name="mn" size="1">
c P 0 <option value="0" %s>0</option>
c P 1 <option value="1" %s>1</option></select>
#c P 2 <option value="2" %s>2</option>
#c P 3 <option value="3" %s>3</option>
#c P 4 <option value="4" %s>4</option>
#c P 5 <option value="5" %s>5</option>
#c P 6 <option value="6" %s>6</option>
#c P 7 <option value="7" %s>7</option>
#c P 8 <option value="8" %s>8</option>
#c P 9 <option value="9" %s>9</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Choisir Mod&egrave;le">
t </form></CENTER>
t <P><B>Manager Mod&egrave;le Actuel:</b>
t <form action="modeling.cgi" METHOD=GET NAME=CGI>
# Here are the button definitions
t <P><CENTER>
t <INPUT TYPE=SUBMIT NAME="ia" VALUE="Alignement Initial">
t <INPUT TYPE=SUBMIT NAME="cm" VALUE="Reset Mod&egrave;le">
t <INPUT TYPE=SUBMIT NAME="au" VALUE="Annuler dernier Alignement">
t </CENTER></P><HR><P>
t <B>Changer Mod&egrave;le actuel:</b><CENTER>
t <INPUT TYPE=SUBMIT NAME=aa VALUE="Alignement Additionnel ">
t <INPUT TYPE=SUBMIT NAME="Sm" VALUE="Synchronizer">
t </CENTER></form></P><HR>
t <P><B> Parametres de Mod&egrave;le:</B><br>
t <FORM ACTION=modeling.cgi METHOD=GET NAME=CGI>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tbody>
t <tr><td style="text-align: right;"><B>Alignment Count</B></td>
c P E <td style="text-align: center;">East Side: %05d</td>
c P W <td style="text-align: center;">West Side: %05d<br> </td></tr>
#
t <tr><td style="text-align: right;"><B>Defaut alignement polaire</B></td>
c P a <td style="text-align: center;">Azimuth: %05d</td>
c P e <td style="text-align: center;">Elevation: %05d<br> </td></tr>
#
t <tr><td style="text-align: right;"><B>Nonorthogonalit&eacute;</B></td>
c P c <td style="text-align: center;">Meridien: %05d</td>
c P n <td style="text-align: center;">Pole: %05d</td></tr>
#
t <tr><td style="text-align: right;"><B>Flexion</B></td>
c P t <td style="text-align: center;">Tube: %05d</td>
c P C <td style="text-align: center;">Cantilever: %05d</td></tr>
#
t <tr><td style="text-align: right;"><B>Erreur d'index</B></td>
c P h <td style="text-align: center;">Axe AD: %05d</td>
c P d <td style="text-align: center;">Axe DEC: %05d</td></tr>
#
t </tbody></table><br></P><HR>
t <P><B>Enregistrer mod&egrave;le actuel mod&egrave;le numero ...</b>
t <CENTER>
t <form action="modeling.cgi"><select name="sm" size="1">
c Q 0 <option value="0" %s>0</option>
c Q 1 <option value="1" %s>1</option></select>
#c Q 2 <option value="2" %s>2</option>
#c Q 3 <option value="3" %s>3</option>
#c Q 4 <option value="4" %s>4</option>
#c Q 5 <option value="5" %s>5</option>
#c Q 6 <option value="6" %s>6</option>
#c Q 7 <option value="7" %s>7</option>
#c Q 8 <option value="8" %s>8</option>
#c Q 9 <option value="9" %s>9</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Enregistrer Mod&egrave;le" id="sbm">
t </CENTER></form></P>
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Accueil" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Rafraichir" OnClick="location='/modeling.cgi'">
t </P></FORM>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Mode nuit</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Mode jour</a>
t </p>
t </body></html>
.
