<?php

try {
    $cadena=new PDO ('mysql:host=localhost; dbname=astral', 'root','');
   /*  echo "La conexion a sido un exitoo!!!";  */
} catch (Exception $e) {
    die (' ALERTA!! Por favor revise su conexion a la base de datos..'. $e->getMessage());
}
?>