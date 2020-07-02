#=====================================================================================
#  FR - Gemini mount parameter setup 
#=====================================================================================
t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=fr-fr>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Parametres de Monture</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Paramètres de la Monture</H2>
# -----------------------------------------------
t <B>Mount Design</b><CENTER>
t <form action="mountpar.cgi"><select name="mD" size="1">
c N 0 <option value="0" %s>Equatorial</option>
c N 1 <option value="1" %s>Alt/Az</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Set Mount Design">
t <INPUT TYPE=RESET VALUE="Undo"></P></form></CENTER><HR>
# -----------------------------------------------
t <B>Mount Type</b><CENTER>
t <form action="mountpar.cgi"><select name="mt" size="1">
c m 0 <option value="0" %s>personnalisation monture</option>
c m 1 <option value="1" %s>GM-8</option>
c m 2 <option value="2" %s>G11</option>
c m 3 <option value="3" %s>HGM-200</option>
c m 4 <option value="4" %s>MI-250</option>
c m 5 <option value="5" %s>Titan</option>
c m 6 <option value="6" %s>Titan50</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="D&eacute;finir le type de monture" id="sbm">
t <INPUT TYPE=RESET VALUE="Annuler"></P></form></CENTER>
# -----------------------------------------------
t <P><B>R&eacute;duction</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">Roue dent&eacute;e AR</td>
c M W <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=wr VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">Roue dent&eacute;e DEC</td>
c M w <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=wd VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">R&eacute;duction AR</td>
c M S <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sr VALUE="%hd"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">R&eacute;duction DEC</td>
c M s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sd VALUE="%hd"
t SIZE=3 MAXLENGTH=3></TD></TR>
#
t <tr><td style="text-align: right;">R&eacute;solution codeur moteur AR</td>
c M R <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=mr VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">R&eacute;solution codeur moteur DEC</td>
c M r <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=md VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">R&eacute;solution de position AR</td>
c M A <TD style="text-align: center;">%lf"</td>
t <td style="text-align: right;">R&eacute;solution de position DEC</td>
c M a <TD style="text-align: center;">%lf"</td></tr>
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Initialisation r&eacute;ducteur" id="sbm">
t <INPUT TYPE=RESET VALUE="Annuler">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <HR><P><B>Vitesse</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
#
t <tr><td style="text-align: right;">Vitesse de pointage manual AR</td>
c V S <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VM VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">Vitesse de pointage manual DEC</td>
c V s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vm VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">Vitesse de GoTo AR</td>
c V T <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VT VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">Vitesse de GoTo DEC</td>
c V t <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vt VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">Acc&eacute;l&eacute;ration pointage AR</td>
c V A <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VA VALUE="%6f"
t SIZE=6 MAXLENGTH=7></TD>
t <td style="text-align: right;">Acc&eacute;l&eacute;ration pointage DEC</td>
c V a <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Va VALUE="%6f"
t SIZE=6 MAXLENGTH=7></TD></TR>
#
t <tr><td style="text-align: right;">Vitesse de centrage AR</td>
c V C <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VC VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">Vitesse de centrage DEC</td>
c V c <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vc VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">Vitesse de guidage AR</td>
c V G <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VG VALUE="%d.%d"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">Vitesse de guidage DEC</td>
c V g <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vg VALUE="%d.%d"
t SIZE=3 MAXLENGTH=3></TD></TR>
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="R&eacute;glage de vitesse" id="sbm">
t <INPUT TYPE=RESET VALUE="Annuler">
t </CENTER></P></TD></TR></FORM>
#
# -----------------------------------------------
t <HR><P><B>Limites de s&eacute;curit&eacute;</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">Limite de s&eacute;curit&eacute; Gauche</td>
c S l <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sl VALUE="%d°%02d'"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">Limite de s&eacute;curit&eacute; Droite</td>
c S r <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sr VALUE="%d°%02d'"
t SIZE=7 MAXLENGTH=7></TD></TR>
#
t <tr><td style="text-align: right;">Position limite de s&eacute;curit&eacute; Gauche</td>
c L l <TD style="text-align: center;">%d</TD>
t <td style="text-align: right;">Position limite de s&eacute;curit&eacute; Droite</td>
c L r <TD style="text-align: center;">%d</TD></TR>
#
t <tr><td style="text-align: right;">Limite de pointage Ouest</td>
c S g <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sg VALUE="%d°%02d'"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">Position limite de pointage Ouest</td>
c L g <TD style="text-align: center;">%d</TD></TR>
#
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="D&eacute;finir les limites de s&eacute;curit&eacute;" id="sbm">
t <INPUT TYPE=RESET VALUE="Annuler">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <HR><P><B>Codeurs d'axe</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">R&eacute;solution codeur d'axe AD</td>
c E R <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ER VALUE="%d"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">R&eacute;solution codeur d'axe DEC</td>
c E D <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ED VALUE="%d"
t SIZE=7 MAXLENGTH=7></TD></TR>
##
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="D&eacute;finir les codeurs d'axes">
t <INPUT TYPE=RESET VALUE="Annuler">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <HR><B>Mode de d&eacute;marrage par d&eacute;faut</b>
t <CENTER>
t <form action="mountpar.cgi"><select name="bm" size="1">
c b 0 <option value="0" %s>%s</option>
c b 1 <option value="1" %s>%s</option>
c b 2 <option value="2" %s>%s</option>
c b 3 <option value="3" %s>%s</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="S&eacute;lection du Mode" id="sbm">
t <INPUT TYPE=RESET VALUE="Annuler"></P></form></CENTER>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Accueil" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Rafraichir" OnClick="location='/mountpar.cgi'">
t </CENTER></P>
t <p>Cette page vous permet de parametrer votre monture. Utilisez avec pr&eacute;caution!
t Vous devez DEMARRER A FROID apr&egrave;s modification des parametres monture.<BR>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Mode nuit</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Mode jour</a>
t </p>
t </body></html>
.
