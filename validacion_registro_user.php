<?php
// este codigo permite guardar usuarios en la base de datos
include('conexion.php');
$nom = "";
$doc = "";
$dir = "";
$con = "";
$confCon = "";
if (isset($_POST['btn-regi'])) {
    $nom = $_POST['nombre'];
    $doc = $_POST['documento'];
    $dir = $_POST['direccion'];
    $con = $_POST['contrasena'];
    $confCon = $_POST['confir_con'];
    if (isset($_POST['btn-regi'])) {
        $nom = $_POST['nombre'];
        $doc = $_POST['documento'];
        $dir = $_POST['direccion'];
        $con = $_POST['contrasena'];
        $confCon = $_POST['confir_con'];

        if ($con <> $confCon) {
            echo "<script> alert('Las contraseñas no son iguales')
        window.location.href='index.php';</script>";
        } else {
            if ($nom == "" || $doc == "" || $dir == "" || $con == "" || $confCon == "") {
                echo "<script> alert('Digite todos los campos')
        window.location.href='index.php';</script>";
            } else {
                $consulta = "SELECT * FROM Usuarios WHERE documento='$doc'";
                $resultado = mysqli_query($conexion, $consulta);
                $existe_documento = mysqli_num_rows($resultado) > 0;

                if ($existe_documento) {
                    echo "<script> alert('El documento ya está registrado, por favor ingresa otro documento')
                window.location.href='index.php';</script>";
                } else {
                    $result = $conexion->prepare("INSERT INTO Usuarios(nombre,documento,direccion,contrasena)VALUES(?,?,?,?)");
                    $result->bind_param("siss", $nom, $doc, $dir, $con);
                    $result->execute();
                    echo "<script> alert('Se ha registrado exitosamente')
                window.location.href='userData.php';</script>";
                }
            }
        }
    }
}

if (isset($_POST['btn-iniciar'])) {
    $consulta = "SELECT * FROM Usuarios";
    echo "<script> alert('Usted a ingresado con exito');
        window.location.href = 'userData.php';
        </script>";
    $resultado = mysqli_query($conexion, $consulta);
}
