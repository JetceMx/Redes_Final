<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../CSS/registroEmpresa.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b459652853.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php
  include '../PHP/headerEmp.php'
  ?>

  <div class="container d-flex justify-content-center align-items-center " style="padding: 10px; margin-top: 50px;">
    <form class="row g-3" id="Form_REMP">
      <h4 style="text-align: center;">Registro Empresa</h4>

      <div class="col-12">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
          <input type="text" class="form-control" id="Nombre_REMP" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="col-12">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-building"></i></span>
          <input type="text" id="Puesto_REMP" class="form-control" placeholder="Puesto" aria-label="Usuario" aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="col-12">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-envelope"></i></span>
          <input type="email" id="Email_REMP" class="form-control" placeholder="Correo" aria-label="Correo" aria-describedby="basic-addon2">
        </div>
      </div>

      <div class="col-12">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-lock"></i></span>
          <input type="password" id="Contra_REMP" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon3">
        </div>
      </div>

      <div class="col-12">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon4"><i class="fa-solid fa-lock"></i></span>
          <input type="text" id="Id_REMP" class="form-control" placeholder="ID" aria-label="Id" aria-describedby="basic-addon4">
        </div>
      </div>

      <div class="col-12">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon5"><i class="fa-solid fa-lock"></i></span>
          <input type="text" id="Id_REMP_VC" class="form-control" placeholder="ID_VC" aria-label="Id" aria-describedby="basic-addon5">
        </div>
      </div>

      <div class="col-12" style="text-align: center;">
        <button type="submit" class="btn btn-primary">Registro</button>
      </div>

    </form>
  </div>

  <?php
  include '../PHP/piepagina.php'
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script>
    document.getElementById('Form_REMP').addEventListener('submit', function(event) {
      event.preventDefault(); // Evita el envío normal del formulario

      // Obtiene los datos del formulario
      const id_UE = document.getElementById('Id_REMP').value;
      const id_VC = document.getElementById('Id_REMP_VC').value;
      const nombre_completo_UE = document.getElementById('Nombre_REMP').value;
      const correo_UE = document.getElementById('Email_REMP').value;
      const contrasena_UE = document.getElementById('Contra_REMP').value;
      const puesto_UE = document.getElementById('Puesto_REMP').value;

      const response = fetch('http://192.168.1.78:3000/usuarios-emp', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            id_UE,
            nombre_completo_UE,
            puesto_UE,
            correo_UE,
            contrasena_UE,
            id_VC
          })
        }).then(result => {
          alert('Datos enviados: ' + JSON.stringify(result));
        })
        .catch(error => {
          alert('Error: ' + error.message);
        });
    });

    /*Verificar si el usuario está autenticado (ejemplo)
    let tipousr = localStorage.getItem('tipo');
    let tipousr2 = localStorage.getItem('loggedIn');

    if (localStorage.getItem('loggedIn') === null) {
      alert('Debe iniciar sesión como Empresa para acceder');
      // Si el usuario no está autenticado, redirige a otra página o muestra un mensaje de error
      // O muestra un mensaje de error
      window.location.href = '../PHP/Index.php'; // Redireccionar a la página de autenticación
    }


    if (tipousr == 'Chambeador') {
      // Si el usuario no está autenticado, redirige a otra página o muestra un mensaje de error
      window.location.href = '../PHP/Index.php'; // Redireccionar a la página de autenticación
      // O muestra un mensaje de error
      // alert('Debe iniciar sesión como Empresa para acceder a esta pagina');
    }*/
  </script>

</body>

</html>