<?php

$servidor_banco = 'localhost';
$user_banco = 'root';
$banco = 'gestao_de_sintomas';
$senha_banco = '';

$conexao = mysqli_connect($servidor_banco, $user_banco, $senha_banco, $banco);

if (!$conexao) {
    echo('conexão não estabelecida com o banco');
}
