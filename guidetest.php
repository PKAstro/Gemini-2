<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<style type="text/css">
.auto-style2 {
	border-style: solid;
	border-width: 2px;
}
</style>
</head>

<body style="color: #FFFFFF; background-color: #000000">

<body>



<p class="style7">
<table  align="center" style="width:900px">
<!-- ================================================================================= -->
	<tr>
		<td class="style6">
		The Yellow trace is the sync signal from the microprocess (a ZX24x) that I used to generate the guide pulses.<br />
		The Green/Blue signal is from TP8, trigger pulse into the DEC servo IC.<br />
		The Purple/Pink trace is from TP7 (Direction signal)<br />
		YP stands for Y positive, and YN stands for Y negative guider inputs<br />
		<br />
		TVC Setting 0  
		Guide Input pulses 50ms Wide</td></tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102486.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102486_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2486   - YP pushed  Yellow is Sync from Zbasic chip 50ms pulse, Blue is TP8, Purple TP7</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102487.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102487_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2487  - YP pushed again</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102488.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102488_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2488 - YN pushed - notice no change in TP7, Direction stayed the same
		</td>
	</tr>
	<tr>
		<td class="style6">
		<hr /><br />
		TVC Setting 0 Guide Input pulses 80ms wide</td></tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102489.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102489_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2489 - YP pushed   no change in direction</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102490.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102490_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2490 YN pushed no change in direction
</td>
	</tr>
	<tr>
		<td class="style6">
		<hr /><br />
		TVC Setting 1- Guide Input pulses 50ms wide</td></tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102491.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102491_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2491 YP pushed - note change in direction Purple trace</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102492.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102492_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2492 YN pushed - note change in direction - however no motor movement
</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102493.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102493_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2493 YN pushed again - Notice - pulse not generated for TP8 - motor did move</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102494.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102494_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2494 YN pushed again - motor did move</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102495.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102495_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2495 YP pushed - motor did not move</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102496.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102496_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2496 YP pushed again - motor did not move</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102497.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102497_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2497 YP pushed again - still no motor movement</td>
	</tr>
	<tr>
		<td class="style6">
		<hr /><br />
		TVC Setting 1  - Guide Input pulses 80ms wide</td></tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102498.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102498_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2498 YP pushed - motor did move
</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102499.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102499_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2499 YN pushed - motor did not move
</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102500.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102500_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2500 YN pushed - motor did not move
</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102501.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102501_small.JPG" width="750" class="auto-style2" /></a>
		<br />Pictures 2501 YN Pushed - Motor did not move
</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102502.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102502_small.JPG" width="750" class="auto-style2" /></a>
		<br />Pictures 2502 YN Pushed - Motor did not move</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102503.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102503_small.JPG" width="750" class="auto-style2" /></a>
		<br />Pictures 2503 YN Pushed - Motor did not move</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102504.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102504_small.JPG" width="750" class="auto-style2" /></a>
		<br />Pictures 2504 YN Pushed - Motor moved 
</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102505.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102505_small.JPG" width="750" class="auto-style2" /></a>
		<br />Pictures 2505 YP - Motor did not move. 
</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102506.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102506_small.JPG" width="750" class="auto-style2" /></a>
		<br />Pictures 2506 YP - Motor did not move. </td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102507.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102507_small.JPG" width="750" class="auto-style2" /></a>
		<br />Pictures 2507 YP  - Motor did not move. </td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102508.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102508_small.JPG" width="750" class="auto-style2" /></a>
		<br />Pictures 2508 YP - Motor did not move. After 5 more pushes of YP motor moved. <br /> So it took 9 pulses to get a motor movement.</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102509.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102509_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2509 - YP pushed - motor moved
</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102510.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102510_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2510 - YP pushed - motor moved
</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102511.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102511_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2511 - YN pushed - motor did not move
</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102512.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102512_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2512 YN Pushed - motor did not move
</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102513.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102513_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2513 YN Pushed - motor did not move</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102514.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102514_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2514 -YN Pushed - motor moved
</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<hr />
		<a href="gemini-images/guidetest/PC102515.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102515_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2515 is the Dec motor and disk.  7.5 inched in Diameter with 180 divisions.
</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/guidetest/PC102516.JPG" target="_blank">
		<img alt="" height="562" src="gemini-images/guidetest/thumbnails/PC102516_small.JPG" width="750" class="auto-style2" /></a>
		<br />Picture 2516 is what is generating the pulses.  This is a Zbasic ZX24x microprocessor, using the Classic HC as the input device.  This 				microprocessor is 3.3 volt device.  I have 5 total outputs, 4 to the guider input of the Gemini, and 1 to sync the oscope on.
</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



