<?php
include("conexao.php");
session_start();
/* Inserção de dados na agenda  */


if ($_POST['cliente_nome'] != null and $_POST['cliente_telefone'] != null) {
    $cliente_nome = $_POST['cliente_nome'];
    $cliente_telefone = $_POST['cliente_telefone'];
    $servico = $_POST['servico'];
    $data_agenda = $_POST['data_agenda'];
    $hora_agenda = $_POST['hora_agenda'];
}else{
    $_SESSION['erro'] = "<p>Informe Nome e Telefone !</p>";
    header("Location: ../index.php?menuop=agendamento");
}

$alt_hora = "UPDATE agendamento.hora SET livre = 0 WHERE id_hora = $hora_agenda";
$result_alt_hora = mysqli_query($conexao_agend, $alt_hora);

$consult_hora = "SELECT SUM(livre) AS hora FROM hora WHERE fk_data = $data_agenda";
$result_consult_hora = mysqli_query($conexao_agend, $consult_hora);
$row_consult_hora = mysqli_fetch_array($result_consult_hora);

switch ($row_consult_hora["hora"]) {
    case '0':
        $alt_data = "UPDATE agendamento.data SET livre = 0 WHERE id_data = $data_agenda";
    $result_alt_hora = mysqli_query($conexao_agend, $alt_data);
        break;
}


$input_agenda = "INSERT INTO agendamento.agenda(nome, telefone, servico, fk_data, fk_hora)
VALUES ('$cliente_nome', '$cliente_telefone', '$servico', $data_agenda, $hora_agenda)";
$result_input_agenda = mysqli_query($conexao_agend, $input_agenda);


if (mysqli_insert_id($conexao_agend)) {
    $_SESSION['confirm'] = "<p>Agendamento realizado</p>";
    header("Location: ../index.php?menuop=agendamento");
} else {
    $_SESSION['erro'] = "<p>Erro no agendamento</p>";
    header("Location: ../index.php?menuop=agendamento");
}
