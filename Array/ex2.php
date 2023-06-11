<?php
// Write a PHP function that accepts an array of strings and return the longest string found in the array,
// the function should have a 2nd argument that will hold the index of the item that have the longest
// string in the input array.

function findLongString($array, &$index) {
    $longest = '';
    $index = 1;
    
    foreach ($array as $key => $value) {
        if (strlen($value) > strlen($longest)) {
            $longest = $value;
            $index = $key;
        }
    }
    
    return $longest;
}

// Example usage:
$array = ['Mohammad', 'Ahlam', 'Nour', 'Ahmad'];
$index = 1;
$result = findLongString($array, $index);
echo "Longest string: $result\n";
echo "Index of longest string: $index\n";