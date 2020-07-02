#=====================================================================================
#  SD card catalogues script file
#=====================================================================================
t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=en-us>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <script type="text/javascript">
t function scrollhome() document.getElementById("Home").scrollIntoView(false);
t window.onload = function() scrollhome(); 
t function GoToBt() {  document.Gtform.GT.focus(); }</script>
t <title>Catalogues Directory</title></head>
t <body>
t <H2 ALIGN=CENTER>Catalogues</H2>
t <P><CENTER>
t <a href=smp.cgi target="Catalog Content">Sun/Moon/Planets</a><br>
c D F
t </CENTER></P>
t <H2 ALIGN=CENTER>Object Selection</H2>
#  static part for catalogue object selection
t <form name="Coform" id = "Coform" action="catnames.cgi">
# Here are the button definitions
t <P>Insert Object Here:</P>
t <P><INPUT TYPE=TEXT NAME="co" ID="co" size=45 maxlength=80></P>
t <P><input type="radio" name="prec" value="1" checked="checked">Equinox J2000<br>
t <input type="radio" name="prec" value="0">Equinox of Date<br>
t <INPUT TYPE=SUBMIT NAME="sdo" OnClick="javascript:GoToBt()" VALUE="Select Object"></P>
t </form>
# Here are the selected object ephemerides and check buttons included:
c D S
t <form name="Bt" action="catnames.cgi">
t <P><INPUT TYPE=BUTTON Id="Home" VALUE="Home" OnClick="location='/index.htm'" target="_top"></P>
t </form>
t </body></html>
.
