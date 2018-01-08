<?php $path = '/cursos/public/' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{$path}}vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{$path}}vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="{{$path}}css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{$path}}css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{$path}}vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{$path}}css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{$path}}css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{$path}}img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="{{$path}}img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase">Nathan Amorim</h2><span class="text-uppercase">Web Developer</span>
          </div>
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>N</strong><strong class="text-primary">A</strong></a></div>
        </div>
        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#alunos-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-user"></i><span>Alunos</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="alunos-nav-list" class="collapse list-unstyled">
                <li> <a href="{{route('aluno-cadastrar')}}">Cadastrar</a></li>
                <li> <a href="{{route('aluno-listar')}}">Listar</a></li>
              </ul>
            </li>
            <li> <a href="#cursos-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-form"></i><span>Cursos</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="cursos-nav-list" class="collapse list-unstyled">
                  <li> <a href="{{route('curso-cadastrar')}}">Cadastrar</a></li>
                  <li> <a href="{{route('curso-listar')}}">Listar</a></li>
              </ul>
            </li>
            <li> <a href="#certificados-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-list-1"></i><span>Certificado</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="certificados-nav-list" class="collapse list-unstyled">
                <li> <a href="{{route('certificado-cadastrar')}}">Cadastrar</a></li>
                <li> <a href="{{route('certificado-listar')}}">Listar</a></li>
              </ul>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <div class="page home-page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Cursos</span><strong class="text-primary">Panel</strong></div></a></div>
                  <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                  <li class="nav-item"><a href="#" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
                  </ul>
            </div>
          </div>
        </nav>
      </header>
      
      <!-- Content Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            @yield('content')
          </div>
        </div>
      </section>
     
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>{{'Nathan Amorim'}} &copy; {{2018}}</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
    <script src="{{$path}}vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{$path}}vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="{{$path}}js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="{{$path}}vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{$path}}vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="{{$path}}js/charts-home.js"></script>
    <script src="{{$path}}js/front.js"></script>
    <script src="{{$path}}js/jquery.mask.js"></script>
    <script src="{{$path}}js/scripts.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
      
    </script>
    <script>
        
</script>
  </body>
</html>