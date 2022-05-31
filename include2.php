<?php
// (A) DATABASE SETTINGS - CHANGE TO YOUR OWN!
define("DB_HOST", "localhost");
define("DB_NAME", "id18700440_vislogistics");
define("DB_CHARSET", "utf8");
define("DB_USER", "id18700440_vlogistics");
define("DB_PASSWORD", "QVWrJ0g*Q1??CtSJ");

// (B) CONNECT TO DATABASE
try {
  $con = new PDO(
    "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
    DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }
?>