<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="carga.php?c=empleados&a=actualizar" method="POST">

 
<label for="nombre">Nombre</label>   
 <input type="hidden" name="id" value="<?php echo $data["Empleados"]["id"]?>"> 
<input type="text" id="nombre" name="nombre" value="<?php echo $data["Empleados"]["Nombre"]?>">
<label for="edad">Edad</label>    
<input type="text" id="edad" name="edad" value="<?php echo $data["Empleados"]["edad"]?>">

<input type="submit" value="Actualizar">
</form>
    
</body>
</html>