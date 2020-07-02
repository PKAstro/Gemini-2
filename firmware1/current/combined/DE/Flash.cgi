t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=de-de>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <title>Gemini Flash-Speicher</title></head>
t <body style="width:800px;margin:0 auto;">
t <h1 style="text-align: center;">Flash-Speicher</h1>
t <h2 align=center>Verzeichnis des Speicherchips</h2>
t <table border=0 width=750>
t <tr>
t  <th width=58%>Dateiname</th>
t  <th width=15%>Dateigr&ouml;&szlig;e</th><th width=27%>Erzeugt</th>
t </tr>
c D s
t </table>
t <h2 align=center><br>File Upload</h2>
t <p><font size="3"><br>Laden einer Datei auf den Speicherchip.</font></p>
t <form action=Flash.cgi method=POST enctype="multipart/form-data" name=fileupload>
t <p><font face="verdana"><br><br><br>W&auml;hlen Sie eine Datei:<br></font>
t  <input name="File" type="file" size="50" maxlength="1000">
t </p>
t <p align="center">
t  <input type=button value="Laden" OnClick="this.form.submit()"><HR>
t <P><INPUT TYPE=BUTTON VALUE="Startseite" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Aktualisieren" OnClick="location='/flash.cgi'">
t </p></form>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Nachtmodus</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Tagmodus</a>
t </p>
t </body></html>
.
