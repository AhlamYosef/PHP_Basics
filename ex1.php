<?php
// PHP program to check whether the first two characters and last two characters of a given string are the same:

$string = 'My name is Samy';

$first = substr($string,0,2);
$last = substr($string,-2,2);

echo '<pre>';
echo "Farst 2 chars are ($first)\n";
echo "last 2 chars are ($last)\n";

if (strtolower($first) == strtolower($last)){
    echo "True";
}
