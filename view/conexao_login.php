<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'teste');
define('SENHA', 'teste123');
define('DB', 'login');

$conexcao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');
