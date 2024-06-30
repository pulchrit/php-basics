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

  // post - will get data from the form
  // check to see if a form's post superglobal is set on the page
  // $_POST contains an associative array of the input names!
  if (isset($_POST['submit'])) {
    // get data from specific inputs by name
    $username = $_POST['username'];
    $email = $_POST['email'];
    echo "my username is: $username and my email is: $email";
  }
?>

<htmL>
  <head></head>
  <body>
    <form method="POST" action="superglobals.php">
      <label for="username">User name:</label>
      <input type="text" name="username" id="username">
      <label for="email">Email:</label>
      <input type="text" name="email" >
      <input type="submit" name="submit" >
    </form>

</body>

</html>
