@extends('layouts.app')

@section('content')
<h1 style="text-align: center;">deleted digital marketing clients</h1>

	<form method="POST" action="{{url('delete/digital')}}">
		{!! csrf_field() !!}
		<input type="hidden" name="_method" value="DELETE">
<table>
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
  	@foreach($dmdels as $del)
  	<tr>
  		<td>{{$del->id}}</td>
  		<td>{{$del->name}}</td>
  		<td>{{$del->phone}}</td>
  		<td>{{$del->email}}</td>
  		<td>
  			<input type="checkbox" name="id[]" value="{{$del->id}}">
  		</td>
  	</tr>
  	@endforeach
  </tbody>

</table>
  <input type="submit" name="restore" value="restore data" class="btn btn-primary">
</form>
@endsection