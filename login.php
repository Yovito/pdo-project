<!doctype html>
<?php
  session_start();
  $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = '/secure.inc.php';
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>.:::GAMARRA:::.</title>
  <!-- CDN bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="addons/js/app.js"></script>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
  <div class="container text-center">
    <div class="page-header">
      <h1><i class="fa fa-user"></i> Iniciar sesión</h1>
    </div>
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="page">
          <!-- <form id="loginForm" action="validarCode.php" method="POST" role="form"> -->
          <form id="loginForm" action="<?php echo $uri.$extra; ?>" class="form-horizontal" role="form" method="POST">
            <div class="form-group">
              <label for="txtUser">User</label>
              <input class="form-control" type="text" name="txtUser" value="">
            </div>

            <div class="form-group">
              <label for="txtPassword">Password</label>
              <input class="form-control" type="password" name="txtPassword" id="idPassword">
            </div>

            <div class="form-group">
              <input type="checkbox" name="remember"> Remember Me
            </div>

            <div class="form-group">
              <input class="btn btn-primary btn-block" type="submit" value="run">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
