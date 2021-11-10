<?php
include("view/conexao.php");
session_start();
?>
<!-- Formulario de login e senha -->
<div class="form_login">
    <h1 class="form_login">ÁREA DO ADMINISTRADOR</h1><br><br>

    <?php
    if (isset($_SESSION['nao_autenticado'])) :
    ?>
        <div class="notification is-danger">
            <p>Usuário ou senha inválidos.</p>
        </div>
    <?php
        unset($_SESSION['nao_autenticado']);
    endif;
    ?>
    <form class="form_login" action="view/login.php" method="POST">
        <div class="mb-3">
            <label for="usuario" class="form-label">Login</label>
            <input type="text" class="form-control" id="usuario" name="usuario">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>