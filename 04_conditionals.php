<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 2;

// if($age>=18){
//   echo 'You are old enough to vote';
// } else {
//   echo 'Sorry, you are not old enough to vote';
// }

$t = date("H");

// if($t < 12){
//   echo 'Good Morning';
// } elseif($t < 17) {
//   echo 'Good Afternoon';
// }
//  else {
//   echo 'Good Evening';
// }

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

$posts = ['First Post'];

// $first_post = !empty($posts) ? $posts[0] : 'No Posts';
// echo $first_post;


/* -------- Switch Statements ------- */

$fav_color = 'red';

switch($fav_color) {
  case 'red':
    echo 'Your favourite color is red';
    break;
  case 'blue':
    echo 'Your favourite color is blue';
    break;
  default:
    echo 'Your favourite color is not red or blue';
}

?>