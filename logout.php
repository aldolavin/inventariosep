<?php 

require_once 'php_action/core.php';

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

//header('location: http://localhost/2022/inventario/index.php');
header('location: http://localhost/inventario/index.php');

?>