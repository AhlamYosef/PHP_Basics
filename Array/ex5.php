<?php
// Write a function to check whether a number is prime or not.

function isPrime($number) {
    if ($number < 2) {
        return false; 
    }
    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false; 
        }
    }
    
    return true; 
}

// Example usage:
$number = 3;
$result = isPrime($number);

if ($result) {
    echo "$number is a prime number.\n";
} else {
    echo "$number is not a prime number.\n";
}
