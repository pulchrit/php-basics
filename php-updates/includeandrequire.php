<?php
  // use require or include to bring in utilities, for example
  echo "hello from includeandrequire.php";
  echo '<br>';
  // if require can't find file.php, it will kill this entire php script, so the
  // code that follows the require will not be executed
  require "file.php"; // will return from file.php here
  echo '<br>';
  echo 3+11;
  echo '<br>';

  // include, on the other hand, will try to include the file and if the file is 
  // not found, it will move on and finish executing the rest of the code in this file
  include 'files.php';
  echo 'this runs after the files.php file is NOT found';
  echo '<br>';

  require 'files.php'; // there is no files.php file
  echo 'this will NOT run becaue when require fails to find the file, it kills the rest of the script.';
?>