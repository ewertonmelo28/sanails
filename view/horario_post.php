<?php include_once("conexao.php");

	$data_agenda = $_REQUEST['data_agenda'];
	
	$result_hora = "SELECT * FROM hora WHERE fk_data=$data_agenda AND livre=1 ORDER BY hora";
	$resultado_hora = mysqli_query($conexao_agend, $result_hora);
	
	while ($row_hora = mysqli_fetch_assoc($resultado_hora) ) {
		$resulta_hora[] = array(
			'id_hora'	=> $row_hora['id_hora'],
			'hora' => $row_hora['hora'],
		);
	}
	
	echo(json_encode($resulta_hora));