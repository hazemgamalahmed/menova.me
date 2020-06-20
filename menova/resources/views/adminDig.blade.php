@extends('layouts.app')

@section('content')
<h1 style="text-align: center;"> digital marketing clients</h1>
<form method="POST" action="{{url('delete/digital')}}">
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
  @foreach($degets as $digital)
  <tbody>
  	<tr>
  		<td>{{$digital->id}}</td>
  		<td>{{$digital->name}}</td>
  		<td>{{$digital->phone}}</td>
      <td>{{$digital->email}}</td>
  		<td>
      <input type="checkbox" name="id[]" value="{{$digital->id}}">  
      </td>
  	</tr>
  </tbody>
  @endforeach
</table>
<input type="submit" name="softdelete" value="delete" class="btn btn-danger">
</form>
<h1><a href="{{url('dels/data')}}" style="text-decoration:none;color: #f00;">To Trashed Data Of The Digital Marketing <i class="fa fa-trash-o text-white"></i></a></h1>
@endsection