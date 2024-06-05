<?php
/*
	CRUD con MySQL y PHP
	@author parzibyte
	@date 2018-02-12
*/
$contraseña = "oiUfJbGYmCHxFQAMzvxRJdwBfNgiVgcg";
$usuario = "root";
$nombre_base_de_datos = "railway";
try{
	$base_de_datos = new PDO('mysql://root:oiUfJbGYmCHxFQAMzvxRJdwBfNgiVgcg@viaduct.proxy.rlwy.net:26319/railway;dbname=railway' . $nombre_base_de_datos, $usuario, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>
