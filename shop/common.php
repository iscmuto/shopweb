<?php
  session_start();

  function connect() {
    return new PDO("mysql:dbname=shop;charset=utf8;", "root");
  }

  function img_tag($code) {
    if (file_exists("images/$code.jpg")) $name = $code;
    else $name = 'noimage';
    return '<img src="images/' . $name . '.jpg" height="100" alt="">';
  }
?>