<?php
/*********************************************************************
    index.php

    Yosved Villar <yosved.villar@gmail.com>
    Copyright (c)  2019 -
    https://github.com/Yovito/

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
session_start();

  //Client Login page: Ajax interface can pre-declare the function to trap logins.
  if(!$_SESSION['storage']) {
    header("Location: login.php");

  }else{
    header("Location: app/dashboard.php");
  }

  /* Redirecciona a una página diferente en el mismo directorio el cual se hizo la petición */

// $host  = $_SERVER['HTTP_HOST'];
// $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
// var_dump($host);
// var_dump($uri)
// $extra = 'mypage.php';
// header("Location: http://$host$uri/$extra");
// exit;
