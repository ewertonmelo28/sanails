<?php 
include("conexao.php");
session_start();

$id = $_POST['idcatalogo'];
$servico = $_POST['servico'];
$aplicacao = $_POST['aplicacao'];
$manutencao = $_POST['manutencao'];

$input_item = "UPDATE catalogo SET 
servico = '$servico',
aplicacao = '$aplicacao',
manutencao = '$manutencao'
WHERE idcatalogo = '$id' ";
$result_input_item = mysqli_query($conexao_catal, $input_item);

if (mysqli_insert_id($conexao_catal)) {
    $_SESSION['confirm'] = "<p>Item Atualizado</p>";
    header("Location: ../index.php?menuop=catalogo_painel");
} else {
    $_SESSION['erro'] = "<p>Erro</p>";
    header("Location: ../index.php?menuop=catalogo_painel");
}