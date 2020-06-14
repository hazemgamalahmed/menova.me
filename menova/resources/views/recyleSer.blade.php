@extends('layouts.app')

@section('content')
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
  	@foreach($deels as $dell)
  	<tr>
  		<td>{{$dell->id}}</td>
  		<td>{{$dell->username}}</td>
  		<td>{{$dell->phone}}</td>
  		<td>{{$dell->email}}</td>
  		<td>
  			<input type="checkbox" name="id[]" value="{{$dell->id}}">
  		</td>
  	</tr>
  	@endforeach
  </tbody>
</table>
<input type="submit" name="restore" value="restore" class="btn btn-primary">
</form>
@endsection