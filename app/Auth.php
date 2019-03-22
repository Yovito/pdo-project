<?php

require_once 'app/db/conn.php';

class auth extends connection {

  protected static $cnx;

  private static function getConnection(){
    self::$cnx = connection::connect();
  }

  private static function unplug(){
    self::$cnx == null;
  }

  public static function validate($params){

    $query = "SELECT * FROM cp_user
              WHERE user = :user AND password = :password";

    self::getConnection();

    $rs = self::$cnx->prepare($query);
    $rs->bindValue(":user", $params->getUser());
    $rs->bindValue(":password", $params->getPassword());
    $rs->execute();

    if($rs->rowCount()>0){
      $data = $rs->fetch();
      if ($data['user'] == $params->getUser() && $data['password'] == $params->getPassword())
        return true;
      else return false;
    }else return false;

  }

}
