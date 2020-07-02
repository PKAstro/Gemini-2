#=====================================================================================
# ----- This is a TcpNet Script file which runs on TcpNet -------
# It generates a dynamic page to edit/change System Password.
#=====================================================================================
i pg_header.inc
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>System Settings</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>System Settings</H2>
t <FORM ACTION=index.htm METHOD=POST NAME=CGI>
t <INPUT TYPE=HIDDEN VALUE="sys" NAME=pg>
t <TABLE BORDER=0 WIDTH=99%>
t <TR>
t <TH WIDTH=40%>Item</TH>
t <TH WIDTH=60%>Setting</TH></TR>
# Here begin data setting which is formatted in HTTP_CGI.C module
c d 1 <TR><TD><IMG SRC=pabb.gif>Authentication</TD><TD><b>%s</b></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Password for user 'admin'</TD>
c d 2 <TD><INPUT TYPE=PASSWORD NAME=pw SIZE=10 MAXLENGTH=10 VALUE="%s"></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Retype your password</TD>
c d 2 <TD><INPUT TYPE=PASSWORD NAME=pw2 SIZE=10 MAXLENGTH=10 VALUE="%s"></TD></TR>
t <TR><TD>&nbsp;</TD><TD>&nbsp;</TD></TR><TR><TD></TD><TD align="right">
# Here begin button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Changer" id="sbm">
t <INPUT TYPE=RESET VALUE="Annuler">
t <INPUT TYPE=BUTTON VALUE="Accueil" OnClick="location='/index.htm'">
t </TD></TR></FORM>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Mode nuit</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Mode jour</a>
t </p>
t </BODY></HTML>
# This is end of script. It must be closed with period.
.
