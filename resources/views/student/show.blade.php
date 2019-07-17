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
 				<td>birthdate</td>
 			</tr>
 			
 		</thead>

 		<tbody>
 			<tr>
	 			<td>{{$student->codigo}}</td>
	 			<td>{{$student->fullname}}</td>
	 			<td>{{$student->birthdate}}</td>
	 			<td><a class="button is-success button is-fullwidth" href="{{route('student.index')}}">Lista</a></td>
	 			<td><a class="button is-primary button is-fullwidth" href="{{route('student.edit',$student->id)}}">Editar</a></td>
	 		<td>
	 			<form method="post" action="{{route('student.destroy',$student->id)}}">
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