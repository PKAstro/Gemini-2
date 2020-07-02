<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php 

//Simple class for counting visits 
//Written by WebSaint 

class Teller { 
   function count() { 
   $countfile = file("alle.txt"); 
   $count = $countfile[0]; 
   $count= $count + 1; 
   $fp = fopen("alle.txt","w"); 
   $fw = fwrite($fp,$count); 
   fclose($fp); 
   echo $count; 
   } 
} 

$obj =& new Teller; 
$obj->count(); 

?>

<p>Number of guests visiting my site: <? include('alle.txt'); ?>.</p>

</body>

</html>
