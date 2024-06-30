<?php

  // while and for

  // while
  // intitialization
  $i = 0;
  
  // the condition
  while ($i <= 10) {
    // the increment or decrement
    echo $i++; // returns $i and THEN increments it, 0, 1, 2...
    echo '<br>';
  }

  // for
  for ($i = 0; $i <= 10; $i++) {
    echo "value is $i <br>";
  }

?>