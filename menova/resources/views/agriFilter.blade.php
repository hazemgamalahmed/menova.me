@extends('header')
@section('content')
<div class="category">
	<div class="container">
		@foreach($grees as $gree)
		<h1>{{$gree->project_name}}</h1>
		<a href="{{$gree->demo}}">{{$gree->demo}}</a>
		@endforeach
	</div>
</div>
@endsection