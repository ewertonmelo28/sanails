<?php
session_start();
include('view/verifica_login.php');
?>
<div class="agendamento">
        <form class="agendamento" action="view/salva_agenda.php" method="POST">
                <div>
                        <label for="nome">Data inicial:</label>
                        <input type="date" id="data_inicial" name="data_inicial" require />
                </div>
                <div>
                        <label for="data_final">Data_final:</label>
                        <input type="date" id="data_final" name="data_final" require />
                </div>
                <div>
                        <label for="horario_inicial">Horario inicial:</label>
                        <input type="text" id="horario_inicial" name="horario_inicial" require />
                </div>
                <div>
                        <label for="horario_final">Horario final:</label>
                        <input type="text" id="horario_final" name="horario_final" require />
                </div>
                <div>
                        <label for="tempo_atendimento">Tempo de atendimento:</label>
                        <input type="text" id="tempo_atendimento" name="tempo_atendimento" require />
                </div>
                <div class="agendamento">
                        <button type="submit">Criar agenda</button>
                </div>
        </form>
        <div class="painel">
                <form class="painel" action="index.php?menuop=painel" method="POST">
                        <button type="submit">Voltar</button>
                </form>
                <form class="painel" action="view/logout.php">
                        <button type="submit">Logout</button>
                </form>
        </div>
</div>