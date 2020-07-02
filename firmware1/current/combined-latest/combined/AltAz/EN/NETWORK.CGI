#=====================================================================================
# This script generates a dynamic page to change the IPv4 network settings
#=====================================================================================
t <!DOCTYPE HTML PUBLIC "//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=en-us>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Network Settings</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Network Settings</H2>
t <FORM ACTION=network.cgi METHOD=GET NAME=CGI>
t <INPUT TYPE=HIDDEN VALUE="net" NAME=pg>
t <P><TABLE BORDER=0>
t <TR><TH WIDTH=40%>Item</TH>
t <TH WIDTH=30%>Current Settings</TH><TH WIDTH=30%>Stored Settings</TH></TR>
t <TR><TD><IMG SRC=pabb.gif>LAN IP Address</TD>
c a i <TD><INPUT TYPE=TEXT NAME=ip VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a I <TD><INPUT TYPE=TEXT NAME=Ip VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>LAN Netmask</TD>
c a m <TD><INPUT TYPE=TEXT NAME=msk VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a M <TD><INPUT TYPE=TEXT NAME=Msk VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Default Gateway</TD>
c a g <TD><INPUT TYPE=TEXT NAME=gw VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a G <TD><INPUT TYPE=TEXT NAME=Gw VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Primary DNS Server</TD>
c a p <TD><INPUT TYPE=TEXT NAME=pdns VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a P <TD><INPUT TYPE=TEXT NAME=Pdns VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Secondary DNS Server</TD>
c a s <TD><INPUT TYPE=TEXT NAME=sdns VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD>
c a S <TD><INPUT TYPE=TEXT NAME=Sdns VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Network Time Protocol Server</TD>
c a N <TD><INPUT TYPE=TEXT NAME=NTPS VALUE="%d.%d.%d.%d" SIZE=15 MAXLENGTH=15></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>MAC Address</TD>
c a a <TD><INPUT TYPE=TEXT NAME=mac VALUE="%02x:%02x:%02x:%02x:%02x:%02x" SIZE=17 MAXLENGTH=17></TD>
c a A <TD><INPUT TYPE=TEXT NAME=mac VALUE="%02x:%02x:%02x:%02x:%02x:%02x" SIZE=17 MAXLENGTH=17></TD></TR>
#
t <TR><TD><IMG SRC=pabb.gif>UDP socket port</TD>
c a U <TD><INPUT TYPE=TEXT NAME=UP VALUE="%d" SIZE=5 MAXLENGTH=5></TD><TD></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Accepted UDP peer host</TD><TD><INPUT TYPE=TEXT NAME=Up 
c a u VALUE="%u.%u.%u.%u" SIZE=15 MAXLENGTH=15></TD>
t <TD>If an IP address 0.0.0.0 is set, all network hosts are allowed
t to communicate with Gemini!</TD></TR>
#
t <TR><TD><IMG SRC=pabb.gif>Transparent TCP socket port</TD>
c a t <TD><INPUT TYPE=TEXT NAME=TP VALUE="%d" SIZE=5 MAXLENGTH=5></TD><TD></TD></TR>
t <TR><TD><IMG SRC=pabb.gif>Accepted TCP peer host</TD><TD><INPUT TYPE=TEXT NAME=Tp 
c a c VALUE="%u.%u.%u.%u" SIZE=15 MAXLENGTH=15></TD>
t <TD>See above!</TD></TR><TR><TD></TD></TR>
#
c a T <TR><TD><IMG SRC=pabb.gif>DHCP Server Timeout [seconds]:</TD><TD><INPUT TYPE=TEXT NAME=dht VALUE="%d"
t SIZE=2 MAXLENGTH=2></TD><TD></TD></TR>
c a d <TR><TD>Use DHCP to aquire network settings:</TD><TD><input type="checkbox" name="dhcp" %s></TD>
t <TD>On success, these settings take precedence over the stored static configuration.</TD></TR>
t <TR><TD></TD><TD align="left">
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Set" id="sbm">
t <INPUT TYPE=RESET VALUE="Undo"></TD><TD></TD></TR></table>
t <INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/network.cgi'">
t </FORM>
t <p>This page allows to change the IPv4 network settings. Please note: If you change them
t you may have to adapt the settings in your host or router to be able to reconnect to Gemini. 
t <B>Take care</b> or you may block the network access.</p>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Night mode</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Day mode</a>
t </p>
t </BODY></HTML>
.
