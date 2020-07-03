<div class="upper-bar bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-auto">
        <div class="any-data-up">
          <span>
            <a href="#" class="text-decoration-none mx-2 text-black-50">
              <i class="fa fa-twitter" aria-hidden="true"></i>
              Twitter
            </a>
          </span>
          <span>
            <a href="#" class="text-decoration-none mx-2 text-black-50">
              <i class="fa fa-facebook-official" aria-hidden="true"></i>
              FaceBook
            </a>
          </span>
          <span>
            <a href="#" class="text-decoration-none mx-2 text-black-50">
              <i class="fa fa-github" aria-hidden="true"></i> Github</a></span>
        </div>
      </div>
      <div class="col-12 col-md-auto text-black-50">
        <i class="fa fa-envelope" aria-hidden="true"></i> <a class="text-black-50 text-decoration-none" href="mailto:menova@menova.com">menova@menova.com</a>
      </div>
      <div class="col text-right align-self-end">
        <i class="fa fa-smile-o" aria-hidden="true"></i><span>
          {{trans('lang.pleased')}}
        </span>
      </div>
    </div>
  </div>
</div>

<!--start nav bar-->
<nav class="navbar main-nav navbar-expand-md navbar-dark bg-dark py-3">
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
          <a class="nav-link" href="{{url('/')}}"> <i class="fa fa-home text-white"></i> {{trans('lang.home')}}<span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('about')}}">
            <i class="fa fa-user text-white"></i>
            {{trans('lang.About')}}
          </a>
        </li>

        <li class="nav-item">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="serve-navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-bell text-white"></i>
            {{trans('lang.serv')}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="serve-navbarDropdown">
            <li><a class="dropdown-item" href="{{url('services')}}">{{trans('lang.services')}}</a></li>
            <li><a class="dropdown-item" href="{{url('Development')}}">{{trans('lang.Software')}}</a></li>
            <li><a class="dropdown-item" href="{{url('Digital')}}">{{trans('lang.marketing')}}</a></li>
          </ul>

        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('contact')}}">
            <i class="fa fa-phone text-white"></i>
            {{trans('lang.contacts')}}
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="lang-navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-language text-white"></i>
            {{trans('lang.language')}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="lang-navbarDropdown">
            <li><a class="dropdown-item" href="{{url('lang/ar')}}">العربية</a></li>
            <li><a class="dropdown-item" href="{{url('lang/en')}}">English</a></li>
          </ul>
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
