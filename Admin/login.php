<!DOCTYPE html>
<html>
  <head>
    <title>Painel Administrativo</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">

      <form class="form-signin" method="post" action="conecta.php">
        <h2 class="form-signin-heading" style="text-align: center">Administrativo Justa</h2>
        <input type="text" name="email" class="input-block-level" placeholder="E-mail" required>
        <input type="password" name="senha" class="input-block-level" placeholder="Senha" required>
        <button class="btn btn-large btn-primary" type="submit"  style="text-align: center">Entrar</button>
      </form>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>