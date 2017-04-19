<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login | Investindo</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    
  </head>
  <body>

    <section id="conteudo-view" class="login">


      <h1>Investindo</h1>
        <h3>O nosso Gerenciados de Investimento</h3>

        {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}
          <p>Acesse o Sistema</p>

          <label>{!! Form::text('username', null,['placeholder' => 'Usuário', 'class' => 'input']) !!}</label>
          <label>{!! Form::password('password', ['placeholder' => 'Senha', 'class' => 'input']) !!}</label>

          {!! Form::submit('Entrar') !!}

        {!! Form::close() !!}

    </section>

  </body>
</html>