<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../CSS/registroVacante.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b459652853.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php
  include '../PHP/headerEmp.php'
  ?>

<div class="contenedor" style="justify-content:center;">
    <form class="row g-3" style="padding:20px;">
      <h4 style="text-align: center;">Registro Vacante</h4>
      <div class="input-group col-md-6">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre"
          aria-describedby="basic-addon1">
      </div>

      <div class="col-md-6">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-building"></i></span>
          <input type="password" class="form-control" placeholder="Lugar" aria-label="Contrasena"
            aria-describedby="basic-addon3">
        </div>
      </div>

      <div class="col-md-6">
        <div class="input-group col-md-6">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-computer"></i></span>
          <input type="text" class="form-control" placeholder="Tipo" aria-label="Usuario"
            aria-describedby="basic-addon1">
        </div>
      </div>


      <div class="col-md-12">
        <div class="input-group">
          <span class="input-group-text">Descripción</span>
          <textarea class="form-control" aria-label="With textarea"></textarea>
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
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
          <input type="text" class="form-control" placeholder="Fecha" aria-label="Usuario"
            aria-describedby="basic-addon1">
        </div>
      </div>
      
      <div class="col-12" style="text-align: center;">
        <button type="submit" class="btn btn-primary">Registro</button>
      </div>

    </form>
  </div>
  <br><br>

    <!-- Bootstrap JS and dependencies (Popper and jQuery) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php
    include '../PHP/piepagina.php'
    ?>
</body>
</html>