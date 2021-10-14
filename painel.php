<?php
/* session_start(); */
include('view/verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="view/logout.php">Sair</a></h2>
