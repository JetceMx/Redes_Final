<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../CSS/registroEmpleados.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b459652853.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php
  include '../PHP/headerEmp.php'
  ?>

<div class="contenedor">
    <form class="row g-3">
      <h4 style="text-align: center;">Datos Personales</h4>
      <div class="input-group col-md-6">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre"
          aria-describedby="basic-addon1">
      </div>

      <div class="col-md-4">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
          <input type="text" class="form-control" placeholder="Usuario" aria-label="Usuario"
            aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group col-md-4">
          <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-envelope"></i></span>
          <input type="email" class="form-control" placeholder="Correo" aria-label="Correo"
            aria-describedby="basic-addon2">
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-lock"></i></span>
          <input type="password" class="form-control" placeholder="Contraseña" aria-label="Contrasena"
            aria-describedby="basic-addon3">
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
          <input type="text" class="form-control" placeholder="Teléfono" aria-label="Usuario"
            aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-house"></i></span>
          <input type="text" class="form-control" placeholder="Localidad" aria-label="Usuario"
            aria-describedby="basic-addon1">
        </div>
      </div>
      <h4 style="text-align: center;">Datos Laborales</h4>
      <div class="col-md-4">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-money-bill"></i></span>
          <input type="text" class="form-control" placeholder="Salario" aria-label="Usuario"
            aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group col-md-4">
          <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
          <input type="email" class="form-control" placeholder="Horario" aria-label="Correo"
            aria-describedby="basic-addon2">
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-earth-americas"></i></span>
          <input type="password" class="form-control" placeholder="Nacionalidad" aria-label="Contrasena"
            aria-describedby="basic-addon3">
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group mb-3">
          <label class="input-group-text" for="inputEscolaridad"><i class="fa-solid fa-school"></i></label>
          <select class="form-select" id="inputEscolaridad">
            <option selected>Escolaridad...</option>
            <option value="0">Nula</option>
            <option value="1">Primaria</option>
            <option value="2">Secundaria</option>
            <option value="3">Bachillerato</option>
            <option value="4">Licenciatura</option>
          </select>
        </div>
      </div>

      <div class="col-md-2">
        <div class="input-group mb-3">
          <label class="input-group-text" for="inputNivel"><i class="fa-solid fa-pencil"></i></label>
          <select class="form-select" id="inputNivel">
            <option selected>Nivel...</option>
            <option value="1">Trunca</option>
            <option value="2">Finalizada</option>
          </select>
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-user-doctor"></i></span>
          <input type="text" class="form-control" id="inputEspecialidad" placeholder="Especialidad"
            aria-label="Especialidad" aria-describedby="basic-addon2">
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-text">Cursos</span>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-text">Experiencia</span>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-text">Pasantías</span>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-group">
          <span class="input-group-text">Referencias</span>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
      </div>
      <div class="col-12" style="text-align: center;">
        <button type="submit" class="btn btn-primary">Registro</button>
      </div>

    </form>
  </div>

    <!-- Bootstrap JS and dependencies (Popper and jQuery) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Custom JS -->
  <script>
    document.getElementById('inputEscolaridad').addEventListener('change', function () {
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