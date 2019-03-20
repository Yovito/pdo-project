<?php
  class user {
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

  }
