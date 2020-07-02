t <script language=JavaScript>
t  function formatConfirm(f){
t   if(!confirm('Are you sure you want to format the SD Card?')) return;
t   f.submit();
t  }
t </script>
t <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
t <html><head><meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
t <META http-equiv=Content-Language content=en-us>
t <title>SD Card</title>
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t </head>
t <body style="width:800px;margin:0 auto;">
t <h1 style="text-align: center;">SD Card</h1>
c D D <h2 align=center>Current SD Card Directory: %s</h2>
t <table border=0 width=750>
t <tr>
t  <th width=58%>File Name</th>
t  <th width=15%>File Size</th><th width=27%>Creation Date</th>
t </tr>
c D d
t </table>
t <h2 align=center><br>Upload a file to the SD Card's current directory</h2>
t <form action=sd.cgi method=POST enctype="multipart/form-data" name=fileupload>
t <p lang="en"><font face="verdana"><br>Select a File to upload to SD Card:<br></font>
t  <input lang="en" name="File" type="file" size="50" maxlength="1000">
t </p>
t <p align="center">
t  <input type=button value="Send" OnClick="this.form.submit()"><HR>
t </p></form>
t <h2 align=center><br>Format SD Card</h2>
t <form action=index.htm method=post name=form1>
t <p><font size="3"><br>SD Card Volume Label:
c F f <input type=text name=label size=11 maxlength=11 value="%s">
t </font></p>
t <input type=hidden value="yes" name=format>
t <p align="center">
t  <input type=button value="Format SD Card" onclick="formatConfirm(this.form)"><HR>
t <P><INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/sd.cgi'">
t </p></form>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Night mode</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Day mode</a>
t </p>
t </body></html>
. End of script must be closed with a period.
