<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->

  <link type="text/css" href="{{  asset ('/css/app.css')}}" rel="stylesheet">
  <link href="/img/brand/favicon.png" rel="icon" type="image/png">

  <!-- Icons -->
  <link href="{{ asset ('/css/nucleo.css')}}" rel="stylesheet">
  <link type="text/css" href="{{  asset ('/css/argon.css?v=1.0.0')}}   " rel="stylesheet">
</head>


<body>
<div id="app">
<!-- Sidenav -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
 <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
  <router-link  class="navbar-brand pt-0" tag="span" :to="{ name: 'home' }">
        <img src="/img/brand/blue.png" class="navbar-brand-img" alt="...">
  </router-link> 



      <!-- User -->

      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="/img/theme/mifoto.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Bienvenido!</h6>
            </div>

      <router-link  class="dropdown-item" tag="a" :to="{ name: 'mi-cuenta' }">
  
              <i class="ni ni-single-02"></i>
          <span>Mi perfil </span> 
</router-link> 



      <router-link  class="dropdown-item" tag="a" :to="{ name: 'configuracion' }">
              <i class="ni ni-settings-gear-65"></i>
              <span>Configuracion</span>
       </router-link> 
    
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Salir</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Busqueda" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
       <router-link  class="dropdown-item" tag="a" :to="{ name: 'home' }">
              <i class="ni ni-tv-2 text-primary"></i> Tablero
       </router-link>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/icons.html"  data-toggle="modal" data-target="#create-register"  >
              <i class="fas fa-plus-circle text-blue"></i> Nuevo siniestro
            </a>
          </li>

        </ul>


      </div>
    </div>
  </nav>




  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
           <router-link  class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" tag="a" :to="{ name: 'home' }">

        Tablero
</router-link>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Busqueda" type="text">
            </div>
          </div>
        </form>
      




  <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">

            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="/img/theme/mifoto.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"> {{ Auth::user()->name }}  {{ Auth::user()->lastname }}  </span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Bienvenido!</h6>
              </div>

                <router-link  class="dropdown-item" tag="a" :to="{ name: 'mi-cuenta' }">
                <i class="ni ni-single-02"></i>
                <span>Mi perfil </span> 
                </router-link> 

            <router-link  class="dropdown-item" tag="a" :to="{ name: 'configuracion' }">
                <i class="ni ni-settings-gear-65"></i>
                <span>Configuracion</span>
             </router-link>
           

              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}"
     onclick="event.preventDefault();
     document.getElementById('logout-form-sm').submit();" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Salir</span>
            </a>
      <form id="logout-form-sm" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
     </form>

    </div>
    </li>
    </ul>
  <!-- User -->








    </div>
    </nav>


<!-- PAGINAS -->
<app></app>
<!-- PAGINAS -->













      <!-- Footer -->
      <footer class="footer">







      </footer>






  </div>
  </div>
  </div>












<script src=" {{asset('js/app.js')}}  "></script>




</body>


</html>
