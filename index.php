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

  //Client Login page: Ajax interface can pre-declare the function to trap logins.
  if(!$_SESSION['auth']) {
    header("Location: auth.php");
  }else{
    header("Location: app/dashboard.php");
  }
