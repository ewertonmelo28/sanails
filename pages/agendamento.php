<!--Setor de agendamento-->
<div class="principal">
    <div class="agendamento">
        <h1 class="agendamento">Realize seu agendamento!</h1>
        <form class="agendamento" action="/pagina-processa-dados-do-form" method="post">
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
                <label for="data">Data disponivel:</label>
                <input type="date" id="data" name="data_agend">
            </div>
            <div>
                <label for="horario">Horarios:</label>
                <input type="time">
            </div>


            <div class="agendamento">
                <button type="submit">Finalizar agendamento</button>
            </div>
        </form>
    </div>