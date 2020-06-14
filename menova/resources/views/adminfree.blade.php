@extends('layouts.app')

@section('content')
<h1 style="text-align:center;text-transform:capitalize;">free lancer data</h1>
<form method="POST" action = "{{url('delete/free')}}">
  {!! csrf_field() !!}
  <input type="hidden" name="_method" value="DELETE">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">major</th>
      <th scope="col">files</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($frees as $free)
  	<tr>
  		<td>{{$free->id}}</td>
  		<td>{{$free->username}}</td>
  		<td>{{$free->email}}</td>
  		<td>{{$free->phone}}</td>
  		<td>{{$free->major}}</td>
  		<td>{{$free->files}}</td>
      <td>
        <input type="checkbox" name="id[]" value="{{$free->id}}">
      </td>
  	</tr>
  	@endforeach
  </tbody>
</table>
<input type="submit" name="softdelete" value="DELETE" class="btn btn-danger">
<h1><a href="{{url('dels/free')}}">go to recycle bin of free lance <i class = "fa fa-trash-o"></i></a></h1>
</form>
@endsection