<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/registroDeEmp.css">
    <title>Registro de Empresas</title>
</head>

<body>
    <?php
    include '../PHP/headerEmp.php'
    ?>

    <br>
    <div class="container">
        <h2 class="titulo">Registro de Empresa</h2>
        <br>
        <form id="miFormulario">
            <div class="mb-3">
                <label for="idEmp" class="form-label">ID Empresa</label>
                <input type="text" class="form-control" id="IDEmpresa" placeholder="ID">
            </div>
            <div class="mb-3">
                <label for="nombreEmp" class="form-label">Nombre de Empresa</label>
                <input type="text" class="form-control" id="NombreEmpresa" placeholder="Nombre">
            </div>
            <div class=" mb-3">
                <label for="desEmp" class="form-label">Descripcion de Empresa</label>
                <textarea class="form-control" id="DescripcionEmpresa" rows="3" placeholder="Descripción ..."></textarea>
            </div>
            <button type="submit" style="background-color: #53576b; color: white;" class="btn">Registrar</button>
        </form>
    </div>
    <br>

    <?php
    include '../PHP/piepagina.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        document.getElementById('miFormulario').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita el envío normal del formulario

            // Obtiene los datos del formulario
            const idEmp = document.getElementById('IDEmpresa').value;
            const nombreEmp = document.getElementById('NombreEmpresa').value;
            const descEmp = document.getElementById('DescripcionEmpresa').value;

            // Envia los datos al servidor
            fetch('http://192.168.1.75:3000/guardarDatosEmpresas', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        RDE_idEmp: idEmp,
                        RDE_nombre: nombreEmp,
                        RDE_descEmp: descEmp
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

        //Verificar si el usuario está autenticado (ejemplo)
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
        }
    </script>

</body>

</html>