<?php

?>
<!doctype html>
<html lang="es">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Incluye el CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Incluye el JS de Bootstrap (necesario para el dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poketienda</title>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tipos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="tipos.php?allTipos=acero">Acero</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=agua">Agua</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=bicho">Bicho</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=dragon">Dragon</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=electrico">Electrico</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=fantasma">Fantasma</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=fuego">Fuego</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=hada">Hada</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=hielo">Hielo</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=lucha">Lucha</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=normal">Normal</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=planta">Planta</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=psiquico">Psiquico</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=roca">Roca</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=siniestro">Siniestro</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=tierra">Tierra</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=veneno">Veneno</a></li>
                            <li><a class="dropdown-item" href="tipos.php?allTipos=volador">Volador</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <button id="modo-btn"><img src="img/607.png" alt="" class="boton"> </button>
        </div>

    </nav>
</header>
    <div class="contenedor">
        <?php
        for ($i = 1; $i <= 251 ; $i++) {
            echo "<div class='item".$i."'>
                    <table>
                        <tr>
                            <td class='nombre".$i."' colspan='4'></td>
                        </tr>
                        <tr>
                             <td colspan='4'><a href='detalles.php?id=".$i."' class='imagen".$i."'></a> </td>
                        </tr>
                        <tr>
                            <td class='tipo1".$i."' colspan='2'></td>
                            <td class='tipo2".$i."' colspan='2'></td>
                        </tr>
                    </table>
            </div>";
            }
        ?>
    </div>
    <footer>

    </footer>
    <script>
        const boton = document.getElementById("modo-btn");
        const body = document.body;

        // Verifica si el usuario tenía el modo nocturno activado
        if (localStorage.getItem("modo") === "nocturno") {
            body.classList.add("modo-nocturno");
        }

        // Evento para cambiar el fondo
        boton.addEventListener("click", () => {
            body.classList.toggle("modo-nocturno");

            // Guardar preferencia en localStorage
            if (body.classList.contains("modo-nocturno")) {
                localStorage.setItem("modo", "nocturno");
            } else {
                localStorage.setItem("modo", "diurno");
            }
        });

    </script>
</body>

</html>
