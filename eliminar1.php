<?php
include 'conec.php';
include 'consultar.php';
?>
<body>
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Eliminar
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Alerta de eliminacion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <?php
            try {
                $sql3="SELECT * FROM equipos WHERE id_equipos=".$_REQUEST['cod'].";";
                $resultado1=$cadena->prepare($sql3);
                $resultado1-> execute(array());
                while($consulta1=$resultado1-> fetch (PDO:: FETCH_ASSOC)){
                    echo "Alerta esta seguro que decea eliminar el equipo     ".$consulta1['marca_equipos']. "     de la base de datos.";
                }
            } catch (Exception $e) {
                die (' ALERTA!! Por favor revise su conexion a la base de datos..'. $e->getMessage());
            }
        ?>
        </div>
        <div class="modal-footer">
            <a href="eliminar2.php?cod2=<?php echo $_REQUEST['cod']?>"> <img src="img/confirmar.png"  width="60px"></a>
            <a href="consultar.php"><img src="img/negar.png" width="60px"></a></a>
        </div>
        </div>
    </div>
    </div></th>
        <!--  <table class="simbolos" >
                <tr>
                    <td><a href="eliminar2.php?cod2=<?php echo $_REQUEST['cod']?>"> <img src="img/confirmar.png"  width="60px"></a> </td>
                    <td><a href="javascript:history.go(-1)"> <img src="img/negar.png" width="60px"></a> </td>
                </tr>
         </table> -->

</body>
</html>