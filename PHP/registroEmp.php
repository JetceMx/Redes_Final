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

<div class="testbox">
  <h1>Registro</h1>

  <form action="/">
      <hr>
    <div class="accounttype">
    </div>
  <hr>

  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="name" id="RE_nombre" placeholder="Nombre" required/>

  <label id="icon" for="name"><i class="icon-globe"></i></label>
  <input type="text" name="name" id="RE_puesto" placeholder="Puesto" required/>


  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="name" id="RE_mail" placeholder="Email" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="name" id="RE_contra" placeholder="Contraseña" required/>

  <div class="gender">
    <input type="radio" value="None" id="male" name="gender" checked/>
    <label for="male" class="radio" chec>Masculino</label>
    <input type="radio" value="None" id="female" name="gender" />
    <label for="female" class="radio">Femenino</label>
   </div> 
   <p>Si estas de acuerdo con nuestros<a href="#">terminos y condiciones</a> Da click en Registrar </p>
   <button class="button" type="submit">Registro</button>
  </form>
</div>
    
</body>
</html>

