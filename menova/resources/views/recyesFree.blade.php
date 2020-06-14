@extends('layouts.app')

@section('content')
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
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($delFrees as $free)
  	<tr>
  		<td>{{$free->id}}</td>
  		<td>{{$free->username}}</td>
  		<td>{{$free->phone}}</td>
  		<td>{{$free->email}}</td>
  		<td>{{$free->major}}</td>
  		<td>
  			<input type="checkbox" name="id[]" value="{{$free->id}}">
  		</td>
  	</tr>
  	@endforeach
  </tbody>
</table>
<input type="submit" name="restore" value="restore" class="btn btn-primary">
</form>
@endsection