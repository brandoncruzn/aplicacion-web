<?php
    $hostname="viaduct.proxy.rlwy.net";
	$username="root";
	$password="oiUfJbGYmCHxFQAMzvxRJdwBfNgiVgcg";
	$dbname="railway";
	$usertable="personas"
// Create connection
$con = mysqli_connect('HOSTNAME','USERNAME','PASSWORD'); o morir ("html>script language='JavaScript'>alert('¡No es posible conectarse a la base de datos! Vuelve a intentarlo más tarde.'),history.go(-1)/script>/html>");
	mysqli_select_db($dbname);
	if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($con);
?>
