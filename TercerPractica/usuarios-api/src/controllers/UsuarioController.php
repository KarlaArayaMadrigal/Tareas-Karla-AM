<?php
require_once(__DIR__ . '/../models/Usuario.php');

class UsuarioController {
    private $usuario;

    public function __construct() {
        $this->usuario = new Usuario();
    }

    public function obtenerUsuarios($id = null) {
        if ($id) {
            $usuario = $this->usuario->obtenerUsuarioPorId($id);
            if ($usuario) {
                return json_encode($usuario);
            } else {
                return json_encode(["message" => "Usuario no encontrado."]);
            }
        } else {
            $usuarios = $this->usuario->obtenerTodosUsuarios();
            return json_encode($usuarios);
        }
    }
}
