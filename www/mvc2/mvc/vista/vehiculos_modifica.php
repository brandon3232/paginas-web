<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php?c=vehiculos&a=actualizar" method="POST">

 
<label for="placa">Placa</label>   
 <input type="hidden" name="id" value="<?php echo $data["vehiculos"]["id"]?>"> 
<input type="text" id="Placa" name="placa" value="<?php echo $data["vehiculos"]["Placa"]?>">
<label for="marca">Marca</label>    
<input type="text" id="marca" name="marca" value="<?php echo $data["vehiculos"]["Marca"]?>">
<label for="mod" > Modelo</label>    
<input type="text" id="mod" name="modelo" value="<?php echo $data["vehiculos"]["Modelo"]?>">
<label for="anio">Año</label>    
<input type="text" id="anio" name="anio" value="<?php echo $data["vehiculos"]["anio"]?>">
<label for="color">Color</label>    
<input type="text" id="color" name="color" value="<?php echo $data["vehiculos"]["color"]?>">
<input type="submit" value="Actualizar">
</form>
    
</body>
</html>