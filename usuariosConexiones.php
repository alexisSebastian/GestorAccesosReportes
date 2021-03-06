<?php
    include 'class/connection.php';
    include 'class/funciones.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestor de accesos | Reportes</title>
    <link rel="icon" type="image/png" href="images/analytics.png" sizes="64x64">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Importar librerias para de Materialize-->
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <!--CDN de iconos google materialize-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<header>
        <!-- -------------Manú dropdown web-------------------- -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="detalleUsuariosFirmadosDia.php">Detalle de usuarios firmados del día</a></li>
            <li class="divider"></li>
            <li><a href="detalleConexionesDia.php">Detalle de conexiones del día</a></li>
        </ul>

        <ul id="dropdown2" class="dropdown-content">
            <li><a href="graficaConecDiaArea.php">Distribución de conexiones del día por área</a></li>
            <li class="divider"></li>
            <li><a href="graficaUsuariosFirmadosDia.php">Distribución de usuarios firmados del día</a></li>
        </ul>

        <ul id="dropdown3" class="dropdown-content">
            <li><a href="cierreAccesos.php">Cierre de accesos</a></li>
        </ul>

        <!-- -------------Menú dropdownMóbil------------------ -->
        <!-- <ul id="dropdownM1" class="dropdown-content">
            <li><a href="totalConexionesDia.php">Total de Conexiones del día</a></li>
            <li class="divider"></li>
            <li><a href="detalleConexionesDia.php">Detalle de conexiones del día</a></li>
        </ul>

        <ul id="dropdownM2" class="dropdown-content">
            <li><a href="usuariosFirmadosDia.php">Total de Usuarios firmados del día</a></li>
            <li class="divider"></li>
            <li><a href="detalleUsuariosFirmadosDia.php">Detalle de usuarios firmados del día</a></li>
        </ul>

        <ul id="dropdownM3" class="dropdown-content col s12">
            <li><a href="graficaConecDiaArea.php">Distribución de conexiones del día por área</a></li>
            <li class="divider"></li>
            <li><a href="graficaUsuariosFirmadosDia.php">Distribución de usuarios firmados del día</a></li>
        </ul> -->

        <!-- ---------------se inicia el NabBar------------ -->
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <a href="#!" class="brand-logo center col s12" id="tituloLogin">Reporte Gestor de Accesos</a>
                    <a href="#" data-target="menu-side" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
            </nav>
        </div>
        <!-- --------------se inicia el sidebar WEB-------------- -->
        <div class="container section">
            <ul class="sidenav hide-on-med-and-down" id="menu-side">
                <li>
                    <!-- fondo e iniciales del usuario -->
                    <div class="user-view">
                        <div class="background">
                            <img src="images/background.jpg" alt="">
                        </div>
                        <a href="#">
                            <img class="circle" alt="" src="images/logo statistics.png">
                        </a>
                        <a href="#">
                            <span class="name white-text">Alexis Ramos</span>
                        </a><br>
                    </div>
                </li>
                <li><a id="TextoPrin" href="index.php">Cuentas sin uso (30 días)</a></li>
                <li class="divider"></li>
                <li><a id="TextoPrin" href="usuariosConexiones.php">Usuarios y Sesiones por conexión</a></li>
                <li class="divider"></li>
                <li><a class="dropdown-trigger" data-target="dropdown1" id="TextoPrin">Detalle de usuarios y sesiones<i class="material-icons right">arrow_drop_down</i></a></li>
                <li class="divider"></li>
                <li><a class="dropdown-trigger" data-target="dropdown2" id="TextoPrin">Gráficas<i class="material-icons right">arrow_drop_down</i><i class="material-icons right">pie_chart</i></a></li>
                <li class="divider"></li>
                <li><a class="dropdown-trigger" data-target="dropdown3" id="TextoPrin">Plan H<i class="material-icons right">arrow_drop_down</i></a></li>
                <li class="divider"></li>
                <li><a [routerLink]="['/login']" id="TextoPrin">Cerrar sesión</a></li>
                <li class="divider"></li>
            </ul>
        </div>

        <!-- ---------------se crea menu para móbil---------- -->
          <!-- ---------Se inicia el menú para la vista móvil ----------->
          <!-- <ul class="sidenav" id="menu-side">
            <li>
                 fondo e iniciales del usuario 
                <div class="user-view">
                    <div class="background">
                        <img src="images/background.jpg" alt="">
                    </div>
                    <a href="#">
                        <img class="circle" alt="" src="images/logo statistics.png">
                    </a>
                    <a href="#">
                        <span class="name white-text">Alexis Ramos</span>
                    </a><br>
                </div>
            </li>
            <li><a href="index.php" id="TextoPrin">Cuentas sin uso (30 días)</a></li>
            <li class="divider"></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdownM1" id="TextoPrin">Usuarios y Sesiones por conexión<i class="material-icons right">arrow_drop_down</i></a></li>
            <li class="divider"></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdownM2" id="TextoPrin">Detalle de usuarios y sesiones<i class="material-icons right">arrow_drop_down</i></a></li>
            <li class="divider"></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdownM3" id="TextoPrin">Graficas<i class="material-icons right">arrow_drop_down</i><i class="material-icons right">pie_chart</i></a></li>
            <li class="divider"></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdownM3" id="TextoPrin">Plan H<i class="material-icons right">arrow_drop_down</i></a></li>
            <li class="divider"></li>
            <li><a href="#!" id="TextoPrin">Cerrar sesión</a></li>
            <li class="divider"></li>
        </ul> -->
</header>
    
    <!-- Se crea contenido de la página-->
    <div class ="container">
        <div class="row s12">
            <div class="col s6 ">
                <h2 class="header">Total de Usuarios firmados del día</h2>
                <div class="card horizontal hoverable">
                    <div class="card-image">
                        <i class="large material-icons prefix" style="color: black">assignment_ind</i>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>Total del conteo</p>
                        </div>
                    </div>
                    <li class="divider"></li>
                    <!-- <div class = "row">
                    <table class="bordered highlight centered responsive-table" id="dataTable">
                        <thead>
                            <tr>
                                <th>Usuarios Firmados</th>
                            </tr>
                        </thead>
                    </table>
                    </div> -->
                    
                </div>
            </div>

            <div class="col s6">
                <h2 class="header">Total de Conexiones del día</h2>
                <div class="card horizontal hoverable">
                    <div class="card-image">
                        <i class="large material-icons prefix" style="color: black">wifi</i>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>Total del conteo</p>
                        </div>
                    </div>
                    <li class="divider"></li>
                    <!-- <table class="bordered highlight centered responsive-table" id="dataTable">
                        <thead>
                            <tr>
                                <th>Usuarios Firmados</th>
                            </tr>
                        </thead>
                    </table> -->
                </div>
            </div>
        </div>
    </div>
    



    <!--Se importa las librerias JS-->    
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/jquey.min.js"></script>
<!--Se inicia el js para activar las funciones de materialize--> 
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var elems1 = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Sidenav.init(elems);
    var instances2 = M.Dropdown.init(elems1);
  });
</script>
</body>
</html>