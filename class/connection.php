<?php
    // class Connection{
    //     function connect(){
    //         //  $user = "root";
    //         //  $pass = "cnsguacamole";
    //         //  $host = "10.93.5.140";
    //         //  $dbName = "guacamole_db";
    //          $user = "root";
    //          $pass = "root";
    //          $host = "localhost";
    //          $dbName = "guacamole_db";

    //         $conn = mysqli_connect($host, $user, $pass) or die("Error al intentar conectar con el servidor");
    //         //print_r($conn);
    //         mysqli_select_db($conn, $dbName) or die("No existe la base de datos");
    //         //print_r($db);
    //         return $conn;
    //     }
    // }

    //datos para entrar a producción
        // ip = 10.93.5.141
        // usuario = root 
        // password = cnsguacamole
        // db = guacamole_db

    //$conn = new mysqli('localhost', 'root', '', 'guacamole_db_produccion');
    //$conn = new mysqli('localhost', 'root', 'root', 'guacamole_db');
    //$conn = new mysqli('10.93.5.140', 'root', 'cnsguacamole', 'guacamole_db');
    $conn = new mysqli('10.93.5.141', 'root', 'cnsguacamole', 'guacamole_db');
    if ($conn->connect_error) {
        echo $conn->connect_error;
    }

    $conn->set_charset('utf8');
?>