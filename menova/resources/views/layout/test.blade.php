<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
            	<thead>
            		<td>title</td>
            		<td>add_by</td>
            		<td>content</td>
            		<td>description</td>
            		<td>state</td>
            		<td>action</td>
            	</thead>
            	@foreach($news as $new)
            	<tr>
            		<td>{{$new->title}}</td>
            		<td>{{$new->add_by}}</td>
            		<td>{{$new->content}}</td>
            		<td>{{$new->description}}</td>
            		<td>{{$new->state}}</td>
            		<td>{{$new->id}}</td>
            	</tr>
            	@endforeach
            </table>
            {!! $news->render() !!}
</body>
</html>