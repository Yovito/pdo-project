<?php

include 'app/controllers/userController.php';

function clearValue($param){
    $param = trim($param);
    $param = stripcslashes($param);
    $param = htmlspecialchars($param);

    return $param;
}

session_start();

header('Content-type: application/json');
$res = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  var_dump("first if");
    if (isset($_POST["txtUser"]) && isset($_POST["txtPassword"])) {
      var_dump("2nd if");
        $txtUser  = clearValue($_POST["txtUser"]);
        $txtPassword = clearValue($_POST["txtPassword"]);
        var_dump("$txtUser $txtPassword");
        $res = array("estado" => "true");

        $val = userController::login($txtUser, $txtPassword);
        var_dump("here ::>  $val");

        if (userController::login($txtUser, $txtPassword)) {
          var_dump("3rth if");
            $sessUser            = userController::getUser($txtUser, $txtPassword);
            $_SESSION["storage"] = array(
                "id"      => $sessUser->getId(),
                "name"    => $sessUser->getName(),
                "user"    => $sessUser->getUser(),
                "email"   => $sessUser->getEmail(),
                "category"=> $sessUser->getCategory()
            );
            header("location: app/dashboard.php");
            return print(json_encode($res));
        }

    }
}

$res = array("estado" => "false");
//header("location:index.php");
return print(json_encode($res));
