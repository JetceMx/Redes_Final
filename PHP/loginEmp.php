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
  <h1>Iniciar sesion</h1>

  <form action="/">
      <hr>
    <div class="accounttype">
    </div>
  <hr>

  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="name" id="LE_name" placeholder="Name" required/>

  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="name" id="LE_mail" placeholder="Email" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="name" id="LE_contra" placeholder="Password" required/>

   <p id="parrafo">Si estas de acuerdo con nuestros <a href="#">terminos y condiciones</a> Da click en Registrar </p>
      <button style="background-color: #1465bb; color: white;" class="button" type="submit">Iniciar sesion</button>
  </form>
</div>
</div>

    <?php
        include '../PHP/piepagina.php'
    ?>
    
</body>
</html>

