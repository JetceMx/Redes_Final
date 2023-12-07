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
        <form>
            <div class="mb-3">
                <label for="idEmp" class="form-label">ID Empresa</label>
                <input type="email" class="form-control" id="IDEmpresa" placeholder="ID">
            </div>
            <div class="mb-3">
                <label for="nombreEmp" class="form-label">Nombre de Empresa</label>
                <input type="email" class="form-control" id="NombreEmpresa" placeholder="Nombre">
            </div>
            <div class=" mb-3">
                <label for="desEmp" class="form-label">Descripcion de Empresa</label>
                <textarea class="form-control" id="DescripcionEmpresa" rows="3" placeholder="Descripción ..."></textarea>
            </div>
            <button type="button" onclick="funcion()" class="btn">Registrar</button>
        </form>
    </div>
    <br>

    <?php
    include '../PHP/piepagina.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>