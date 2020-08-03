/* W3Data ver 1.31 by W3Schools.com */
var w3DataObject = {};
function w3IncludeHTML(cb) {
  var z, i, elmnt, file, xhttp;
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {      
        if (this.readyState == 4) {
          elmnt.outerHTML = this.responseText;
          w3IncludeHTML(cb);
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      return;
    }
  }
  if (cb) cb();
}

function localURL(url)
{
    if (document.location.href.includes("/hc") ||
        document.location.href.includes("/web/") ||
        document.location.href.includes("quickstart"))
            document.location.href = "../" + url;
    else
        document.location.href = url;
    
}