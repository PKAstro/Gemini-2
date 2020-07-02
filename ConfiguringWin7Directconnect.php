<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>A wireless and a hardware</title>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />
</head>

<body>
&nbsp;A wireless and a hardware (uses an Ethernet cable)
<p>&nbsp;</p>
The IP address that you are describing as DHCP is probably being assigned by your Router to
the wireless connection.  
<p>&nbsp;</p>
This is not the IP address of the hardware port.
<p>&nbsp;</p>
You are going to have to assign the IP address of the hardware port yourself.  
<p>&nbsp;</p>
The Gemini 2 cannot
do that for the computer.  
<p>&nbsp;</p>
It takes a DHCP server such as a router to assign a DHCP ip address.
<p>&nbsp;</p>
The Gemini, and your Laptop do not have a DHCP server in them.
<p>&nbsp;</p>
Now in the Gemini, unclick use DHCP.  
<p>&nbsp;</p>
You want the Gemini to use 192.168.0.111 which it will if
it does not find an ip server to give it an ip address.  (normally a router would do this)
(also most devices connecting to a router hardware lines do not need to provide a password, only when
connecting wireless do you need to do this.)
<p>&nbsp;</p>
Now in windows 7 you will need to bring up the you network connections.
<p>&nbsp;</p>
This is normally under control panel, Network and Internet, Network connections.
<p>&nbsp;</p>
You can get to this by right clicking the internet screen in the lower right of the taskbar and selecting
<p>&nbsp;</p>
Open network and sharing center.  
<p>&nbsp;</p>
Now click on the Change adapter setting.
<p>&nbsp;</p>
When you do this, you should see 2 peace&#39;s of network hardware, a Local Area Connection and
Wireless Network connection. 
<p>&nbsp;</p>
Select the Local Area Connection (this is the wired connection)
Select properties.
<p>&nbsp;</p>
On the popup high light Interner protocal Version 4
Select properties
Check Use the following IP address.
<p>&nbsp;</p>
Put in an ip address of 192.168.0.110 ( needs to be between 192.168.0.1 and 192.168.0.255, but not 192.168.0.111)
Put in an subnet mask of 255.255.255.0
Put in an Default gateway of 192.168.0.1
Click ok, and close all windows.
<p>&nbsp;</p>
Turn off you wireless adapter.  Usually a switch or function key to do this.
<p>&nbsp;</p>
Now you should be able to connect to the Gemini by
typing 192.168.0.111


</body>

</html>
