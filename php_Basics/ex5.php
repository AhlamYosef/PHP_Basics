<?php
// PHP program to check which number is nearest to the value 100 among two given integers.
//  Return 0 if the two numbers are equal:

function test($x, $y) 
{
    $n = 100;
    $val = abs($x - $n);
    $val2 = abs($y - $n);
    return $val == $val2 ? 0 : ($val < $val2 ? $x : $y);
}
    
echo test(78, 95)."\n";
echo test(95, 95)."\n";