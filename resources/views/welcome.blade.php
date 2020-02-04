<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      </head>
    <body>
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow-sm">
              <div class="container">
                    <a class="navbar-brand" href="#">ORVR</a>
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
                                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>                    
                        </ul>
                      </div>
                    </div>
                  </nav>

                <div class="row justify-content-center mt-5" >
                  <div class="col-10"style="font-size:94px; text-align:center;">
                      ON ROAD VEHICLE REPAIR
                  </div>                   
                  </div>
                  <div class="row justify-content-center" >
                    <div class="col-10"style="font-size:40px; text-align:center;color:blue;">
                        Our Services 
                    </div> 
                    <div class="col-10"style="font-size:25px; text-align:center; ">
                      Quality and Functionality, Guaranteed
                    </div>                       
                    </div>
                    <div class="row justify-content-center mt-5">
                      <div class="col-md-2">
                          
                      </div>
                      <div class="col-md-4">
                          <img src="4.webp" alt="" style="float:left;height:250px; width:350px;" class="mx-auto d-block"> 
                        </div>
                        
                        <div class="col-md-4">
                          <img src="6.webp" alt=""style="float:left;width:250px;height:250px;" class="mx-auto d-block"> 
                        </div>

                        <div class="col-md-4">
                          <img src="7.webp" alt=""style="float:right;width:250px;" class="mx-auto d-block"> 
                        </div>
                        <div class="col-md-4">
                          <img src="22.jpg" alt=""style="width:250px;height:250px;" class="mx-auto d-block"> 
                        </div>
                        <div class="col-md-4">
                          <img src="26.jpg" alt=""style="float:left;width:250px; height:250px;" class="mx-auto d-block"> 
                        </div>
                                                     
                   </div>  
                                 
               <div class="row justify-content-center mt-5">
                  <div class="col-md-12">
                      <img src="3.jpg" alt="" width="95%" height="80%" style="margin-left:3%;">  
                    </div>                
               </div>  
                               
        </div>
    </body>
</html>
