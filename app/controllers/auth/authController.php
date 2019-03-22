<?php
require 'app/Auth.php';

class authController{

  public static function validate( $user, $password ){
    $objUser = new user();
    $objUser->setUser($user);
    $objUser->setPassword($password);

    return auth::validate($objUser);
  }

  public static function forgotPassword( $user, $password ){
    $objUser = new User();
    $objUser->setUser($user);
    $objUser->setPassword($password);

    return auth::validate($objUser);
  }

  public static function changePassword( $user, $password ){
    $objUser = new User();
    $objUser->setUser($user);
    $objUser->setPassword($password);

    return auth::validate($objUser);
  }
}
