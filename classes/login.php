<?php
// Simulando dados que viriam do login
require_once 'Usuario.php';
require_once 'Sessao.php';
session_start();

// Esses dados normalmente viriam de um banco de dados após validação

$_SESSION['email'] = $_POST['email'];
$_SESSION['idioma']  = $_POST['idioma'];
$_SESSION['tema'] = $_POST['tema'];

$email = $_SESSION['email'];
$idioma = $_SESSION['idioma'];
$tema = $_SESSION['tema'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?= $tema == 'Claro' ? '#f5f5f5' : '#333' ?>;
            color: <?= $tema == 'Claro' ? '#000' : '#fff' ?>;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 400px;
        }
        h1 {
            color: #0056b3;
        }
        .info {
            margin-top: 20px;
        }
        .info p {
            margin: 8px 0;
        }
        .btn {
            padding: 8px 15px;
            margin-right: 10px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .editar {
            background-color: #007bff;
            color: white;
        }
        .sair {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo, WILLIAN!</h1>
        <div class="info">
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Idioma:</strong> <?= $idioma ?></p>
            <p><strong>Tema:</strong> <?= $tema ?></p>
        </div>
        <div style="margin-top: 20px;">
            <button class="btn editar">Editar Perfil</button>
            <button class="btn sair">Sair</button>
        </div>
    </div>
</body>
</html>