<?php
// Write a function to calculate the factorial of a number (a non-negative integer). The function accepts
// the number as an argument.

function factorial($n)
{
  if($n ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $n * factorial($n-1);
    }
	}
$num = 4;
$result=factorial($num);
echo "Factorial of :$num => $result\n";
?>