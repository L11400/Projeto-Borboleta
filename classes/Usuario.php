<?php
class Usuario {
    private $nome;
    private $email;
    private $senha;
    private $idioma;
    private $tema;

    public function __construct($nome, $email, $senha, $idioma, $tema) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
        $this->idioma = $idioma;
        $this->tema = $tema;
    }

    public function exibirPerfil() {
        return "Nome: {$this->nome}<br>Idioma: {$this->idioma}<br>Tema: {$this->tema}";
    }

    public function atualizarPreferencias($idioma, $tema) {
        $this->idioma = $idioma;
        $this->tema = $tema;
    }

    public function verificarSenha($senhaInformada) {
        return password_verify($senhaInformada, $this->senha);
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdioma() {
        return $this->idioma;
    }

    public function getTema() {
        return $this->tema;
    }

    public function getSenhaHash() {
        return $this->senha;
    }
}
