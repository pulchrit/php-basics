<?php
  // !! you are getting the date and time from the server you are using, not your
  // local computer

  // date value
  // d - represents the day of teh month (01 to 31)
  // m - represent the month (01 to 12)
  // y - represents the year (in four digits) 
  // >>l (lowercase L) - represents the day of the week (monday, etc.)
  echo date('d'); 
  echo '<br>';
  echo date('m/d/y');
  echo '<br>';

  // time values
  // H - 24 hour format (00 to 23)
  // h - 12 hour format (01 to 12), with leading zeros
  // i - Minutes (01 to 59), with leading zeros
  // s - Seconds (01 to 59), with leading zeros
  // a - lowercase ante meridian (am) and post meridian (pm)
  echo date_default_timezone_get(); // get your default server's timezone = UTC
  echo '<br>';
  echo "UTC time: " . date('ha');
  echo '<br>';
  echo date_default_timezone_set('Africa/Cairo'); // set a new timezone, (returns 1 for success)
  echo '<br>';
  echo date_default_timezone_get();//  echo it out and it will be the one you set
  echo '<br>';
  echo date('Ha'); // 24 hour, a prints am or pm
  echo '<br>';
  echo date('ha');
  echo date_default_timezone_set('America/Los_Angeles');
  echo '<br>';
  echo date('hia');
?>
