<?php
$boolean = true; // true or TRUE
$boolen = FALSE; // false or FALSE

$int = 12; // common int
$int2 = -12; // common int
$int3 = 012; // return 0 ( when you put 0 at the front is mean a octal)
$int4 = 0x0F; // return 15(is a hexadec)
$int5 = 0b0101; // return 5

$float = 1.234;
$float2 = 1.2e3; // 1.2 * 10^3
$float3 = 7E-10; // 7 * 10^-10

// delete variable
$delete = "this";
unset($delete);

echo $float3;

$x = 20;
$y = 40;
$x = $y;
$z = &$y; // reference to location of y variable
$z = 80; // change value of z variable, change value of y variable too
