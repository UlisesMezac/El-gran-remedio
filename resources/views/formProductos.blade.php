<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Registrar producto</h1>
    <form method="POST" enctype="multipart/form-data">
        @csrf

        
          <label for="form-control">Nombre<FONT COLOR="red">* </FONT></label>
          <input type="curp"  class="form-control" name="NombreProducto" >
        
          <label for="form-control">Procentaje de alcohol<FONT COLOR="red">* </FONT></label>
          <input type="curp" class="form-control" name="PorcAlcohol" >
        
          <label for="form-control">Presentación<FONT COLOR="red">* </FONT></label>
          <input type="curp"  class="form-control" name="Presentacion" >
        
      
          <label for="form-control">Foto</label>
          <input type="file" NAME="Imagen" title="seleccione una foto " accept="image/*">
    
          <label for="form-control">Descripcion<FONT COLOR="red">* </FONT></label>
          <input type="text" class="form-control" name="Descripcion" >
  



          <button type="submit">Registrar</button>
    </form>
</body>
</html>