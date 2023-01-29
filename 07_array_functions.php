<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'orange', 'pear'];

//Get length
// echo count($fruits);

//search array
// var_dump(in_array('apple', $fruits));

//add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');

//add to front
// array_unshift($fruits, 'mango');

//remove from array
// array_pop($fruits); //from the end
// array_shift($fruits); //from the start
// unset($fruits[2]); //remove from specific index, also removes the index
$chunked_array = array_chunk($fruits, 2); //split array into chunks of 2
// print_r($chunked_array);

// print_r($fruits);

//array concatination
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
// print_r($arr3);
//also we can use ...(spread) operator in the merging
$arr4 = [...$arr1, ...$arr2];
// print_r($arr4);

//array combine
$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];
$c = array_combine($a, $b); //take a and b, and combine them (make key value pairs)
// print_r($c);

//array of keys from a current array
$keys = array_keys($c);
// print_r($keys);

// flip array
$flipped = array_flip($c);
// print_r($flipped); //flip the keys and values of the array

//range of numbers
$numbers = range(1, 20);
// print_r($numbers);

//array map function
$newNumbers = array_map(function($number){
  return "Number {$number}";
}, $numbers);
// print_r($newNumbers);

//array filter function
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
print_r($lessThan10);

?>