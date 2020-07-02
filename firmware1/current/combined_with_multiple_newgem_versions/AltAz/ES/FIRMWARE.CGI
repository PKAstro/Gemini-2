t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es> 
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <script language=JavaScript>
t function flashFirmware(fileName) {
t    var xmlhttp = null;
t    if (window.XMLHttpRequest) { // all browsers but IE
t	xmlhttp = new XMLHttpRequest();
t    }
t    else { // IE
t	xmlhhtp = new ActiveXObject("Microsoft.XMLHTTP");
t    }
t    
t    xmlhttp.open("GET", "index.cgi?ff=" + fileName, true);
t    xmlhttp.send();
t    waitForUpdate();
t }
t function flashConfirm(){
t   if(!confirm('Este seguro que quiere grabar el firmware?')) return;
t   var d = document.getElementsByName("ff")[0];
t   var file = d.value;
t   flashFirmware(file);
t  }
t function waitForUpdate() {
t	var outputString = "<center>";
t       outputString +=	"<h1>Espere, por favor ...</h1></center>";
t	document.getElementById("maindiv").innerHTML = outputString;
t       window.setTimeout("location.reload(true);", 20000);
t	}
t </script>
t <title>Firmware del Gemini</title></head>
t <body style="width:800px;margin:0 auto;">
t <div id="maindiv">
t <h1 style="text-align: center;">Firmware del Gemini</h1>
t <h2 align=left>Informaci&#243;n del firmware del Gemini</h2>
c F S
c F i Versi&#243;n: %s<BR>Fecha de grabaci&#243;n: %s<BR>Hora de grabaci&#243;n: %s
c F I <BR>Tama&#241;o de la ROM: %d<BR>Tama&#241;o de la RAM: %d 
t <h2 align=left>Firmware del controlador Manual</h2>
c F H %s
t <h2 align=left>Firmware Gemini tarjeta SD </h2>
#t <P><table border=0 width=750>
#t <tr bgcolor=#aaccff>
#t  <th width=58%>Nombre del fichero</th>
#t  <th width=15%>Tama&#241;o del fichero</th><th width=27%>Fecha de creaci&#243;n</th>
#t </tr>
#c F b %s
#t </table></P>
t <P><font style="color: rgb(255,0,0)"><B>
t Pulsando en bot&#243;n Grabar Firmware eliminar&#225; permanentemente el actual firmware y 
t grabar&#225; el Firmware de la tarjeta SD a la placa. Reinicia el Gemini.</B></font></P>
t <P><font style="color: rgb(255,0,0)"><B>
t La grabación del firmware necesita entre 10 a 20 segundos. Por favor, espere 30 segundos 
t a que se reinicie el Gemini con el nuevo Firmware</B></font></P>
t <form action=firmware.cgi>
t <P><table width="60%" align="center"><tr><td><B>Select firmware image:</B></td>
t <td><select name=ff size=1>
c F B %s 
t </select></td>
# Here are the button definitions
t <P><input type=button value="Grabar Firmware" onclick="javascript:flashConfirm();">
t </td></tr></table></form><HR>
# -----------------------------------------------
t <h2 align=left>Reiniciar la SRAM</h2>
t <form action="firmware.cgi">
t <table width="60%" align="center">
t <tr><td><INPUT TYPE=SUBMIT NAME="CS" VALUE="Store SRAM" id="CL"></td>
t <td>Store SRAM content to file</td></tr>
t <tr><td><INPUT TYPE=SUBMIT NAME="CL" VALUE="Reiniciar la SRAM" id="CL"></td>
t <td>Reiniciar la SRAM a valores de fabrica</td></tr>
t <tr><td><INPUT TYPE=SUBMIT NAME="CM" VALUE="Reiniciar MI-250" id="CM"></td>
t <td>Reiniciar la SRAM a valores MI-250 Defaults</td></tr>
t <tr><td><INPUT TYPE=SUBMIT NAME="CR" VALUE="Load SRAM" id="CL"></td>
t <td>Load SRAM content from file</td></tr>
t </table>
c F ? <P><B>%s</B></P><HR>
# -----------------------------------------------
t <h2>Reboot Mount</h2>
t <CENTER><P><form action="firmware.cgi" METHOD=GET NAME=CGI>
t <INPUT TYPE=SUBMIT NAME="bO" VALUE="Reboot">
t <INPUT TYPE=SUBMIT NAME="bC" VALUE="Cold Reboot">
t </CENTER></form></P><HR>
# -----------------------------------------------
t <P><INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Actualizar" OnClick="location='/firmware.cgi'">
t </p></form></div>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </body></html>
. End of script must be closed with a period.

