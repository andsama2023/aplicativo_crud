<?php
include_once 'conexion.php';
$id = $_GET['id'];

$sql = "SELECT * FROM Usuarios WHERE id='$id'";
$query = mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <title>Document</title>
</head>

<body class="body4">
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-7">
        <form action="actualizar_validacion.php" method="POST">
          <br><br>
          <div id="login-box">
            <h1 style="font-family: Georgia, 'Times New Roman', Times, serif; color:#fff;">Actualizar</h1>
            <input type="text" hidden name="id" value="<?php echo $row['id'] ?>"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;color:#fff;">Nombre</label><br>
            <input type="text" placeholder="Digite su nombre" class="form-control text-center" name="nombre" value="<?php echo $row['nombre'] ?>"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;color:#fff;">Documento</label><br>
            <input type="number" placeholder="Digite su Documento" class="form-control text-center" name="documento" value="<?php echo $row['documento'] ?>"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;color:#fff;">Dirección</label><br>
            <input type="text" placeholder="Digite su Dirección" class="form-control text-center" name="direccion" value="<?php echo $row['direccion'] ?>"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;color:#fff;">Contraseña</label>
            <input type="password" placeholder="Digite su contraseña" class="form-control text-center" id="password" name="contrasena"><i style="color:#fff; margin-top:-20px;margin-right:20px" id="eye" class="position-absolute top-5 end-0 translate-middle uil uil-eye-slash showHidePw"></i>
            <br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;color:#fff;">Confirmar</label>
            <input type="password" placeholder="Confirme su contraseña" class="form-control text-center" id="password_show" name="confir_con"><i style="color:#fff; margin-top:-20px; margin-right:20px ; " id="show_eye" class="position-absolute top-5 end-0 translate-middle uil uil-eye-slash showHidePw"></i>
            <br><br>
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <button class="form-control" type="submit" style="font-family: Georgia, 'Times New Roman', Times, serif;" name="btn-act">Actualizar</button>
                </div>
                <div class="col-sm-6">
                  <a style="text-decoration: none;" href="userData.php?documento=<?php echo $row['documento']; ?>">
                    <button class="form-control" type="button" style="font-family: Georgia, 'Times New Roman', Times, serif;">Regresar</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    </form>
  </div>

  <script>
    // este codigo permite vizualizar la contraseña
    var ojo = document.getElementById('eye');
    var Input = document.getElementById('password');
    ojo.addEventListener("click", function() {
      if (Input.type == "password") {
        Input.type = "text";
        ojo.style.opacity = 0.8;
      } else {
        Input.type = "password";
        ojo.style.opacity = 0.2;
      }
    })

    var eye = document.getElementById('show_eye')
    var Inputs = document.getElementById('password_show');
    eye.addEventListener("click", function() {
      if (Inputs.type == "password") {
        Inputs.type = "text";
        eye.style.opacity = 0.8;
      } else {
        Inputs.type = "password";
        eye.style.opacity = 0.2;
      }
    })
  </script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="jquery.js"></script>
</body>

</html>