<?php

  // Conditionals
  // if elseif else
  

  // if elseif else
  $age = 12;

  if ($age == 12) {
    echo "you are 12!";
  } elseif ($age < 12 ) {
    echo 'you are very young';
  } else {
    echo 'you are potentially not so young, or at least you are older than 12';
  }

  echo '<br>';

  // switch
  $favoriteColor = 'blue';

  switch ($favoriteColor) {
    case "red":
      echo "your fav color is red, red, red";
      break;
    case 'olive green': 
      echo "that is my favorite color too!";
      break;
    case 'blue':
      echo 'your fav color is blue, blue, blue';
      break;
    default:
      echo "your favorite color is $favoriteColor";
  }
?>