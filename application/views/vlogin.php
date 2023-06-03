<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Login Admin</title>

  <!-- Favicons -->
  <link href="<?= base_url('assets/template'); ?>/img/favicon.png" rel="icon">
  <link href="<?= base_url('assets/template'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/template'); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?= base_url('assets/template'); ?>/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/template'); ?>/css/style.css" rel="stylesheet">
  <link href="<?= base_url('assets/template'); ?>/css/style-responsive.css" rel="stylesheet">
</head>

<body>

  <div id="login-page">
    <div class="container">
      <?= form_open('auth/login', 'class="form-login"'); ?>
      <h2 class="form-login-heading">sign in now</h2>
      <div class="login-wrap">
        <input type="text" name="username" class="form-control" placeholder="User ID" autofocus value="<?= set_value('username'); ?>">
        <i><?= form_error('username'); ?></i>
        <br>
        <input type="password" name="pass" class="form-control" placeholder="Password" value="<?= set_value('pass'); ?>">
        <i><?= form_error('pass'); ?></i>


        <span class="pull-right">
          <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
        </span>

        <br><br>
        <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
      </div>
      <?= form_close(); ?>

      <!-- Modal -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Forgot Password ?</h4>
            </div>
            <div class="modal-body">
              <p>Enter your e-mail address below to reset your password.</p>
              <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
              <button class="btn btn-theme" type="button">Submit</button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal -->
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?= base_url('assets/template'); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/template'); ?>/lib/bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("<?= base_url('assets/template'); ?>/img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>