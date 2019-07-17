<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Detail</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
 <body>
 	<table class="table is-bordered">
 		<thead>
 			<tr>
 				<td>codigo</td>
 				<td>Name</td>
 			</tr>
 			
 		</thead>

 		<tbody>
 			<tr>
	 			<td>{{$subject->codigo}}</td>
	 			<td>{{$subject->name}}</td>
	 			<td><a class="button is-success button is-fullwidth" href="{{route('subject.index')}}">Lista</a></td>
	 			<td><a class="button is-primary button is-fullwidth" href="{{route('subject.edit',$subject->id)}}">Editar</a></td>
	 		<td>
	 			<form method="post" action="{{route('subject.destroy',$subject->id)}}">
  	@csrf
  	@method('DELETE')
  	<button class="button is-danger">Borrar</button>
  	 </form>


	 		</td>
 		    </tr>

 
 		</tbody>
 	</table>
</body>
</html>