<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="icon" href="imagenes/icono.svg" />
    <link rel="stylesheet" href="css/estilosRegistro.css">
    <title>Registro</title>
</head>
<body>

    <form class="mt-4 " method="POST" enctype="multipart/form-data">
    @csrf
       
    <h1>Información personal</h1>
        <div class="row g-3  align-items-center">
            <div class="col-auto form-floating mb-5">
                <input type="text" class="form-control" style=" width: 300px; height:50px"  
                id="floatingPassword" placeholder="Password" name="name"  value="{{old('name')}}">
              
                {!! $errors->first('name', '<small>:message</small><br>') !!}

                <label for="floatingPassword">Nombre(s):</label>
            </div>

           

            <div class="col-auto form-floating mb-5">
                <input type="text" class="form-control" style=" width: 300px; height:50px" id="floatingPassword" 
                placeholder="Password" name="apellidoP"  value="{{old('apellidoP')}}">

                {!! $errors->first('apellidoP', '<small>:message</small><br>') !!}


                <label for="floatingPassword">Apellido Paterno:</label>
            </div>

         

            <div class="col-auto form-floating mb-5">
                <input type="text" class="form-control" style=" width: 300px; height:50px" id="floatingPassword" 
                placeholder="Password" name="apellidoM"  value="{{old('apellidoM')}}">

                {!! $errors->first('apellidoM', '<small>:message</small><br>') !!}

                <label for="floatingPassword">Apellido Materno:</label>
            </div>
        </div>


        <div class="row g-3  align-items-center">
            <div class="col-auto form-floating mb-5">
                <input type="email" class="form-control" style=" width: 300px; height:50px"  id="floatingPassword" 
                placeholder="Password" name="email"  value="{{old('email')}}">

                {!! $errors->first('email', '<small>:message</small><br>') !!}

                <label for="floatingPassword">Correo:</label>
            </div>


            <div class="col-auto form-floating mb-5">
                <input type="password" class="form-control" style=" width: 200px; height:50px" id="floatingPassword" 
                placeholder="Password"  name="password"  value="{{old('password')}}">

                {!! $errors->first('password', '<small>:message</small><br>') !!}

                <label for="floatingPassword">Contraseña:</label>
            </div>

        
            <div class="col-auto form-floating mb-5">
                <input type="password" class="form-control" style=" width: 200px; height:50px" id="floatingPassword" 
                placeholder="Password"  name="password_confirmation">

                {!! $errors->first('password', '<small>:message</small><br>') !!}

                <label for="floatingPassword">Confirmar contraseña:</label>
            </div>

         

            <div class="col-auto form-floating mb-5">
                <input type="number" class="form-control" style=" width: 180px; height:50px" id="floatingPassword" 
                placeholder="Password" name="telefono"  value="{{old('telefono')}}" >

                {!! $errors->first('telefono', '<small>:message</small><br>') !!}

                <label for="floatingPassword">Teléfono:</label>
            </div>

        </div>


        <h1>Domicilio</h1>
        <div class="row g-3  align-items-center">

             <div class="col-auto ">
                <select class="form-select form-select-sm mb-5" aria-label=".form-select-sm example" style=" width: 350px; height:50px" 
                name="estado"  value="{{old('estado')}}">
                    <option selected>Estado:</option>
                    <option value="1">Aguascalientes</option>
                    <option value="2">Baja California</option>
                    <option value="3">Baja California Sur</option>
                    <option value="4">Campeche</option>
                    <option value="5">Chiapas</option>
                    <option value="6">Chihuahua</option>
                    <option value="7">Ciudad de México</option>
                    <option value="8">Durango</option>
                    <option value="9">Estado de México</option>
                    <option value="10">Guanajuato</option>
                    <option value="11">Guerrero</option>
                    <option value="12">Hidalgo</option>
                    <option value="13">Jalisco</option>
                    <option value="14">Michoacán</option>
                    <option value="15">Morelos</option>
                    <option value="16">Nayarit</option>
                    <option value="17">Oaxaca</option>
                    <option value="18">Puebla</option>
                    <option value="19">Querétaro</option>
                    <option value="20">Quintana Roo</option>
                    <option value="21">San Luis Potosi</option>
                    <option value="22">Sinaloa</option>
                    <option value="23">Sonora</option>
                    <option value="24">Tabasco</option>
                    <option value="25">Tamaulipas</option>
                    <option value="26">Tlaxcala</option>
                    <option value="27">Veracruz</option>
                    <option value="28">Yucatán</option>
                    <option value="29">Zacatecaz</option>
                    
                </select>

               
            </div>

          

            <div class="col-auto form-floating mb-5">
                <input type="number" class="form-control" style=" width: 150px; height:50px" id="floatingPassword" 
                placeholder="Password"  name="cp"  value="{{old('cp')}}">

                {!! $errors->first('cp', '<small>:message</small><br>') !!}

                <label for="floatingPassword">Código postal:</label>
            </div>

         
            <div class="col-auto form-floating mb-5">
                <input type="text" class="form-control" style=" width: 400px; height:50px" id="floatingPassword" 
                placeholder="Password" name="colonia"  value="{{old('colonia')}}">

                {!! $errors->first('colonia', '<small>:message</small><br>') !!}

                <label for="floatingPassword">Colonia:</label>
            </div>

       
        </div>

        <div class="row g-3  align-items-center">
            <div class="col-auto form-floating mb-5">
                <input type="text" class="form-control" style=" width: 400px; height:50px" id="floatingPassword" 
                placeholder="Password" name="calle"  value="{{old('calle')}}">

                {!! $errors->first('calle', '<small>:message</small><br>') !!}

                <label for="floatingPassword">Calle:</label>
            </div>

          

            <div class="col-auto form-floating mb-5">
                <input type="number" class="form-control" style=" width: 150px; height:50px"  id="floatingPassword" 
                placeholder="Password" name="noEx"  value="{{old('noEx')}}" >

                {!! $errors->first('noEx', '<small>:message</small><br>') !!}

                <label for="floatingPassword">Número Exterior:</label>
            </div>


            <div class="col-auto form-floating mb-5">
                <input type="number" class="form-control" style=" width: 150px; height:50px" id="floatingPassword" 
                placeholder="Password" name="noIn"  value="{{old('noIn')}}" >
                
                {!! $errors->first('noEx', '<small>:message</small><br>') !!}

                <label for="floatingPassword">Número interior:</label>
               
            </div>    
          
        </div>

        <button type="submit"  class="btn btn-outline-success ">Registrar</button>
       
    </form>
</body>
</html>