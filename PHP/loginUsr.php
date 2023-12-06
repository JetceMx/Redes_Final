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
    <h1>Iniciar sesion</h1>

      <form action="/" id="miFormulario3">
        <hr>
        <div class="accounttype">

        </div>
        <hr>
        <label id="icon" for="name"><i class="icon-envelope "></i></label>
        <input type="text" name="name" id="LU_email" placeholder="Email" required />

        <label id="icon" for="name"><i class="icon-user"></i></label>
        <input type="password" name="name" id="LU_contra" placeholder="Contraseña" required />

      <p id="parrafo">Si estas de acuerdo con nuestros<a href="#">terminos y condiciones</a> Da click en Registrar </p>
      <button style="background-color: #1465bb; color: white;" class="button" type="submit">Iniciar sesion</button>
    </form>
  </div>

  </div>


  <!-- Aquí puedes mostrar los datos como desees en tu interfaz de usuario -->
  <div id="datosUsuarios"></div>

  <script>
    // Realiza una solicitud para obtener los datos de usuarios desde el servidor
    console.log("estoy en el script")
    fetch('http://192.168.1.75:3000/obtenerUsuarios')
      .then(response => response.json())
      .then(datos => {

        // Extrae solo los nombres de los usuarios
        const uid = datos.map(usuario => usuario.uid);
        const nombresUsuarios = datos.map(usuario => usuario.nombre_usr);
        const nombres = datos.map(usuario => usuario.nombre);
        const emailsUsuarios = datos.map(usuario => usuario.email);
        const contrasUsuarios = datos.map(usuario => usuario.contra);

        // Trabaja con los nombres como desees
        console.log("aqui son los datos")
        console.log('Identificador unico:', uid);
        console.log('Nombres de usuario:', nombresUsuarios);
        console.log('Nombres de los usuarios:', nombres);
        console.log('Emails de usuarios:', emailsUsuarios);
        console.log('Contraseñas de usuarios:', contrasUsuarios);


        // Extraer solo los nombres de los usuarios
        const emailsUsuarios = datos.map(usuario => usuario.email);
        const contrasUsuarios = datos.map(usuario => usuario.contra);

        // Obtener referencia al formulario y a los campos de entrada
        const form = document.getElementById('miFormulario3');
        const email = document.getElementById('LU_email');
        const pass = document.getElementById('LU_contra');

        // Función para manejar el inicio de sesión
        function handleLogin(event) {
          const user = email.value;
          const password = pass.value;

          for (let i = 0; i < emailsUsuarios.length; i++) {
            // Comprobar credenciales
            if (username === emailsUsuarios[i] && password === contrasUsuarios[i]) {
              // Almacenar la información del usuario en el almacenamiento local
              localStorage.setItem('loggedIn', 'true');
              localStorage.setItem('user', user);

              alert('Inicio de sesión exitoso');
              // Redireccionar a otra página después del inicio de sesión
              window.location.href = '../PHP/loginUsr.php';
              return; // Salir del bucle si se encontraron credenciales válidas
            }
          }
          // Si no se encontraron credenciales válidas
          alert('Credenciales incorrectas');
        }

        // Asignar la función de manejo al evento submit del formulario
        form.addEventListener('submit', function(event) {
          event.preventDefault(); // Evitar el envío del formulario
          handleLogin(event); // Llamar a la función de manejo de inicio de sesión
        });

      })
      .catch(error => console.error('Error al obtener datos:', error));

    /* Obtener referencia al formulario y a los campos de entrada
    const form = document.getElementById('miFormulario3');
    const email = document.getElementById('LU_email');
    const pass = document.getElementById('LU_contra');

    // Función para manejar el inicio de sesión
    function handleLogin(event) {
      // event.preventDefault(); // Evitar que el formulario se envíe
      const username = email.value;
      const password = pass.value;
      for (let i = 0; i < emailsUsuarios.length; i++) {
        // Comprobar credenciales (esto puede ser más complejo en una aplicación real)
        if (username === emailUsuarios[i] && password === contrasUsuarios[i]) {

          // Almacenar la información del usuario en el almacenamiento local
          localStorage.setItem('loggedIn', 'true');
          localStorage.setItem('username', username);

          alert('Inicio de sesión exitoso');
          // Redireccionar a otra página o realizar alguna acción después del inicio de sesión
        } else {
          alert('Credenciales incorrectas');
        }
      }

    }
    // Agregar un event listener al formulario para manejar el inicio de sesión
    //form.addEventListener('submit', handleLogin);*/
  </script>



  <?php
  include '../PHP/piepagina.php'
  ?>

</body>

</html>