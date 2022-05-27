<?php
 include 'conec.php';

 try {
     if (isset ($_POST['boton'])) {
        $marca=$_POST['marca'];
        $capaci=$_POST['capacidad'];
        $colo=$_POST['color'];
        $procesa=$_POST['proce'];
        $sql1= "UPDATE equipos SET marca_equipos=:mmar, capacidad_equipos=:mcap, color_equipos=:mcol, procesador_equipos=:mpro WHERE id_equipos =".$_REQUEST['nuevo'].";";
        $resultado= $cadena -> prepare($sql1);
        $resultado -> execute (array(":mmar"=>$marca,":mcap"=>$capaci, ":mcol"=>$colo, ":mpro"=>$procesa));
     }
     ?>
    <script type="text/javascript">window.alert("La informacion del equipo se actualizo con exito, recuerde que ya no puede deshacer los cambios....");window.location="consultar.php"</script>

 <?php
     
 } catch (Exception $e) {
    die ('ALERTA!!! Revise su conexion a la base para generar la actualizacion.... ' . $e-> getMessage () );
} 
?>