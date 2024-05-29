<?php
class conexion{
    function ConexionBD(){
        $host='localhost';
        $dbname='datos';
        $username='sa';
        $pasword='root';
        $puerto=1413;

        try{
            $conn=new PDO ("sqlsrv:Server=$host,$puerto;Database=$dbname",$username,$pasword);
            echo "se conecto correctamente a la base de datos"
        }
        catch(PDOExepcion $exp) {
            echo ("no se pudo conectar con la base de datos: $dbname,error: $exp")            
        }
        return $conn;
        
    }
}
?>
