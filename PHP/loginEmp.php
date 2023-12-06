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
            <button class="button" type="submit" onclick="handleLogin()">Ingrear</button>
            </form>
        </div>
    </div>

    <script>
        function handleLogin() {
            const RE_mail = document.getElementById('LE_mail').value;
            const RE_contra = document.getElementById('LE_contra').value;

            // Llamada a la función para iniciar sesión
            loginUser(RE_mail, RE_contra);
        }

        function loginUser(RE_mail, RE_contra) {
            // Ruta al archivo JSON
            const jsonFilePath = 'http://192.168.1.75:3000/obtenerUsuariosEmpresas';

            // Realizar la petición para obtener los datos del JSON
            fetch(jsonFilePath)
                .then(response => response.json())
                .then(data => {
                    // Verificar credenciales
                    let credencialesCorrectas = false;

                    data.forEach(usuario => {
                        const usuarioEmail = usuario.RE_mail;
                        const usuarioContra = usuario.RE_contra;

                        console.log("Comparando con usuario:", usuario);

                        if (usuarioEmail === RE_mail && usuarioContra === RE_contra) {
                            credencialesCorrectas = true;
                            // Almacenar la información del usuario en el almacenamiento local
                            localStorage.setItem('loggedIn', 'true');
                            localStorage.setItem('user', RE_mail);

                            alert('Inicio de sesión exitoso');
                            // Redireccionar a otra página después del inicio de sesión
                            window.location.href = '../PHP/Index.php';
                        } else {
                            console.log("Comparando con correo electrónico:", RE_mail, "y contraseña:", RE_contra, "para el usuario:", usuarioEmail);
                        }
                    });

                    // Si no se encontraron credenciales válidas
                    if (!credencialesCorrectas) {
                        console.log("Credenciales incorrectas para el correo electrónico:", RE_mail);
                        alert('Credenciales incorrectas');
                    }
                })
                .catch(error => {
                    console.error('Error al cargar el JSON:', error);
                    alert('Error al cargar los datos. Por favor, inténtalo de nuevo.');
                });
        }
    </script>
    </div>

    <?php
    include '../PHP/piepagina.php'
    ?>

</body>

</html>