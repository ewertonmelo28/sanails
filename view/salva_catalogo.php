<?php 
include("conexao.php");
session_start();

$servico = $_POST['servico'];
$aplicacao = $_POST['aplicacao'];
$manutencao = $_POST['manutencao'];

$input_item = "INSERT INTO catalogo (servico, aplicacao, manutencao)
VALUES ('$servico','$aplicacao','$manutencao') ";
$result_input_item = mysqli_query($conexao_catal, $input_item);

if (mysqli_insert_id($conexao_catal)) {
    $_SESSION['confirm'] = "<p>Item Adicionado</p>";
    header("Location: ../index.php?menuop=adicionar_catalogo");
} else {
    $_SESSION['erro'] = "<p>Erro</p>";
    header("Location: ../index.php?menuop=adicionar_catalogo");
}