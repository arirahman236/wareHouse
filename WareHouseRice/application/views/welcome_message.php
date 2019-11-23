<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login Simven | UNIVERSITAS PRIMA CIPTA TEKNOLOGI</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="<?php echo base_url('images/logo.png')?>" type="image/x-icon"/>

  <!-- Fonts and icons -->
  <script src="<?php echo base_url('assets/js/plugin/webfont/webfont.min.js');?>"></script>
  <script>
    WebFont.load({
      google: {"families":["Lato:300,400,700,900"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["<?php echo base_url('assets/css/fonts.min.css');?>"]},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>
  
  <!-- CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/atlantis.min2.css');?>">
</head>
<body class="login">
  <div class="wrapper wrapper-login wrapper-login-full p-0">
    <div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-secondary-gradient">
    <div class="border-slate-300 text-slate-300"><img src="<?php echo base_url('images/logo.png'); ?>" alt="User Image" style="width:100px"></div>
      <h1 class="title fw-bold text-white mt-3 mb-3">PT. FAGAWIDI JAYA</h1>
      <p class="subtitle text-white op-7">Sistem Informasi Pergudangan</p>
    </div>
    <div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
      <div class="container container-login container-transparent animated fadeIn">
        <h3 class="text-center">Sign In</h3>
        <form action="<?php echo base_url('check-login.html'); ?>" method="post">
        <div class="login-form">
          <div class="form-group">
            <label for="email" class="placeholder"><b>Email</b></label>
            <input id="email" name="email" type="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="password" class="placeholder"><b>Password</b></label>
            <div class="position-relative">
              <input id="password" name="password" type="password" class="form-control" required>
              <div class="show-password">
                <i class="icon-eye"></i>
              </div>
            </div>
          </div>
          <div class="form-group form-action-d-flex mb-3">
<button type="submit" name="submit" value="login" class="btn btn-primary col-md-12 float-right mt-3 mt-sm-0 fw-bold" style="background-color: '#372eb3'">Sign in</button>
          </div>
          <div class="login-account">
            
            <a href="<?php echo base_url('lupa-password.html')?>" id="show-signup" class="link">Forget Password ?</a>
          </div>
          <br>
          <div class="login-account">
            <span class="msg">&copy; PT. FAGAWIDI JAYA - 2019</span>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</body>
  <script src="<?php echo base_url('assets/js/core/jquery.3.2.1.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/core/popper.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/core/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/atlantis.min.js');?>"></script>
</html>