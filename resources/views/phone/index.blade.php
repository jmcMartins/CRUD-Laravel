<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Smartphones</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 65px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }

            .view-cad {
              text-align: center;
              font-size: 15px;
            }
            .pos-botao {
              float: right;
              clear: both;
              margin-top: -85px;
            }
            .pos-botao * {
              width: 100px;
              margin-bottom: 5px;
            }
        </style>
    </head>
      <body>
            <div class="content">
                <div class="title m-b-md">
                    Smartphones
                </div>
            </div>

            <div class="view-cad">
                  <b>
                  {{ Form::open(['url' => 'smartphone', 'method' => 'post']) }}
                    {{ Form::label('marca', 'Marca:')}}
                    {{ Form::text('marca', NULL)}}
                    {{ Form::label('modelo','Modelo:')}}
                    {{ Form::text('modelo', NULL)}}
                    {{ Form::label('obs','Observação:')}}
                    {{ Form::text('obs', NULL)}}
                    {{ Form::label('valor','Valor:')}}
                    {{ Form::text('valor', NULL)}}
                    {{ Form::submit('Cadastrar')}}
                  {{ Form::close() }}
                  </b>
            </div>
            <br>
            <div class='view-phone'>
              <ul class="list-group">
                @forelse($smartphones as $smartphone)
                  <li class="list-group-item">
                    <p><b>Marca:&nbsp;</b>{{$smartphone->marca}}</p>
                    <p><b>Modelo:&nbsp;</b> {{$smartphone->modelo}}</p>
                    <p><b>Observação:&nbsp;</b> {{$smartphone->obs}}</p>
                    <p><b>Valor:&nbsp;</b>R$ {{$smartphone->valor}}</p>
                    <div class="pos-botao" >
                      <a href='{{url("/smartphone/{$smartphone->id}/edit")}}'><button>Editar</button></a>
                      &nbsp
                      {{ Form::open(['url' => 'smartphone/'.$smartphone->id, 'method' => 'delete']) }}
                        <button>Apagar</button>
                      {{ Form::close() }}
                    </div>
                  </li>
                  <hr>
                @empty
                 <p><b>Nenhum Smartphone Cadastrado</b></p>
                @endforelse
              </ul>
            </div>
      </body>
</html>