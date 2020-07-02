t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <script language=JavaScript>
t  function formatConfirm(f){
t   if(!confirm('Wollen Sie die SD-Karte wirklich formatieren?')) return;
t   f.submit();
t  }
t </script>
t <title>SD-Karte</title></head>
t <body style="width:800px;margin:0 auto;">
t <h1 style="text-align: center;">SD-Karte</h1>
c D D <h2 align=center>Aktuelles Verzeichnis: %s</h2>
t <table border=0 width=750>
t <tr>
t  <th width=58%>Dateiname</th>
t  <th width=15%>Dateigr&ouml;&szlig;e</th><th width=27%>Erzeugt</th>
t </tr>
c D d
t </table>
t <h2 align=center><br>Laden einer Datei</h2>
t <form action=sd.cgi method=POST enctype="multipart/form-data" name=fileupload>
t <p><font face="verdana"><br>W&auml;hlen Sie eine Datei zum Laden auf die SD-Karte aus:<br></font>
t  <input name="File" type="file" size="50" maxlength="1000">
t </p>
t <p align="center">
t  <input type=button value="Senden" OnClick="this.form.submit()"><HR>
t </p></form>
t <h2 align=center><br>Formatieren der SD-Karte</h2>
t <form action=index.htm method=post name=form1>
t <p><font size="3"><br>SD Kartentr&auml;gerbezeichnung:
c F f <input type=text name=label size=11 maxlength=11 value="%s">
t </font></p>
t <input type=hidden value="yes" name=format>
t <p align="center">
t  <input type=button value="Formatiere SD-Karte" onclick="formatConfirm(this.form)"><HR>
t <P><INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Aktualisieren" OnClick="location='/sd.cgi'">
t </p></form>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Nachtmodus</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Tagmodus</a>
t </p>
t </body></html>
. End of script must be closed with a period.
