<?php

include_once("conexion.php");

$sql = "SELECT * FROM Usuarios";
$query = mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <title>Document</title>
</head>

<body class="body3">
  <a style="margin-right:15px;float: right; margin-top:35px;" href="index.php"><button class="btn btn-danger form-control" type="button" style="font-family: Georgia, 'Times New Roman', Times, serif;">Regresar</button></a>
  <form method="post">
    <div class="container">
      <div class="table-responsive">
        <br>

        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Documento</th>
              <th scope="col">Direccion</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>

          <?php
          include('conexion.php');
          $resultado = mysqli_query($conexion, "SELECT * FROM $tabla");
          while ($consulta = mysqli_fetch_array($resultado)) {
            echo
            '
      <tr>
       <td>' . $consulta['id'] . '</td>
        <td>' . $consulta['nombre'] . '</td>
        <td>' . $consulta['documento'] . '</td>
        <td>' . $consulta['direccion'] . '</td>
        <td><a href="actualizar.php?id=' . $consulta['id'] . '"><button type="button" class="btn btn-outline-success">Actualizar</button></a></td>
        <td><a href="eliminar.php?id=' . $consulta['id'] . '"><button type="button" class="btn btn-outline-danger" onclick="return confirmar()">Eliminar</button></a></td>
      </tr>

  </div>
  </div>';
          }
          ?>
        </table>
  </form>

  <script>
    function confirmar() {
      let conf = confirm("¿Estas seguro que deseas eliminar?");
      if (conf == true) {
        return true;
      } else {
        return false;
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>