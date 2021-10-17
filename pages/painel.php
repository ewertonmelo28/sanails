<?php
include('view/verifica_login.php');
?>

<div class="painel">
    <form class="painel" action="index.php?menuop=agenda" method="POST">
        <label for="data_painel">Selecione a data:</label>
        <select type="text" id="data_painel" name="data_painel">
            <option value="">Escolha uma data</option>
            <?php
            $result_cat = "SELECT *, DATE_FORMAT(data, '%d/%m/%Y') as data FROM data ORDER BY data";
            $resultado_cat = mysqli_query($conexao_agend, $result_cat);
            while ($row_cat = mysqli_fetch_assoc($resultado_cat)) {
                echo '<option value="' . $row_cat['id_data'] . '">' . $row_cat['data'] . '</option>';
            }
            ?>
        </select>
        <button type="submit">Visualizar agenda</button>
</div>
</form>







<!-- <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2> -->




<div class="painel">
    <form class="painel" action="page/criar_agend.php">
        <button type="submit">Liberar Agenda</button>
    </form>
    <form class="painel" action="view/logout.php">
        <button type="submit">Logout</button>
    </form>
</div>