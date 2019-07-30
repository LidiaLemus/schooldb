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

 </div>
 	<div class="columns">
      
      <div class="column">
          <table class="table is-fullwidth is-bordered">
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Catedratico</th>
    
        </tr>
        </thead>
        <tbody>
            @foreach($subjects_years as $sy)
                <tr>
        <td>{{$sy->subject->name}}</td>
        <td>{{$sy->teacher->fullname}}</td>
        
    </tr>
        </tbody>
        @endforeach  
    </table>
          
      </div>  
    </div>
 	
 	
</body>
</html>