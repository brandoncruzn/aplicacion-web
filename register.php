<?php
// Conexión a la base de datos
$servername = "localhost"; // Cambia esto por la dirección de tu servidor de base de datos
$username = "usuario"; // Cambia esto por tu nombre de usuario de la base de datos
$password = "contraseña"; // Cambia esto por tu contraseña de la base de datos
$database = "basededatos"; // Cambia esto por el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Procesar el formulario de registro si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $pass = $_POST['pass'];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, email, numero, contraseña) VALUES ('$name', '$email', '$number', '$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso. <a href='login.html'>Iniciar sesión</a>";
    } else {
        echo "Error al registrar: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?> 
