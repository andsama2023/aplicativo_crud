<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <title>Document</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-7">
        <form action="validacion_registro_user.php" method="post">
          <br><br>
          <div id="login-box">
            <h1 style="font-family: Georgia, 'Times New Roman', Times, serif;">Registro</h1>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;">Nombre</label><br>
            <input type="text" placeholder="Digite su nombre" class="form-control text-center" name="nombre"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;">Documento</label><br>
            <input type="number" placeholder="Digite su Documento" class="form-control text-center" name="documento"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;">Dirección</label><br>
            <input type="text" placeholder="Digite su Dirección" class="form-control text-center" name="direccion"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;">Contraseña</label>
            <input type="password" placeholder="Digite su contraseña" class="form-control text-center" id="password" name="contrasena"><i style="color:#fff; margin-top:-20px;margin-right:20px" id="eye" class="position-absolute top-5 end-0 translate-middle uil uil-eye-slash showHidePw"></i>
            <br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;">Confirmar</label>
            <input type="password" placeholder="Confirme su contraseña" class="form-control text-center" id="password_show" name="confir_con"><i style="color:#fff; margin-top:-20px; margin-right:20px ; " id="show_eye" class="position-absolute top-5 end-0 translate-middle uil uil-eye-slash showHidePw"></i>
            <br><br>
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <button class="form-control" type="submit" style="font-family: Georgia, 'Times New Roman', Times, serif;" name="btn-regi">Registrate</button><br>
                </div>
                <div class="col-sm-6">
                  <button class="form-control" type="submit" style="font-family: Georgia, 'Times New Roman', Times, serif;" name="btn-iniciar">Ver datos</button>
                </div>
              </div>
            </div>


          </div>
      </div>
    </div>
    </form>
  </div>


  <script>
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