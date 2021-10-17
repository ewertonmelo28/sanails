<!--Setor de agendamento-->
<div class="principal">
    <div class="agendamento">
        <h1 class="agendamento">Realize seu agendamento!</h1>
        <form class="agendamento" action="#" method="post">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="cliente_nome" />
            </div>
            <div>
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="cliente_telefone" />
            </div>
            <div>
                <label for="servico">Serviço:</label>
                <select type="text" id="servico" name="servico">
                    <option value="aplicacao">Aplicação</option>
                    <option value="manutencao">Manutenção</option>
                </select>
            </div>
            <div>
                <label for="data_agenda">Datas disponiveis:</label>
                <select type="text" id="data_agenda" name="data_agenda">
                    <option value="">Escolha uma data</option>
                    <?php
                    $result_cat = "SELECT *, DATE_FORMAT(data, '%d/%m/%Y') as data FROM data ORDER BY data";
                    $resultado_cat = mysqli_query($conexao_agend, $result_cat);
                    while ($row_cat = mysqli_fetch_assoc($resultado_cat)) {
                        echo '<option value="' . $row_cat['id_data'] . '">' . $row_cat['data'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="hora_agenda">Horarios disponiveis:</label>
                <select type="text" id="hora_agenda" name="hora_agenda">
                    <option value="">Escolha um horario</option>
                </select>
            </div>


            <div class="agendamento">
                <button type="submit">Finalizar agendamento</button>
            </div>
        </form>

        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		
		<script type="text/javascript">
		$(function(){
			$('#data_agenda').change(function(){
				if( $(this).val() ) {
					$('#hora_agenda').hide();
					$('.carregando').show();
					$.getJSON('view/horario_post.php?search=',{data_agenda: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha um horario</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].id_hora + '">' + j[i].hora + '</option>';
						}	
						$('#hora_agenda').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#hora_agenda').html('<option value="">– Escolha um horario –</option>');
				}
			});
		});
		</script>
    </div>