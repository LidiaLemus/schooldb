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
      <div class="column"></div>
      <div class="column">
        <br>
         <h2 class="button is-primary is-fullwidth">{{$subject_year->subject->name}}</h2>
            <h2 class="button is-primary is-fullwidth">{{$subject_year->teacher->fullname}}</h2>
         <table class="table is-striped is-narrow is-haverable is-fullwidth">
            <th>Alumno</th>
            <th>nota</th>
    @foreach($subject_year->enrollments as $enroll)
            <tr>
                <td>{{$enroll->student->fullname}}</td>
                <td>{{$enroll->score}}</td></tr>
    @endforeach
        </table>  
      </div>  
      <div class="column"></div>
    </div>
 	
 	
</body>
</html>