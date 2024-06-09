<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
      <h1 style="font-size: bolder;">Iniciar Sesión</h1>

      <form action="/" id="miFormulario3">
        <hr>

        <label id="icon" for="name"><i class="icon-envelope "></i></label>
        <input type="text" name="name" id="LU_email" placeholder="Email" required />

        <label id="icon" for="name"><i class="icon-user"></i></label>
        <input type="password" name="name" id="LU_contra" placeholder="Contraseña" required />

        <p id="parrafo">
        <i class="fa-solid fa-circle-check"></i>
        Si estás de acuerdo con nuestros <a href="#">terminos y condiciones</a> da click en Ingresar.</p>
    <div style="text-align: center;">
        <button type="button" class="btn btn-primary" style="background-color: #26798E; color: white;" type="submit" onclick="handleLogin()">Ingresar</button>
    </div>
        
      </form>

    </div>

  </div>

  <script>
    function handleLogin() {
      const email = document.getElementById('LU_email').value;
      const password = document.getElementById('LU_contra').value;

      // Llamada a la función para iniciar sesión
      loginUser(email, password);
    }

    function loginUser(email, password) {
      // Ruta al archivo JSON
      const jsonFilePath = 'http://192.168.1.75:3000/obtenerUsuarios';

      // Realizar la petición para obtener los datos del JSON
      fetch(jsonFilePath)
        .then(response => response.json())
        .then(data => {
          // Verificar credenciales
          let credencialesCorrectas = false;

          data.forEach(usuario => {
            // Acceder a las propiedades correctas del usuario
            const usuarioEmail = usuario.email;
            const usuarioContra = usuario.contra;

            console.log("Comparando con usuario:", usuario);

            if (usuarioEmail === email && usuarioContra === password) {
              credencialesCorrectas = true;
              // Almacenar la información del usuario en el almacenamiento local
              localStorage.setItem('loggedIn', 'true');
              localStorage.setItem('user', email);
              localStorage.setItem('tipo', 'Chambeador');

              alert('Inicio de sesión exitoso');
              // Redireccionar a otra página después del inicio de sesión
              window.location.href = '../PHP/Index.php';
            } else {
              console.log("Comparando con correo electrónico:", email, "y contraseña:", password, "para el usuario:", usuarioEmail);
            }
          });

          // Si no se encontraron credenciales válidas
          if (!credencialesCorrectas) {
            console.log("Credenciales incorrectas para el correo electrónico:", email);
            alert('Credenciales incorrectas');
          }
        })
        .catch(error => {
          console.error('Error al cargar el JSON:', error);
          alert('Error al cargar los datos. Por favor, inténtalo de nuevo.');
        });
    }
  </script>
  <script>
         //Verificar si el usuario está autenticado (ejemplo)
        let tipousr = localStorage.getItem('loggedIn');

        if (tipousr == 'true') {
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