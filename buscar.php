<?php
 include 'conec.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/buscar.css">
    <title>Busqueda Equipos</title>
</head>
<body>
    <div class="titulo">
    <h2>Buscar Equipo Registrados</h2>
    <h5 class="til2">La busqueda se genera por marca del equipo</h5>
</div>
<form action="" method="POST">
    <table class="tabla3" >
       <tr>
           <td><input type="text" name="txtbuscar" class="box"></td>
           <td><input type="submit" value="Buscar..." name="btnbuscar"></td>
       </tr>
    </table>
  </form>

  <?php
    if (isset($_POST['btnbuscar'])) {
    /* echo "Buscando...."; */
    $busqueda=$_POST['txtbuscar']; /* echo $busqueda; */
        if ($busqueda != "") {
        ?>
           <table width="700px">
             <tr>
                 <td class="box2"> Marca del equipo</td>
                 <td class="box2">Capacidad de alcenamiento</td>
                 <td class="box2">Color del equipo</td>
                 <td class="box2">Procesador del Equipo</td>
                
             </tr>
        <?php
        try {
            $sql="SELECT * FROM equipos WHERE marca_equipos =?";
            $resultado = $cadena->prepare($sql);
            $resultado -> execute(array($busqueda));
            $contador = $resultado -> rowCount();
            if ($contador >= 1) {
                while ($consulta = $resultado->fetch(PDO:: FETCH_ASSOC)){
                ?>
                   <tr>
                       <td class="box3"><?php echo $consulta['marca_equipos'];?></td>
                       <td class="box3"><?php echo $consulta['capacidad_equipos'];?></td>
                       <td class="box3"><?php echo $consulta['color_equipos'];?></td>
                       <td class="box3"><?php echo $consulta['procesador_equipos'];?></td>
                   </tr>
                 <?php
                }
               }else{
                   ?>
                   <label>
                    <?php 
                   echo "<center>No se encontraron datos que concuerden con la busqueda, por verifique la informacion....</center>";
               }
        } catch (Exception $e) {
            die ('ALERTA!!! Error al ejecutar la busqueda.... ' . $e-> getMessage () );
        }
        }else{
            ?>
            <label>
                <?php
            echo "<center>La casilla esta vacia por favor ingrese un dato para buscar..</center>";
            ?>
            </label>
            <?php
        }
    }
  ?>
     </table> 

       <a href="coneditorial.php" class="regresar">Regresar a consultas</a>

</body>
</html>