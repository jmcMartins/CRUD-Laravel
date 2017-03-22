<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<h1>EXCLUIR POST</h1>
	{{ Form::open(['url' => "post/{$post->id}", 'method' => 'put']) }}

	{{ Form::label('title', 'Titulo:')}}
	{{ Form::text('title', $post->title,['placeholder'=>'Titulo do Post'])}}
	{{ Form::label('content','Texto do Post')}}
	{{ Form::textarea('content', $post->content, ['plateholder'=>'Texto do Post'])}}
	{{ Form::submit('Deletar')}}


	{{ Form::close() }}
</body>
</html>