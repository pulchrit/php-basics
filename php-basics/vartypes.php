<?php

  // variables can have different type of values
  // integeres 1, 200, can be postiive or negative
  // floats 1.34, 4.14, can be pos or neg
  // booleans true, false
  // strings "something that is mostly words"

  // integers
  $num = 5;
  // Will print var type and value, => int(5)
  var_dump($num);
  // to get type only, you mush use echo is you want to print to screen, => integer
  echo gettype($num);

  // floats
  $float = 3.14;
  // Will print var type and value, => float(3.14)
  var_dump($float);
  // to get type only, you mush use echo is you want to print to screen, => double
  echo gettype($float);

  // booleans
  $bool = true;
  // Will print var type and value, => bool(true)
  var_dump($bool);
  // to get type only, you mush use echo is you want to print to screen, => boolean
  echo gettype($bool);

  // string, can use single or double quotes, can't contain $ without escape char
  $str = "this is 1  string";
  $strEscape = "this is a \$ string with escape on the \$";
  // Will print var type and value, => string(39) the number in parens is the 
  // number of characters including spaces.
  var_dump($str);
  var_dump($strEscape);

  // null
  $var = null; // can be all lowercase 
  $var2 = NULL; // can be ALL CAPS

  var_dump($var); // => NULL
  var_dump($var2); // => NULL

?>