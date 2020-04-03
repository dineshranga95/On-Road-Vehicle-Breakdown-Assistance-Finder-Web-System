<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel</title>

        <!-- Fonts -->
        
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
      </head>
    <body>
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow-sm">
              <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">ORVR</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{  url('/about')}}">{{ __('About Us') }}</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Vehicle Repairs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">ABS Repairs</a>
                          <a class="dropdown-item" href="#">Dual Cluch Repairs</a>
                          <a class="dropdown-item" href="#">Other Repairs</a>
                        </div>
                      </li>
                                   
                      </ul>
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('login') }}">Customer</a>
                            <a class="dropdown-item" href="{{ url("login/mechanic") }}">Mechanic</a>
                            <a class="dropdown-item" href="{{ url("login/admin") }}">Admin</a>
                          </div>
                        </li>                
                                 
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Register
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('register') }}">Customer</a>
                                    <a class="dropdown-item" href="{{ url("register/mechanic") }}">Mechanic</a>
                                    <a class="dropdown-item" href="{{ url("register/admin") }}">Admin</a>
                                  </div>
                                </li>                   
                        </ul>
                      </div>
                    </div>
                  </nav>

                <div class="row justify-content-center mb-3 mt-3" >
                  <div class="col-10"style="font-size:85px; text-align:center;">
                      ON ROAD VEHICLE REPAIR
                  </div>                   
                  </div>
                                    
                   </div>  
                                 
               <div class="row justify-content-center ">
                  <div class="col-md-12 ">
                      <img src="3.jpg" alt="" width="100%" height="90%" >  
                    </div>                
               </div>  
                               
        </div>
    </body>
</html>
