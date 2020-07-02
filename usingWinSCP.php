<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />

<body style="color: #FFFFFF; background-color: #000000">
<div class="style1">
	<div class="style1">


<?php include("topv.php"); ?>




</head>
<body>
<span class="h3">This Page will demonstrate how to do FTP access into the Gemini 2
<div class="style1"></div><br/>

<table style="width: 750px" class="style13" align="center">
	<tr>
		&nbsp;
	</tr>

		<tr>
		<td class="style7">This demo is using the 
		<a href="http://winscp.net/eng/index.php" target="_blank" title="This FTP program is the only one that I tested out of 4, that did not provide timeouts in either upload or download.">
		FREE WINSCP FTP Program</a><br/>
		There is also a <a href="usingWF_FTP.php" target="_blank">demo of using the WS_FTP program</a>, but only shows how to set it up and login </td>
	</tr>
	<tr>
		<td class="style6"><a href="gemini-images/FTP/WinSCP/1InitialWinSCP.JPG">
	<img alt="" height="279" src="gemini-images/FTP/WinSCP/thumbnails/1InitialWinSCP_small.JPG" width="400"  class="style6" style="float: left" /></a><br/>
	When opening the WINSCP for the first time you will see this window.</td>
	</tr>
	<tr>
		<td class="style6">	<a href="gemini-images/FTP/WinSCP/2SetupWinSCP.JPG"target="_blank">
	
	<img alt="" height="279" src="gemini-images/FTP/WinSCP/thumbnails/2SetupWinSCP_small.JPG" width="400"  class="style6"  style="float: left" /></a><br/>
	You need to fill in your IP address for the Gemini in the Host Name block, in my case it is 192.168.0.147<br>
	You can get it from the hand controller by going to Menu-> Mount-> Network<br />
		<br />
		<span class="style14">Very Important - In Protocol Selection select FTP 
		and No Encryption</span></td>
	</tr>
	<tr>
		<td class="style6"><a href="gemini-images/FTP/WinSCP/4SetDirWinSCP.JPG"target="_blank">
	
	<img alt="" height="279" src="gemini-images/FTP/WinSCP/thumbnails/4SetDirWinSCP_small.JPG" width="400"  class="style6"  style="float: left" /></a><br/>
		Next click on the Directory under Environment. In the Local directory 
		put where you want the FTP files to rooted at.<br />
		In my case I use &quot;<a href="file:///C:/Gemini2">C:\Gemini2</a>&quot; as an 
		example<br />
		<br />
		After putting in the directory,<br />
		hit save. The following screen will come up.</td>
	<tr>
		<td class="style6">
			<a href="gemini-images/FTP/WinSCP/3LoginWinSCP.JPG"target="_blank">
			</a><br/>
			This is the saved sessions screen. You will be able to goto it in the 
			future and skip the above steps. <br />
			<br />
			Just click the &quot;login&quot; button</td>
		</tr>
	<tr>
		<td class="style6"><a href="gemini-images/FTP/WinSCP/5PasswordWinSCP.JPG"target="_blank">
	
	<img alt="" height="262" src="gemini-images/FTP/WinSCP/thumbnails/5PasswordWinSCP_small.JPG" width="400" class="style6" style="float: left" /></a><br/>
		Hit OK here<br />
	</td>
	</tr>
	</tr>
	<tr>
		<td class="style6"><a href="gemini-images/FTP/WinSCP/6InitDirWinSCP.JPG"target="_blank">
	
	<img alt="" height="304" src="gemini-images/FTP/WinSCP/thumbnails/6InitDirWinSCP_small.JPG" width="400" class="style6"style="float: left" /></a><br/>
		You can see from this screen that on the left it is showing my computer <img alt="" height="279" src="gemini-images/FTP/WinSCP/thumbnails/3LoginWinSCP_small.JPG" width="400" class="style6" style="float: left" />
		directory <a href="file:///C:/gemini2">C:\gemini2</a> <br />
		and on the right it is showing the contents of the micro SCcard in the 
		Gemini 2<br />
		<br />
		With the mouse over the left panel, Hit F7. This will bring up a Create 
		Folder window.
	</td>
	<tr>
		<td class="style6"><a href="gemini-images/FTP/WinSCP/F7.JPG"target="_blank">
	
	<img alt="" height="304" src="gemini-images/FTP/WinSCP/thumbnails/F7_small.jpg" width="400" class="style6"style="float: left" /></a><br/>
		Enter FTP, do not check any of the boxes.<br />
		<br />
		Hit OK<br />
		This will create a directory<br />
		called FTP<br />
		Double Click on FTP</td>
	</tr>
	</tr>
	<tr>
		<td class="style6"><a href="gemini-images/FTP/WinSCP/7CDFTPWinSCP.JPG"target="_blank">
	
	<img alt="" height="304" src="gemini-images/FTP/WinSCP/thumbnails/7CDFTPWinSCP_small.JPG" width="400" class="style6"style="float: left" /></a><br/>
		You should now have a window in the left panel that looks like this.</td>
	</tr>
	<tr>
		<td class="style6"><a href="gemini-images/FTP/WinSCP/8SelectFilesWinSCP.JPG"target="_blank">
	
	<img alt="" height="304" src="gemini-images/FTP/WinSCP/thumbnails/8SelectFilesWinSCP_small.JPG" width="400" class="style6"style="float: left" /></a><br/>
		High lite the catalogs, DE,EN,FR and Firmware directory in the right 
		panel.<br />
		Right Mouse
		Click on the high lighted directories and drag them to the left panel 
		and let them go.
	</td>
	</tr>
	<tr>
		<td class="style6"><a href="gemini-images/FTP/WinSCP/9OKtransferWinSCP.JPG"target="_blank">
	
	<img alt="" height="166" src="gemini-images/FTP/WinSCP/thumbnails/9OKtransferWinSCP_small.JPG" width="400" class="style6"style="float: left" /></a><br/>
		You will have a window like this pop up.&nbsp; Hit Copy.</td>
	</tr>
	<tr>
		<td class="style6"><a href="gemini-images/FTP/WinSCP/10transferinprogressWinSCP.JPG"target="_blank">
	
	<img alt="" height="216" src="gemini-images/FTP/WinSCP/thumbnails/10transferinprogressWinSCP_small.JPG" width="400" class="style6"style="float: left" /></a><br/>
		This is the copy progress window that will pop up.<br />
		Just let it finish.<br />
		<br />
		You have now backed up your micro SDcard to the FTP directory you created 
		above.</td>
	</tr>
	<tr>
		<td class="style6">
		<a href="gemini-images/FTP/WinSCP/backupofSDcard.JPG"target="_blank">
	
	<img alt="" height="304" src="gemini-images/FTP/WinSCP/thumbnails/backupofSDcard_small.jpg" width="400" class="style6"style="float: left" /></a><br/>
		You should now see your micro SDcard backup up in the left panel.<br />
		To get to the next window, we will move up in the left panel.<br />
		Do this by Double clicking on the top .. (double periods)<br />
		Now Double click on the HC directory.&nbsp; Move to the right panel and 
		double click on the HCFirmware directory.</td>
	</tr>
	<tr>
		<td class="style6"><a href="gemini-images/FTP/WinSCP/11CDHCupdateWinSCP.JPG"target="_blank">
	
	<img alt="" height="304" src="gemini-images/FTP/WinSCP/thumbnails/11CDHCupdateWinSCP_small.JPG" width="400" class="style6"style="float: left" /></a><br/>
		This should be somewhat like what your left panel would look like, if 
		you downloaded the gemhc.bin file to the HC directory like I did.&nbsp; 
		If you did not then you are going to have to browse with the left panel 
		until you find the gemhc.bin file.&nbsp; When you find it, double click 
		on it and drag it to the right panel.</td>
	</tr>
	<tr>
		<td class="style6"><a href="gemini-images/FTP/WinSCP/12TransferOKWinSCP.JPG"target="_blank">
	
	<img alt="" height="166" src="gemini-images/FTP/WinSCP/thumbnails/12TransferOKWinSCP_small.JPG" width="400" class="style6"style="float: left" /></a> 
		You should get this menu, select &quot;copy&quot;</td>
	</tr>
	<tr>
		<td class="style6"><a href="gemini-images/FTP/WinSCP/13TransferGemHCWinSCP.JPG"target="_blank">
    
    <img alt="" height="304" src="gemini-images/FTP/WinSCP/thumbnails/13TransferGemHCWinSCP_small.JPG" width="400" class="style6"style="float: left" /></a><br/>
		Your right panel should now look like this.<br />
		<br />
		Unplug the hand controller and the plug it back in.&nbsp; It should 
		start downloading the firmware, and then flash it.<br />
		When that has been done, if you click the REMOTE tab and the Refresh, 
		you will see that the Gemini 2 had erased the gemhc.bin file from the 
		right panel.&nbsp; You have updated your hand controller.</td></td>
	</tr>
</table>
</span>
</body>
</html>


<?php include("bottom.php"); ?>



