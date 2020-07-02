#=====================================================================================
# This script generates a dynamic page to change the IPv4 network settings
#=====================================================================================
t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=fr-fr>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Paramètres réseau</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Paramètres réseau</H2>
t <FORM ACTION=network.cgi METHOD=GET NAME=CGI>
t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
t <P><TABLE BORDER=0>
t <TR><TH WIDTH=40%>Item</TH>
t <TH WIDTH=30%>Paramètres actuels</TH><TH WIDTH=30%>Paramètres statiques</TH></TR>
t <TR><TD><IMG SRC=pabb.gif>Adresse IP LAN</TD>
c a i <TD><INPUT TYPE=TEXT NAME=ip VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a I <TD><INPUT TYPE=TEXT NAME=Ip VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Masque de sous-réseau</TD>
c a m <TD><INPUT TYPE=TEXT NAME=msk VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a M <TD><INPUT TYPE=TEXT NAME=Msk VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Passerelle par défaut</TD>
c a g <TD><INPUT TYPE=TEXT NAME=gw VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a G <TD><INPUT TYPE=TEXT NAME=Gw VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Serveur DNS préféré</TD>
c a p <TD><INPUT TYPE=TEXT NAME=pdns VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a P <TD><INPUT TYPE=TEXT NAME=Pdns VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Serveur DNS auxiliaire</TD>
c a s <TD><INPUT TYPE=TEXT NAME=sdns VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a S <TD><INPUT TYPE=TEXT NAME=Sdns VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Adresse MAC</TD>
c a a <TD><INPUT TYPE=TEXT NAME=mac VALUE="%02x:%02x:%02x:%02x:%02x:%02x" SIZE=17 MAXLENGTH=17></TD>
c a A <TD><INPUT TYPE=TEXT NAME=mac VALUE="%02x:%02x:%02x:%02x:%02x:%02x" SIZE=17 MAXLENGTH=17></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Port UDP pour l'émulation série</TD>
c a U <TD><INPUT TYPE=TEXT NAME=UP VALUE="%d" SIZE=5 MAXLENGTH=5></TD><TD></TD></TR>
c a T <TR><TD><IMG SRC=pabb.gif>Serveur DHCP Timeout [secondes]:</TD><TD><INPUT TYPE=TEXT NAME=dht VALUE="%d"
t SIZE=2 MAXLENGTH=2></TD><TD></TD></TR>
c a d <TR><TD>Utiliser le DHCP pour obtenir les paramètres réseaux :</TD>
t <TD><input type="checkbox" name="dhcp" %s></TD>
t <TD>En cas de succès, ces paramètres sont prioritaires sur la configuration statique paramétrée.</TD></TR>
t <TR><TD></TD><TD align="left">
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Soumettre" id="sbm">
t <INPUT TYPE=RESET VALUE="Annuler"></TD><TD></TD></TR></table>
t <INPUT TYPE=BUTTON VALUE="Accueil" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Rafraîchir" OnClick="location='/network.cgi'">
t </P>
t </FORM>
t <p>Cette page permet de changer les paramètres réseaux IPv4. Attention : Si vous les changez
t vous devrez adapter vos paramètres réseaux ou du routeur pour vous reconneter au Gemini.
t <B>Attention</B> ou vous pourriez bloquer l'accès réseau</p>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Mode nuit</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Mode jour</a>
t </p>

t </BODY></HTML>
.


