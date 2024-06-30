<?php
 // php code that uses GET to pull the lang param off of the href url used in 
 // the <a> link in getsuperglobal.php
  if (isset($_GET['lang'] AND isset($_GET['company']))) {
    $getLang = $_GET['lang'];
    $getCompany = $_GET['company'];
    echo "the lang is: $getLang and the company is $getCompany";
  }

?>