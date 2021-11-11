<?php
session_start();
include('view/conexao.php');
?>

<div class="principal">

    <!-- Tabela de Preços -->
    <div class="catalogo">
        <table class="table table-borderedless">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Serviço</th>
                    <th>Aplicação</th>
                    <th>Manutenção</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
$result_catal = "SELECT 
idcatalogo,
upper(servico) AS servico,
Concat('R$ ',   
        Replace  
            (Replace  
                (Replace  
                    (Format(aplicacao, 2), '.', '|'), ',', '.'), '|', ',')) AS aplicacao,
Concat('R$ ',   
        Replace  
            (Replace  
                (Replace  
                    (Format(manutencao, 2), '.', '|'), ',', '.'), '|', ',')) AS manutencao
FROM catalogo";
                $resultado_catal = mysqli_query($conexao_catal, $result_catal);

                $cont = 1;
                while ($row_catal = mysqli_fetch_array($resultado_catal)) {
                ?>
                    <tr>
                        <th><?php echo $cont ?></th>
                        <td><?php echo $row_catal["servico"] ?></td>
                        <td><?php echo $row_catal["aplicacao"] ?></td>
                        <td><?php echo $row_catal["manutencao"] ?></td>
                        <td><a href="index.php?menuop=editar_catalogo&idcatalogo=<?php echo $row_catal["idcatalogo"] ?>">Editar</a></td>
                        <td><a href="index.php?menuop=exclui_catalogo&idcatalogo=<?php echo $row_catal["idcatalogo"] ?>">Excluir</a></td>
                    </tr>
            </tbody>
        <?php $cont++;
                } ?>
        </table>

        <form class="painel" action="index.php?menuop=adicionar_catalogo" method="POST">
            <button type="submit">Adicionar item</button>
        </form>