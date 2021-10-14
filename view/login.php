<?php
session_start();
include('conexao_login.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
	$_SESSION['nao_autenticado'] = true;
    header('Location: ../page_login.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexcao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexcao, $_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexcao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: ../painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../page_login.php');
	exit();
}