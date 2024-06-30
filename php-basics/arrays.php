<?php

  // arrays, 3 types: indexed, associative, multi-dimensional

  // indexed
  // create using array()
  $users = array("andrew", "melissa", "ada", "ezzie");

  // or create literally
  $users2 = ['sam', 'doc'];

  echo $users[0]; // 0 indexed
  echo "<br> $users2[1]";

  // count number of elements in an array
  echo '<br>';
  echo count($users);
  echo '<br>';

  // associative arrays, key/val pairs
  $age = ['andrew' => 44, 'melissa' => 48, 'ada' => '10', 'ezzie' => 10];

  echo $age['ezzie'];
  echo '<br>';

  foreach ($age as $key => $value) {
    echo "name is $key and age is $value <br>";
  } 

  // multidimensional arrays, array of arrays
  $multi = array(
    array('php', 'java', 'javascript'),
    array('laravel', 'symfony', 'nodejs'),
    array('mysql', 'mongodb', 'couchdb'),
  );

  echo $multi[1][2];

?>