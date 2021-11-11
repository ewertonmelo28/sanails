<?php
session_start();
?>

<div class="agendamento">
    <?php
    if (isset($_SESSION['confirm'])) {
    ?>
        <div class="notification is-success">
            <?php echo $_SESSION['confirm'];
            unset($_SESSION['confirm']); ?>
        </div>
    <?php
    } elseif (isset($_SESSION['erro'])) {
    ?>
        <div class="notification is-danger">
            <?php echo $_SESSION['erro'];
            unset($_SESSION['erro']); ?>
        </div>
    <?php
    }
    ?>
    <form class="agendamento" action="view/salva_catalogo.php" method="POST">
        <div>
            <label for="servico">Serviço:</label>
            <input type="text" id="servico" name="servico" />
        </div>
        <div>
            <label for="aplicacao">Aplicação:</label>
            <input type="number" step="any" id="aplicacao" name="aplicacao"  />
        </div>
        <div>
            <label for="manutencao">Manutenção:</label>
            <input type="number" step="any" id="manutencao" name="manutencao" />
        </div>
        <div class="agendamento">
            <button type="submit">Adicionar</button>
        </div>
    </form>
    <form class="painel" action="index.php?menuop=catalogo_painel" method="POST">
        <button type="submit">Voltar</button>
    </form>
</div>