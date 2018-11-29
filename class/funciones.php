<?php

//cuantas sin uso 30 dias (index.php)
function obtenerCuentasSinUso(){
    include 'connection.php';

    try {
        return $conn->query("select a.username, full_name, organization, max(start_date) as ultima_sesion, datediff(current_date(),max(start_date)) as dias_sin_acceso
        from guacamole_db.guacamole_connection_history  a left join guacamole_db.guacamole_user b
        on a.username = b.username
        where organization not in ('CNS SISTEMAS', 'Telmex') and organization is not NULL
        group by a.username, full_name, organization
        having datediff(current_date(),max(start_date)) >15
        order by dias_sin_acceso desc");

    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    } 
}

// consulta para paginacion
function obtenerCuentasSinUsoPag(){
    include 'connection.php';

    try {
        return $conn->query("select a.username, full_name, organization, max(start_date) as ultima_sesion, datediff(current_date(),max(start_date)) as dias_sin_acceso
        from guacamole_db.guacamole_connection_history  a left join guacamole_db.guacamole_user b
        on a.username = b.username
        where organization not in ('CNS SISTEMAS', 'Telmex') and organization is not NULL
        group by a.username, full_name, organization
        having datediff(current_date(),max(start_date)) >15
        order by dias_sin_acceso desc LIMIT 0,5");

    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    } 
}

//--------------------------------------------------------------------------------------------------------


//implementado (arch: detalle conexion)
function detalleConexionesDia(){
    include 'connection.php';

    try {
        return $conn->query("SELECT a.connection_name,  count(*) as sesiones, SEC_TO_TIME(avg(TIMESTAMPDIFF(SECOND, start_date, end_date)))  as prom_duracion ,  SEC_TO_TIME(sum(TIMESTAMPDIFF(SECOND, start_date, end_date)))as sum_duracion
        FROM guacamole_db.guacamole_connection_history a left join  guacamole_db.guacamole_connection b 
        on a.connection_name = b.connection_name 
        left join guacamole_db.guacamole_user c 
        on a.username = c.username 
        where start_date >= current_date()  and c.organization not in ('CNS Sistemas') and c.organization is not null 
        group by a.connection_name 
        order by a.connection_name");
        
    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    } 
}

//implementado (arch: detalleFirmados.php)
function detalleUsuariosFirmadosDia(){
    include 'connection.php';

    try {
        return $conn->query("SELECT a.username, full_name, organization,  count(*) as sesiones, SEC_TO_TIME(sum(TIMESTAMPDIFF(SECOND, start_date, end_date))) as sum_duracion
        FROM guacamole_db.guacamole_user a left join  guacamole_db.guacamole_user_history b
        on a.username = b.username
        where start_date >= current_date() and disabled = 0 and organization not in ('CNS SISTEMAS','CNS Sistemas') and organization is not NULL
        group by a.username, full_name, organization
        order by a.username asc");

    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    } 
}

//Implementado (arch totalConexiones.php)
function totalConexionesDia(){
    include 'connection.php';

    try {
        return $conn->query("SELECT count(*) as sesiones
        FROM guacamole_db.guacamole_connection_history a left join  guacamole_db.guacamole_connection b
        on a.connection_name = b.connection_name
        left join guacamole_db.guacamole_user c
        on a.username = c.username
        where start_date >= current_date()  and c.organization not in ('CNS Sistemas') and c.organization is not null");

    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    } 
}

//implementado (arch: totalFirmados.php)
function totalUsuariosDia(){
    include 'connection.php';

    try {
        return $conn->query("SELECT count(*)
        FROM guacamole_db.guacamole_user a left join  guacamole_db.guacamole_user_history b
        on a.username = b.username
        where start_date >= current_date() and organization not in ('CNS SISTEMAS','CNS Sistemas') and organization is not NULL");

    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    } 
}

//CONSULTAS PARA LAS GRAFICAS

//Iniciada (arch:detalleConexionPorDia)
function distribucionConexionesDia(){
    include 'connection.php';

    try {
        return $conn->query("SELECT organization, count(*) as sesiones
        FROM guacamole_db.guacamole_connection_history a left join  guacamole_db.guacamole_connection b
        on a.connection_name = b.connection_name
        left join guacamole_db.guacamole_user c
        on a.username = c.username
        where start_date >= current_date()  and c.organization not in ('CNS Sistemas') and c.organization is not null
        group by  organization
        order by  organization");

    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    } 
} 

//Iniciar (arch: distribucionUsuariosPorDia.php)
function distribucionUsuariosDia(){
    include 'connection.php';

    try {
        return $conn->query("SELECT organization,  count(*) as sesiones
        FROM guacamole_db.guacamole_user a left join  guacamole_db.guacamole_user_history b
        on a.username = b.username
        where start_date >= current_date() and organization not in ('CNS SISTEMAS','CNS Sistemas') and organization is not NULL
        group by organization");
   

    } catch (Exception $e) {
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    } 
} 