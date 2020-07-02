t <script language=JavaScript>
#t  function ShowTime() {
#t   alert("Please wait ... " + i);
#t   i = i - 1;
#t   if (i <= 0) window.clearInterval(intv);
#t  }
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
t   if(!confirm('Are you sure you want to flash new firmware?')) return;
t   var d = document.getElementsByName("ff")[0];
t   var file = d.value;
t   flashFirmware(file);
t  }
t function waitForUpdate() {
t	var outputString = "<center>";
t       outputString +=	"<h1>Please Wait</h1></center>";
t	document.getElementById("maindiv").innerHTML = outputString;
t       window.setTimeout("location.reload(true);", 20000);
t	}
t </script>
i pg_header.inc
t <link rel="stylesheet" type="text/css" href="design_night.css">
t <link rel="alternate stylesheet" type="text/css" title="design_day" href="design_day.css">
t <script type="text/javascript" src="styleswitcher.js"></script>
t <title>Gemini Firmware</title></head>
t <body style="width:800px;margin:0 auto;">
t <div id="maindiv">
t <h1 style="text-align: center;">Gemini Firmware</h1>
t <h2 align=left>Gemini Firmware Information</h2>
c F S
c F i  Version: %s<BR> Build date: %s<BR> Build time: %s<BR> 
c F I  ROM size: %d<BR> RAM size: %d 
t <h2 align=left>Hand Controller Firmware Information</h2>
c F H %s
t <h2 align=left>SD Card Gemini Firmware</h2>
#t <P><table border=0 width=750>
#t <tr>
#t  <th width=58%>File Name</th>
#t  <th width=15%>File Size</th><th width=27%>Creation Date</th>
#t </tr>
#c F b %s
#t </table></P>
t <P><font style="color: rgb(255,0,0)"><B>
t Pushing the "Flash Firmware" button will permanently erase the currently loaded firmware, 
t flash the selected image from the SD card to the board and restart Gemini. If this fails 
t or if the image is corrupted you can't reconnect to the board. In this case you'll have 
t to use alternative programming methods.</B></font></P>
t <P><font style="color: rgb(255,0,0)"><B>
t Firmware flashing takes 10 to 20 seconds. Please wait until Gemini restarts with
t  the new firmware. Don't resubmit or reload this page!</B></font></P>
t <form action=firmware.cgi>
t <P><table width="60%" align="center"><tr><td><B>Select firmware image:</B></td>
t <td><select name=ff size=1>
c F B %s 
t </select></td>
# Here are the button definitions
t <td><input type=button value="Flash Firmware" onclick="javascript:flashConfirm();">
t </td></tr></table></form><HR>
# -----------------------------------------------
t <h2 align=left>Manage configuration data in SRAM</h2>
t <form action="firmware.cgi">
t <table width="60%" align="center">
t <tr><td><INPUT TYPE=SUBMIT NAME="CS" VALUE="Store SRAM" id="CL"></td>
t <td>Store SRAM content to file</td></tr>
t <tr><td><INPUT TYPE=SUBMIT NAME="CL" VALUE="RESET SRAM" id="CL"></td>
t <td>Reset SRAM to Factory Defaults</td></tr>
t <tr><td><INPUT TYPE=SUBMIT NAME="CM" VALUE="Reset to MI-250" id="CM"></td>
t <td>Reset SRAM to MI-250 Defaults</td></tr>
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
t <P><INPUT TYPE=BUTTON VALUE="Home" OnClick="location='/index.htm'">
t <INPUT TYPE=BUTTON VALUE="Refresh" OnClick="location='/firmware.cgi'">
t </p></form></div>
t <p class="style_switcher">
t <a href="#" onclick="setActiveStyleSheet('standard'); return false;">Night mode</a> -----
t <a href="#" onclick="setActiveStyleSheet('design_day'); return false;">Day mode</a>
t </p>
t </body></html>
. End of script must be closed with a period.

