<?php
  session_start();
  $dbHost = getenv('dbHost');
  $dbUser = getenv('dbUser');
  $dbPassword = getenv('dbPassword');

  function connect() {
    return new PDO("mysql:host=$dbHost ;dbname=shop;charset=utf8;", $dbUser, $dbPassword);
  }

  function img_tag($code) {
    if (file_exists("images/$code.jpg")) $name = $code;
    else $name = 'noimage';
    return '<img src="images/' . $name . '.jpg" height="100" alt="">';
  }
?>
