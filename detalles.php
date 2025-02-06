<?php
    $id = isset($_GET["id"])?$_GET["id"]:"";
?>
<!doctype html>
<html lang="es">
<head>
    <!-- Incluye el CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Incluye el JS de Bootstrap (necesario para el dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>

    </style>
    <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles</title>
</head>
<body>
<header>

    <!-- Menú Superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Título o Logo -->
            <a class="navbar-brand logo" href="index.php"></a>

            <!-- Botón de menú (para dispositivos móviles) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú con opciones -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">


                    <!-- Opción 2 con Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tipos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Desarrollo Web</a></li>
                            <li><a class="dropdown-item" href="#">Consultoría</a></li>
                            <li><a class="dropdown-item" href="#">Marketing Digital</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <button id="modo-btn"><img src="img/607.png" alt="" class="boton"> </button>
        </div>

    </nav>
</header>
    <div class="contenedorDescripcion">
        <div class="numeroPokedex"><?= $id ?></div>
        <div class="nombre nombre<?= $id ?>Descripcion"></div>
       <div class="item item<?= $id ?>"><div class="imagen imagen<?= $id ?>Descripcion"></div></div>
        <div class="tipos"><table><tr><td class="tipo1 tipo1<?= $id ?>"></td><td class="tipo2 tipo2<?= $id ?>"></td></tr></table></div>
        <div class="descripcion descripcion<?= $id ?>"></div>
    </div>
    <footer>

    </footer>
    <script>
        document.getElementById("modo-btn").addEventListener("click", function () {
            document.body.classList.toggle("modo-nocturno");
        });
    </script>
</body>


</html>
