#=====================================================================================
#  Gemini servo motor parameter setup 
#=====================================================================================
t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=en-us>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Servo Motor Parameters</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Servo Motor Parameter Setup</H2>
# -----------------------------------------------
t <P><B>Motor Curve Selection</b></P><P><CENTER>
t <table style="text-align: left; width: 90%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">RA/AZ </td><td>
t <form action="servopar.cgi"><select name="SC" size="1">
c U 0 <option value="0" %s>Custom Settings</option>
c U 1 <option value="1" %s>Standard motor</option>
c U 2 <option value="2" %s>Maxon motor</option></select>
t <INPUT TYPE=SUBMIT NAME=set VALUE="Set Motor Curve">
# t <INPUT TYPE=RESET VALUE="Undo">
t </form></td>
#
t <td style="text-align: right;">DEC/EL </td><td>
t <form action="servopar.cgi"><select name="Sc" size="1">
c u 0 <option value="0" %s>Custom Settings</option>
c u 1 <option value="1" %s>Standard motor</option>
c u 2 <option value="2" %s>Maxon motor</option></select>
t <INPUT TYPE=SUBMIT NAME=set VALUE="Set Motor Curve">
# t <INPUT TYPE=RESET VALUE="Undo">
t </form></td></tr></table></CENTER></P>
# -----------------------------------------------
t <P><B>Servo Motor Control Parameters</B></P><FORM ACTION=servopar.cgi METHOD=GET NAME=CGI>
#
t <CENTER><table style="text-align: left; width: 90%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">RA/AZ High Speed Proportional</td>
c X P <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=SP VALUE="%u"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">DEC/EL High Speed Proportional</td>
c X Q <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=SQ VALUE="%u"
t SIZE=3 MAXLENGTH=3></TD></TR>
#
t <tr><td style="text-align: right;">RA/AZ Low Speed Proportional</td>
c X p <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sp VALUE="%u"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">DEC/EL Low Speed Proportional</td>
c X q <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sq VALUE="%u"
t SIZE=3 MAXLENGTH=3></TD></TR>
#
t <tr><td style="text-align: right;">RA/AZ High Speed Differential</td>
c X D <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=SD VALUE="%u"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">DEC/EL High Speed Differential</td>
c X E <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=SF VALUE="%u"
t SIZE=3 MAXLENGTH=3></TD></TR>
#
t <tr><td style="text-align: right;">RA/AZ Low Speed Differential</td>
c X d <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sd VALUE="%u"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">DEC/EL Low Speed Differential</td>
c X e <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sf VALUE="%u"
t SIZE=3 MAXLENGTH=3></TD></TR>
#
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Set Servo Parameters">
t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER></P></TD></TR></FORM>
#
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/servopar.cgi'">
t </CENTER></P>
t <p><strong style="color:red">This page allows you to set up the servo motor comtrol parameters.
t You have to use it most carefully!! Motor burnup may occur!
t It is strongly recommended NOT to touch anything here, unless you are willing to 
t remove the motors from the mount, put them on the bench and check every possible use case!
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Night mode</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Day mode</a>
t </p>
t </body></html>
.
