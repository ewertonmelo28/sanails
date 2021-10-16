<?php
include('view/verifica_login.php');
?>
<h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
<form class="form_login" action="view/logout.php">
    <button type="submit">Logout</button>
</form>