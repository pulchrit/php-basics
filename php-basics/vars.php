<?php

  // declar with $, then add any character but you can't use a number
  // or any symbol except the _
  $goodName;
  $_goodName;
  // $34 bad name, will not work
  // $*bad bad name, will not work

  // string var, can use "" or ''
  // vars are case sensitive, so $num is different than $NUM
  $username = 'melissa';
  $num = 14;
  // echo prints to screen
  echo $username; 
  echo '<br>';
  echo $num;

  // single v. double quotes
  $str = "normal string";
  
  echo '$str'; // single quotes prints the strin $str, not the value of the variable

  // this is called varialbe interpolation
  echo "here is my string's value $str"; // double quotes prints the value of the variable, i.e., normal string
?>