<?php
// Write a PHP program to return the sum of digits of an integer number.

function sum_of_digits($my_num){
    $sum = 0;
    for ($i = 0; $i < strlen($my_num); $i++){
        $sum += $my_num[$i];
    }
    return $sum;
}
$my_num = "125";
print_r("The sum of digits is ");
echo sum_of_digits($my_num);
?>