<?php

  // you always have start the session
  session_start();
  // unset is how you remove all data for saved variables
  session_unset();
  // destroy is how you end a session
  session_destroy();

  echo 'session has been destroyed.';

?>