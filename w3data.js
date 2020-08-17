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

var gitLFS = "https://github.com/PKAstro/Gemini-2/raw/master/";

//make LFS contents relative to the domain:
if (window.location.href.includes("//gemini-2.com"))
  gitLFS = "https://github.com/PKAstro/Gemini-2-com/raw/master/";

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
    if (window.document.documentMode) //IE special handling
        document.location.href = "https://github.com/PKAstro/Gemini-2/raw/master/"+url;
    else
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


  function searchShow() {
    document.getElementById("searchDropdown").classList.toggle("show");
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



// 1 = google
// 2 = duckduckgo
function setSearch(t)
{
  set_cookie ( "searchEngine", t, 30);
}

function getSearch()
{
  var c = get_cookie( "searchEngine");
  if (c!="1" && c!="2") c = "1";
  return c;
}

function updateSearch()
{
  var s = getSearch();

  if (s=="1") 
  {
      document.getElementById("q").placeholder="search Google";
      document.getElementById("form").action="https://www.google.com/search";
  } 
  else if (s=="2")
  {
      document.getElementById("q").placeholder="search DuckDuckGo";
      document.getElementById("form").action="https://duckduckgo.com/";
  }
 
  // set search box domain 
  var search = document.getElementById("site1");
  if (search) search.value=location.hostname;
  search = document.getElementById("site2");
  if (search) search.value=location.hostname;

}