<?php
include 'conec.php';

try {
    $sql1= "DELETE FROM equipos WHERE id_equipos=".$_REQUEST['cod2'].";";
    $resultado=$cadena->prepare($sql1);
    $resultado-> execute(array());
    ?>
     <script type="text/javascript">window.alert("El equipo fue eliminado del sistema con exito!");
     window.location="consultar.php" </script>
    <?php
} catch (Exception $e) {
    die (' ALERTA!! Por favor revise su conexion a la base de datos..'. $e->getMessage());
}
?>