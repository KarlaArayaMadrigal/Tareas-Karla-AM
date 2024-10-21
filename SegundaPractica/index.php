<?php
// Revisa si el 'id' está en la URL
if (isset($_GET['id'])) {
    // Si el id existe, se ve el mensaje con el id escrito
    $id = htmlspecialchars($_GET['id']);
    echo "El id del usuario es $id";
} else {
    echo "Lista de todos los usuarios.";
}
?>

<!-- 
http://localhost/Tareas-Karla-AM/SegundaPractica/index.php
http://localhost/Tareas-Karla-AM/SegundaPractica/index.php?id=14 
-->