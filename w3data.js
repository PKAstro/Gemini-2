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
          addScript(this.response);
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

function addScript(response)
{
    var newdiv = document.createElement('div');
    newdiv.innerHTML = response;
    var scripts = newdiv.getElementsByTagName('script');
    for (var ix = 0; ix < scripts.length; ix++) {
      eval(scripts[ix].text);
  }
//  newdiv.remove(); //not supported by earlier versions of IE
}

function localURL(url)
{
  //handle lfs redirection for large files
  if (url.endsWith(".zip") ||
      url.endsWith(".mp4") ||
      url.endsWith(".exe"))
    document.location.href = "https://github.com/PKAstro/Gemini-2/raw/master/"+url;
  else
    if (document.location.href.includes("/hc") ||
        document.location.href.includes("/web/") ||
        document.location.href.includes("quickstart"))
            document.location.href = "../" + url;
    else
        document.location.href = url;
    
}


function theme() {
	document.getElementById("themeSelector").classList.toggle("show");
  }
  // Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

