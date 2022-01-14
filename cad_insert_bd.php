<?php
require 'conexao_bd.php';

$nome = $_POST['nome'];
$avatar = $_POST['avatar'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$con->query("INSERT INTO usuario (nome, avatar, email, senha) VALUES ('$nome', '$avatar', '$email', '$senha');");


echo '<script type="text/javascript">alert("Usuario cadastrado com sucesso!")</script>';