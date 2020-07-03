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
      <p>
        {{trans('lang.MV')}}
      </p>
    </div>
  </div>
</div>
@endsection
