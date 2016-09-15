
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo URL; ?>Views/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo URL; ?>Views/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo URL; ?>Views/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo URL; ?>Views/css/skins/_all-skins.min.css">
  <script src="<?php echo URL; ?>Views/js/funciones.js"></script>
  <script src="<?php echo URL; ?>Views/js/login.js"></script>
  <style type="text/css">
    .login-page, .register-page {background-color: #282521;}
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href=""><b>Cine</b>Mil<br><span style="font-size: 13px">Admin</span></a></a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg"> Iniciar Sesion </p>
      <div role="form" onkeypress="return runScriptLogin(event)">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Usuario" id="usuario" required>
          <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Contraseña" id="contrasena" required>
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label>
                <input type="checkbox" id="session_login"> Recordarme
              </label>
            </div>
          </div>
          <div class="col-md-4">
            <button  class="btn btn-success btn-block btn-flat" onclick="goLogin();" >Ingresar</button>
            <input type="hidden" id="Action" name="Action" value="submit" readonly />
          </div>
        </div>
      </div>
      <div id="_AJAX_LOGIN_" style="padding-top:10px;"></div>  
    </div>
  </div>
  <script src="<?php echo URL; ?>Views/js/jquery.min.js"></script>
  <script src="<?php echo URL; ?>Views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
