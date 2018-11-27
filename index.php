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
        <!-- -------------Manú web-------------------- -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Total de Conexiones del día</a></li>
            <li class="divider"></li>
            <li><a href="#!">Detalle de conexiones del día</a></li>
        </ul>

        <ul id="dropdown2" class="dropdown-content">
            <li><a href="#!">Total de Usuarios firmados del día</a></li>
            <li class="divider"></li>
            <li><a href="#!">Detalle de usuarios firmados del día</a></li>
        </ul>

        <ul id="dropdown3" class="dropdown-content">
            <li><a href="#!">Distribución de conexiones del día por área</a></li>
            <li class="divider"></li>
            <li><a href="#!">Distribución de usuarios firmados del día</a></li>
        </ul>

        <!-- -------------Menú Móbil------------------ -->
        <ul id="dropdown1M" class="dropdown-content">
            <li><a href="#!">Total de Conexiones del día</a></li>
            <li class="divider"></li>
            <li><a href="#!">Detalle de conexiones del día</a></li>
        </ul>

        <ul id="dropdown2M" class="dropdown-content">
            <li><a href="#!">Total de Usuarios firmados del día</a></li>
            <li class="divider"></li>
            <li><a href="#!">Detalle de usuarios firmados del día</a></li>
        </ul>

        <ul id="dropdown3M" class="dropdown-content">
            <li><a href="#!">Distribución de conexiones del día por área</a></li>
            <li class="divider"></li>
            <li><a href="#!">Distribución de usuarios firmados del día</a></li>
        </ul>

        <!-- ---------------se inicia el navbar------------- -->
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <a href="#!" class="brand-logo center col s4" id="tituloLogin">Cuentas sin uso (30 días)</a>
                    <a href="#" data-target="menu-side" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
            </nav>
        </div>

        <!-- --------------se inicia el sidebar-------------- -->
        <div class="container section">
            <ul class="sidenav hide-on-med-and-down" id="menu-side">
                <li>
                    <!-- fondo e iniciales del usuario -->
                </li>
                <li class="divider"></li>
                <li><a href="#!" id="TextoPrin">Cuentas sin uso (30 días)</a></li>
                <li class="divider"></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1" id="TextoPrin">Sesiones por conexión<i class="material-icons right">arrow_drop_down</i></a></li>
                <li class="divider"></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown2" id="TextoPrin">Usuarios firmados del día<i class="material-icons right">arrow_drop_down</i></a></li>
                <li class="divider"></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown3" id="TextoPrin">Graficas<i class="material-icons right">arrow_drop_down</i><i class="material-icons right">pie_chart</i></a></li>
                <li class="divider"></li>
                <li><a href="#!" id="TextoPrin">Cerrar sesión</a></li>
                <li class="divider"></li>
            </ul>
        </div>
    </header>
    

    <!-- Se crea contenido de la página->

<!--Se importa las librerias JS-->    
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/jquey.min.js"></script>
<!--Se inicia el js para activar las funciones de materialize--> 
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);

    var elems1 = document.querySelectorAll('.dropdown-trigger');
    var instances2 = M.Dropdown.init(elems1);
  });
</script>
</body>
</html>