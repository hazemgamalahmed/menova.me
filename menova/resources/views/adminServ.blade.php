@extends('layouts.app')

@section('content')
<h1 style="text-align:center;">IT Server</h1>
<form method="POST" action="{{url('del/serve')}}">
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
  	@foreach($services as $serv)
    <tr>
      <th scope="row">{{$serv->id}}</th>
      <td>{{$serv->username}}</td>
      <td>{{$serv->email}}</td>
      <td>{{$serv->phone}}</td>
      <td>
        <input type="checkbox" name="id[]" value="{{$serv->id}}">
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<input type="submit" name="softdelete" value="DELETE" class="btn btn-danger">
</form>
<h1><a href="{{url('dels/serve')}}">go to recycle bin <i class="fa fa-trash"></i></a></h1>
@endsection