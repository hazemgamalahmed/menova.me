@extends('layouts.app')

@section('content')

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  @foreach($degets as $digital)
  <tbody>
  	<tr>
  		<td>{{$digital->id}}</td>
  		<td>{{$digital->name}}</td>
  		<td>{{$digital->phone}}</td>
  		<td>{{$digital->email}}</td>
  	</tr>
  </tbody>
  @endforeach
</table>

@endsection