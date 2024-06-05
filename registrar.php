<?php
#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$name = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['number'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

if ($pass != $cpass) {
        echo "Las contraseñas no coinciden.";
    } else {
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

/*
	Al incluir el archivo "base_de_datos.php", todas sus variables están
	a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
	copiado y pegado el código
*/
$sentencia = $base_de_datos->prepare("INSERT INTO personas(name, email, number, pass, cpass) VALUES (?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $email, $telefono, $pass, $cpass]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if($resultado === TRUE) echo "Registro Exitoso";
else echo "Algo salió mal. Por favor verifica la información ingresada";


?>
