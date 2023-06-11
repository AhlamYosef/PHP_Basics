<?php
// Write a PHP program to reverse any string. (Don't use "strrev" function)

$string = 'Hello World!';
$rev = '';
for($i = 1 ; $i <= strlen($string); $i++){
    $char = substr($string, -1 * $i ,1);
    $rev.=$char;
}
echo $rev;