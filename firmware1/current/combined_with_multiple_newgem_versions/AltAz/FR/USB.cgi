i pg_header.inc
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>SD Card File upload</title></head>
t <body style="width:800px;margin:0 auto;">
t <h1 style="text-align: center;">SD Card</h1>
t <h2 align=center>SD Card File Directory</h2>
t <table border=0 width=750>
t <tr bgcolor=#aaccff>
t  <th width=58%>File Name</th>
t  <th width=15%>File Size</th><th width=27%>Creation Date</th>
t </tr>
c D d
t </table>
t <h2 align=center><br>File Upload</h2>
t <p><font size="3"><br>Upload a file to the SD Card root folder.</font></p>
t <form action=SD.cgi method=POST enctype="multipart/form-data" name=fileupload>
t <p><font face="verdana"><br><br><br>Select a File to upload to SD Card:<br></font>
t  <input name="File" type="file" size="50" maxlength="1000">
t </p>
t <p align="center">
t  <input type=button value="Send" OnClick="this.form.submit()"><HR>
t <P><INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/SD.cgi'">
t </p></form>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Mode nuit</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Mode jour</a>
t </p>
t </body></html>
. End of script must be closed with a period.

