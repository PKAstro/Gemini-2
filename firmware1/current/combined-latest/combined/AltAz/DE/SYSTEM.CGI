t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Authentifizierung</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Authentifizierung</H2>
t <FORM ACTION=index.htm METHOD=POST NAME=CGI>
t <INPUT TYPE=HIDDEN VALUE="sys" NAME=pg>
t <TABLE BORDER=0 WIDTH=99%>
t <TR>
t <TH WIDTH=40%>Wert</TH>
t <TH WIDTH=60%>Einstellung</TH></TR>
#
c d 1 <TR><TD><IMG SRC=pabb.gif>Authentifizierung</TD><TD><b>%s</b></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Passwort f&uuml;r Nutzer 'admin'</TD>
c d 2 <TD><INPUT TYPE=PASSWORT NAME=pw SIZE=10 MAXLENGTH=10 VALUE="%s"></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Passwort wiederholen</TD>
c d 2 <TD><INPUT TYPE=PASSWORD NAME=pw2 SIZE=10 MAXLENGTH=10 VALUE="%s"></TD></TR>
t <TR><TD>&nbsp;</TD><TD>&nbsp;</TD></TR><TR><TD></TD><TD align="right">
# Buttons
t <INPUT TYPE=SUBMIT NAME=set VALUE="Setzen" id="sbm">
t <INPUT TYPE=RESET VALUE="R&uuml;cksetzen">
t <INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t </TD></TR></FORM>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Nachtmodus</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Tagmodus</a>
t </p>
t </BODY></HTML>
.
