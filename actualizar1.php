<?php
 include 'conec.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/actualiza.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
    <title>Actualizar</title>
</head>
<body>
    
    <?php
         try {
             $sql2 = "SELECT * FROM equipos where id_equipos=".$_REQUEST['cod1'].";";
             $resultado=$cadena->prepare($sql2);
             $resultado->execute (array());
             while ($consulta=$resultado-> fetch ( PDO::FETCH_ASSOC)) {
             ?>
                <form  name="form" action="actualizar2.php?nuevo=<?php echo $_REQUEST['cod1'];?> " method="POST" >
                <td  class="title"> <span> Actualizando informacion del equipo - <?php echo $consulta['marca_equipos']; ?></span> </td > 
                <fieldset>
                     <table class="tabla">
                     <tr>
                        <th class="columna">Marca del Equipo:   </th>
                        <th > <input type="text" name="marca" require value="<?php echo $consulta['marca_equipos']; ?>" class="opciones" > </th>
                     </tr>
                     <tr>
                        <th class="columna" >Capacidad de almacenamiento:   </th>
                        <th> <input type="text" name="capacidad" require value="<?php echo $consulta['capacidad_equipos']; ?>" class="opciones"  > </th>
                     </tr>
                     <tr>
                        <th class="columna">Color:   </th>
                        <th> <input type="text" name="color" require  value="<?php echo $consulta['color_equipos']; ?>" class="opciones"  > </th>
                     </tr>
                     <tr>
                        <th class="columna">Procesador:   </th>
                        <th> <input type="text" name="proce" require  value="<?php echo $consulta['procesador_equipos']; ?>" class="opciones"  > </th>
                     </tr>
                     <tr>
                         <td colespan="2"  > <input type="submit" name="boton" value="Actualizar..." class="boton">  </td>
                     </tr>
                          </table>
                          </fieldset>
                      </form>
              <?php
             }
         } catch (Exception $e) {
            die ('ALERTA!!! Revise su conexion a la base para generar la consulta.... ' . $e-> getMessage () );
        } 
         
         ?>

</body>
</html>