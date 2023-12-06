<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de usuario</title>
</head>

<body>

  <?php
  include '../PHP/headerUsr.php'
  ?>

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/loginusr.css">

  <div id="contenedor">
    <div class="testbox">
      <h1>Registro</h1>
      <form id="miFormulario">
        <hr>
        <div class="accounttype">
        </div>
        <hr>

        <label id="icon" for="name"><i class="icon-globe"></i></label>
        <input type="text" name="name" id="RU_nombreusr" placeholder="Nombre de Usuario" required />

        <label id="icon" for="name"><i class="icon-user"></i></label>
        <input type="text" name="name" id="RU_nombre" placeholder="Nombre" required />

        <label id="icon" for="name"><i class="icon-envelope "></i></label>
        <input type="text" name="name" id="RU_email" placeholder="Email" required />

        <label id="icon" for="name"><i class="icon-shield"></i></label>
        <input type="password" name="name" id="RU_contra" placeholder="Contraseña" required />

        <br>
        <br>
        <p id="parrafo">Si estas de acuerdo con nuestros <a href="#">terminos y condiciones</a> Da click en Registrar </p>
        <button style="background-color: #1465bb; color: white;" class="button" type="submit">Registro</button>
      </form>
    </div>
  </div>

  <!-- Incluye la biblioteca uuid en tu HTML -->
  <script src="https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js"></script>


  <script>
    console.log("estoy en el script")
    document.getElementById('miFormulario').addEventListener('submit', function(event) {
      event.preventDefault(); // Evita el envío normal del formulario

      // Obtiene los datos del formulario
      const nombreusr = document.getElementById('RU_nombreusr').value;
      const nombre = document.getElementById('RU_nombre').value;
      const email = document.getElementById('RU_email').value;
      const contra = document.getElementById('RU_contra').value;

      // Genera un identificador único para cada registro
      const uid = uuidv4();

      // Envia los datos al servidor
      fetch('http://192.168.1.75:3000/guardarDatosUsuarios', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            uid: uid,
            nombre_usr: nombreusr,
            nombre: nombre,
            email: email,
            contra: contra
          }),
        })
        .then(response => response.text())
        .then(message => {
          console.log(message);
        })
        .catch(error => {
          console.error('Error:', error);
        });
    });
  </script>

  <?php
  include '../PHP/piepagina.php'
  ?>

</body>

</html>