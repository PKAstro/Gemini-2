<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<title>Gemini 2 Mount Controller</title>


<?php include("topv.php"); ?>


<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<style type="text/css">
.auto-style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: medium;
	color: #FFFFFF;
	text-align: left;
	margin-right: 10px;
	margin-top: 10px;
	margin-bottom: 10px;
}
</style>


</head>

<body style="color: #FFFFFF; background-color: #000000">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">How to Stop Win 10 from installing.</td>
	</tr>
</table>
<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">Here are the steps that I have taken to prevent Win 
		10 from installing for now, on Windows 7.&nbsp; So far it has worked on 
		4 of my computers.&nbsp;&nbsp; If you decide to do this you do it at 
		your own risk.<br /><br /></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="auto-style2">
		<ol>
			<li>
			Download and run this <a href="Win10/fix-710.vbs" target="_blank">script</a> to add 
			the below to the registry. This should stop Gwx.exe from running at 
			Windows boot.&nbsp; Gwx.exe is the software that will download and 
			install Windows 10 in the background.&nbsp; Please note if you 
			downloaded the previous script I had on this page before 27 Aug 
			2015, then this latest script will error out.&nbsp; You will 
			manually have to edit the registry using Regedit.exe to remove 
			[HKEY_LOCAL_MACHINE\SOFTWARE\Policies\Microsoft\Windows\Gwx] and "DisableGwx"="dword:00000001" <br /><br />
			
			</li>
			<li>
			Delete the Windows update KB3035583, KB3068708, KB2976978, KB3050267 
			, KB3058168.<br /> You will have to repeat steps A through H for 
			each one.&nbsp; Some are for Win 8.1 and will not be present in 
			windows 7.
			&nbsp;<ol type="a">
				<li>Open up "Control Panel" then "Programs 
				and Features"<br /><br /></li>
				<li>In the left hand column, find "View 
				installed updates" and click on it.<br /><br /></li>
				<li>A list of all the updates will be 
				presented, in the search installed updates box (upper right) put 
				KB3035583<br /><br /></li>
				<li>When it is the only one showing, right 
				mouse click on it and select "uninstall".&nbsp; Windows will 
				more than likely will want to reboot.&nbsp; Let it.<br /><br />
				</li>
				<li>After the reboot, go back into the 
				"Control Panel" and this time select "Windows Update"<br />
				<br /></li>
				<li>Select "Change Setting" to "Check for 
				Updates but let me choose whether to download and install them.<br />
				<br /></li>
				<li>Select "Check for updates" and KB3035585 
				should download again.<br /><br /></li>
				<li>Don't select it's checkbox, but right 
				mouse click on it and select "Hide Update", Repeat these of all 
				the updates above/<br /><br /></li>
			</ol>
			</li>
			<li>
			Now you need to delete Gwx.exe from the 
			running processes.&nbsp; Use "Ctrl-Alt-Del" to open up "Start Task manager"&nbsp;
			
			<ol type="a">
				<li>
				
				Now select the "Processes Tab"&nbsp; Look for "Gwx.exe" and then 
				select "End Process Tree".</li>
			</ol>
			</li>
			<li>Now the "Windows Update may offer you to download "Windows 10". if it does do not select "Get started".<br /><br /></li>
			<li>Instead, select "Show all available update".&nbsp; If the Win10 
			is showing, uncheck it, and then right mouse click on it and select 
			Hide update. Select the updates you want then hit the "OK" in the 
			lower right corner to install new updates.&nbsp; <br /><br /></li>
			<li>Do not enable enable "Install available updates automatically"<br /><br /></li>
		</ol>
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on August 27, 2015
		</td>
	</tr>
</table>

 

</body>




<?php include("bottom.php"); ?>



