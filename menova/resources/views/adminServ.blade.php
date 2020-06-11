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
  	@foreach($services as $serv)
    <tr>
      <th scope="row">{{$serv->id}}</th>
      <td>{{$serv->username}}</td>
      <td>{{$serv->email}}</td>
      <td>{{$serv->phone}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection