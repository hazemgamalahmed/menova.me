@extends('header')
@section('content')
<div class="category">
	<div class="container">
		@foreach($healths as $health)
		<h1>{{$health->project_name}}</h1>
		<a href="{{$health->demo}}">{{$health->demo}}</a>
		@endforeach
	</div>
</div>
@endsection