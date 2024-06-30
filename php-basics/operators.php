<?php

  // addition
  echo 8 + 8;
  echo '<br>';
  // subtration
  echo 8 - 8;
  echo '<br>';

  // multiplication
  echo 16 * 2;
  echo '<br>';

  // division
  echo 16.4 / 2;
  echo '<br>';

  // modulus
  echo 9 % 3;

  // Assignment operators, =, +=, -+, *=, /=

  // equal
  $var = 99;

  // initial value
  $x = 2;

  $x +=2;
   echo "<br> $x"; // 4

  $x -= 1;
  echo "<br> $x"; // 3

  $x *= 2;
  echo "<br> $x"; // 6

  $x /= 2;
  echo "<br> $x"; // 3

  // Comparison operators --, ===, !=, > , <, >=, <=
  // == just interpolated val so 14 will equal '14'
  // === string equal so must match type and value
  $x = 10;
  $y = 14;
  $z = 14;
  $w = '14';
  $str1 = 'house';
  $str2 = 'house';

  echo '$x == $y';
  var_dump($x == $y);
  echo '<br>';

  echo '$x === $y';
  var_dump($x === $y);
  echo '<br>';

  echo '$w == $y';
  var_dump($w == $y);
  echo '<br>';

  echo '$w === $y';
  var_dump($w === $y);
  echo '<br>';

  echo '$str1 == $str2';
  var_dump($str1 == $str2);
  echo '<br>';

  echo '$str1 === $str2';
  var_dump($str1 === $str2);
  echo '<br>';

  echo '$str1 === $x';
  var_dump($str1 === $x);
  echo '<br>';

  echo '$str1 != $z';
  var_dump($str1 != $z);
  echo '<br>';

  /* Increment and decrement operators 
  ++$x 
  $x++
  --$x
  $x-- will return the value and then decrement it
  */

  echo '<br><br>';
  // ++$x
  $x = 2;
  echo '++$x';
  var_dump(++$x); // 3

  // $x++
  $x = 2;
  echo '$x++';
  var_dump($x++); // 2, returns the number and then increments it
  echo '<br>';
  echo $x; // so this return 3 because the value was incremented after we returned it!

  // --$x
  $x = 2;
  echo '--$x';
  var_dump(--$x); // 1

  // $x--
  $x = 2;
  echo '$x--';
  var_dump($x--); // 2, returns the number and then decrements it
  echo '<br>';
  echo $x; // so this returns 1 because the value was decremented after we returned it!

?>