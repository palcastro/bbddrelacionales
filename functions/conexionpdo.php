<?php
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';
try {//Constructor
    $bd = new PDO($cadena_conexion, $usuario, $clave, array(PDO::ATTR_PERSISTENT => true)); //Creando una conexión persistente(opcional)
    $bd = null;
} catch (PDOException $e) {
    echo 'Error con la base de datos: '. $e->getMessage();
}
