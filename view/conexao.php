<?php
/* Conexção com banco de dados */
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', 'root');
define('DB_LOGIN', 'login');
define('DB_AGEND', 'agendamento');
define('DB_CATAL', 'catalogo');

$conexcao_login = mysqli_connect(HOST, USUARIO, SENHA, DB_LOGIN) or die('Não foi possivel conectar');
$conexao_agend = mysqli_connect(HOST, USUARIO, SENHA, DB_AGEND) or die('Não foi possivel conectar');
$conexao_catal = mysqli_connect(HOST, USUARIO, SENHA, DB_CATAL) or die('Não foi possivel conectar');