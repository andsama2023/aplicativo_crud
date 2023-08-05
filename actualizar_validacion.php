<?php
// este codigo permite actualizar los datos del usuario
if (isset($_POST['btn-act'])) {
    $id = $_POST['id'];
    $nom = $_POST['nombre'];
    $docu = $_POST['documento'];
    $dir = $_POST['direccion'];
    $con = $_POST['contrasena'];
    $confircon = $_POST['confir_con'];
    include("conexion.php");

    $nom = mysqli_real_escape_string($conexion, $nom);
    $docu = mysqli_real_escape_string($conexion, $docu);
    $dir = mysqli_real_escape_string($conexion, $dir);
    $con = mysqli_real_escape_string($conexion, $con);
    $confircon = mysqli_real_escape_string($conexion, $confircon);

    $sql = "UPDATE Usuarios SET nombre ='$nom', documento='$docu', direccion='$dir', contrasena='$con' WHERE id=$id";
    if ($con != $confircon) {
        echo "<script> alert('Las contraseñas no son iguales')
        window.location.href='actualizar.php';</script>";
    } else {
        if ($nom == "" || $docu == "" || $dir == "" || $con == "" || $confircon == "") {
            echo "<script> alert('Digite todos los campos')
        window.location.href='actualizar.php';</script>";
        } else {
            $query = mysqli_query($conexion, $sql);
            if ($query) {
                echo "<script> alert('Datos actualizados')
    window.location.href='userData.php';
    </script>";
            } else {
                echo "<script> alert('Error al actualizar los datos el documento ya existe')
    window.location.href='actualizar.php';</script>";
            }
        }
    }
}
