<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Spesina') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
    <body>
        <body>
            <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
          <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">HRMS</a>
          <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="#">Sign out</a>
            </li>
          </ul>
        </nav>
        
        <div class="container-fluid">
          <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
              <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="/dashboard">
                      <span data-feather="home"></span>
                      Dashboard <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/create">
                      Create Employee
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="view">
                      View All Employees
                    </a>
                  </li>
        
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Attendance</span>
                  <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                  </a>
                </h6>
                <ul class="nav flex-column mb-2">
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      Current month
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      Total
                    </a>
                  </li>
                  
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Salary Pay Slip</span>
                    <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                      <span data-feather="plus-circle"></span>
                    </a>
                  </h6>
                  <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        Generate Salary Slip
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        Check Past Slips
                      </a>
                    </li>
                    
                  </ul>
              </div>
            </nav>
        
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
              </div>
              @yield('content')
            </main>
          </div>
        </div> 
    </body>
</html>