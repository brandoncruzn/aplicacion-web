<?php
    include("conexion.php");
    if (isset($_POST['register'])){
        if(
            strlen($_POST['name']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['number']) >= 1 &&
            strlen($_POST['pasword']) >= 1
            ){
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $phone = trim($_POST['number']);
                $pasword = trim($_POST['pasword']);
                $consulta = "INSERT INTO datos(nombre, email, numero, pasword)
                    VALUES('$name','$email','$phone','$pasword')";
                $resultado = mysqli_connect($conex, $consulta);
                if ($resultado) {
                    ?>
                    <h3 class="succes" >Tu resgistro se a completado</h3>
                    <?php
                } else{
                    ?>
                    <h3 class="succes" >Ocurrio un error</h3>
                    <?php
                }
        }
    }
<?