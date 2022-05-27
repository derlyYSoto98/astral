<?php
include 'conec.php';
session_start();
if (isset($_POST["btn1"])){
  if (empty($_POST['textcel']) || empty($_POST['txtcon'])){
    ?>
    <script type="text/javascript">window.alert("Alerta CAMPOS VACIOS!!")</script>
    <?php
  }else{
    
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="fonts/style.css">
  <link rel="icon" href="img/menu.svg">
  <link rel="stylesheet" href="css/menu-icono.css">
  <link rel="stylesheet" href="icons/all.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Stint+Ultra+Condensed&display=swap" rel="stylesheet"> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jaldi&display=swap" rel="stylesheet">
  <title>login</title>
</head>
<body>
  
  <div class="main-conter">
      <form class="conter" action="index.html" method="POST">
        <img class="avatar" src="img/ava.png" width="120px">
        <h1 id="titulo">Iniciar Sesion</h1>
       <div class="box-usuario">
          <i class="fas fa-user" style="color:rgb(89, 85, 85)"></i>
            <input type="text"  placeholder="Ingrese su Cedula" name="textcel" class="input">
       </div> 

        <div  class="box-contraseña">
          <i class="fas fa-lock" style="color:rgb(89, 85, 85)"></i>
           <input type="password" placeholder="Ingrese su contraseña" name="txtcon" class="input2">
        </div>

            <a href="#">Olvidaste tu contraseña?</a>
            <a href="#">Crear cuenta</a>

            <div class="box-boton">
            <input type="submit" value="Ingresar..." name="btn1" class="submi">
         </div>
           
       </form>     
  </div>

  
</body>
</html>