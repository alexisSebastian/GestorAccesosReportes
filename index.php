<?php
    include 'class/connection.php';
    include 'class/funciones.php';

    //paginación
    $registros_pag = 5;
    //contar datos
    $registros = obtenerCuentasSinUso();
    $num_filas = mysqli_num_rows($registros);
    //   echo $num_filas;
    $paginas = $num_filas/5;
    $paginas =ceil($paginas);
    // echo $paginas;
    
    if (!$_GET) {
        header('Location:index.php?pagina=1');
    }elseif($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0){
        header('Location:index.php?pagina=1');
    }

    

    //se realiza calculo para la pginacion
    $iniciar = ($_GET['pagina']-1) * $registros_pag;
    //echo $iniciar;

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
            <li><a href="totalConexionesDia.php">Total de Conexiones del día</a></li>
            <li class="divider"></li>
            <li><a href="detalleConexionesDia.php">Detalle de conexiones del día</a></li>
        </ul>

        <ul id="dropdown2" class="dropdown-content">
            <li><a href="totalUsuariosFirmadosDia.php">Total de Usuarios firmados del día</a></li>
            <li class="divider"></li>
            <li><a href="detalleUsuariosFirmadosDia.php">Detalle de usuarios firmados del día</a></li>
        </ul>

        <ul id="dropdown3" class="dropdown-content col s12">
            <li><a href="graficaConecDiaArea.php">Distribución de conexiones del día por área</a></li>
            <li class="divider"></li>
            <li><a href="graficaUsuariosFirmadosDia.php">Distribución de usuarios firmados del día</a></li>
        </ul>

        <!-- -------------Menú dropdownMóbil------------------ -->
        <ul id="dropdownM1" class="dropdown-content">
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
        </ul>

        <!-- ---------------se inicia el navbar------------- -->
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
                <li><a href="index.php" id="TextoPrin">Cuentas sin uso (30 días)</a></li>
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

        <!-- ---------------se crea menu para móbil---------- -->
          <!-- ---------Se inicia el menú para la vista móvil ----------->
          <ul class="sidenav" id="menu-side">
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
            <li><a href="index.php" id="TextoPrin">Cuentas sin uso (30 días)</a></li>
            <li class="divider"></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdownM1" id="TextoPrin">Sesiones por conexión<i class="material-icons right">arrow_drop_down</i></a></li>
            <li class="divider"></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdownM2" id="TextoPrin">Usuarios firmados del día<i class="material-icons right">arrow_drop_down</i></a></li>
            <li class="divider"></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdownM3" id="TextoPrin">Graficas<i class="material-icons right">arrow_drop_down</i><i class="material-icons right">pie_chart</i></a></li>
            <li class="divider"></li>
            <li><a href="#!" id="TextoPrin">Cerrar sesión</a></li>
            <li class="divider"></li>
        </ul>
    </header>
    
    <!-- Se crea contenido de la página-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="card hoverable">
                        <div class="card-panel">
                            <div class="row">
                                <div class="col s6">
                                    <h5>Cuentas sin uso (30 días)</h5>
                                </div>    
                            
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">search</i>
                                    <input type="text" name="" id="buscar" class="autocomplete">
                                    <label for="buscar">Buscar...</label>
                                </div>
                            </div>
                             <li class="divider"></li>
                            <div class="row">
                                <table class="bordered highlight centered responsive-table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nomre de usuario</th>
                                            <th>Nombre completo</th>
                                            <th>Organización</th>
                                            <th>Ultima sesión</th>
                                            <th>Días sin accesos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $registros = obtenerCuentasSinUsoPag();
                                            
                                            if ($registros->num_rows) {
                                                foreach ($registros as $registro){ ?>
                                                    <tr>
                                                        <td><?php echo $registro['username']?></td>
                                                        <td><?php echo $registro['full_name']?></td>
                                                        <td><?php echo $registro['organization']?></td>
                                                        <td><?php echo $registro['ultima_sesion']?></td>
                                                        <td><?php echo $registro['dias_sin_acceso']?></td>
                                                    </tr>
                                        <?php   }
                                            }?>
                                    </tbody>
                                </table>
                            </div>
                           <div class="row">
                               <ul class="pagination center">
                                    <li class="waves-effect <?php echo $_GET['pagina']<$paginas?'disabled':'' ?>"><a href="index.php?pagina=<?php echo $_GET['pagina']-1 ?>"><i class="material-icons">chevron_left</i></a></li>
                                    
                                    <?php for($i = 0; $i < $paginas; $i++): ?>
                                    <li class="waves-effect <?php echo $_GET['pagina'] == $i+1 ? 'active' : '' ?>"><a href="index.php?pagina=<?php echo $i + 1 ?>"><?php echo $i + 1 ?></a></li>
                                    <?php endfor ?>

                                    <li class="waves-effect <?php echo $_GET['pagina']>$paginas?'disabled':'' ?>"><a href="index.php?pagina=<?php echo $_GET['pagina']+1 ?>"><i class="material-icons">chevron_right</i></a></li>
                               </ul>
                           </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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