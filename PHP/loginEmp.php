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
        /*
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
                            localStorage.setItem('tipo', 'Empresa');

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
        }*/
    </script>

    <script>
        // Datos predefinidos para el inicio de sesión
        // Datos predefinidos para el inicio de sesión
        const usuariosRegistrados = [{
                usuario: "emp1",
                contraseña: "soyeljefe"
            },
            {
                usuario: "usuario2",
                contraseña: "abcdef"
            }
        ];

        // Función para validar el inicio de sesión
        function validarInicioSesion(usuario, contraseña) {
            // Buscar el usuario en la lista de usuarios registrados
            const usuarioRegistrado = usuariosRegistrados.find(u => u.usuario === usuario);

            // Si no se encuentra el usuario, retornar falso
            if (!usuarioRegistrado) {
                return false;
            }

            // Si se encuentra el usuario, verificar la contraseña
            if (usuarioRegistrado.contraseña === contraseña) {
                return true; // La contraseña coincide, inicio de sesión exitoso
            } else {
                return false; // La contraseña no coincide
            }
        }


        // Manejador de evento para el envío del formulario
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            var direccion = "../PHP/Index.php";
            event.preventDefault(); // Evitar el envío del formulario por defecto

            // Obtener los valores de usuario y contraseña del formulario
            const usuario = document.getElementById("usuario").value;
            const contraseña = document.getElementById("contraseña").value;

            // Validar el inicio de sesión
            if (validarInicioSesion(usuario, contraseña)) {
                console.log("Inicio de sesión exitoso");
                localStorage.setItem("TipoUsr", usuario);
                // window.location.href = direccion;
                console.log(direccion);

                // Aquí podrías redirigir a otra página o hacer alguna otra acción después del inicio de sesión exitoso
            } else {
                console.log("Nombre de usuario o contraseña incorrectos");
                // Aquí podrías mostrar un mensaje de error al usuario
            }
        });


        /*Verificar si el usuario está autenticado (ejemplo)
        let tipousr = localStorage.getItem('loggedIn');

        if (tipousr == 'true') {
            alert('Ya has Iniciado sesion!!!');
            // Si el usuario no está autenticado, redirige a otra página o muestra un mensaje de error
            window.location.href = '../PHP/Index.php'; // Redireccionar a la página de autenticación
            // O muestra un mensaje de error
           
        }*/
    </script>

    <?php
    include '../PHP/piepagina.php'
    ?>

</body>

</html>