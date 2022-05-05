<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $data["titulo"]; ?> Disponibles</title>
</head>
<body>


  <h1> <?php echo $data["titulo"]. " Disponibles";    ?></h1>
    <table  class="table table-striped">
      
       <thead>
           <tr>
               <th>Placa</th>
               <th>Marca</th>
               <th>Modelo</th>
               <th>Año</th>
               <th>Color</th>
           </tr>
       </thead>
       <tbody>
           <?php
              foreach($data["vehiculos"] as $dato){
                  echo "<tr>";
                  echo "<td>". $dato["Placa"]."</td>";
                  echo "<td>". $dato["Marca"]."</td>";
                  echo "<td>". $dato["Modelo"]."</td>";
                  echo "<td>". $dato["anio"]."</td>" ;
                  echo "<td>". $dato["color"]."</td>";
                  echo "</tr>";
                    
              }
              
            ?>
       </tbody>
    </table>
    
</body>
</html>
