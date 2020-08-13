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

//needed for IE compatibility
if (!String.prototype.endsWith) { 
  String.prototype.endsWith = function(search, this_len) {
      if (this_len === undefined || this_len > this.length) {
          this_len = this.length;
      }
      return this.substring(this_len - search.length, this_len) === search;
  };
}
//needed for IE compatibility
if (!String.prototype.includes) {
  String.prototype.includes = function(search, start) {
    'use strict';

    if (search instanceof RegExp) {
      throw TypeError('first argument must not be a RegExp');
    } 
    if (start === undefined) { start = 0; }
    return this.indexOf(search, start) !== -1;
  };
}


function localURL(url)
{
  //handle lfs redirection for large files
  if (url.endsWith(".zip") ||
      url.endsWith(".exe")) {
        document.location.href = "https://github.com/PKAstro/Gemini-2/raw/master/"+url;
        return false;

  } 
  else if (url.endsWith(".mp4"))
  {
        document.location.href = "/video.html?url="+url; // load video viewer
        return false;
  }
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

  // needed to support IE:
  matches = event.target.matches ? event.target.matches('.dropbtn') : event.target.msMatchesSelector('.dropbtn');

  if (!matches) {
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

