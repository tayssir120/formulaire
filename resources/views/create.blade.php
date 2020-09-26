<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire</h1>
    {!!Form::open(['action' => 'App\Http\Controllers\FormulaireController@store', 'method' => 'POST'])!!}
    {{ csrf_field() }}
    
    <div class="input-group">
        {{Form::label('', 'CIN')}}
        {{Form::number('CIN', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
       {{Form::label('', 'Name')}}
       {{Form::text('Name', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
       {{Form::label('', 'Prenom')}}
       {{Form::text('Prenom', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('', 'email')}}
        {{Form::text('email', '', ['placeholder' =>  'test@domain.com', 'class' => 'form-control'])}} 
    </div>
    <div class="form-group">
        {{Form::label('', 'Tel')}}
        {{Form::text('Tel', '', ['placeholder' => '+0123456789', 'class' => 'form-control'])}} 
    </div>
     
    {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    {!!Form::close()!!}
</body>
</html>

