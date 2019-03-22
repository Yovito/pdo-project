<?php

include 'app/controllers/auth/authController.php';
include 'app/controllers/userController.php';

function clearValue( $param ){

    $param = trim($param);
    $param = stripcslashes($param);
    $param = htmlspecialchars($param);

    return $param;

}

session_start();

header( 'Content-type: application/json' );
$rs = array();

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    if ( isset($_POST["txtUser"]) && isset($_POST["txtPassword"]) ) {
        $txtUser  = clearValue( $_POST["txtUser"] );
        $txtPassword = clearValue( $_POST["txtPassword"] );
        $res = array( "estado" => "true" );

        if (authController::validate( $txtUser, $txtPassword )){
          $sessUser = userController::getDataUser( $txtUser );
          $_SESSION["storage"] = array(
              "id"      => $sessUser->getId(),
              "name"    => $sessUser->getName(),
              "user"    => $sessUser->getUser(),
              "email"   => $sessUser->getEmail(),
              "category"=> $sessUser->getCategory()
          );
          header( "location: app/dashboard.php" );

          return print(json_encode($rs));
        }else{
          $_SESSION['err'] = 'Usuario y/o clave incorrectos';
        }
    }else{
      die('oh oohh !!! no request');
    }
}

$rs = array("estado" => "false");
return print(json_encode($rs));
