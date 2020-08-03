<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<!-- Mirrored from gemini-2.net/vista_mods.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Dec 2018 04:09:03 GMT -->
<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Vista Mods</title>



<link href="gemini-2.css" rel="stylesheet" type="text/css" />




<body class="style6">
</head>
</head>

<!DOCTYPE html 
      PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<link rel="stylesheet" href="ajxmenu.css" type="text/css">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<title>Gemini 2 Mount Controller</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css">
<style type="text/css">
a {
	color: #FF0000;
}
</style><script src="w3data.js"></script></head>
<body>
<table align="center" style="width: 900px">
	<tr><td align="center">
	<span class="h1">
		Gemini-2 and Gemini-1 Telescope Mount Controllers</span> <br />
		<span class="h2">Website and Tutorials </span>
		</td>
	</tr>
</table>


<table align="center" style="width: 900px">
	<tr>
		<td align="center">
<form action="https://www.google.com/search" method="get"> <div style="border:1px solid black;padding:4px;width:20em;"> <table align="center" border="0" cellpadding="0"> 
<tbody> 
<tr><td> <input maxlength="255" name="q" size="25" type="text" value="" /> <input type="submit" value="Google Search" /></td></tr> 
<tr><td align="center" style="font-size:75%"> <input checked="" name="sitesearch" type="checkbox" value="gemini-2.net" />
 only search Gemini-2.com<br /> </td></tr></tbody></table> </div> </form>
		
		</td>
	</tr>
</table>
<!--
<table align="center" style="width: 900px">
	<tr>
		<td class="style7" >
		There is a new <a href="http://wiki.gemini-2.net" target="_blank">Question and Answer Wiki</a> section where you can ask searchable questions.  		
		</td>
	</tr>
</table>
-->

<table align="center" style="width: 900px">
	<tr>
		<td align="center">
		</td>
	</tr>
</table>

<div class="AJXMenueDFaTFD" w3-include-html="navigation.html"></div><script>w3IncludeHTML();</script></body>







<p class="h1">Vista Mods</p>
<p class="style6"><a name="Add_Remotedesktop"></a>Add Remote Desktop to Vista 
Home Premium. &quot;DO THIS AT YOUR OWN RISK&quot; I advise saving a backup copy of the 
original termsrv.dll first by renaming it termserv.dll_sav. <span class="style2">
This hack is in direct violation of the Windows End User Agreement and your 
computer might not be any longer supported by Microsoft.&nbsp; You should 
consider purchasing Business or Ultimate editions. Also I cannot answer any 
questions about this hack.&nbsp; I found it at:

<a href="http://portal.tonychan.org/Default.aspx?tabid=58&amp;EntryID=123" target="_blank">
TonyChan.org Site</a> I personally upgraded to Vista Ultimate on my computers, 
and have not tried this hack.<p class="style6">That being said, here are the instructions.</p>


<ol class="style6">
	<li>Download 
	<a href="http://portal.tonychan.org/Portals/0/termsrv.zip">Download termsrv.zip here.</a> This is for only Vista 32 bit versions.<li>Extract Termsvr.zip to a temp directory	</li>
	<li>Hit Start, then type &quot;CMD&quot; in the start search block.</li>
	<li>At the top of Programs </li>&quot;CMD&quot; will be shown. Right Click and select 
	(Run in Administrator 
	mode)</li>
	<li>Run the corresponding batch file for your 
	Vista edition from the temp directory.</li>
	<li>Allow TCP Port 3389&nbsp;on Windows Firewall or 
	any other firewall product.</li>
	<li>Go to Control Panel&gt;Administrative Tools&gt;Services&gt;Terminal Services. <br>
	Right click Terminal Services, select properties. Select Automatic in Startup type.</li>
	<li>Done</li>
</ol>
You can also try this link to
<a href="http://www.missingremote.com/index.php?option=com_content&amp;task=view&amp;id=1220&amp;Itemid=232" target="_blank">
Enable Concurrent Remote Desktop Sessions in Vista</a>
<p>&nbsp;</p>
Make Windows Vista Show all devices even if they are not connected.</p>

<p align="left">&nbsp;<span class="style6">Windows does not normally show non-connected devices in device manager. This is even true if you turn on show hidden devices under the view tab. Before you do this change, be for warned - that this will let you modify/delete devices that you might not want changed or deleted.  You do this at your own risk!. With that said here is a step by step process.  You can also see how to do this on the Microsoft's web site at:
<a href="http://support.microsoft.com/kb/241257" target="_blank">http://support.microsoft.com/kb/241257</a></span>.<p align="left">&nbsp;<span class="style6">For Vista:
	</span>
	<ol class="style6">
	<li>&nbsp;Click in the Vista Ballon at the bottom of the page.</li>
	
	</li>
	<li>&nbsp;Right mouse click on Computer and select Properties.</li>
	<li>Select Advanced System Setting. If you are asked for permissions hit 
	continue.</li>
	<li>Select the "Environment Variables" Button at the bottom of the page</li>
	<li>In the "Systems Variables" box select "New"</li>
	<li>A box will Popup that has 2 entry blocks
	<ol class="style7">
		<li>In the Variable Name: box enter <strong>devmgr_show_nonpresent_devices</strong>
		</li>
		<li>In the Variable value: box enter <strong>1</strong> then click the OK button , then click the OK button on the bottom of Environment Variables. 
		</li>
	</ol>

	</li>
	<li>Close the the windows until you are back at the <strong>Control Panel > System.</strong></li>
	<li>Select Device Manager</li>
	<li>Under the View menu, select show hidden devices. </li>
	<li>Under Ports you should see all the devices that Windows has allocated now. You can modify them and delete them if you need, but please be careful what you delete.</li>
	</ol>



<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>


<head>
<title>Bottom page</title>
<link href="gemini-2.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="ajxmenu_bottom.css" type="text/css">


</head>

<body style="color: #FFFFFF; background-color: #000000" >
<table align="center" style="width: 900px">
	<tr>
		<td class="tableborder1"> <span class="style6" style="font-size:small">This site is not for profit 
		and sells nothing and asks for no money for any help it provides.&nbsp; This 
		site is 
		here to help fellow Gemini-2 and Gemini-1 owners. This Web Site is not 
		associated with Losmandy-Hollywood General Machining Inc. or any of 
		their employees and never has been. There is no guarantee that all the 
		information is correct, but strives to provide the best information 
		possible. The use of any information is at your own risk.&nbsp; The webmaster 
		is an unpaid beta tester, and tries to work with other beta testers, and 
		René the writer of the firmware.&nbsp;
		If you would like to help keep this web site going send your gift to <a href="https://gemini-2.net">gemini-2.net</a> 
		Your gift will be used to defray the cost of keeping this web site up, unless you specify otherwise.</span></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="tableborder1"> <span class="style6" style="font-size:small">
		I have tried many times to make a PDF of this site with no luck. Every program
		to do this screws up the links and images. I am not going to write a manual either.
		I developed this web site for my own use in the beginning, but it soon went public.</span></td>
	</tr>
</table>

	<table align="center" style="width: 900px">
		<tr>
			<td>
<div class="AJXMenuSPDSMNA"><!-- AJXFILE:ajxmenu_bottom.css -->
 <div class="ajxmw1">
  <div class="ajxmw2">
<ul>
 <li class="tfirst tlast"><a href="index.html" target="_self">HOME</a></li>
</ul>
  </div>
 </div>
 <br >
</div>
</td>
</tr>
</table>

<!--
<table align="center"style="width: 50px">
	<tr>
	<td class="style6">Hit counter by<a href="http://digits.net"> http://digits.net</a></td>
	
	
	<td class="style6R" width="45%">
  <a href="http://www.digits.net" target="_blank">
    <img src="https://counter.digits.net/?counter={921ba194-f2d6-95c4-2981-2437d185efba}&template=simple" 
     alt="Hit Counter by Digits" border="0"  />
  </a>
  </td>
  </tr>
</table>
-->
&nbsp;<table align="center" cellpadding="4" cellspacing="4" style="width: 70%">
	<tr class="style6">
		<td class="style1">Your Privacy Policy
<br>No Information is collected by this site.&nbsp; Cookies are set in your browser, 
but only for visited<br/>links to change color.
</td>
	</tr>
	<tr class="style6">
		<td class="style13"><b>Your use of any information on this site is at your own risk.</b></td>
	</tr>
</table>
		
	<p class="style7" align="center"><!--webbot bot="HTMLMarkup" startspan --><script language=javascript>

	  <!--
	  var contact = "Thomas Hilton"
	  var email = "tomh"
	  var emailHost = "gemini-2.net"
	  document.write("copyright&copy; - 2017-2011 -<a href=" + "mail" + "to:" + email + "@" + emailHost+ ">" + contact + "</a>" )
	 //-->
	</script><!--webbot bot="HTMLMarkup" endspan -->
	and <a href="index.html">https://www.gemini-2.net</a>
	<br />Gemini-2 and Gemini is a registered trade names of Hollywood General Machining Inc.</p>

	
</body>




</body>


<!-- Mirrored from gemini-2.net/vista_mods.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Dec 2018 04:09:03 GMT -->
</html>
