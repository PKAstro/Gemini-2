t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
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
t   if(!confirm('Wollen Sie die Firmware wirklich neu programmieren?')) return;
t   var d = document.getElementsByName("ff")[0];
t   var file = d.value;
t   flashFirmware(file);
t  }
t function waitForUpdate() {
t	var outputString = "<center>";
t       outputString +=	"<h1>Bitte warten Sie ...</h1></center>";
t	document.getElementById("maindiv").innerHTML = outputString;
t       window.setTimeout("location.reload(true);", 20000);
t	}
t </script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Firmware</title></head>
t <body style="width:800px;margin:0 auto;">
t <div id="maindiv">
t <h1 style="text-align: center;">Gemini Firmware</h1>
t <h2 align=left>Firmware-Information</h2>
c F S
c F i  Version: %s<BR> Herstellungsdatum: %s<BR> Herstellungszeit: %s
c F I <BR> ROM-Speicher: %d<BR> RAM-Speicher: %d 
t <h2 align=left>Hand Controller Firmware Information</h2>
c F H %s
t <h2 align=left>Gemini Firmware auf der SD-Karte</h2>
#t <P><table border=0 width=750>
#t <tr bgcolor=#aaccff>
#t  <th width=58%>Dateiname</th>
#t  <th width=15%>Dateigr&ouml;&szlig;e</th><th width=27%>Datum</th>
#t </tr>
#c F b %s
#t </table></P>
t <P><font style="color: rgb(255,0,0)"><B>
t Wenn Sie den "Flash Firmware"-Knopf bet&auml;tigen, wird die gegenw&auml;rtig 
t gespeicherte Firmware permanent gel&ouml;scht und &uuml;berschrieben.  
t Danach startet Gemini neu. Wenn das nicht funktioniert, oder wenn die Firmware fehlerhaft 
t war oder nicht erfolgreich programiert wurde ist keine Verbindung zu Gemini mehr m&ouml;glich.
t In diesem Fall kann der Bootloader &uuml;ber den seriellen Port genutzt werden.
t Alternativ können Sie aber auch die Firmware unter dem Namen HGM_gem2.bin in das Wurzelverzeichnis
t der SD-Karte kopieren und Gemini neu starten.</blink></B></font></P>
t <P><font style="color: rgb(255,255,255)"><B>
t Die Firmware-Programmierung dauert ca. 20 Sekunden. 
t Bitte warten Sie mindestens 30 Sekunden.</B></font></P>
t <form action=firmware.cgi>
t <P><table width="60%" align="center"><tr><td><B>Wa&uuml;hlen Sie die Firmware:</B></td>
t <td><select name=ff size=1>
c F B %s 
t </select></td>
# Here are the button definitions
t <P><td><input type=button value="Flash Firmware" onclick="flashConfirm(this.form)">
t </td></tr></table></form><HR>
# -----------------------------------------------
t <h2 align=left>Konfigurationsdaten im SRAM verwalten</h2>
t <form action="firmware.cgi">
t <table width="60%" align="center">
t <tr><td><INPUT TYPE=SUBMIT NAME="CS" VALUE="Daten speichern" id="CL"></td>
t <td>Den Inhalt des SRAM in eine Datei speichern</td></tr>
t <tr><td><INPUT TYPE=SUBMIT NAME="CL" VALUE="SRAM zur&uuml;cksetzen" id="CL"></td>
t <td>SRAM auf Fabrikeinstellungen setzen.</td></tr>
t <tr><td><INPUT TYPE=SUBMIT NAME="CM" VALUE="Reset to MI-250" id="CM"></td>
t <td>SRAM auf MI-250-Einstellungen setzen</td></tr>
t <tr><td><INPUT TYPE=SUBMIT NAME="CR" VALUE="SRAM laden" id="CL"></td>
t <td>Lade den SRAM aus Datei</td></tr>
t </table>
c F ? <P><B>%s</B></P><HR>
# -----------------------------------------------
t <h2>Gemini neu starten</h2>
t <CENTER><P><form action="firmware.cgi" METHOD=GET NAME=CGI>
t <INPUT TYPE=SUBMIT NAME="bO" VALUE="Neustart">
t <INPUT TYPE=SUBMIT NAME="bC" VALUE="Kaltstart">
t </CENTER></form></P><HR>
# -----------------------------------------------
t <P><INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Aktualisieren" OnClick="location='/firmware.cgi'">
t </p></form>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Nachtmodus</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Tagmodus</a>
t </p>
t </body></html>
.
