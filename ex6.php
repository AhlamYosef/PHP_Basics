<?php

// <!-- PHP program to find the larger value from two positive integer values that are 
// in the range 20..30 inclusive, or return 0 if neither is in that range: -->

function test($x, $y) 
{
   if ($x >= 20 && $x <= 30 && $y >= 20 && $y <= 30)
            {
                if ($x >= $y)
                {
                    return $x;
                }
                else
                {
                    return $y;
                }
            }
            else if ($x >= 20 && $y <= 30)
            {
                return $x;
            }
            else if ($y >= 20 && $y <= 30)
            {
                return $y;
            }
            else
            {
                return 0;
            }
     }


echo test(78, 95)."\n";
echo test(20, 30)."\n";
echo test(21, 25)."\n";