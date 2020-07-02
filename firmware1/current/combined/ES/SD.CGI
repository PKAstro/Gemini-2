t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=es-es>
t <script language=JavaScript type="text/javascript" src="xml_http.js"></script>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script language=JavaScript>
t  function formatConfirm(f){
t   if(!confirm('Are you sure you want to format the SD Card?')) return;
t   f.submit();
t  }
t </script>
t <title>Tarjeta SD</title></head>
t <body style="width:800px;margin:0 auto;">
t <h1 style="text-align: center;">Tarjeta SD</h1>
c D D <h2 align=center>Directorio de ficheros de Tarjeta SD: %s</h2>
t <table border=0 width=750>
t <tr>
t  <th width=58%>Nombre del fichero</th>
t  <th width=15%>Tama&#241;o del fichero</th><th width=27%>Fecha de creaci&#243;n</th>
t </tr>
c D d
t </table>
t <h2 align=center><br>Cargar un archivo a la tarjeta SD</h2>
t <form action=sd.cgi method=POST enctype="multipart/form-data" name=fileupload>
t <p lang="es"><font face="verdana"><br>Seleccione un archivo para cargar a la tarjeta SD:<br></font>
t  <input lang="es" name="File" type="file" size="50" maxlength="1000">
t </p>
t <p align="center">
t  <input type=button value="Enviar" OnClick="this.form.submit()"><HR>
t </p></form>
t <h2 align=center><br>Formatear tarjeta SD</h2>
t <form action=index.htm method=post name=form1>
t <p><font size="3"><br>Nombre de la tarjeta SD: 
c F f <input type=text name=label size=11 maxlength=11 value="%s">
t </font></p>
t <input type=hidden value="yes" name=format>
t <p align="center">
t  <input type=button value="Formatear tarjeta SD" onclick="formatConfirm(this.form)"><HR>
t <P><INPUT TYPE=BUTTON VALUE="Inicio" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Actualizar" OnClick="location='/sd.cgi'">
t </p></form>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">modo noche</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">modo día</a>
t </p>
t </body></html>
. End of script must be closed with a period.
