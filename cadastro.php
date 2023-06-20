<?php

include('./conexao.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$query = "INSERT INTO `users`( `mail`, `pass`, `type`) VALUES ('$login','$senha','1')";

$sql = mysqli_query($conexao, $query);

header("location: ./login.html");