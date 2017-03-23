<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>EDITAR SMARTPHONE</h1>
	{{ Form::open(['url' => "smartphone/{$smartphone->id}", 'method' => 'put']) }}
        {{ Form::label('marca', 'Marca:')}}
        {{ Form::text('marca', $smartphone->marca)}}
        {{ Form::label('modelo','Modelo:')}}
        {{ Form::text('modelo', $smartphone->modelo)}}
        {{ Form::label('obs','Observação:')}}
        {{ Form::text('obs', $smartphone->obs)}}
        {{ Form::label('valor','Valor:')}}
        {{ Form::text('valor', $smartphone->valor)}}
        {{ Form::submit('Salvar')}}
     {{ Form::close() }}
</body>
</html>