<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Empresa</title>
</head>

<body>

    <?php
    include '../PHP/headerEmp.php'
    ?>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/loginemp.css">
    <script src="https://kit.fontawesome.com/b459652853.js" crossorigin="anonymous"></script>

    <div class="testbox">
        <h1 style="font-size: bolder;">Iniciar sesión</h1>
        <hr>
        <form action="/" id="miFormulario1">

            <label id="icon" for="LE_name"><i class="icon-user"></i></label>
            <input type="text" name="name" id="LE_name" placeholder="Nombre" required />

            <label id="icon" for="LE_mail"><i class="icon-envelope "></i></label>
            <input type="text" name="email" id="LE_mail" placeholder="Email" required />

            <label id="icon" for="LE_contra"><i class="icon-shield"></i></label>
            <input type="password" name="password" id="LE_contra" placeholder="Password" required />

            <p id="parrafo">
                <i class="fa-solid fa-circle-check"></i>
                Si estás de acuerdo con nuestros <a href="#">terminos y condiciones</a> da click en Ingresar.
            </p>
            <div style="text-align: center;">
                <button class="btn btn-primary" style="background-color: #26798E; color: white;" type="submit">Ingresar</button>
            </div>

        </form>


    </div>

    <script>
        document.getElementById('miFormulario1').addEventListener('submit', function(event) {
            event.preventDefault();

            const username = document.getElementById('LE_mail').value;
            const password = document.getElementById('LE_contra').value;

            if (username === 'emp1@gmail.com' && password === 'soyeljefe') {
                alert('Inicio de sesión exitoso');
                localStorage.setItem("TipoUsr", "patron");
                // Aquí puedes redirigir al usuario a otra página, por ejemplo:
                window.location.href = '../PHP/Index.php';

            } else {
                errorMessage.style.display = 'block';
            }
        });
    </script>

    <script>
        //Verificar si el usuario está autenticado (ejemplo)
        let tipousr = localStorage.getItem('TipoUsr');

        if (tipousr == 'patron' || tipousr == 'chambas') {
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