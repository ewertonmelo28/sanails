<!-- Validação do login -->
<?php
session_start();
include("conexao.php");

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../index.php?menuop=login');
	exit();
}

$usuario = mysqli_real_escape_string($conexcao_login, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexcao_login, $_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexcao_login, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: ../index.php?menuop=painel');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../index.php?menuop=login');
	exit();
}
