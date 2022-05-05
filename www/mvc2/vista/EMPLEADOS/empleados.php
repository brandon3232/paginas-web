<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $data["titulo"]; ?></title>
</head>
<body>


  <h1> <?php echo $data["titulo"];    ?></h1>
    <table  class="table table-striped">
      
       <thead>
           <tr>
               <th>Nombre</th>
               <th>Edad</th>
           </tr>
       </thead>
       <tbody>
             <a href="carga.php?c=empleados&a=nuevo">Agregar</a>
           <?php
              foreach($data["empleados"] as $dato){
                  echo "<tr>";
                  echo "<td>". $dato["Nombre"]."</td>";
                  echo "<td>". $dato["edad"]."</td>";
                  echo "<td> <a href='carga.php?c=empleados&a=eliminar&id=".$dato["id"]."'> Eliminar </a></td>";
                  echo "<td> <a href='carga.php?c=empleados&a=modificar&id=".$dato["id"]."'> Modificar </a></td>";
                  echo "</tr>";
                    
              }
              
            ?>
       </tbody>
    </table>
    
</body>
</html>
