t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <script type="text/javascript">
t function scrollhome() document.getElementById("Home").scrollIntoView(false);
t window.onload = function() scrollhome(); 
t function GoToBt() {  document.Gtform.GT.focus(); }</script>
t <title>Directorio del Cat&#225;logo</title></head>
t <body>
t <H2 ALIGN=CENTER>Cat&#225;logo</H2>
t <P><CENTER>
t <a href=smp.cgi target="Catalog Content">Sol/Luna/Planetas</a><br>
c D F
t </CENTER></P>
t <H2 ALIGN=CENTER>Selecci&#243;n del Objeto</H2>
#  static part for catalogue object selection
t <form name="Coform" id = "Coform" action="catnames.cgi">
# Here are the button definitions
t <P>Insertar Objeto Aqu&#237;:</P>
t <P><INPUT TYPE=TEXT NAME="co" ID="co" size=45 maxlength=80></P>
t <P><input type="radio" name="prec" value="1" checked="checked">&Eacute;poca J2000<br>
t <input type="radio" name="prec" value="0">&Eacute;poca actual<br>
t <INPUT TYPE=SUBMIT NAME="sdo" OnClick="javascript:GoToBt()" VALUE="Seleccionar Objeto"></P>
t </form>
# Here are the selected object ephemerides and check buttons included:
c D S
t <form name="Bt" action="catnames.cgi">
t <P><INPUT TYPE=BUTTON Id="Home" VALUE="Inicio" OnClick="location='/index.htm'" target="_top"></P>
t </form>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </body></html>
.
