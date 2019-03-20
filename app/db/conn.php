<?php
include 'conf.php';

class connection {
  public static function connect(){
    global $server, $dbname, $user, $password;
    try {
      $cn = new PDO(
        "mysql:host=$server;
        dbname=$dbname",
        "$user",
        "$password"
      );
      $cn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
      );//echo "OK";
      return $cn;
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}

//connection::connect();
