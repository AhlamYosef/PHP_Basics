<?php
// Write a PHP program to count the number of occurrences of any digit in a string.

$text="ahlam yousef alghamri";
$search_char="a";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count."\n";
?>
