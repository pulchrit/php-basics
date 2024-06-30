<?php

  // super globals can be accessed from global or local scope
  // $_POST always $_ for superglobal
  // globals only global scope
  // locals only local scope

  // example of super globals
  // server $_SERVER
  // request  $_REQUEST
  // get $_GET
  // post $_POST
  // sessions $_SESSIONS
  // cookies $_COOKIES

  // session - is a way of storing data across multiple web pages for a given user
  // stores a hash id on your computer that identifies who you are and waht you've done
  
  // start a session
  session_start(); // will create a unique hash to ID this session/user/data
  // assign session variables of username, age, and favoriteColor
  $_SESSION['username'] = 'melissa';
  $_SESSION['age'] = 48;
  $_SESSION['favoriteColor'] = 'olive green';


?>

<htmL>
  <head></head>
  <body>
    <a href="session2.php">Go to session 2 to learn about melissa</a> 
    <a href="session3.php">Go to session 3 to learn about ada and ezzie</a> 
    <a href="session4.php">Go to session 4 to destry the session</a>
  </body>
</html>
