<?php
  $dbHost = getenv('dbHost');
  $dbUser = getenv('dbUser');
  $dbPassword = getenv('dbPassword');

  function connect() {
    global $dbHost, $dbUser, $dbPassword;
    return new PDO("mysql:host=$dbHost;dbname=shop;charset=utf8;", $dbUser, $dbPassword);
  }

  function img_tag($code) {
    if (file_exists("../images/$code.jpg")) $name = $code;
    else $name = 'noimage';
    return '<img src="../images/' . $name . '.jpg" alt="">';
  }
?>
