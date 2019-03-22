<?php

require_once 'app/db/conn.php';
//require 'app/class.user.php';

class user extends connection {

    protected static $cnx;

    private $id;
    private $name;
    private $user;
    private $email;
    private $password;
    private $category;
    private $reg_fec;

    public function getId(){
  		return $this->id;
  	}

  	public function setId($id){
  		$this->id = $id;
  	}

  	public function getName(){
  		return $this->name;
  	}

  	public function setName($name){
  		$this->name = $name;
  	}

  	public function getUser(){
  		return $this->user;
  	}

  	public function setUser($user){
  		$this->user = $user;
  	}

  	public function getEmail(){
  		return $this->email;
  	}

  	public function setEmail($email){
  		$this->email = $email;
  	}

  	public function getPassword(){
  		return $this->password;
  	}

  	public function setPassword($password){
  		$this->password = $password;
  	}

  	public function getCategory(){
  		return $this->category;
  	}

  	public function setCategory($category){
  		$this->category = $category;
  	}

  	public function getReg_fec(){
  		return $this->reg_fec;
  	}

  	public function setReg_fec($reg_fec){
  		$this->reg_fec = $reg_fec;
  	}

    private static function getConnection(){
      self::$cnx = connection::connect();
    }

    private static function unplug(){
      self::$cnx = null;
    }

    public static function getDataUser($user){

        $query = "SELECT id,name,email,user,category,reg_fec FROM cp_user WHERE user = :user";

        self::getConnection();

        $rs = self::$cnx->prepare($query);
        $rs->bindValue(":user", $user->getUser());
        $rs->execute();

        $data = $rs->fetch();

        $user = new user();
        $user->setId($data["id"]);
        $user->setName($data["name"]);
        $user->setUser($data["user"]);
        $user->setEmail($data["email"]);
        $user->setCategory($data["category"]);
        $user->setReg_fec($data["reg_fec"]);

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
