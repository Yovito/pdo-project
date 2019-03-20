<?php

include 'app/db/conn.php';
include 'app/class.user.php';

class userDAO extends connection {

    protected static $cnx;

    private static function getConnection(){
      self::$cnx = connection::connect();
    }

    private static function unplug(){
      self::$cnx = null;
    }

    public static function login($user){

      // var_dump("USER-DAO ---> ");
      // var_dump($user);

      $query = "SELECT * FROM cp_user
      WHERE user = :user AND password = :password";

      self::getConnection();

      $res = self::$cnx->prepare($query);
      $res->bindValue(":user", $user->getUser());
      $res->bindValue(":password", $user->getPassword());

      $res->execute();

      if ($res->rowCount() > 0) {
        $rows = $res->fetch();
        if ($rows["user"] == $user->getUser()
        && $rows["password"] == $user->getPassword()) {
          return true;
        }
      }
    return false;
    }

    public static function getUser($user){

        $query = "SELECT id,name,email,user,category,reg_fec FROM cp_user WHERE user = :user AND password = :password";

        self::getConnection();

        $res = self::$cnx->prepare($query);

        $res->bindValue(":user", $user->getUser());
        $res->bindValue(":password", $user->getPassword());

        $res->execute();

        $rows = $res->fetch();

        $user = new user();
        $user->setId($rows["id"]);
        $user->setName($rows["name"]);
        $user->setUser($rows["user"]);
        $user->setEmail($rows["email"]);
        $user->setCategory($rows["category"]);
        $user->setReg_fec($rows["reg_fec"]);

        return $user;
    }

    /**
     * Metodo que sirve para registrar usuarios
     *
     * @param      object         $user
     * @return     boolean
     */
    public static function regUser($user){

        $query = "INSERT INTO cp_user (name,email,user,password,category)
        VALUES (:name,:email,:user,:password,:category)";

        self::getConnection();

        $res = self::$cnx->prepare($query);

        $res->bindValue(":name", $user->getName());
        $res->bindValue(":email", $user->getEmail());
        $res->bindValue(":user", $user->getUser());
        $res->bindValue(":password", $user->getPassword());
        $res->bindValue(":category", $user->getCategory());

        if ($res->execute()) {
            return true;
        }
        return false;
    }

  }
