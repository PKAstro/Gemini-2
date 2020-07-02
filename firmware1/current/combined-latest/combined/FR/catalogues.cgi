#=====================================================================================
#  SD card catalogues
#=====================================================================================
i pg_header.inc
t <title>Catalogues</title></head>
t <body text=#000000 BGCOLOR=#ccddff LINK=#0000FF VLINK=#0000FF ALINK=#FF0000>
t <H2 ALIGN=CENTER>Catalogues</H2>
# t <INPUT TYPE=HIDDEN VALUE="catalogues" NAME=pg>
t <P><CENTER>
t <B>SD Card Catalogue</B>
c D f %s
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Select Catalogue" id="sbm">
t <INPUT TYPE=RESET VALUE="Undo"></P></form></CENTER>
# -----------------------------------------------
t <P><B>Catalogue Content</B></P><P>
c D t
t </P>
#
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/catalogues.cgi'">
t </CENTER></P>
# t Please push the <b>Set</b> button or hit the Return key to submit the changes.</p>
t </body></html>
.