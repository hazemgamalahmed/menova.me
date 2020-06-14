@extends('layouts.app')

@section('content')
<form method="POST" action="{{url('del/sol')}}">
  {!! csrf_field() !!}
  <input type="hidden" name="_method" value="DELETE">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($devs as $dev)
    <tr>
      <th scope="row">{{$dev->id}}</th>
      <td>{{$dev->name}}</td>
      <td>{{$dev->phone}}</td>
      <td>{{$dev->email}}</td>
      <td>
        <input type="checkbox" name="id[]" value="{{$dev->id}}">
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<input type="submit" name="softdelete" value="DELETE" class="btn btn-danger">
<h1><a href="{{url('dels/sol')}}">go to trashed data <i class="fa fa-trash-o"></i></a></h1>
</form>
@endsection