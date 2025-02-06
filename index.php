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
    <style>
        .contenedor {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 columnas automáticas */
            gap: 10px; /* Espaciado entre divs */
            margin-left: 10%;
            margin-right: 10%;
        }
        table{
            height: 100%;
            width: 100%;
        }
    </style>
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


                    <!-- Opción 2 con Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Desarrollo Web</a></li>
                            <li><a class="dropdown-item" href="#">Consultoría</a></li>
                            <li><a class="dropdown-item" href="#">Marketing Digital</a></li>
                        </ul>
                    </li>

                    <!-- Opción 3 con Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Acerca de
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item" href="#">Nuestra Historia</a></li>
                            <li><a class="dropdown-item" href="#">Nuestro Equipo</a></li>
                            <li><a class="dropdown-item" href="#">Misión y Visión</a></li>
                        </ul>
                    </li>

                    <!-- Opción 4 -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
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
