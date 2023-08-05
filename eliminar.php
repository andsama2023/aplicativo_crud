<?php
// este codigo permite eliminar los usuarios de la base de datos
$id=$_GET['id'];
include_once 'conexion.php';

$sql="DELETE FROM Usuarios WHERE id='$id'";
$query=mysqli_query($conexion,$sql);
if($query){
    echo "<script> alert('Se eliminado con exito')
        window.location.href=`index.php`;
        </script>";
}else{
    echo "Error al eliminar";
}

?>