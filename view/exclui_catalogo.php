<?php 
include("conexao.php");
session_start();

$idcatalogo = $_GET["idcatalogo"];
$sql = "DELETE FROM catalogo WHERE idcatalogo = '$idcatalogo' ";
mysqli_query($conexao_catal,$sql) or die("Erro ao excluir dados".mysqli_error(($conexao_catal)));


header("Location: index.php?menuop=catalogo_painel");
