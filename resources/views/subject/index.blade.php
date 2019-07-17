<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
 <body>
<br>
<br>
    <div >
 	<div class="field is-small is-rounded">
 		<div class="control">
 			<a class="button is-link is-pulled-right " href="{{route('subject.create')}}">Ingresar un Nuevo Curso</a>
 		</div>
 		
 	</div>
 </div>
 	
 	<table class="table is-fullwidth is-bordered">
 		<thead>
 			<tr>
 			<th>codigo</th>
 			<th>Name</th>
 	
 		</tr>
 		</thead>
 		<tbody>
 			@foreach($subject as $subject)
 				<tr>
		<td>{{$subject->codigo}}</td>
		<td>{{$subject->name}}</td>
		<td><a class="button is-primary" href="{{route('subject.show',$subject->id)}}">Detalle</a>
		</td>
	</tr>
 		</tbody>
		@endforeach  
 	</table>
 	
</body>
</html>