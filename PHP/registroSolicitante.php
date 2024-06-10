<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../CSS/registroSolicitante.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b459652853.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php
  include '../PHP/headerEmp.php'
  ?>

  <div class="contenedor">
    <form class="row g-3" style="padding: 20px;" id="formSolicitante">
      <h4 style="text-align: center;">Datos Personales</h4>



      <div class="col-md-4">
        <div class="input-group col-md-3">
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
            <input type="text" id="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre">
            <input type="text" id="apellido" class="form-control" placeholder="Apellido" aria-label="Apellido">
          </div>
        </div>
      </div>



      <div class="col-md-4">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
          <input type="text" id="usuario" class="form-control" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group col-md-4">
          <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-envelope"></i></span>
          <input type="email" id="correo" class="form-control" placeholder="Correo" aria-label="Correo" aria-describedby="basic-addon2">
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-lock"></i></span>
          <input type="password" id="contrasena" class="form-control" placeholder="Contraseña" aria-label="Contrasena" aria-describedby="basic-addon3">
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
          <input type="text" id="id_scl" class="form-control" placeholder="id_SCL" aria-label="Id_SCL" aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
          <input type="text" id="id_cv" class="form-control" placeholder="id_cv" aria-label="Id_cv" aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
          <input type="number" id="telefono" class="form-control" placeholder="Teléfono" aria-label="Telefono" aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-group col-md-6">
          <label class="input-group-text" for="localidad"><i class="fa-solid fa-house"></i></label>
          <select class="form-select" id="localidad" required>
            <option selected disabled>Seleccione un estado...</option>
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Ciudad de México">Ciudad de México</option>
            <option value="Durango">Durango</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Estado de México">Estado de México</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
            <option value="Oaxaca">Oaxaca</option>
            <option value="Puebla">Puebla</option>
            <option value="Querétaro">Querétaro</option>
            <option value="Quintana Roo">Quintana Roo</option>
            <option value="San Luis Potosí">San Luis Potosí</option>
            <option value="Sinaloa">Sinaloa</option>
            <option value="Sonora">Sonora</option>
            <option value="Tabasco">Tabasco</option>
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Tlaxcala">Tlaxcala</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
          </select>
        </div>
      </div>

      <div class="col-md-2">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-money-bill"></i></span>
          <input type="number" id="salario" class="form-control" placeholder="Salario" aria-label="Salario" aria-describedby="basic-addon1">
          <span class="input-group-text">.00</span>
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group mb-3">
          <label class="input-group-text"><i class="fa-solid fa-calendar"></i></label>
          <select class="form-select" id="dia1">
            <option selected>Día...</option>
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miercoles">Miércoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
            <option value="Sabado">Sábado</option>
            <option value="Domingo">Domingo</option>
          </select>
          <label class="input-group-text">a</label>
          <select class="form-select" id="dia2">
            <option selected>Día...</option>
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miercoles">Miércoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
            <option value="Sabado">Sábado</option>
            <option value="Domingo">Domingo</option>
          </select>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-group mb-3">
          <label class="input-group-text"><i class="fa-solid fa-clock"></i></label>
          <select class="form-select" id="hora1">
            <option selected>Hora...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          <select class="form-select" id="hora2">
            <option selected>am</option>
            <option value="pm">pm</option>
          </select><select class="form-select" id="hora3">
            <option selected>Hora...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          <select class="form-select" id="hora4">
            <option selected>am</option>
            <option value="pm">pm</option>
          </select>
        </div>

      </div>

      <div class="col-12" style="text-align: center;">
        <button type="submit" id="enviar" class="btn" style="background-color: #26798E; color: white;">Registro</button>
      </div>

    </form>
  </div>

  <!-- Bootstrap JS and dependencies (Popper and jQuery) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Custom JS -->
  <script>
    document.getElementById('inputEscolaridad').addEventListener('change', function() {
      var especialidadInput = document.getElementById('inputEspecialidad');
      var nivelInput = document.getElementById('inputNivel');
      if (this.value == '1' || this.value == '2') { // Si el valor es 1 (Primaria)
        especialidadInput.value = ''; // Limpiar el campo
        especialidadInput.disabled = true; // Deshabilitar el campo
        nivelInput.disabled = false; // Habilitar el campo de nivel
      } else if (this.value == '0') { // Si el valor es 0 (Nula)
        especialidadInput.value = ''; // Limpiar el campo
        especialidadInput.disabled = true; // Deshabilitar el campo
        nivelInput.value = ''; // Limpiar el campo
        nivelInput.disabled = true; // Deshabilitar el campo de nivel
      } else {
        especialidadInput.disabled = false; // Habilitar el campo
        nivelInput.disabled = false; // Habilitar el campo de nivel
      }
    });
  </script>

  <script>
    document.getElementById('nombre').addEventListener('input', generateUsername);
    document.getElementById('apellido').addEventListener('input', generateUsername);

    function generateUsername() {
      const nombre = document.getElementById('nombre').value;
      const apellido = document.getElementById('apellido').value;
      const usuario = document.getElementById('usuario');
      if (nombre && apellido) {
        usuario.value = nombre.charAt(0).toLowerCase() + apellido.toLowerCase();
      } else {
        usuario.value = '';
      }
    }

    document.querySelector('form').addEventListener('submit', function(event) {
      const telefono = document.getElementById('telefono').value;
      if (telefono.length !== 10) {
        alert('El teléfono debe tener 10 dígitos.');
        event.preventDefault();
      }
    });
  </script>

  <script>
    document.getElementById('formSolicitante').addEventListener('submit', function(event) {
      event.preventDefault(); // Evita el envío normal del formulario


      //SOLICITANTE

      const id_SCL = document.getElementById('id_scl').value;
      const nombre_SCL = document.getElementById('nombre').value + " " + document.getElementById('apellido').value;
      const correo_SCL = document.getElementById('correo').value;
      const usuario_SCL = document.getElementById('usuario').value;
      const contrasena_SCL = document.getElementById('contrasena').value;
      const telefono_SCL = document.getElementById('telefono').value;
      const localidad_SCL = document.getElementById('localidad').value;
      const salario_SCL = document.getElementById('salario').value;
      const horario_SCL = document.getElementById('dia1').value + " a " + document.getElementById('dia2').value + ", " +
        document.getElementById('hora1').value + " " + document.getElementById('hora2').value + " - " +
        document.getElementById('hora3').value + " " + document.getElementById('hora4').value + ".";
      const id_CV = document.getElementById('id_cv').value;


      // Genera un identificador único para cada registro
      //const RE_id = uuidv4();

      // Envia los datos al servidor
      fetch('http://192.168.1.78:3000/solicitantes', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            id_SCL,
            usuario_SCL,
            nombre_SCL,
            correo_SCL,
            contrasena_SCL,
            telefono_SCL,
            localidad_SCL,
            salario_SCL,
            horario_SCL,
            id_CV

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
  <script>
    // Verificar si el usuario está autenticado (ejemplo)
    let tipousr = localStorage.getItem('loggedIn');

    if (tipousr == 'true') {
      alert('Debes cerrar sesion para poder acceder');
      // Si el usuario no está autenticado, redirige a otra página o muestra un mensaje de error
      window.location.href = '../PHP/Index.php'; // Redireccionar a la página de autenticación
      // O muestra un mensaje de error
      alert('Debes cerrar sesion para poder acceder');
    }
  </script>


  <?php
  include '../PHP/piepagina.php'
  ?>

</body>

</html>