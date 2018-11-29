<?php
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