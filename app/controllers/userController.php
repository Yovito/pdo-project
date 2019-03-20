<?php

include 'app/User.php';

class UserController{

  public static function login($user, $password){
    $objUser = new user();
    $objUser->setUser($user);
    $objUser->setPassword($password);
    //var_dump("userController login  $user $password");

    return userDAO::login($objUser);
  }

  public function getUser($user, $password){
      $objUser = new user();
      $objUser->setUser($user);
      $objUser->setPassword($password);

      return userDAO::getUser($objUser);
  }

  public function regUser($name, $email, $user, $password, $category){
      $objUser = new user();
      $objUser->setName($name);
      $objUser->setUser($user);
      $objUser->setEmail($email);
      $objUser->setCategory($category);
      $objUser->setPassword($password);

      return userDAO::regUser($objUser);
  }

}
