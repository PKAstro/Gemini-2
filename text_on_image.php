<?php
/*For your general edification: The following drop-in function will place a block of fully justified text onto a GD image. It is a little CPU heavy, so I suggest caching the output rather than doing it on-the-fly. 

Arguments: 

$image - the GD handle of the target canvas 
$size - text size 
$angle - slope of text (does not work very well), leave at 0 for horizontal text 
$left - no. of pixels from left to start block 
$top - no. of pixels from top to start block 
$color - handle for colour (imagecolorallocate result) 
$font - path to .ttf font 
$text - the text to wrap and justify 
$max_width - the width of the text block within which the text should be wrapped and fully justified 
$minspacing - the minimum number of pixels between words 
$linespacing - a multiplier of line height (1 for normal spacing; 1.5 for line-and-a-half etc.)

eg.
*/
$image = ImageCreateFromJPEG( "sample.jpg" );
$cor = imagecolorallocate($image, 0, 0, 0);
$font = 'arial.ttf';
$a = imagettftextjustified($image, 20, 0, 50, 50, $color, $font, "Shree", 500, $minspacing=3,$linespacing=1);
header('Content-type: image/jpeg');
imagejpeg($image,NULL,100);

function imagettftextjustified(&$image, $size, $angle, $left, $top, $color, $font, $text, $max_width, $minspacing=3,$linespacing=1)
{
$wordwidth = array();
$linewidth = array();
$linewordcount = array();
$largest_line_height = 0;
$lineno=0;
$words=explode(" ",$text);
$wln=0;
$linewidth[$lineno]=0;
$linewordcount[$lineno]=0;
foreach ($words as $word)
{
$dimensions = imagettfbbox($size, $angle, $font, $word);
$line_width = $dimensions[2] - $dimensions[0];
$line_height = $dimensions[1] - $dimensions[7];
if ($line_height>$largest_line_height) $largest_line_height=$line_height;
if (($linewidth[$lineno]+$line_width+$minspacing)>$max_width)
{
$lineno++;
$linewidth[$lineno]=0;
$linewordcount[$lineno]=0;
$wln=0;
}
$linewidth[$lineno]+=$line_width+$minspacing;
$wordwidth[$lineno][$wln]=$line_width;
$wordtext[$lineno][$wln]=$word;
$linewordcount[$lineno]++;
$wln++;
}
for ($ln=0;$ln<=$lineno;$ln++)
{
$slack=$max_width-$linewidth[$ln];
if (($linewordcount[$ln]>1)&&($ln!=$lineno)) $spacing=($slack/($linewordcount[$ln]-1));
else $spacing=$minspacing;
$x=0;
for ($w=0;$w<$linewordcount[$ln];$w++)
{
imagettftext($image, $size, $angle, $left + intval($x), $top + $largest_line_height + ($largest_line_height * $ln * $linespacing), $color, $font, $wordtext[$ln][$w]);
$x+=$wordwidth[$ln][$w]+$spacing+$minspacing;
}
}
return true;
}