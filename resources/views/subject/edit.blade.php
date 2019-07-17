<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editar</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
 <body>
 	<div>

     <form method="post" action="{{route('subject.update',$subject->id)}}">
     	@csrf
     	@method('PATCH')
    {{csrf_field() }}
 <div class="field">
 <div class="control">   
<input class=" input  is-focused " type="text" name="codigo" value="{{$subject->codigo}}" placeholder="codigo" required>
</div>
</div>
<div class="field">
<div class="control">    
<input class=" input is-primary is-focused" type="text" name="fullname" value="{{$subject->name}}" placeholder="name" required> 
</div>
</div>

<div class="field">
<div class="control">  
<button class="button is-primary">Guardar Cambio</button>
</div>
</div>

</form></div>
 	
</body>
</html>