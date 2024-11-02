<?php

function handleRequest() {
    $method = $_SERVER['REQUEST_METHOD'];
    $path = trim($_SERVER['PATH_INFO'] ?? '', '/'); // Maneja el PATH_INFO
    $queryString = $_SERVER['QUERY_STRING'];
    
    // Parseamos los parámetros de la consulta
    parse_str($queryString, $queryParams);
    $id = $queryParams['id'] ?? null;

    // Lógica para el endpoint "usuarios"
    if ($path === "usuarios") {
        switch ($method) {
            case 'GET':
                if ($id !== null) {
                    echo json_encode(['message' => 'El id del usuario es ' . htmlspecialchars($id)]);
                } else {
                    echo json_encode(['message' => 'Lista de todos los usuarios.']);
                }
                break;
            default:
                echo json_encode(['error' => 'Método no permitido']);
                break;
        }
    } else {
        // Si no se encuentra la ruta, muestra el archivo de error
        include "../public/error/response.html";
    }
}

?>
