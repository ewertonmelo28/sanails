<!-- Verifica se tem sessão logada -->
<?php
if (!$_SESSION['usuario']) {
	header('Location: index.php?menuop=login');
	exit();
}
