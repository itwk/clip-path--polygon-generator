<?php
//based on a stackOverFlow question
//https://stackoverflow.com/questions/61157568/create-clip-path-wave-css-edges

$width_px = 1000;
$height_px = 200;
$offset = 100;
$amplitude =30;
$frequency = 1.3;
$units = $frequency * $width_px / 100 ;

$clipPathString = 'clip-path: polygon(100% 0%, 0% 0% ';  // for top
//$clipPathString = 'clip-path: polygon(100% 100%, 0% 100% '; // for bottom

for ($i=0; $i<=100; $i++){
    $val = $offset+$amplitude*cos($i/$units);
    $val = round ($val,1)/$height_px*100;
    $clipPathString .= ', '.$i.'% '.$val.'%';
}
$clipPathString .= ');';

echo $clipPathString;

echo '<br><br><br>';

$html_element = '<div style="width:2000px;height:400px; '
    .'background-color:blue;'.$clipPathString.'"><div>';

echo $html_element;

