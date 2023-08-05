<?php
// este codigo es para hacer la conexion con base de datos
$host="127.0.0.1";
$usuario="root";
$pass="";
$database= "psicologia";

$conexion = new mysqli($host, $usuario, $pass, $database);

$tabla="Usuarios";

if ($conexion->connect_error) {
    echo "Error de conexión";
}
?> 