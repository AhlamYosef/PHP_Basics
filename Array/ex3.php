<?php
// Write a function that accepts 2 arrays and return a new array that holds the value of multiplying each
// item in the first array by the corresponding item in the second array.

function Arrays($array1, $array2) {
    $result = [];
    
    foreach ($array1 as $key => $value) {
        if (isset($array2[$key])) {
            $result[] = $value * $array2[$key];
        }
    }
    
    return $result;
}

// Example usage:
$array1 = [1, 2, 3, 4, 5];
$array2 = [1, 2, 3, 4, 5];
$result = Arrays($array1, $array2);
print_r($result);
