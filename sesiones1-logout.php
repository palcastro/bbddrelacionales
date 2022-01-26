<?php
session_start(); //Unirse a la sesión
$_SESSION = array();

session_destroy(); //eliminar la sesión 
//eliminar la cookie

setcoookie(session_name(), 123, time() - 1000);
header("Location: sesiones1-login.php");