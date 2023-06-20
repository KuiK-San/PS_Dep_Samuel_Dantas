<?php

include('./verificador.php');

include('./conexao.php');

$_SESSION['userSenha'] = false;

$login = $_POST['login'];
$senha = $_POST['senha'];

$query = "SELECT * FROM `users` WHERE `mail` = '$login'";

$sql = mysqli_query($conexao, $query);

$row = mysqli_fetch_assoc($sql);

if (!empty($row['mail']) && $row['pass'] == $senha ) {
    header('location: ./index.php');
    $_SESSION['user'] = TRUE;
    
}else{
    $_SESSION['userSenha'] = TRUE;
    unset($_SESSION['user']);
    header('location: login.php');
}
?>