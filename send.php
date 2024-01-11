<?php

include("conexion.php");



if(isset($_POST['send'])) {

    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['password']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['tarjeta']) >= 1 
    ) {
        $name = trim($_POST['name']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);
        $tarjeta = trim($_POST['tarjeta']);
        $consulta = "INSERT INTO datos(nombre, contraseña, email, tarjeta) 
                     VALUES ('$name', '$password', '$email', '$tarjeta')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado) {
            ?>
              <h3 class="success">Tu registro se ha completado siuu</h3>
            <?php
        } else {
            ?>
              <h3 class="error">Ocurrió un error chutaaa</h3>
            <?php
        }
    } else {
        ?>
              <h3 class="error">Llena todos los espacios mongoloide</h3>
            <?php
            
    }
}




?>