<?php
include 'conec.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/registrar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chau+Philomene+One&display=swap" rel="stylesheet">
    <title>Registrar equipo</title>
</head>
<body>
    

<form action="" name="form1" method="POST">
    <fieldset>
        <legend class="titulo"><td colespan="3" > REGISTRAR EQUIPO</td></legend>
        <table>
            <a href="Bienvenida.php" class="principal">Pagina Principal</a>
             <tr>
               
             </tr>
             <tr>
                 <td> Marca del Equipo:</td>
                 <td><input type="text" name="tipo" require class="box"></td>
             </tr>
             <tr>
                 <td>Capacidad de almacenamiento:</td>
                 <td><input type="text" name="capacidad" require class="box"></td>
             </tr>
             <tr>
                 <td>Color del Equipo:</td>
                 <td><input type="text" name="color" require class="box"></td>
             </tr>
              <tr>
                  <td>Procesador del Equipo:</td>
                  <td><input type="text" name="proce" require class="box"></td>
              </tr>
              <tr>
                  <td colespan="2"> <input type="submit" value="Registrar..." name="boton" class="boton"></td>   
              </tr>
        </table>
    </fieldset>
</form>
  <?php

     if (isset($_POST['boton'])) {
         $vmarca = $_POST['tipo'];
         $vcapa= $_POST['capacidad'];
         $vcolor= $_POST['color'];
         $vproc=$_POST['proce'];

         try {
            $sql="INSERT INTO equipos(id_equipos, marca_equipos, capacidad_equipos, color_equipos,procesador_equipos) VALUES('',:mmar, :mcap, :mcol, :mpro)";
            $resultado = $cadena->prepare ($sql);
            $resultado ->execute (array(":mmar"=> $vmarca, ":mcap"=>$vcapa, ":mcol"=>$vcolor, ":mpro"=>$vproc));
            /* echo "Datos guardados"; */
            ?>
                <script lenguage="javascript">window.alert('Se registro el equipo con exito!!')</script>
         <?php
         } catch (Exception $e) {
           die (' ALERTA!! Por favor revise su conexion a la base de datos..'. $e->getMessage());
         }
     }

  ?>

</body>
</html>