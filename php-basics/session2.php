<?php
  // you need to session_start at the top of every file where you want to access
  // session vars
  session_start();
  // will pull variables from sessionsuperglobal1.php if that page is accessed
  // first. Then those session variables will be assigned and accessible her
  // in session2.php when the a link in sessionsuperglobal1.php is clicked which 
  // will take users to this page.


?>

<html>
  <head></head>

  <body>
    <h3>Hello, <?php echo $_SESSION['username'] ?>!</h3>
    <p>Your age is: <?php echo $_SESSION['age'] ?></p>
    <p>Your favorite color is: <?php echo $_SESSION['favoriteColor'] ?></;>
  </body>

</html>