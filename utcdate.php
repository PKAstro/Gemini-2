#!/usr/bin/php 

  <P>Here's the UTC date/time you downloaded this page :</P>
  <P> 
<?php
  echo "UTC date/time: " . "<B>" . gmdate("M d, Y H:i:s") . "</B><BR>";
  echo "Gemini UTC display (yymm.dd: hh.mm.ss): <B>" . gmdate("ym.d H:i:s") . "</B>";
?>
  </P>
