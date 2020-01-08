<?php
//creating the function to look thru the array and print the elements.
function printArr(array $x){
    for($i = 0; $i < sizeof($x); $i++){
        echo "<P>$x[$i]</p></br>";
    }
}

function largest(array $x){
    return max($x);
}