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
                            <i class="fa fa-smile-o" aria-hidden="true"></i><span>
                              {{trans('lang.pleased')}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
                <!--start nav bar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                    <div class="container">
                    <a class="navbar-brand" href="#">
                        <span class="new-serve">{{trans('lang.menova')}}</span> 
                      
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse right" id="main-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}"> <i class="fa fa-home"></i> {{trans('lang.home')}}<span class="sr-only">(current)</span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}">
                          {{trans('lang.About')}}
                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('contact')}}">
                              {{trans('lang.contacts')}}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('free-lance')}}">{{trans('lang.free')}}</a>
                        </li>



                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{trans('lang.serv')}}
                        </a>
                          <div class="dropdown-content">
                             <a href="{{url('services')}}">{{trans('lang.services')}}</a>
                             <a href="{{url('Development')}}">{{trans('lang.Software')}}</a>
                             <a href="{{url('Digital')}}">{{trans('lang.marketing')}}</a>
                          </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{trans('lang.language')}}
                            </a>
                             <div class="dropdown-content">
                              <a href="{{url('lang/ar')}}">العربية</a>
                              <a href="{{url('lang/en')}}">English</a>
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
                  <h1>
                    {{trans('lang.what')}}
                  </h1>
                  </div>
              </div>
          </div>
  @yield('content')
  @extends('footer')