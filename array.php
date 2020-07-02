<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
function data($input)
{
$degrees =23.92;
$minutes =59;
$seconds =30;
$Rminutes =58;

    $out[degrees]  =  $degrees;
    $out[minutes] = $minutes;
    $out[seconds]  = $seconds;
    $out[Rminutes]  = $Rminutes;
    $out[1]  =  $degrees;
    $out[2] = $minutes;
    $out[3]  = $seconds;
    $out[4]  = $Rminutes;
    return $out;
}

$data = data(45.263);

//echo $data['a'];
//echo $data['b'];
//echo $data['c'];
//echo $data['d'];

echo $data[Rminutes];

//test_array(0);
//var_dump($array);
?>

</body>

</html>
