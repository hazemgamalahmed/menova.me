@extends('header')
@section('content')
<div class="category">
	<div class="container">
		@foreach($educs as $educ)
		<h1>{{$educ->project_name}}</h1>
		<a href="{{$educ->demo}}">{{$educ->demo}}</a>
		@endforeach
	</div>
</div>
@endsection