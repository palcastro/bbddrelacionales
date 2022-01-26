<?php
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';
try { 
    $bd = new PDO($cadena_conexion, $usuario, $clave); 
    echo "Conexión realizada con éxito";
    $sql = 'SELECT nombre, clave, rol FROM usuarios';
    $usuarios = $bd->query($sql);
    echo $usuarios->rowCount(). "<br>";
    foreach ($usuarios as $row){
        print $row['nombre']. "\t";
        print $row['clave']. "\t";
    }
    
}
catch (PDOException $e){
    echo "Error en la base de datos" . $e->getMessage();
}