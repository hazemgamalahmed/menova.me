<!DOCTYPE html>
<html>
<head>
  <meta name="description" content="welcome to menaova services" />
  <meta charset="utf-8" />
  <title>Hello</title>
  <link href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/hover dropdown.css') }}">
  <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  @include('navbar')
  <div class="header vh-100 position-relative" style="background-image: url({{ asset('img/menova/header-lap.jpg')}})">
    <div class="overlay">
      <div class="container">
        <div class="row vh-100">
          <div class="col-12 col-md-6 pt-5">
            <h1 class="text-uppercase text-white pt-5 animated fadeInUp" data-duration="3s" style="font-size: 120px">menova</h1>
            <p class="text-white mt-4 lh-5 p-0">
              {{trans('lang.what')}}
            </p>
            <a class="btn btn-success mt-4 px-5" href="{{url('free-lance')}}">@lang('lang.getStarted') <i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @yield('content')
  @include('footer')
