<?php
 // Gerenciamento de sessão
class Sessao {
    public static function iniciar() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function validar() {
        return isset($_SESSION['usuario']);
    }

    public static function encerrar() {
        session_unset();
        session_destroy();
    }

    public static function setarUsuario($usuario) {
        $_SESSION['usuario'] = $usuario;
    }

    public static function getUsuario() {
        return $_SESSION['usuario'] ?? null;
    }
}
    
?>