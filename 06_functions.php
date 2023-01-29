<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function registerUser($email) {
  echo $email . ' user registered';
}

// registerUser('brad@gmail.com');

function sum($n1, $n2){
  return $n1 + $n2;
}

// echo sum(5, 5);


//anonymous functions
$substract = function ($n1, $n2) {
  return $n1 - $n2;
};

// echo $substract(10, 5);
//OR
$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(12, 5);

?>