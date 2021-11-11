<?php 
include("conexao.php");
session_start();

$idcatalogo = $_GET["idcatalogo"];
$sql = "DELETE FROM catalogo WHERE idcatalogo = '$id' ";
$rs = mysqli_query($conexao_catal,$sql) or die("Erro ao recuperar dados");


header("Location: index.php?menuop=catalogo_painel");
