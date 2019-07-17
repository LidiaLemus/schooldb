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
 			<a class="button is-link is-pulled-right " href="{{route('teacher.create')}}">Ingresar un Nuevo Maestro</a>
 		</div>
 		
 	</div>
 </div>
 	
 	<table class="table is-fullwidth is-bordered">
 		<thead>
 			<tr>
 			
 			<th>Name</th>
 			<th>Birthdate</th>
 		</tr>
 		</thead>
 		<tbody>
 			@foreach($teacher as $teacher)
 				<tr>
		<td>{{$teacher->fullname}}</td>
		<td>{{$teacher->birthdate}}</td>
		<td><a class="button is-primary" href="{{route('teacher.show',$teacher->id)}}">Detalle</a>
		</td>
	</tr>
 		</tbody>
		@endforeach  
 	</table>
 	
</body>
</html>