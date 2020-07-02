<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Vista Mods</title>



<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />




<body class="style6">
</head>
</head>

<?php include("topv.php"); ?>





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



<?php include("bottom.php"); ?>



</body>

</html>
