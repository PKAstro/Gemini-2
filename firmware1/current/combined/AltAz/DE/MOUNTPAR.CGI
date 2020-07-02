#=====================================================================================
#  Gemini Montierungsparameter 
#=====================================================================================
t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Montierungseinstellungen</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Montierungseinstellungen</H2>
# -----------------------------------------------
t <B>Bauart</b><CENTER>
t <form action="mountpar.cgi"><select name="mD" size="1">
c N 0 <option value="0" %s>&Auml;quatorial</option>
c N 1 <option value="1" %s>Alt/Az</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Set Mount Design">
t <INPUT TYPE=RESET VALUE="Undo"></P></form></CENTER><HR>
# -----------------------------------------------
t <B>Montierungstyp</B><CENTER>
t <form action="mountpar.cgi"><select name="mt" size="1">
c m 0 <option value="0" %s>Benutzerdefiniert</option>
c m 1 <option value="1" %s>GM-8</option>
c m 2 <option value="2" %s>G11</option>
c m 3 <option value="3" %s>HGM-200</option>
c m 4 <option value="4" %s>MI-250</option>
c m 5 <option value="5" %s>Titan</option>
c m 6 <option value="6" %s>Titan50</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Setze Montierungstyp" id="sbm">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen"></P></form></CENTER>
# -----------------------------------------------
t <P><B>Getriebe&uuml;bersetzungen</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">RA Schnecken&uuml;bersetzung</td>
c M W <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=wr VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">DEC Schnecken&uuml;bersetzung</td>
c M w <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=wd VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">RA Vorsatzgetriebe</td>
c M S <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sr VALUE="%hd"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">DEC Vorsatzgetriebe</td>
c M s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sd VALUE="%hd"
t SIZE=3 MAXLENGTH=3></TD></TR>
#
t <tr><td style="text-align: right;">RA Motor Enkoder Aufl&ouml;sung</td>
c M R <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=mr VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">DEC Motor Enkoder Aufl&ouml;sung</td>
c M r <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=md VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">RA Positionierungsaufl&ouml;sung</td>
c M A <TD style="text-align: center;">%lf"</td>
t <td style="text-align: right;">DEC Positionierungsaufl&ouml;sung</td>
c M a <TD style="text-align: center;">%lf"</td></tr>
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Setze Getriebeeinstellungen" id="sbm">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen">
t </CENTER></P></TD></TR></FORM>
#
# -----------------------------------------------
t <HR><P><B>Geschwindigkeiten</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
#
t <tr><td style="text-align: right;">RA manuelle Positionierung</td>
c V S <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VM VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">DEC manuelle Positionierung</td>
c V s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vm VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">RA GoTo Positionierung</td>
c V T <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VT VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">DEC GoTo Positionierung</td>
c V t <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vt VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">RA Beschleunigung</td>
c V A <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VA VALUE="%6f"
t SIZE=6 MAXLENGTH=7></TD>
t <td style="text-align: right;">DEC Beschleunigung</td>
c V a <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Va VALUE="%6f"
t SIZE=6 MAXLENGTH=7></TD></TR>
#
t <tr><td style="text-align: right;">RA Zentrierung</td>
c V C <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VC VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">DEC Zentrierung</td>
c V c <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vc VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">RA Korrektur</td>
c V G <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VG VALUE="%d.%d"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">DEC Korrektur</td>
c V g <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vg VALUE="%d.%d"
t SIZE=3 MAXLENGTH=3></TD></TR>
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Setze Geschwindigkeit" id="sbm">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen">
t </CENTER></P></TD></TR></FORM>
#
# -----------------------------------------------
t <HR><P><B>Anschl&auml;ge</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">Linker Anschlag</td>
c S l <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sl VALUE="%d°%02d'"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">Rechter Anschlag</td>
c S r <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sr VALUE="%d°%02d'"
t SIZE=7 MAXLENGTH=7></TD></TR>
#
t <tr><td style="text-align: right;">Linker Anschlag Schrittposition</td>
c L l <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Ll VALUE="%d"
t SIZE=7 MAXLENGTH=7 readonly="readonly"></TD>
t <td style="text-align: right;">Rechter Anschlag Schrittposition</td>
c L r <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Lr VALUE="%d"
t SIZE=7 MAXLENGTH=7 readonly="readonly"></TD></TR>
#
t <tr><td style="text-align: right;">Westliche GoTo-Grenze</td>
c S g <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sg VALUE="%d°%02d'"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">Westliche GoTo-Grenze Schrittposition</td>
c L g <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sf VALUE="%d"
t SIZE=7 MAXLENGTH=7 readonly="readonly"></TD></TR>
#
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Setze Anschl&auml;ge" id="sbm">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <HR><P><B>Achsenenkoder</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">RA Achsenenkoderaufl&ouml;sung</td>
c E R <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ER VALUE="%d"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">DEC Achsenenkoderaufl&ouml;sung</td>
c E D <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ED VALUE="%d"
t SIZE=7 MAXLENGTH=7></TD></TR>
##
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Setze Achsenenkoder">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
#t <H2 ALIGN=CENTER>Standardstartmodus</H2>
t <HR><B>Standardstartmodus</b>
t <CENTER>
t <form action="mountpar.cgi"><select name="bm" size="1">
c b 0 <option value="0" %s>%s</option>
c b 1 <option value="1" %s>%s</option>
c b 2 <option value="2" %s>%s</option>
c b 3 <option value="3" %s>%s</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="W&auml;hle Modus" id="sbm">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen"></P></form></CENTER>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Erneut laden" OnClick="location='/mountpar.cgi'">
t </CENTER></P>
t <p>Auf dieser Seite k&ouml;nnen Sie die Montierungsparameter einstellen. Seien Sie vorsichtig!<BR> 
t <B>Nach &Auml;nderung der Einstellungen ist vor Benutzung der Montierung ein Kaltstart notwendig!</B></P>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Nachtmodus</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Tagmodus</a>
t </p>
t </body></html>
.
