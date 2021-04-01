<?php
$conexion = mysqli_connect('localhost', 'root', '', 'entrevista');
// if ($conexion = !1) {
//     echo "error en la conexion por favor verificar su usuario y contraseña";
// } else {
//     echo "conexion con exito";
// }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <header><span class="fas fa-bars show"></span></header>
    <main>
        <div class="content-menu">

            <li>
                <a href="inicio.php" target="frame">
                    <i class="fas fa-home icon1"></i>
                    <h4 class="text1">Inicio</h4>
                </a>
            </li>
            <li>
                <a href="admin/equipos/index.php" target="frame">
                    <i class="fas fa-desktop icon2"></i>&nbsp<i class="fas fa-laptop icon3"></i>
                    <h4 class="text2">Equipos Operativos</h4>
                </a>
            </li>
            <li>
                    <i class="fas fa-warehouse icon4"></i>
                    <h4 class="text4">Almacen</h4>
            </li>
            <li>
                <a href="admin/mantenimiento/index.php" target="frame">
                    <i class="fas fa-cogs icon5"></i>
                    <h4 class="text5">Mantenimiento</h4>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="far fa-arrow-alt-circle-down icon6"></i>
                    <h4 class="text6">Desincorporar</h4>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="far fa-file-pdf icon7"></i>
                    <h4 class="text7">Reportes</h4>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="far fa-envelope icon8"></i>
                    <h4 class="text7">Mensajes</h4>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-sign-out-alt icon9"></i>
                    <h4 class="text8">Sesion</h4>
                </a>
            </li>
        </div>
        <article>
            <iframe name="frame" id="frame" class="ventana" src="inicio.php" width="100%" height="830px" frameborder="0" scrolling="no"></iframe>
        </article>
    </main>

    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>