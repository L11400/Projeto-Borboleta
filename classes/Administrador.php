<?php
// Classe derivada
require_once 'Usuario.php';

class Administrador extends Usuario {
    public function listarUsuarios($caminhoArquivo) {
        $dados = json_decode(file_get_contents($caminhoArquivo), true);
        foreach ($dados as $usuario) {
            echo "Usuário: " . $usuario['nome'] . " - Email: " . $usuario['email'] . "<br>";
        }
    }

    public function exibirPerfil() {
        return parent::exibirPerfil() . "<br><strong>Tipo: Administrador</strong>";
    }
}

?>