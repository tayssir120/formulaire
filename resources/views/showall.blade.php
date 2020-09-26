<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php use App\Models\Formulaire; ?>
</head>
<body>
    {!!Form::open(['action' => 'App\Http\Controllers\FormulaireController@index', 'method' => 'GET'])!!}
    {{ csrf_field() }}
    <div class="input-group">
        {{Form::label('', 'CIN')}}
      <?php $CIN = Formulaire::get('CIN'); ?>
    </div>
    <div class="form-group">
       {{Form::label('', 'Name')}}
      <?php $Name = Formulaire::get('Name'); ?>
    </div>
    <div class="form-group">
       {{Form::label('', 'Prenom')}}
       <?php $Prenom = Formulaire::get('Prenom'); ?>
    </div>
    <div class="form-group">
        {{Form::label('', 'email')}}
        <?php $CIN = Formulaire::get('email'); ?>
    </div>
    <div class="form-group">
        {{Form::label('', 'Tel')}}
    <?php $Tel = Formulaire::get('Tel'); ?>
    </div>
    {!!Form::close()!!}
</body>
</html>