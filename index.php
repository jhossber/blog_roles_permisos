<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Jos | Ber</title>
  <link rel="shortcut icon" href="././assets/img/logo2.png">

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
  <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
  <div class="container">
    <h1>Bienvenido el Sistema</h1>
    <div class="row">
      <div class="col-6 col-md-6 col-sm-12">
        <img src="assets/img/logo3.png" alt="No hay Josber" class="img-thumbnail">
      </div>
      <div class="col-6 col-md-6 col-sm-12">
        <form action="login.php" method="post" class="form-signin" autocomplete="off">
          <h1 class="h3 mb-3 font-weight-normal">Login</h1>
          <label for="" class="sr-only">Usuario</label>
          <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
          <br>
          <label for="" class="sr-only">Password</label>
          <input type="password" name="clave" class="form-control" placeholder="Password" required>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Recuerdame
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
        </form>
        <h3>Ingrese con estos datos</h3>
        <h4>Usuario: <b>josber</b></h4>
        <h4>Clave: <b>josber</b></h4>
      </div>
    </div>
  </div>

</body>
</html>
