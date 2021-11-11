<?php
include('view/conexao.php');
session_start();


$idcatalogo = $_GET["idcatalogo"];
$sql = "SELECT * FROM catalogo WHERE idcatalogo=$idcatalogo";
$rs = mysqli_query($conexao_catal,$sql) or die("Erro ao recuperar dados");
$dados = mysqli_fetch_assoc($rs);
?>

<div class="agendamento">
    <form class="agendamento" action="view/atualiza_catalogo.php" method="POST">
    <div>
            <label for="idcatalogo">ID:</label>
            <input type="text" id="idcatalogo" name="idcatalogo" value="<?=$dados["idcatalogo"]?>"/>
        </div>
        <div>
            <label for="servico">Serviço:</label>
            <input type="text" id="servico" name="servico"value="<?=$dados["servico"]?>"/>
        </div>
        <div>
            <label for="aplicacao">Aplicação:</label>
            <input type="number" step="any" id="aplicacao" name="aplicacao"value="<?=$dados["aplicacao"]?>"/>
        </div>
        <div>
            <label for="manutencao">Manutenção:</label>
            <input type="number" step="any" id="manutencao" name="manutencao"value="<?=$dados["manutencao"]?>"/>
        </div>
        <div class="agendamento">
            <button type="submit">Atualizar</button>
        </div>
    </form>
    
    <form class="painel" action="index.php?menuop=catalogo_painel" method="POST">
        <button type="submit">Voltar</button>
    </form>

</div>