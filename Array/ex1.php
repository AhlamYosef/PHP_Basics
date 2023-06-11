<?php 
// Write a PHP function that accepts an array of integers and return a new array after removing odd
// numbers.


function even($array) {
    return array_filter($array, function ($value) {
        return $value % 2 === 0;
            });
}

// Example usage:
$array = [56,5,8,22,5,9,4,88,6];
$result = even($array);
print_r($result);