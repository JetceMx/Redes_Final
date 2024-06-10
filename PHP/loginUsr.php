<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  include '../PHP/header.php'
  ?>

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/loginusr.css">

  <div id="contenedor">
    <div class="testbox">
      <h1 style="font-size: bolder;">Iniciar Sesión</h1>

      <form action="/" id="miFormulario3">
        <hr>
        <label id="icon" for="name"><i class="icon-envelope "></i></label>
        <input type="text" name="name" id="LU_email" placeholder="Email" required />

        <label id="icon" for="name"><i class="icon-user"></i></label>
        <input type="password" name="name" id="LU_contra" placeholder="Contraseña" required />

        <p id="parrafo">
          <i class="fa-solid fa-circle-check"></i>
          Si estás de acuerdo con nuestros <a href="#">terminos y condiciones</a> da click en Ingresar.
        </p>
        <div style="text-align: center;">
          <button class="btn btn-primary" style="background-color: #26798E; color: white;" type="submit">Ingresar</button>
        </div>

      </form>

    </div>

  </div>
  <script>
    document.getElementById('miFormulario3').addEventListener('submit', function(event) {
      event.preventDefault();

      const username = document.getElementById('LU_email').value;
      const password = document.getElementById('LU_contra').value;

      if (username === 'usr1@gmail.com' && password === 'chambas') {
        alert('Inicio de sesión exitoso');
        localStorage.setItem("TipoUsr", "chambas");
        // Aquí puedes redirigir al usuario a otra página, por ejemplo:
        window.location.href = '../PHP/Index.php';

      } else {

      }
    });
  </script>
  <script>
    //Verificar si el usuario está autenticado (ejemplo)
    let tipousr = localStorage.getItem('TipoUsr');

    if (tipousr == 'patron' || tipousr == 'chambas') {
      alert('Ya has Iniciado sesion!!!');
      // Si el usuario no está autenticado, redirige a otra página o muestra un mensaje de error
      window.location.href = '../PHP/Index.php'; // Redireccionar a la página de autenticación
      // O muestra un mensaje de error

    }
  </script>
  <?php
  include '../PHP/piepagina.php'
  ?>

</body>

</html>