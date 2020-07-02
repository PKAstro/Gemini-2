#=====================================================================================
#  Gemini mount parameter setup 
#=====================================================================================
t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=en-us>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Mount Parameters</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Mount Parameter Setup</H2>
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
c m 0 <option value="0" %s>Custom mount</option>
c m 1 <option value="1" %s>GM8</option>
c m 2 <option value="2" %s>G-11</option>
c m 3 <option value="3" %s>HGM-200</option>
c m 4 <option value="4" %s>MI250</option>
c m 5 <option value="5" %s>Titan</option>
c m 6 <option value="6" %s>Titan50</option>
c m 7 <option value="7" %s>G11T</option>
c m 8 <option value="8" %s>G811</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="Set Mount Type">
t <INPUT TYPE=RESET VALUE="Undo"></P></form></CENTER><HR>
# -----------------------------------------------
t <P><B>Gearing</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">RA Worm Ratio</td>
c M W <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=wr VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">DEC Worm Ratio</td>
c M w <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=wd VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">RA Spur Ratio</td>
c M S <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sr VALUE="%hd"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">DEC Spur Ratio</td>
c M s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=sd VALUE="%hd"
t SIZE=3 MAXLENGTH=3></TD></TR>
#
t <tr><td style="text-align: right;">RA Motor Encoder Resolution</td>
c M R <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=mr VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">DEC Motor Encoder Resolution</td>
c M r <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=md VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">RA Positioning Resolution</td>
c M A <TD style="text-align: center;">%lf"</td>
t <td style="text-align: right;">DEC Positioning Resolution</td>
c M a <TD style="text-align: center;">%lf"</td></tr>
#
t <tr><td style="text-align: right;"><br></td>
c M R <TD style="text-align: center;"><br></td>
t <td style="text-align: right;">DEC TVC Step Count</td>
c M T <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=dt VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Set Gearing" id="sbm">
t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER></P></TD></TR></FORM>
#
# -----------------------------------------------
t <HR><P><B>Speeds</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
#
t <tr><td style="text-align: right;">RA Manual Slewing Rate</td>
c V S <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VM VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">DEC Manual Slewing Rate</td>
c V s <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vm VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">RA GoTo Slewing Rate</td>
c V T <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VT VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">DEC GoTo Slewing Rate</td>
c V t <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vt VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">RA Move Speed</td>
c V M <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VV VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">DEC Move Speed</td>
c V m <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vv VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">RA Slewing Acceleration</td>
c V A <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VA VALUE="%6f"
t SIZE=6 MAXLENGTH=7></TD>
t <td style="text-align: right;">DEC Slewing Acceleration</td>
c V a <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Va VALUE="%6f"
t SIZE=6 MAXLENGTH=7></TD></TR>
#
t <tr><td style="text-align: right;">RA Centering Rate</td>
c V C <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VC VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD>
t <td style="text-align: right;">DEC Centering Rate</td>
c V c <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vc VALUE="%hd"
t SIZE=4 MAXLENGTH=4></TD></TR>
#
t <tr><td style="text-align: right;">RA Guiding Rate</td>
c V G <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=VG VALUE="%d.%d"
t SIZE=3 MAXLENGTH=3></TD>
t <td style="text-align: right;">DEC Guiding Rate</td>
c V g <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Vg VALUE="%d.%d"
t SIZE=3 MAXLENGTH=3></TD></TR>
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Set Speeds" id="sbm">
t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER></P></TD></TR></FORM>
#
# -----------------------------------------------
t <HR><P><B>Safety Limits</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">Left Safety Limit</td>
c S l <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sl VALUE="%d°%02d'"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">Right Safety Limit</td>
c S r <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sr VALUE="%d°%02d'"
t SIZE=7 MAXLENGTH=7></TD></TR>
#
t <tr><td style="text-align: right;">Left Safety Limit Step Position</td>
c L l <TD style="text-align: center;">%d</TD>
t <td style="text-align: right;">Right Safety Limit Step Position</td>
c L r <TD style="text-align: center;">%d</TD></TR>
#
t <tr><td style="text-align: right;">Western GoTo Limit</td>
c S g <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=Sg VALUE="%d°%02d'"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">Western GoTo Limit Step Position</td>
c L g <TD style="text-align: center;">%d</TD></TR>
#
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Set Safety Limits" id="sbm">
t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
t <HR><P><B>Axis Encoders</B></P><FORM ACTION=mountpar.cgi METHOD=GET NAME=CGI>
#
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tr><td style="text-align: right;">RA Axis Encoder Resolution</td>
c E R <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ER VALUE="%d"
t SIZE=7 MAXLENGTH=7></TD>
t <td style="text-align: right;">DEC Axis Encoder Resolution</td>
c E D <TD style="text-align: center;"><INPUT TYPE=TEXT NAME=ED VALUE="%d"
t SIZE=7 MAXLENGTH=7></TD></TR>
##
t </tbody></table><br></P>
# Here are the button definitions
t <P><CENTER><INPUT TYPE=SUBMIT NAME=set VALUE="Set Axis Encoder">
t <INPUT TYPE=RESET VALUE="Undo">
t </CENTER></P></TD></TR></FORM>
# -----------------------------------------------
#t <H2 ALIGN=CENTER>Default StartUp Mode</H2>
t <HR><B>Default StartUp Mode</b>
t <CENTER><P>
t <form action="mountpar.cgi"><select name="bm" size="1">
c b 0 <option value="0" %s>%s</option>
c b 1 <option value="1" %s>%s</option>
c b 2 <option value="2" %s>%s</option>
c b 3 <option value="3" %s>%s</option></select>
# Here are the button definitions
t <INPUT TYPE=SUBMIT NAME=set VALUE="Select Mode">
#t <INPUT TYPE=RESET VALUE="Undo">
t </form></P></CENTER>
# -----------------------------------------------
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/mountpar.cgi'">
t </CENTER></P>
t <p>This page allows you to set up the mount parameters. Use it with care! 
t A Cold Start is recommended after changing mount parameters.<BR>
# t Please push the <b>Set</b> button or hit the Return key to submit the changes.</p>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Night mode</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Day mode</a>
t </p>
t </body></html>
.
