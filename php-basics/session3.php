<?php
  // modify session variables
  // always must start the session to access vars
  session_start();

  // just overwrite the vars to change them
  $_SESSION['username'] = 'ada & ezzie';
  $_SESSION['age'] = 10;
  $_SESSION['favoriteColor'] = 'black, sometimes';

  // Looks like you can't use string interpolation with "" when calling $_SESSION
  // You must use concatentation with .
  echo "Hi, " . $_SESSION['username'] . "! Your ages are: " . $_SESSION['age'] . "and your favorite color is: " . $_SESSION['favoriteColor'];

?>