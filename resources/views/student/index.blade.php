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

    <div class="columns">
    	<div class="column">
    		<div class="column is-trhe-fiths">
 	<div class="field is-small is-rounded">
 		<div class="control">
 			<a class="button is-link is-pulled-right " href="{{route('student.create')}}">Ingresar un Nuevo Estudiante</a>
 		</div>
 		
 	</div>
 </div>
 	
 	<table class="table is-fullwidth is-bordered">
 		<thead>
 			<tr>
 			<th>codigo</th>
 			<th>Name</th>
 			<th>Birthdate</th>
 		</tr>
 		</thead>
 		<tbody>
 			@foreach($student as $student)
 				<tr>
		<td>{{$student->codigo}}</td>
		<td>{{$student->fullname}}</td>
		<td>{{$student->birthdate}}</td>
		<td><a class="button is-primary" href="{{route('student.show',$student->id)}}">Detalle</a>
		</td>
	</tr>
 		</tbody>
		@endforeach  
 	</table>
 </div>
 	</div>
 </div>
</body>
</html>