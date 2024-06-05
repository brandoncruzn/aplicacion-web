<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("base_de_datos.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefono = $_POST['number'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if ($pass != $cpass) {
        echo "Las contraseñas no coinciden.";
    } else {
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO datos (nombre, email, numero, password) VALUES ('$name', '$email', '$number', '$hashed_password')";

        if (mysqli_query($conex, $sql)) {
            echo "Registro exitoso.";
        } else {
            echo "Error al registrar el usuario: " . mysqli_error($conex);
        }
    }
} else {
    echo "Acceso denegado.";
}
?>
