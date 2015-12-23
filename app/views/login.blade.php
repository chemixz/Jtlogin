<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        {{ HTML::style('assets/css/bootstrap.css'); }}
        {{ HTML::style('assets/css/formstyle.css'); }}
    </head>
    <body>
        

        <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                     <legend>Iniciar sesión</legend>
                      @if(Session::has('mensaje_error'))
                        <div class="alert alert-danger fade in">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">X</button>
                            <p>{{ Session::get('mensaje_error') }}</p>
                        </div>
                      @endif
                  {{ Form::open(array('url' => '/login')) }}
                      <div class="form-group">
                        {{ Form::label('usuario', 'Nombre de usuario') }}
                        {{ Form::text('username', Input::old('username'), array('class' => 'form-control')); }}
                      </div>
                      <div class="form-group">
                        {{ Form::label('contraseña', 'Contraseña') }}
                        {{ Form::password('password', array('class' => 'form-control')); }}
                      </div>
                      <div class="checkbox">
                        <label>
                            Recordar contraseña
                            {{ Form::checkbox('rememberme', true) }}
                        </label>
                      </div>
                        {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
                   {{ Form::close() }}
                  <div class="login-help">
                    <a href="#">Forgot Password</a>
                  </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery.js"></script>
        {{ HTML::script('assets/js/bootstrap.js'); }}
    </body>
</html>



