<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/registroCurriculum.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b459652853.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    include '../PHP/headerEmp.php'
    ?>

    <div class="contenedor">
        <form class="row g-3" style="padding: 20px;" id="formCurri">

            <h4 style="text-align: center;">Datos Laborales</h4>

            <div class="col-md-2">
                <div class="input-group col-md-6">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                    <input type="text" id="id_cv" class="form-control" placeholder="id_cv" aria-label="Id_cv" aria-describedby="basic-addon1">
                </div>
            </div>


            <div class="col-md-1">
                <div class="input-group col-md-6">
                    <span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-earth-americas"></i></span>
                    <input type="text" id="nacionalidad" class="form-control" placeholder="Nacionalidad" aria-label="Nacionalidad" aria-describedby="basic-addon3">
                </div>
            </div>

            <div class="col-md-3">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputEscolaridad"><i class="fa-solid fa-school"></i></label>
                    <select class="form-select" id="inputEscolaridad">
                        <option selected>Escolaridad...</option>
                        <option value="Nula">Nula</option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secundaria">Secundaria</option>
                        <option value="Bachillerato">Bachillerato</option>
                        <option value="Licenciatura">Licenciatura</option>
                    </select>
                </div>
            </div>

            <div class="col-md-2">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputNivel"><i class="fa-solid fa-pencil"></i></label>
                    <select class="form-select" id="inputNivel">
                        <option selected>Nivel...</option>
                        <option value="Trunca">Trunca</option>
                        <option value="Finalizada">Finalizada</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-user-doctor"></i></span>
                    <input type="text" class="form-control" id="inputEspecialidad" placeholder="Especialidad" aria-label="Especialidad" aria-describedby="basic-addon2">
                </div>
            </div>

            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">Cursos</span>
                    <textarea class="form-control" id="cursos" aria-label="With textarea"></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">Experiencia</span>
                    <textarea class="form-control" id="experiencia" aria-label="With textarea"></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">Pasantías</span>
                    <textarea class="form-control" id="pasantia" aria-label="With textarea"></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">Referencias</span>
                    <textarea class="form-control" id="referencias" aria-label="With textarea"></textarea>
                </div>
            </div>
            <div class="col-12" style="text-align: center;">
                <button type="submit" id="enviar" class="btn" style="background-color: #26798E; color: white;">Registro</button>
            </div>

        </form>
    </div>

    <!-- Bootstrap JS and dependencies (Popper and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script>
        document.getElementById('inputEscolaridad').addEventListener('change', function() {
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
        document.getElementById('nombre').addEventListener('input', generateUsername);
        document.getElementById('apellido').addEventListener('input', generateUsername);

        function generateUsername() {
            const nombre = document.getElementById('nombre').value;
            const apellido = document.getElementById('apellido').value;
            const usuario = document.getElementById('usuario');
            if (nombre && apellido) {
                usuario.value = nombre.charAt(0).toLowerCase() + apellido.toLowerCase();
            } else {
                usuario.value = '';
            }
        }

        document.querySelector('form').addEventListener('submit', function(event) {
            const telefono = document.getElementById('telefono').value;
            if (telefono.length !== 10) {
                alert('El teléfono debe tener 10 dígitos.');
                event.preventDefault();
            }
        });
    </script>

    <script>
        document.getElementById('formCurri').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita el envío normal del formulario



            //CURRICULUM
            const id_CV = document.getElementById('id_cv').value;
            const educacion_formal = document.getElementById('inputEscolaridad').value + " " + document.getElementById('inputNivel').value + " " + document.getElementById('inputEspecialidad').value;
            const cursos_adicionales = document.getElementById('cursos').value;
            const experiencia_laboral = document.getElementById('experiencia').value;
            const pasantias = document.getElementById('pasantia').value;
            const referencias_CV = document.getElementById('referencias').value;
            const nacionalidad_CV = document.getElementById('nacionalidad').value;


            // Genera un identificador único para cada registro
            //const RE_id = uuidv4();

            // Envia los datos al servidor

            fetch('http://192.168.1.78:3000/curriculums', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        id_CV,
                        educacion_formal,
                        cursos_adicionales,
                        experiencia_laboral,
                        pasantias,
                        referencias_CV,
                        nacionalidad_CV

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