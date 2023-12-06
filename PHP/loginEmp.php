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
    <link rel="stylesheet" href="../CSS/loginusr.css">

    <div id="contenedor">
        <div class="testbox">
            <h1>Log in</h1>

            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" name="name" id="LE_name" placeholder="Name" required />

            <label id="icon" for="name"><i class="icon-envelope "></i></label>
            <input type="text" name="name" id="LE_mail" placeholder="Email" required />

            <label id="icon" for="name"><i class="icon-shield"></i></label>
            <input type="password" name="name" id="LE_contra" placeholder="Password" required />

            <p id="parrafo">Si estas de acuerdo con nuestros <a href="#">terminos y condiciones</a> Da click en Registrar </p>
            <button class="button" type="submit">Registro</button>
            </form>
        </div>
    </div>

    <script>
        // Realiza una solicitud para obtener los datos de usuarios desde el servidor
        fetch('http://192.168.1.75:3000/obtenerUsuariosEmpresas')
            .then(response => response.json())
            .then(datos => {

                // Extrae solo los nombres de los usuarios
                const uid = datos.map(usuario => usuario.uid);
                const nombres = datos.map(usuario => usuario.nombre);
                const puesto = datos.map(usuario => usuario.puesto);
                const emailsUsuarios = datos.map(usuario => usuario.email);
                const contrasUsuarios = datos.map(usuario => usuario.contra);

                // Trabaja con los nombres como desees
                console.log('Identificador unico:', uid);
                console.log('Nombres de usuario:', nombres);
                console.log('Puestos de los usuarios:', puesto);
                console.log('Emails de usuarios:', emailsUsuarios);
                console.log('Contraseñas de usuarios:', contrasUsuarios);

            })
            .catch(error => console.error('Error al obtener datos:', error));
    </script>
</div>

    <?php
    include '../PHP/piepagina.php'
    ?>

</body>

</html>