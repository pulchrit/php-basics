<?php

  // a constant is like a variable, but 
  // a constant cannot be changed
  // a constant can be acces by local or global scope
  // by convention use ALL CAPS
  // define() takes 3 args, the name of the constant, the value of the constant,
  // and whether the constant name is case insensitive which defaults to false 
  // (so constants are by default case sensitive!)
  // name can only start with alph characters or _
  define("CONSTANT_ONE", "this is a constant", false);

  echo CONSTANT_ONE;

  // types of comments
  # this is a comment
  // this is a single line comment
  /*
   this is a 
   multiline 
   comment
  */

?>
