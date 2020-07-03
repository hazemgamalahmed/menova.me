@extends('header')
@section('title')
Freelancer
@endsection
@section('content')
<!-- start works of free lance -->
<div class="fields my-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-6">
      <div>
        <div class="container">
          <h2 class="text-center my-5"> {{trans('lang.fields')}} </h2>
        </div>
      </div>

      <!-- start works of free lance -->
      <!-- free lancers work -->

      @if($errors->any())
      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-8">
          <ul class="list-unstyled">
            @foreach($errors->all() as $error)
            <li class="alert alert-danger">{{$error}}</li>
            @endforeach
          </ul>
        </div>
      </div>
      @endif
      <div class="my-form">
        <div class="container">
          <div class="form-me">
            <h3 class="text-center my-4">{{trans('lang.perfree')}}</h3>
            <form class="form-group forms" method="POST" action="{{url('insert/free')}}" enctype="multipart/form-data">
              {!! csrf_field() !!}
              <label class="font-weight-bold form-label">{{trans('lang.name')}}</label>
              <input class="form-control mb-4 welcome" type="text" name="username" placeholder="{{trans('lang.name')}}" />
              <label class="font-weight-bold form-label">{{trans('lang.email')}}</label>
              <input class="form-control mb-4 welcome" type="email" name="email" placeholder="{{trans('lang.email')}}" />
              <label class="font-weight-bold form-label">{{trans('lang.phone')}}</label>
              <input class="form-control mb-4 welcome" type="text" name="phone" placeholder="{{trans('lang.phone')}}" />

              <label class="font-weight-bold form-file-label" for="customFile">Upload Your C.V</label>
              <div class="form-file">
                <input type="file" name="file" class="form-file-input" id="customFile">
                <label class="font-weight-bold form-file-label" for="customFile">
                  <span class="form-file-text">{{trans('lang.cv')}}</span>
                  <span class="form-file-button">Upload</span>
                </label>
              </div>

              @php
              $experts = array(
              'major_job' => 'major job',
              'web_development' => 'web development',
              'android_development' => 'android development',
              'IOS_development' => 'ios development',
              'desktop_app' => 'desktop development',
              'Digital_marketing' => 'digital marketing',
              'IT_Support' => 'IT Support',
              'graphic_designer' => 'graphic designer',
              'Game_development' => 'game development',
              );

              $techs_web = array(
              'html' => 'html',
              'css' => 'css',
              'wordpress' => 'wordpress',
              'java_script' => 'java script',
              'php' => 'php',
              'laravle' => 'laravle',
              'mysql' => 'mysql',
              'python' => 'python',
              'c#' => 'c#',
              'bootstrap' => 'bootstrap',
              'sass' => 'sass',
              'ue' => 'vue',
              'angular' => 'angular',
              'react' => 'react',
              );

              function chosen_value($option) {
              return $option;
              }

              @endphp

              <label class="font-weight-bold form-label mt-3">{{trans('lang.experts')}}</label>
              <select class="form-select text-capitalize" name="chosen_value[]">
                @foreach($experts as $key => $value)
                <option class="text-capitalize form-select" vlaue="{{$key}}">{{$value}}</option>
                @endforeach
              </select>
              <br />
              <label class="font-weight-bold form-label mt-3">{{trans('lang.techs')}}</label>

              <!-- Multiple Select -->
              @if(true)
              <select class="form-select select" multiple="multiple">
                @foreach($techs_web as $key => $value)
                <option class="text-capitalize" vlaue="{{$key}}">{{$value}}</option>
                @endforeach
              </select>
              @endif
              <!-- Multiple Select -->



              <label class="font-weight-bold form-label mt-3">{{trans('lang.project')}}</label>
              <select class="form-control" name="about">
                <option value="about</">about</option>
                <option value="educational">educational</option>
                <option value="healthy">healthy</option>
                <option value="agriculture">agriculture</option>
              </select>
              <label class="font-weight-bold form-label mt-3">{{trans('lang.demo')}}</label>
              <input class="form-control mb-4" type="text" name="demo" value="" placeholder="demo">
              <label class="font-weight-bold form-label">{{trans('lang.proName')}}</label>
              <input class="form-control mb-4" type="text" name="project" placeholder="Project Name">

              <button class="btn btn-block btn-success mt-4">{{trans('lang.submit')}}</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
