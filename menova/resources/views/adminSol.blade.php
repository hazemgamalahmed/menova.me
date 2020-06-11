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
  <tbody>
  	@foreach($devs as $dev)
    <tr>
      <th scope="row">{{$dev->id}}</th>
      <td>{{$dev->name}}</td>
      <td>{{$dev->phone}}</td>
      <td>{{$dev->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection