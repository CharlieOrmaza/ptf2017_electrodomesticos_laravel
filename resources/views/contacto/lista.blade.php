<!DOCTYPE html>
<html lang="en">

  <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Electrodomesticos</title>

      <!-- Bootstrap Core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Theme CSS -->
      <link href="css/freelancer.min.css" rel="stylesheet">

      <!-- Custom Fonts -->
      <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

  </head>

  <body id="page-top" class="index">

  <!-- Navigation -->
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="{{ url('/') }}#page-top">Electrodomesticos</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li class="page-scroll">
                      <a href="{{ url('/') }}#portfolio">Electrodomesticos</a>
                  </li>
                  <li class="page-scroll">
                      <a href="{{ url('/') }}#about">Sobre nosotros</a>
                  </li>
                  <li class="page-scroll">
                      <a href="{{ url('/') }}#contact">Contactanos</a>
                  </li>
                  <li class="page-scroll">
                        <a href="{{ url('contactos') }}">Contactos</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
  </nav>
  <section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Telefono</th>
                      <th>Mensaje</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datos["contactos"] as $contacto)
                    <tr>
                      <th scope="row">{{ $contacto->id }}</th>
                      <td>{{ $contacto->nombre }}</td>
                      <td>{{ $contacto->email }}</td>
                      <td>{{ $contacto->telefono }}</td>
                      <td>{{ $contacto->mensaje }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
  </section>

   <!-- Footer -->
  <footer class="text-center">
      <div class="footer-above">
          <div class="container">
              <div class="row">
                  <div class="footer-col col-md-4">
                      <h3>Direccion</h3>
                      <p>Callao 1030</p>
                  </div>
                  <div class="footer-col col-md-4">
                  </div>
                  <div class="footer-col col-md-4">
                      <h3>Encontranos</h3>
                      <ul class="list-inline">
                          <li>
                              <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                          </li>
                          <li>
                              <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                          </li>
                          <li>
                              <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                          </li>
                          <li>
                              <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                          </li>
                          <li>
                              <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-below">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      Copyright &copy; Pagina Electrodomesticos
                  </div>
              </div>
          </div>
      </div>
  </footer>

  </body>

</html>