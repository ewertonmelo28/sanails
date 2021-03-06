<?php
include("view/conexao.php");
session_start();
include('view/verifica_login.php');
?>

<div class="painel">
    <!-- Seleção da data para visualizar a agenda -->
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


<!-- Link da pagina para liberar datas na agenda -->
<div class="painel">
    <form class="painel" action="index.php?menuop=criar_agenda" method="POST">
        <button type="submit">Liberar Agenda</button>
    </form>
    <form class="painel" action="index.php?menuop=catalogo_painel" method="POST">
        <button type="submit">Editar Catalogo</button>
    </form>
    <form class="painel" action="view/logout.php">
        <button type="submit">Logout</button>
    </form>
</div>