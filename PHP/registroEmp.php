<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  include '../PHP/headerEmp.php'
  ?>

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/loginusr.css">

  <div id="contenedor">
    <div class="testbox">
      <h1>Registro</h1>

      <form action="/" id="miFormulario2">
        <hr>
        <div class="accounttype">
        </div>
        <hr>

        <label id="icon" for="name"><i class="icon-user"></i></label>
        <input type="text" name="name" id="RE_nombre" placeholder="Nombre" required />

        <label id="icon" for="name"><i class="icon-globe"></i></label>
        <input type="text" name="name" id="RE_puesto" placeholder="Puesto" required />


        <label id="icon" for="name"><i class="icon-envelope "></i></label>
        <input type="text" name="name" id="RE_mail" placeholder="Email" required />

        <label id="icon" for="name"><i class="icon-shield"></i></label>
        <input type="password" name="name" id="RE_contra" placeholder="Contraseña" required />

        <p id="parrafo">Si estas de acuerdo con nuestros<a href="#">terminos y condiciones</a> Da click en Registrar </p>
        <button style="background-color: #1465bb; color: white;" class="button" type="submit">Registro</button>
      </form>
    </div>

    <!-- Incluye la biblioteca uuid en tu HTML -->
    <script src="https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js"></script>

    <script>
      document.getElementById('miFormulario2').addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío normal del formulario

        // Obtiene los datos del formulario
        const RE_nombre = document.getElementById('RE_nombre').value;
        const RE_puesto = document.getElementById('RE_puesto').value;
        const RE_mail = document.getElementById('RE_mail').value;
        const RE_contra = document.getElementById('RE_contra').value;

        // Genera un identificador único para cada registro
        const RE_id = uuidv4();

        // Envia los datos al servidor
        fetch('http://192.168.1.75:3000/guardarDatosUsuariosEmpresas', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify({
              RE_id,
              RE_nombre,
              RE_puesto,
              RE_mail,
              RE_contra
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