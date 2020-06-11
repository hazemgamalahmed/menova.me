<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content = "welcome to menaova services" />
        <meta charset="utf-8" />
        <title>Hello</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <link rel="stylesheet" href="{{ URL::asset('../public/css/bootstrab.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('../public/css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('../public/css/hover dropdown.css') }}">
    </head>
    <body>
          
            <div class="upper-bar">
                <div class="container">
                    <div class="row">
                      <div class="col-sm">


<div class="any-data-up">
      <span><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></span>
      <span><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i> FaceBook</a></span>
      <span><a href="#">  <i class="fa fa-github" aria-hidden="true"></i> Github</a></span>
</div>



                      </div>


                        <div class="col-sm">
                            <i class="fa fa-envelope" aria-hidden="true"></i> <span>menova@menova.com</span>
                        </div>
                        <div class="col-sm">
                            <i class="fa fa-smile-o" aria-hidden="true"></i><span>we will be pleased to serve you</span>
                        </div>
                    </div>
                </div>
            </div>
            
                <!--start nav bar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                    <div class="container">
                    <a class="navbar-brand" href="#">
                        <span class="new-serve">Menova</span> 
                      
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse right" id="main-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}"> <i class="fa fa-home"></i> Home<span class="sr-only">(current)</span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('contact')}}">Contacts Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('free-lance')}}">Join Us as a free lancer</a>
                        </li>



                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Our Services
                        </a>
                          <div class="dropdown-content">
                             <a href="{{url('services')}}">IT Services</a>
                             <a href="{{url('Development')}}">IT Software Development</a>
                             <a href="{{url('Digital')}}">Digital Marketing</a>
                          </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Language
                            </a>
                             <div class="dropdown-content">
                              <a href="#">العربية</a>
                              <a href="#">English</a>
                            </div>
                            </li>
                    </ul>
                    
                    <!-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form> -->
                    </div>
            </div>
          </nav>
          <!--end nav bar-->
          <!-- start cinema div -->
          <div class="cinema">
              <div class="overlay"></div>
              <div class="container">
                  <div class = "header-information">
                  <h1>menaova serves is a best place to serve you in IT solution, Digital Marketing and IT Development</h1>
                  </div>
              </div>
          </div>
  @yield('content')
  @extends('footer')