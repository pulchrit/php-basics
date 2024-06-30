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

  // get - get params off of a url by param name
  // php code has been moved to get.php
?>

<htmL>
  <head></head>
  <body>
     <!-- simple link with href that include a lang param -->
      <!-- this will open the get file and solely show the result of the php in that get file -->
    <a href="get.php?lang=php&company=udemy">get link</a>

  </body>

</html>
