t <script language=JavaScript>
t  function formatConfirm(f){
t   if(!confirm('Êtes-vous sûr de voloir formater définitivement le Carte SD?')) return;
t   f.submit();
t  }
t </script>
i pg_header.inc
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Carte SD</title></head>
t <body style="width:800px;margin:0 auto;">
t <h1 style="text-align: center;">Carte SD</h1>
c D D <h2 align=center>&Eacute;criture du Carte SD: %s</h2>
t <table border=0 width=750>
t <tr>
t  <th width=58%>Nom du fichier</th>
t  <th width=15%>Taille du fichier</th><th width=27%>Date de cr&eacute;ation</th>
t </tr>
c D d
t </table>
t <h2 align=center><br>Telechargement du fichier </h2>
t <p><font size="3">Telechargement de fichier sur la carte SD.</font></p>
t <form action=sd.cgi method=POST enctype="multipart/form-data" name=fileupload>
t <p><font face="verdana"><br>Selectionnez un fichier a telechargé sur la carte SD:<br></font>
t  <input name="Fichier" type="file" size="50" maxlength="1000">
t </p>
t <p align="center">
t  <input type=button value="Soumettre" OnClick="this.form.submit()"><HR>
t </p></form>
t <h2 align=center><br>Formatage de la carte SD</h2>
t <form action=index.htm method=post name=form1>
t <p><font size="3"><br>Nom du volume de carte SD:
c F f <input type=text name=label size=11 maxlength=11 value="%s">
t </font></p>
t <input type=hidden value="yes" name=format>
t <p align="center">
t  <input type=button value="Formatage" onclick="formatConfirm(this.form)"><HR>
t <P><INPUT TYPE=BUTTON VALUE="Accueil" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Rafraichir" OnClick="location='/sd.cgi'">
t </p></form>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Mode nuit</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Mode jour</a>
t </p>
t </body></html>
. End of script must be closed with a period.
