<?php
$allTipos = isset($_GET["allTipos"])?$_GET["allTipos"]:"";

$ids = [];
    if ($allTipos == 'acero'){
        $ids = [81,82,208,212,227];
    }elseif ($allTipos == 'agua'){
        $ids = [7,8,9,54,55,60,61,62,72,73,79,80,86,87,90,91,98,99,116,117,118,119,120,121,129,130,131,134,158,159,160,170,171,183,184,186,194,195,199,211,222,223,224,226,230,245];
    }elseif ($allTipos == 'bicho'){
        $ids = [10,11,12,13,14,15,46,47,48,49,123,127,204,205,212,213,214,165,166,167,168];
    }elseif ($allTipos == 'dragon'){
        $ids = [147,148,149,230];
    }elseif ($allTipos == 'electrico'){
        $ids = [25,26,81,82,100,101,125,135,145,170,171,172,179,180,181,239,243];
    }elseif ($allTipos == 'fantasma'){
        $ids = [92,93,94,200];
    }elseif ($allTipos == 'fuego'){
        $ids = [4,5,6,37,38,58,59,77,78,126,136,146,155,156,157,218,219,240,244,250];
    }elseif ($allTipos == 'hada'){
        $ids = [35,36,39,40,122,183,184,173,174,175,176,209,210];
    }elseif ($allTipos == 'hielo'){
        $ids = [87,91,131,144,220,221,215,225,238];
    }elseif ($allTipos == 'lucha'){
        $ids = [56,57,66,67,68,106,107,214,236,237];
    }elseif ($allTipos == 'normal'){
        $ids = [16,17,18,21,22,19,20,39,40,52,53,83,84,85,108,113,115,128,132,133,137,143,161,162,163,164,174,190,203,206,216,217,233,234,235,241,242];
    }elseif ($allTipos == 'planta'){
        $ids = [1,2,3,43,44,45,46,47,69,70,71,102,103,114,152,153,154,182,187,188,189,191,192,251];
    }elseif ($allTipos == 'psiquico'){
        $ids = [63,64,65,79,80,96,97,102,103,121,122,150,151,177,178,196,199,201,202,249,251];
    }elseif ($allTipos == 'roca'){
        $ids = [74,75,76,95,111,112,138,139,140,141,142,185,246,247,248,213,219,222];
    }elseif ($allTipos == 'siniestro'){
        $ids = [197,198,215,228,229,248];
    }elseif ($allTipos == 'tierra'){
        $ids = [27,28,50,51,74,75,76,95,104,105,111,112,194,195,207,208,220,221,231,232,246,247];
    }elseif ($allTipos == 'veneno'){
        $ids = [1,2,3,13,14,15,23,24,29,30,31,32,33,34,41,42,43,44,45,48,49,69,70,71,72,73,88,89,92,93,94,167,168,169,211];
    }elseif ($allTipos == 'volador'){
        $ids = [6,12,16,17,18,21,22,41,42,83,84,85,123,130,142,144,145,146,149,163,164,165,166,169,176,177,178,187,188,189,193,207,225,226,227,249,250];
    }else{
        header('Location: index.php');
    }
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
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title><?= $allTipos ?></title>
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
    <div class="contenedorTipo">
        <?php
        for ($i = 0; $i < count($ids); $i++) {
            echo "<div class='item".$ids[$i]."'>
                    <table>
                        <tr>
                            <td class='nombre".$ids[$i]."' colspan='4'></td>
                        </tr>
                        <tr>
                             <td colspan='4'><a href='detalles.php?id=".$ids[$i]."' class='imagen".$ids[$i]."'></a> </td>
                        </tr>
                        <tr>
                            <td class='tipo1".$ids[$i]."' colspan='2'></td>
                            <td class='tipo2".$ids[$i]."' colspan='2'></td>
                        </tr>
                    </table>
            </div>";
            }
        ?>
    </div>
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
