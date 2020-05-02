<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green" style="font-size:18px;">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">        
        <div class="simple-text logo-normal" style="text-align:center">ORVR | MECHANIC</div>        
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <img src="/storage/avatars/{{auth::guard('mechanic')->user()->avatar}}" alt="" style="width:80px; height:80px;top:0px;right:90px;border-radius:50%;margin:10px 90px;" > 
            <div style="text-align:center; color:black;"><b>  {{  Auth::guard('mechanic')->user()->name }}</b> </div>
        <li class="{{'mechanic' ==request()->path() ?'active' :''}}">
            <a href="/mechanic">
              <i class="now-ui-icons design_app"></i>
              <p>home</p>
            </a>
          </li>
          
          <li class="{{'request' ==request()->path() ?'active' :''}}">
          <a href="/request">
              <i class="now-ui-icons location_map-big"></i>
              <p>Request</p>
            </a>
          </li>
          
          <li class="{{'regrole' ==request()->path() ?'active' :''}}">
            <a href="/regrole">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
              
            </a>
          </li>
          
          <li class="{{'mecfeedback' ==request()->path() ?'active' :''}}">
            <a href="/mecfeedback">
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
                  
                    {{  Auth::guard('mechanic')->user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/regrole">
                  
                   {{ __('My Profile') }}
               </a>
               <a class="dropdown-item" href="/changepwdmec">
                    
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
  
  @yield('scripts')
</body>

</html>