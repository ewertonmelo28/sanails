<!-- Inserção de dados na agenda -->
<?php
include("conexao.php");
session_start();

$cliente_nome = $_POST['cliente_nome'];
$cliente_telefone = $_POST['cliente_telefone'];
$servico = $_POST['servico'];
$data_agenda = $_POST['data_agenda'];
$hora_agenda = $_POST['hora_agenda'];


$input_agenda = "INSERT INTO agendamento.agenda(nome, telefone, servico, fk_data, fk_hora)
VALUES ('$cliente_nome', '$cliente_telefone', '$servico', $data_agenda, $hora_agenda)";
$result_input_agenda = mysqli_query($conexao_agend, $input_agenda);

if(mysqli_insert_id($conexao_agend)){
    $_SESSION['confirm']= "<p>Agendamento realizado</p>";
    header("Location: ../index.php?menuop=agendamento");
}else{
    $_SESSION['erro'] = "<p>Erro no agendamento</p>";
    header("Location: ../index.php?menuop=agendamento");
}
?>