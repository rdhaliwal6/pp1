<?php
//creating the function to look thru the array and print the elements.
function printArr(array $x){
    foreach($x as $value){
        echo "<p>$value</p>";
    }
}

//creating the largest function.
function largest(array $x){
    return max($x);
}

//creating the removeDups function.
function removeDups(array $x){
    $x2 = array_unique($x);
    return $x2;
}

//creating distribution function
function distribution(array $x){
    $x2 = array_count_values($x);
    ksort($x2);
    return $x2;
}