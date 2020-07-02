t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=en-us>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Pointing Model</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Telescope Pointing Model</H2>
t <B>Current Model:</b>
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
t <INPUT TYPE=SUBMIT NAME=set VALUE="Select Model">
t </form></CENTER>
t <P><B>Manage Current Model:</b>
t <form action="modeling.cgi" METHOD=GET NAME=CGI>
# Here are the button definitions
t <P><CENTER>
#t <INPUT TYPE=SUBMIT NAME="ia" VALUE="Initial Alignment">
t <INPUT TYPE=SUBMIT NAME="cm" VALUE="Reset Model">
t <INPUT TYPE=SUBMIT NAME="au" VALUE="Undo Last Alignment">
t </CENTER></P><HR><P>
t <B>Change Current Model:</b><CENTER>
t <INPUT TYPE=SUBMIT NAME=aa VALUE="Align">
t <INPUT TYPE=SUBMIT NAME="Sm" VALUE="Synchronize">
t </CENTER></form></P><HR>
t <P><B>Model Parameters:</B><br>
t <FORM ACTION=modeling.cgi METHOD=GET NAME=CGI>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tbody>
t <tr><td style="text-align: right;"><B>Alignment Count</B></td>
c P E <td style="text-align: center;">East Side: %05d</td>
c P W <td style="text-align: center;">West Side: %05d<br> </td></tr>
#
t <tr><td style="text-align: right;"><B>Polar Axis Misalignment</B></td>
c P a <td style="text-align: center;">Azimuth: %05d</td>
c P e <td style="text-align: center;">Elevation: %05d<br> </td></tr>
#
t <tr><td style="text-align: right;"><B>Orthogonality Errors</B></td>
c P c <td style="text-align: center;">Meridian: %05d</td>
c P n <td style="text-align: center;">Pole: %05d</td></tr>
#
t <tr><td style="text-align: right;"><B>Flexure</B></td>
c P t <td style="text-align: center;">Tube: %05d</td>
c P C <td style="text-align: center;">Cantilever: %05d</td></tr>
#
t <tr><td style="text-align: right;"><B>Index Errors</B></td>
c P h <td style="text-align: center;">RA Axis: %05d</td>
c P d <td style="text-align: center;">DEC Axis: %05d</td></tr>
#
#t <tr><td style="text-align: right;"><B>Flip Errors</B></td>
#c P F <td style="text-align: center;">RA Axis: %05d</td>
#c P f <td style="text-align: center;">DEC Axis: %05d</td></tr>
#
t </tbody></table><br></P><HR>
#
t <P><B>Manage models on SD card:</b></P>
t <P><CENTER><TABLE>
t <TR><TD><B>Store model on SD card:</b></TD>
t <TD><form action="modeling.cgi" METHOD=GET NAME="sm">
c Q <INPUT TYPE=TEXT NAME=mf VALUE="%s" SIZE=30 MAXLENGTH=63>
# Here are the button definitions
t </TD><TD><INPUT TYPE=SUBMIT NAME=sm VALUE="Store Model"></form></TD></TR>
t <TR><TD><B>Load a model from SD card:</b></TD><TD>
c r %s
t </TD><TD><INPUT TYPE=SUBMIT NAME=rm VALUE="Load Model"></TD></TR></form>
t <TR><TD><B>Delete a model from SD card:</b></TD><TD>
c r %s
t </TD><TD><INPUT TYPE=SUBMIT NAME=dm VALUE="Delete Model"></TD></TR></form>
t </P></TABLE></CENTER><HR>
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/modeling.cgi'">
t </P></FORM></body></html>
#t <P><B>Store model on SD card:</b>
#t <CENTER>
#t <form action="modeling.cgi" METHOD=GET NAME="sm">
#c Q <INPUT TYPE=TEXT NAME=mf VALUE="%s" SIZE=30 MAXLENGTH=63>
## Here are the button definitions
#t <P><INPUT TYPE=SUBMIT NAME=sm VALUE="Store Model">
#t </form></CENTER></P><HR>
#t <P><B>Load a model from SD card:</b><CENTER>
#c r %s
#t </P><P><INPUT TYPE=SUBMIT NAME=rm VALUE="Load Model"></CENTER></P></form>
## Page buttons
#t <P><INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
#t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/modeling.cgi'">
#t </P></FORM>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Night mode</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Day mode</a>
t </p>
t </body></html>
.
