<?php
/**
 * Name: Rajpreet Dhaliwal
 * Date: 1-6-20
 * URl: https://github.com/rdhaliwal6/pp1.git
 * Pair Program 1
 */

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

include "functions.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
<h1>Pair Program 1</h1>
<?php
//creating the number array
$number = array(7,9,8,9,8,8,6);

//prints the results.
echo printArr($number);

//creating array to test largest
$number2 = array(0,1,2,3,4,5,6,7,8,9);

//print largest
echo "largest is";
echo largest($number2);
echo "<br>";

//remove dups
echo "Dups removed from number";
echo printArr(removeDups($number));


//distribution
echo "Distribution";
print_r(distribution($number));
?>

</body>
</html>
