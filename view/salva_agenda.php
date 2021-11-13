<?php
include('conexao.php');

$data_inicial = $_POST['data_inicial'];
$data_final = $_POST['data_final'];
$hora_inicial = $_POST['horario_inicial'];
$hora_final = $_POST['horario_final'];
$tempo_atendimento = $_POST['tempo_atendimento'];
$hora_aux = $hora_inicial;
$t = explode(':', $tempo_atendimento);

do {
    $hora_aux = $hora_inicial;
    $sql_data = "INSERT INTO agendamento.data (data, livre) VALUES ('$data_inicial', b'1');";
    mysqli_query($conexao_agend, $sql_data);

    do {
        $sql_return = "SELECT id_data FROM data WHERE data='$data_inicial'";
        $sql_return_result = mysqli_query($conexao_agend, $sql_return);
        $id_data = mysqli_fetch_assoc($sql_return_result);
        $id = $id_data['id_data'];        
        $sql_hora = "INSERT INTO agendamento.hora (hora, livre, fk_data) VALUES ('$hora_aux', b'1','$id');";
        mysqli_query($conexao_agend, $sql_hora);
        $hora_aux = date('H:i', strtotime("{$hora_aux} + {$t[0]} hours {$t[1]} minutes"));
    } while ($hora_aux < $hora_final);
    $data_inicial++;
} while ($data_inicial <= $data_final);

header("Location: ../index.php?menuop=criar_agenda");
