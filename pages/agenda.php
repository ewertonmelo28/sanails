<?php
session_start();
include('view/conexao.php');
include('view/verifica_login.php');
?>
<!-- Pagina de visualização da agenda -->
<div class="agenda">
    <br>
    <table class="table table-bordered">
        <thead>
            <th>Hora</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Serviço</th>
        </thead>
        <!-- Exibe os agendamentos com base na data enviada pela pagina "Painel.php" -->
        <?php
        $data_painel = $_REQUEST['data_painel'];
        if ($data_painel == null) {
            header('Location: index.php?menuop=painel');
        }
        $result_agenda = "SELECT * FROM agenda WHERE fk_data=$data_painel ORDER BY fk_hora";
        $resultado_agenda = mysqli_query($conexao_agend, $result_agenda);


        while ($row_agenda = mysqli_fetch_array($resultado_agenda)) {
        ?>
        <tbody>
            <tr>
                <td><?php
                        $row_hora = $row_agenda['fk_hora'];
                        $sql_hora = "SELECT hora  FROM  hora WHERE id_hora=$row_hora";
                        $res_hora = mysqli_query($conexao_agend, $sql_hora);
                        $r_hora = mysqli_fetch_array($res_hora);
                        echo date("H:i", strtotime($r_hora['hora'])); ?></td>
                <td><?php echo $row_agenda["nome"] ?></td>
                <td><?php echo $row_agenda["telefone"] ?></td>
                <td><?php echo $row_agenda["servico"] ?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>

    <div class="painel">
        <form class="painel" action="index.php?menuop=painel" method="POST">
            <button type="submit">Voltar</button>
        </form>
        <form class="painel" action="view/logout.php">
            <button type="submit">Logout</button>
        </form>
    </div>
</div>