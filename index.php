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
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper blue darken-4">
                    <a href="#!" class="brand-logo center" id="tituloLogin">Cuentas sin uso (30 días)</a>
                </div>
            </nav>
        </div>
    </header>

    <!--Se inicia el sidenav-->
    
    <!-- Se crea contenido de la página->

<!--Se importa las librerias JS-->    
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/jquey.min.js"></script>
<!--Se inicia el js para activar las funciones de materialize--> 
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
</script>
</body>
</html>