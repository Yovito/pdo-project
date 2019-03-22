<?php

require 'app/User.php';

class userController{

  public function getDataUser($user){

      $objUser = new user();
      $objUser->setUser($user);

      return user::getDataUser($objUser);

  }

  public function regUser($name, $email, $user, $password, $category){

      $objUser = new user();
      $objUser->setName($name);
      $objUser->setUser($user);
      $objUser->setEmail($email);
      $objUser->setCategory($category);
      $objUser->setPassword($password);

      return user::regUser($objUser);

  }

}
