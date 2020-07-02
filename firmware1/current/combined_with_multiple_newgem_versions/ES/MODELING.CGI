t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es>
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Modelo de posicionamiento</title></head>
t <body style="width:800px;margin:0 auto;">
t <H2 ALIGN=CENTER>Modelo de posicionamiento</H2>
t <B>Modelo de posicionamiento:</b>
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
t <INPUT TYPE=SUBMIT NAME=set VALUE="Seleccionar modelo">
t </form></CENTER>
t <P><B>Manejar el modelo actual:</b>
t <form action="modeling.cgi" METHOD=GET NAME=CGI>
# Here are the button definitions
t <P><CENTER>
t <INPUT TYPE=SUBMIT NAME="ia" VALUE="Alineamiento inicial">
t <INPUT TYPE=SUBMIT NAME="cm" VALUE="Reiniciar modelo">
t <INPUT TYPE=SUBMIT NAME="au" VALUE="Deshacer ultimo alineamiento">
t </CENTER></P><HR><P>
t <B>Cambiar Modelo Actual:</b><CENTER>
t <INPUT TYPE=SUBMIT NAME=aa VALUE="Alineamiento adicional">
t <INPUT TYPE=SUBMIT NAME="Sm" VALUE="Sincronizar">
t </CENTER></form></P><HR>
t <P><B>Parámetros de modelo de posicionamiento:</B><br>
t <FORM ACTION=modeling.cgi METHOD=GET NAME=CGI>
t <table style="text-align: left; width: 80%; margin-left: auto; margin-right: auto;"
t border="1" cellpadding="2" cellspacing="2">
t <tbody>
t <tr><td style="text-align: right;"><B>Contador de alineaci&#243;n</B></td>
c P E <td style="text-align: center;">Lado este: %05d</td>
c P W <td style="text-align: center;">Lado Oeste: %05d<br> </td></tr>
#
t <tr><td style="text-align: right;"><B>Desalineamiento del Eje Polar</B></td>
c P a <td style="text-align: center;">Azimut: %05d</td>
c P e <td style="text-align: center;">Elevaci&#243;n: %05d<br> </td></tr>
#
t <tr><td style="text-align: right;"><B>Fallo en la Ortogonalidad</B></td>
c P c <td style="text-align: center;">Meridiano: %05d</td>
c P n <td style="text-align: center;">Polo: %05d</td></tr>
#
t <tr><td style="text-align: right;"><B>Flexi&#243;n</B></td>
c P t <td style="text-align: center;">Tubo: %05d</td>
c P C <td style="text-align: center;">Cantil&#233;ver: %05d</td></tr>
#
t <tr><td style="text-align: right;"><B>Error de &#237;ndice</B></td>
c P h <td style="text-align: center;">Eje horario: %05d</td>
c P d <td style="text-align: center;">Eje declinaci&#243;n: %05d</td></tr>
#
t <tr><td style="text-align: right;"><B>Cambiar error</B></td>
c P F <td style="text-align: center;">Eje horario: %05d</td>
c P f <td style="text-align: center;">Eje declinaci&#243;n: %05d</td></tr>
#
t </tbody></table><br></P><HR>
t <P><B>Guardar el modelo actual como modelo#</b>
t <CENTER>
t <form action="modeling.cgi"><select name="sm" size="1">
c Q 0 <option value="0" %s>0</option>
c Q 1 <option value="1" %s>1</option></select>
#c Q 2 <option value="2" %s>2</option>
#c Q 3 <option value="3" %s>3</option>
#c Q 4 <option value="4" %s>4</option>
#c Q 5 <option value="5" %s>5</option>
#c Q 6 <option value="6" %s>6</option>
#c Q 7 <option value="7" %s>7</option>
#c Q 8 <option value="8" %s>8</option>
#c Q 9 <option value="9" %s>9</option></select>
# Here are the button definitions
t <P><INPUT TYPE=SUBMIT NAME=set VALUE="guardar modelo" id="sbm">
t </CENTER></form></P>
# Page buttons
t <P><INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Actualizar" OnClick="location='/modeling.cgi'">
t </P></FORM>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </body></html>
.
