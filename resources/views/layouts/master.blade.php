<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- CSS Files -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
 
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange"  style="font-size:18px;">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    
    <div class="logo">
        <div class="simple-text logo-normal" style="text-align:center">ORVR | ADMIN</div>     
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <img src="/uploads/avatars/{{auth::guard('admin')->user()->avatar}}" alt="" style="width:80px; height:80px;top:0px;right:90px;border-radius:50%;margin:10px 90px;" > 
          <div style="text-align:center; color:black;"><b>   {{  Auth::guard('admin')->user()->name }}</b> </div>
        <li class="{{'admin' ==request()->path() ?'active' :''}}">
            <a href="/admin">
              <i class="now-ui-icons design_app"></i>
              <p>home</p>
            </a>
          </li>
          <li class="{{'regcustomers' ==request()->path() ?'active' :''}}">
            <a href="/regcustomers">
              <i class="now-ui-icons education_atom"></i>
              <p>Registered Customers</p>
            </a>
          </li>
          <li class="{{'regmechanics' ==request()->path() ?'active' :''}}">
        <a href="/regmechanics">
          <i class="now-ui-icons ui-2_settings-90"></i>
              <p>Registered Mechanics</p>
            </a>
          </li>
         
          <li class="{{'profile1' ==request()->path() ?'active' :''}}">
            <a href="/profile1">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          
          <li class="{{'feedback' ==request()->path() ?'active' :''}}">
            <a href="./typography.html">
              <i class="now-ui-icons ui-2_chat-round"></i>
              <p>Feedback   </p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
               
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown" style="font-size:20px;">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                  
                    {{  Auth::guard('admin')->user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                 
                  <a class="dropdown-item" href="/profile1">
                  
                      {{ __('My Profile') }}
                  </a>
                  <a class="dropdown-item" href="/changepwdadmin">
                     
                      {{ __('Change Password') }}
                  </a>

                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"> 
                        {{ __('Logout') }}
                    </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
            </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
       
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">

            @yield('content')
        
      </div>


      
    </div>
  </div>
  <!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/now-ui-dashboard.js" type="text/javascript"></script>
  @yield('scripts')
</body>

</html>