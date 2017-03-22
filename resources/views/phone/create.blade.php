<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<h1>NOVO POST</h1>
	{{ Form::open(['url' => 'posts', 'method' => 'post']) }}

	{{ Form::label('title', 'Titulo:')}}
	{{ Form::text('title', NULL,['placeholder'=>'Titulo do Post'])}}
	{{ Form::label('content','Texto do Post')}}
	{{ Form::textarea('content', NULL, ['plateholder'=>'Texto do Post'])}}
	{{ Form::submit('Salvar')}}


	{{ Form::close() }}
</body>
</html>