<?php
include("conexion.php");
if (isset($_POST['register'])){
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['number']) >= 1 &&
        strlen($_POST['pass']) >= 1
        ){
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['number']);
            $password = trim($_POST['pass']);
            $consulta = "INSERT INTO datos(nombre, email, numero, pasword)
                VALUES('$name','$email','$phone','$password')";
            $resultado = mysqli_query($conex, $consulta); // Usando la variable de conexión $conex
            if ($resultado) {
                ?>
                <h3 class="success" >Tu registro se ha completado</h3>
                <?php
            } else{
                ?>
                <h3 class="error" >Ocurrió un error</h3>
                <?php
            }
    }
}
?>
