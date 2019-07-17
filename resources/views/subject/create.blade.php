<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

        
    </head>
    <body>
        <div class="hero is-light is-fullheight">
        <div class="columns">
        
            <div class="column is-flex is-vcentered">
        <div class="column is-trhee-quarters is-vcentered">  
        <label class="label">Nuego Registro</label>
        <div class="box"> 
     <form method="post" action="{{route('subject.store')}}">
    {{csrf_field() }}
 <div class="field">
 <div class="control">   
<input class=" input  is-left is-focused " type="text" name="codigo" placeholder="codigo" required>
</div>
</div>
<div class="field">
<div class="control">    
<input class=" input  is-primary is-focused" type="text" name="name" placeholder="name" required> 
</div>
</div>

<div class="field">
    <div class="control">
        <div class="select is-rounded is-primary">
    <select name="is_active">
        <option value="1">activo</option>
        <option value="0">inactivo</option>

    </select>
</div>
</div>
</div>
<div>
</form>
<div class="field">
<div class="control">  
<button class="button is-success">Guardar</button>
</div>
</div>
</div>

<div class="column"></div>
</div>
</div>
    </body>
</html>
