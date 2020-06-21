@extends('header')

@section('title')
IT Services
@endsection

@section('content')

<!-- start our supprt mation -->
<div class="support-menaova my-3 py-4">
  <div class="container">
    <h1 class="my-5">{{trans('lang.its')}}</h1>
    <div class="row align-items-center justify-content-center my-5">
      <div class="col-md-5 col-sm-12">
        <div class="support-me">
          <ul class="list-unstyled">
            <li class="back-face"><i class="fa fa-check-circle text-success mx-2"></i> {{trans('lang.ASS')}}</li>
            <li class="back-face"><i class="fa fa-check-circle text-success mx-2"></i> {{trans('lang.infra')}}</li>
            <li class="back-face"><i class="fa fa-check-circle text-success mx-2"></i> {{trans('lang.camer')}}</li>
            <li class="back-face"><i class="fa fa-check-circle text-success mx-2"></i> {{trans('lang.SM')}}</li>
            <li class="back-face"><i class="fa fa-check-circle text-success mx-2"></i> {{trans('lang.ITC')}}</li>
            <li class="back-face"><i class="fa fa-check-circle text-success mx-2"></i> {{trans('lang.ITO')}}</li>
          </ul>
        </div>
      </div>
      <div class="col-md-5 col-sm-12">
        <div class="support-me">
          <ul class="list-unstyled">
            <li class="back-face"><i class="fa fa-check-circle text-success mx-2"></i> {{trans('lang.VRT')}}</li>
            <li class="back-face"><i class="fa fa-check-circle text-success mx-2"></i> {{trans('lang.NNS')}}</li>
            <li class="back-face"><i class="fa fa-check-circle text-success mx-2"></i> {{trans('lang.TT')}}</li>
            <li class="back-face"><i class="fa fa-check-circle text-success mx-2"></i> {{trans('lang.DDM')}}</li>
            <li class="back-face"><i class="fa fa-check-circle text-success mx-2"></i> {{trans('lang.AP')}}</li>
            <li class="back-face"><i class="fa fa-check-circle text-success mx-2"></i> {{trans('lang.TOS')}}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end our supprt mation -->
<!-- start menaova levels -->
<div class="our-tools">
  <div class="container">
    <div class="conten-tools w-75 text-center m-auto">
      <p>{{trans('lang.MV')}}
      </p>

    </div>
  </div>
</div>
<!-- end menaova levels -->
<!-- start contact it services -->
<div class="my-form">
  <div class="container">
    @if($errors->any())
    <ul>
      @foreach($errors->all() as $my_er)
      <li>{{$my_er}}</li>
      @endforeach
    </ul>
    @endif 
    <div class="row justify-content-center my-5">
      <h1 class="text-center">{{trans('lang.request')}}</h1>
      <div class="col-12 col-md-6">
        <div class="form-group forms" method="POST" action="{{url('insert/serve')}}">
          {!! csrf_field() !!}
          <label>{{trans('lang.name')}}</label>
          <input class="form-control my-2 welcome" type="text" name="username" placeholder="Your Name" />
          <label>{{trans('lang.email')}}</label>
          <input class="form-control my-2 welcome" type="text" name="email" placeholder="Your Email" />
          <label>{{trans('lang.phone')}}</label>
          <input class="form-control my-2 welcome" type="text" name="phone" placeholder="Your Phone" />
          <label>{{trans('lang.message')}}</label>
          <textarea name="message my-2" class="form-control welcome" placeholder="send your message"></textarea>
          <button class="btn btn-block btn-success my-2">{{trans('lang.submit')}} <i class="fa fa-send"></i></button>
        </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
