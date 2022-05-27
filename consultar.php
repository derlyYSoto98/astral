<?php
include 'conec.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/consulta.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <title>Consultar Equipos</title>
</head>
<body>
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<button class="btn btn-danger">kkk<</button>    

       <table>
       <fieldset>
        <legend class="titulo"> Equipos Registrados </legend>
          <tr >
              <a href="registrar.php" class="reg">Registrar Equipo</a>
              <a href="buscar.php" class="buscar"> <img src="img/buscar.png" width="50px"> Buscar...</a>
          </tr>
          <tr>
              <th class="box">Marca del Equipo</th>
              <th class="box">Capacidad de almacenamiento</th>
              <th class="box">Color del Equipo</th>
              <th class="box">Procesador del Equipo</th>
              <th></th>
              <th></th>
          </tr>
          <tr>
               <?php
                  try {

                      $sql1="SELECT * FROM equipos";
                      $resultado=$cadena->prepare($sql1);
                      $resultado->execute(array());
                      while ($consulta = $resultado -> fetch (PDO:: FETCH_ASSOC)){
                       ?>
                       <tr>
                           <th> <?php echo $consulta['marca_equipos'];?></th>
                           <th> <?php echo $consulta['capacidad_equipos'];?></th>
                           <th> <?php echo $consulta['color_equipos'];?></th>
                           <th> <?php echo $consulta['procesador_equipos'];?></th>
                           <th>
                           <a id="eliminar" href="eliminar1.php?cod=<?php echo $consulta ['id_equipos']?>" > <img src="img/elimina.png" width="40px"> </a> </th>
                           <th><a href="actualizar1.php?cod1=<?php echo $consulta ['id_equipos']?>"> <img src="img/actualiza.png" width="40px"> </a></th>
                       </tr> 
                       <?php  
                      }
                  } catch (Exception $e) {
                    die (' ALERTA!! Por favor revise su conexion a la base de datos..'. $e->getMessage());
                  } 
                ?>
          </tr>
       </table>
    </fieldset>

    
</body>
</html>