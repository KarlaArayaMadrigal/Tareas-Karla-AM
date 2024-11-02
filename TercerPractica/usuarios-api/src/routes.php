<?php
require_once(__DIR__ . '/controllers/UsuarioController.php');

$controller = new UsuarioController();

// Obtener el ID de los parámetros de la URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Llama al método correspondiente según los parámetros
echo $controller->obtenerUsuarios($id);
