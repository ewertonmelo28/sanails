<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'teste');
define('SENHA', 'teste123');
define('DB_LOGIN', 'login');
define('DB_AGEND', 'agendamento');

$conexcao_login = mysqli_connect(HOST, USUARIO, SENHA, DB_LOGIN) or die('Não foi possivel conectar');
