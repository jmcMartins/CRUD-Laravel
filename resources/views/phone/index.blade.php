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

            .form-inline {
              text-align: center;
              font-size: 15px;
            }
            .view-phone {
              
            }
        </style>
    </head>
      <body>
          <div class="content">
              <div class="title m-b-md">
                  Smartphones
              </div>
          </div>

            <form class="form-inline">
              <div class="form-group">
                  <label for="exampleInputName2"><b>Marca: &nbsp;</b></label>
                  <input type="text" class="form-control" id="idMarca">&nbsp;
                  <label for="exampleInputName2"><b>Modelo: &nbsp;</b></label>
                  <input type="text" class="form-control" id="idModelo">&nbsp;
                  <label for="exampleInputName2"><b>Observação: &nbsp;</b></label>
                  <input type="text" class="form-control" id="idObs">&nbsp;
                  <label for="exampleInputName2"><b>Valor: &nbsp;</b></label>
                  <input type="double" class="form-control" id="idValor"">&nbsp;
                  <button type="button" class="btn btn-success">Cadastrar Novo</button>
              </div>
            </form>
            <br>
            <div class='view-phone'>
              <ul class="list-group">
                @forelse($smartphones as $smartphone)
                  <li class="list-group-item">
                    <p><b>Marca:&nbsp;</b>{{$smartphone->marca}}</p>
                    <p><b>Modelo:&nbsp;</b> {{$smartphone->modelo}}</p>
                    <p><b>Valor:&nbsp;</b>R$ {{$smartphone->valor}}</p>
                    <p><b>Observação:&nbsp;</b> {{$smartphone->obs}}</p>
                    <br>
                  </li>
                @empty
                 <p><b>Nenhum Smartphone Cadastrado</b></p>
                @endforelse
              </ul>
            </div>

      </body>
</html>