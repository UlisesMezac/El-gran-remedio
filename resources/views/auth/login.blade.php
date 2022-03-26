<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/icono.svg" />
    <title>El gran remedio</title>
  </head>


<body>
    <h2>login</h2>
    <form method="POST">
        @csrf
          <div>
            <h5>Cuenta</h5>
            <input name="email" class="input" type="text" id="email">
          </div>

          <div>
            <h5>Contraseña</h5>
            <input name="password"class="input" type="password" id="password">
          </div>

          @error('message')
          <p>*Usuario o contraseña incorrectos, intente de nuevo</p>
          @enderror

         

            <a href="register">¿No tienes cuenta? Registrate</a>
            <br>
            <input type="submit" class="btn" value="Login">   


            <div class="check">
                <div class="">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="pass">
                <div class="">
                  
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Olvido su contraseña?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>    
</body>
</html>





                        