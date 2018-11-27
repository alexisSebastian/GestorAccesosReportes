<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestor de accesos | Login</title>
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
                    <a href="#!" class="brand-logo center" id="tituloLogin"> Login</a>
                </div>
            </nav>
        </div>
    </header>
    <section>
    <div class="section">
            <div class="container center">
                <div class="z-depth-3 grey lighten-4 row" style="display: inline-block; padding: 20px 48px 0px 48px; border: 1px solid #EEE;">
                    <form method="post" class="col s12" id="formularioLogin">
                        <div class="row">
                            <div class="col s12">
                                <i class="material-icons medium">
                                    account_circle
                                </i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col 6">
                                <i class="material-icons prefix">person</i>
                                <input id="userName" type="text" class="validate" name="user" /><!--required-->
                                <label for="userName">Usuario</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col 6">
                                <i class="material-icons prefix">lock</i>
                                <input id='pass' type='password' class='validate' name='pass' /><!--required-->
                                <label for="pass">Ingresa tu contraseña</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <input type="hidden" id="tipo" value="login">
                            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo' id="login">Iniciar Sesión<i class="material-icons right">send</i></button>
                        </div>
                        <div class="divider" tabindex="-1" style="margin: 20px 0;"></div>
                        <a id="newAcount" href="nuevoUsuario.php">Crear cuenta</a><br>
                    </form>
                </div>
            </div>
        </div>
    </section>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/jquey.min.js"></script>
<script type="text/javascript" src="js/sweetalert2.all.min.js"></script> 
</body>
</html>