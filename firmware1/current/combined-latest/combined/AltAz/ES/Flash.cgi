t <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-15"http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es> 
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Memoria Flash</title></head>
t <body style="width:800px;margin:0 auto;">
t <h1 style="text-align: center;">Memoria Flash</h1>
t <h2 align=center> Directorio de Memoria Flash Gemini</h2>
t <table border=0 width=750>
t <tr>
t  <th width=58%>Nombre del fichero</th>
t  <th width=15%Tama&#241;o del fichero</th><th width=27%>Fecha de creaci&#243;n</th>
t </tr>
c D s
t </table>
t <h2 align=center><br>Cargar un archivo a la memoria flash</h2>
#t <p><font size="3"><br>Cargar un archivo al fichero ra&#237;z de la memoria flash.</font></p>
t <form action=Flash.cgi method=POST enctype="multipart/form-data" name=fileupload>
t <p><font face="verdana"><br><br><br>Seleccione un archivo para cargar a la memoria flash:<br></font>
t  <input name="File" type="file" size="50" maxlength="1000">
t </p>
t <p align="center">
t  <input type=button value="Enviar" OnClick="this.form.submit()"><HR>
t <P><INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Actualizar" OnClick="location='/Flash.cgi'">
t </p></form>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </body></html>
.

