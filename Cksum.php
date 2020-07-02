<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Pauls Checksum Calculator</title>


	<?php include("topv.php"); ?>


    <style type="text/css">
        #DoIt
        {
            width: 89px;
        }
        #Text1
        {
            width: 180px;
        }
        .style1
        {
            font-family: "Comic Sans MS";
            font-weight: bold;
        }
        .style2
        {
	font-size: small;
	color: #FFFF00;
}
    </style>
    <script language="javascript" type="text/javascript">
// <![CDATA[

        function DoIt_onclick() {
            var input = document.getElementById('inp');

            var bytes = input.value;
            var b = 0;
            bytesChecksum = 0;
            bytesCount = bytes.length;
            for (i = 0; i < bytesCount; i++) {
                b = bytes.charCodeAt(i);
                bytesChecksum = (bytesChecksum ^ b) & 0xFF;
            }

            var c1 = (bytesChecksum & 0x7f) + 0x40;
            var c2 = (bytesChecksum & 0xff) + 0x40;

            var output = document.getElementById('output');
            var output2 = document.getElementById('output2');
            var outputa = document.getElementById('outputa');
            var output2a = document.getElementById('output2a');
            output.value = String.fromCharCode(c1) + "   [0x" + c1.toString(16) + "]";
            output2.value = String.fromCharCode(c2) + "   [0x" + c2.toString(16) + "]";
            outputa.value = bytes + String.fromCharCode(c1) + "#";
            output2a.value = bytes + String.fromCharCode(c2) + "#";
        }


        function KeyDownHandler(event) {
            if (event.keyCode == 13) {
                event.returnValue = false;
                event.cancel = true;

                DoIt_onclick();
                
            }
        }


// ]]>
    </script>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />
</head>
<body onload="document.getElementById('inp').focus();" style="color: #FFFFFF; background-color: #000000">

    <p style="height: 25px; font-size: x-large;" class="style1">
        Gemini Native Command Checksum Calculator</p>
    <p style="height: 10px; " class="style2">
        by Paul Kanevsky, April 2012</p>
    <p style="height: 10px; font-size: x-small;">
        &nbsp;</p>
    <p style="height: 39px">
&nbsp;&nbsp;
        <input id="DoIt" title="Calculate" value="Calculate" onclick="return DoIt_onclick()" type="button">&nbsp;&nbsp;
        <input id="inp" onkeydown="KeyDownHandler(event)" type="text">&nbsp;&nbsp;for example &lt;130:</p>
    <p style="height: 39px">
&nbsp;&nbsp; Checksum Gemini-1:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="output" readonly="readonly" type="text"><input id="outputa" readonly="readonly" style="margin-left: 30px;" type="text"></p>

    <p style="height: 39px">
&nbsp;&nbsp; Checksum Gemini-2:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="output2" readonly="readonly" type="text"><input id="output2a" readonly="readonly" style="margin-left: 30px;" type="text"></p>



</body></html>


<?php include("bottom.php"); ?>

