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
            <h3 class="text-center">{{trans('lang.perfree')}}</h3>
            <form class="form-group forms" method="POST" action="{{url('insert/free')}}" enctype="multipart/form-data">
              {!! csrf_field() !!}
              <label class="form-label">{{trans('lang.name')}}</label>
              <input class="form-control mb-4 welcome" type="text" name="username" placeholder="{{trans('lang.name')}}" />
              <label class="form-label">{{trans('lang.email')}}</label>
              <input class="form-control mb-4 welcome" type="email" name="email" placeholder="{{trans('lang.email')}}" />
              <label class="form-label">{{trans('lang.phone')}}</label>
              <input class="form-control mb-4 welcome" type="text" name="phone" placeholder="{{trans('lang.phone')}}" />

              <div class="form-file">
                <input type="file" name="file" class="form-file-input" id="customFile">
                <label class="form-file-label" for="customFile">
                  <span class="form-file-text">{{trans('lang.cv')}}</span>
                  <span class="form-file-button">Upload</span>
                </label>
              </div>


              <label class="form-label">{{trans('lang.experts')}}</label>
              <select name="major[]" class="form-control select-multiple" multiple="1">
                <option disabled="">major job</option>
                <option value="web">web developer</option>
                <option value="desktop">desktop app</option>
                <option value="android">android developer</option>
                <option value="Ios">IOS developer</option>
                <option value="Digital">Digital marketing</option>
                <option value="IT-Support">IT-Support</option>
                <option value="photoshop">photoshop</option>
                <option value="graphic">graphic designer</option>
                <option value="Game-Developer">Game Developer</option>
              </select>
              <label class="form-label">{{trans('lang.techs')}}</label>
              <select name="technologies[]" class="form-control" multiple="" display="1">
                <option disabled="">web developrt</option>
                <option value="PHP">PHP</option>
                <option value="C#">C#</option>
                <option value="JS">JS</option>
                <option value="Java">Java</option>
                <option value="Python">Python</option>
                <option value="Ruby">Ruby</option>
                <option disabled="">Desktop Developer</option>
                <option value="Java">Java</option>
                <option value="C#">C#</option>
                <option value="C++">C++</option>
                <option disabled="">Mobile App Developer</option>
                <option value="Kotlin">Kotlin</option>
                <option value="Dart">Dart</option>
                <option value="Objective-c">Objective-c</option>
                <option value="Java">Java</option>
                <option value="Python">Python</option>
                <option value="Swift">Swift</option>
                <option disabled="">Game Developer</option>
                <option value="Java">Java</option>
                <option value="C++">C++</option>
                <option value="Python">Python</option>
                <option value="JS">JS</option>
                <option value="Ruby">Ruby</option>
                <option value="C">C</option>
              </select>
              <label class="form-label">{{trans('lang.project')}}</label>
              <select class="form-control" name="about">
                <option disabled="">about</option>
                <option value="educational">educational</option>
                <option value="healthy">healthy</option>
                <option value="agriculture">agriculture</option>
              </select>
              <label class="form-label">{{trans('lang.demo')}}</label>
              <input class="form-control mb-4" type="text" name="demo" value="" placeholder="demo">
              <label class="form-label">{{trans('lang.proName')}}</label>
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
